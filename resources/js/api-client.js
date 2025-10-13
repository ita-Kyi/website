// DateMaker API Client
// Handles communication with the backend API

class DateMakerAPI {
    constructor() {
        // Try different possible API base URLs
        this.possibleBaseURLs = [
            window.location.origin + '/backend/api/',
            window.location.origin + '/DM_site/backend/api/',
            window.location.origin + '/To be born again/DM_site/backend/api/',
            '../backend/api/',
            './backend/api/'
        ];
        this.baseURL = this.possibleBaseURLs[0]; // Start with first option
        this.currentUser = null;
        this.debugMode = localStorage.getItem('datemaker_debug') === 'true';
        this.init();
    }
    
    // Enable debug mode for troubleshooting
    enableDebug() {
        this.debugMode = true;
        localStorage.setItem('datemaker_debug', 'true');
        console.log('DateMaker Debug Mode Enabled');
    }
    
    // Disable debug mode
    disableDebug() {
        this.debugMode = false;
        localStorage.removeItem('datemaker_debug');
        console.log('DateMaker Debug Mode Disabled');
    }

    init() {
        // Check authentication status on page load
        this.checkAuthStatus();
        this.setupEventListeners();
    }

    setupEventListeners() {
        // Login form handler
        const loginForm = document.getElementById('login-form');
        if (loginForm) {
            loginForm.addEventListener('submit', (e) => this.handleLogin(e));
        }

        // Register form handler
        const registerForm = document.getElementById('register-form');
        if (registerForm) {
            registerForm.addEventListener('submit', (e) => this.handleRegister(e));
        }

        // Logout handlers
        const logoutBtns = document.querySelectorAll('.logout-btn, #logout-btn');
        logoutBtns.forEach(btn => {
            btn.addEventListener('click', (e) => this.handleLogout(e));
        });
    }

    // Make API requests with automatic URL fallback
    async makeRequest(endpoint, options = {}) {
        const defaultOptions = {
            headers: {
                'Content-Type': 'application/json',
            },
            credentials: 'include', // Include cookies for session
        };

        const config = { ...defaultOptions, ...options };
        
        // Try each possible base URL until one works
        for (const baseURL of this.possibleBaseURLs) {
            try {
                if (this.debugMode) {
                    console.log(`Trying API URL: ${baseURL}${endpoint}`);
                    console.log('Request config:', config);
                }
                const response = await fetch(baseURL + endpoint, config);
                
                if (response.ok || response.status === 400 || response.status === 401) {
                    // Update the working base URL for future requests
                    this.baseURL = baseURL;
                    
                    const contentType = response.headers.get('content-type');
                    if (contentType && contentType.includes('application/json')) {
                        const data = await response.json();
                        return {
                            success: response.ok,
                            status: response.status,
                            data: data
                        };
                    } else {
                        // Server returned non-JSON response
                        const text = await response.text();
                        console.error('Non-JSON response:', text);
                        return {
                            success: false,
                            status: response.status,
                            data: { message: 'Server returned invalid response. Check PHP configuration.' }
                        };
                    }
                }
            } catch (error) {
                console.warn(`Failed to connect to ${baseURL}: ${error.message}`);
                continue; // Try next URL
            }
        }
        
        // All URLs failed
        console.error('All API URLs failed');
        return {
            success: false,
            status: 0,
            data: { 
                message: 'Cannot connect to server. Please ensure:\n1. Web server is running\n2. PHP is enabled\n3. Backend files are in the correct location\n4. Database is configured properly'
            }
        };
    }

    // Handle login form submission
    async handleLogin(event) {
        event.preventDefault();
        
        const form = event.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.textContent;
        
        // Get form data
        const formData = new FormData(form);
        const loginData = {
            email: formData.get('email'),
            password: formData.get('password')
        };

        // Validate form data
        if (!loginData.email || !loginData.password) {
            this.showMessage('Please fill in all fields.', 'error');
            return;
        }

        // Show loading state
        submitBtn.textContent = 'Signing In...';
        submitBtn.disabled = true;

        try {
            const result = await this.makeRequest('login.php', {
                method: 'POST',
                body: JSON.stringify(loginData)
            });

            if (result.success) {
                this.currentUser = result.data.user;
                this.showMessage(result.data.message, 'success');
                
                // Store user data in localStorage for quick access
                localStorage.setItem('datemaker_user', JSON.stringify(result.data.user));
                
                // Redirect after successful login
                setTimeout(() => {
                    window.location.href = result.data.redirect || 'index.html';
                }, 1500);
            } else {
                this.showMessage(result.data.message, 'error');
            }
        } catch (error) {
            this.showMessage('Login failed. Please try again.', 'error');
        } finally {
            submitBtn.textContent = originalBtnText;
            submitBtn.disabled = false;
        }
    }

    // Handle registration form submission
    async handleRegister(event) {
        event.preventDefault();
        
        const form = event.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.textContent;
        
        // Get form data
        const formData = new FormData(form);
        const registerData = {
            fullName: formData.get('fullName'),
            email: formData.get('email'),
            password: formData.get('password'),
            confirmPassword: formData.get('confirmPassword')
        };

        // Client-side validation
        if (!registerData.fullName || !registerData.email || !registerData.password || !registerData.confirmPassword) {
            this.showMessage('Please fill in all required fields.', 'error');
            return;
        }

        if (registerData.password !== registerData.confirmPassword) {
            this.showMessage('Passwords do not match.', 'error');
            return;
        }

        if (registerData.password.length < 6) {
            this.showMessage('Password must be at least 6 characters long.', 'error');
            return;
        }

        // Check terms acceptance
        const termsCheckbox = form.querySelector('#terms');
        if (termsCheckbox && !termsCheckbox.checked) {
            this.showMessage('Please accept the Terms of Service and Privacy Policy.', 'error');
            return;
        }

        // Show loading state
        submitBtn.textContent = 'Creating Account...';
        submitBtn.disabled = true;

        try {
            const result = await this.makeRequest('register.php', {
                method: 'POST',
                body: JSON.stringify(registerData)
            });

            if (result.success) {
                this.currentUser = result.data.user;
                this.showMessage(result.data.message, 'success');
                
                // Store user data
                localStorage.setItem('datemaker_user', JSON.stringify(result.data.user));
                
                // Redirect after successful registration
                setTimeout(() => {
                    window.location.href = result.data.redirect || 'index.html';
                }, 1500);
            } else {
                this.showMessage(result.data.message, 'error');
            }
        } catch (error) {
            this.showMessage('Registration failed. Please try again.', 'error');
        } finally {
            submitBtn.textContent = originalBtnText;
            submitBtn.disabled = false;
        }
    }

    // Handle logout
    async handleLogout(event) {
        event.preventDefault();
        
        try {
            const result = await this.makeRequest('logout.php', {
                method: 'POST'
            });

            if (result.success) {
                this.currentUser = null;
                localStorage.removeItem('datemaker_user');
                this.showMessage('Logged out successfully', 'success');
                
                // Redirect to home page
                setTimeout(() => {
                    window.location.href = 'index.html';
                }, 1000);
            } else {
                this.showMessage('Logout failed', 'error');
            }
        } catch (error) {
            this.showMessage('Logout failed. Please try again.', 'error');
        }
    }

    // Check authentication status
    async checkAuthStatus() {
        try {
            const result = await this.makeRequest('check_auth.php', {
                method: 'GET'
            });

            if (result.success && result.data.logged_in) {
                this.currentUser = result.data.user;
                localStorage.setItem('datemaker_user', JSON.stringify(result.data.user));
                this.updateUIForLoggedInUser();
            } else {
                this.currentUser = null;
                localStorage.removeItem('datemaker_user');
                this.updateUIForLoggedOutUser();
            }
        } catch (error) {
            console.error('Auth check failed:', error);
        }
    }

    // Update UI for logged in user
    updateUIForLoggedInUser() {
        // Update navigation
        const loginBtn = document.querySelector('.nav-login-btn');
        const registerBtn = document.querySelector('.nav-register-btn');
        const userProfile = document.querySelector('.user-profile');

        if (loginBtn) loginBtn.style.display = 'none';
        if (registerBtn) registerBtn.style.display = 'none';
        
        if (userProfile) {
            userProfile.style.display = 'block';
            const userName = userProfile.querySelector('.user-name');
            if (userName && this.currentUser) {
                userName.textContent = this.currentUser.firstname;
            }
        }

        // Update any welcome messages
        const welcomeElements = document.querySelectorAll('.welcome-user');
        welcomeElements.forEach(element => {
            if (this.currentUser) {
                element.textContent = `Welcome back, ${this.currentUser.firstname}! 💕`;
            }
        });
    }

    // Update UI for logged out user
    updateUIForLoggedOutUser() {
        const loginBtn = document.querySelector('.nav-login-btn');
        const registerBtn = document.querySelector('.nav-register-btn');
        const userProfile = document.querySelector('.user-profile');

        if (loginBtn) loginBtn.style.display = 'block';
        if (registerBtn) registerBtn.style.display = 'block';
        if (userProfile) userProfile.style.display = 'none';
    }

    // Show message to user
    showMessage(message, type = 'info') {
        // Remove existing messages
        const existingMessages = document.querySelectorAll('.api-message');
        existingMessages.forEach(msg => msg.remove());

        // Create new message
        const messageDiv = document.createElement('div');
        messageDiv.className = `api-message ${type}`;
        messageDiv.innerHTML = `
            <div class="message-content">
                <span class="message-icon">${type === 'success' ? '✅' : type === 'error' ? '❌' : 'ℹ️'}</span>
                <span class="message-text">${message}</span>
            </div>
        `;

        // Style the message
        messageDiv.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? 'var(--soft-pink)' : type === 'error' ? '#ff6b6b' : 'var(--primary-pink)'};
            color: white;
            padding: 1rem 1.5rem;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-romantic);
            z-index: 10000;
            max-width: 400px;
            animation: slideInRight 0.3s ease;
        `;

        // Add to page
        document.body.appendChild(messageDiv);

        // Auto remove after 5 seconds
        setTimeout(() => {
            if (messageDiv.parentNode) {
                messageDiv.style.animation = 'slideOutRight 0.3s ease';
                setTimeout(() => messageDiv.remove(), 300);
            }
        }, 5000);
    }

    // Get current user data
    getCurrentUser() {
        return this.currentUser;
    }

    // Check if user is logged in
    isLoggedIn() {
        return this.currentUser !== null;
    }
}

// Initialize API client when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    window.dateMakerAPI = new DateMakerAPI();
});

// Add CSS animations for messages
const messageStyles = document.createElement('style');
messageStyles.textContent = `
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
    
    .api-message .message-content {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .api-message .message-icon {
        font-size: 1.2rem;
    }
    
    .api-message .message-text {
        font-weight: 500;
    }
`;
document.head.appendChild(messageStyles);