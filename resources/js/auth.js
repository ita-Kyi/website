// DateMaker Authentication JavaScript
// Handles login, registration, and password functionality

document.addEventListener('DOMContentLoaded', function() {
    initializePasswordToggles();
    initializeFormValidation();
    initializeProfileCircle();
    initializeDownloadButton();
});

// Initialize password toggle functionality
function initializePasswordToggles() {
    const passwordToggles = document.querySelectorAll('.password-toggle');

    passwordToggles.forEach(toggle => {
        const targetId = toggle.id.replace('-toggle', '');
        const passwordField = document.getElementById(targetId);

        if (!passwordField) return;

        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            const isPassword = passwordField.type === 'password';

            // Use CSS class for animation instead of inline styles
            this.classList.add('clicking');
            setTimeout(() => {
                this.classList.remove('clicking');
            }, 150);

            if (isPassword) {
                passwordField.type = 'text';
                this.innerHTML = '&#128525;';
                this.title = 'Hide password';
            } else {
                passwordField.type = 'password';
                this.innerHTML = '&#128526;';
                this.title = 'Show password';
            }
        });
    });
}

// Initialize form validation
function initializeFormValidation() {
    // Login form validation
    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', handleLogin);
    }

    // Registration form validation
    const registerForm = document.getElementById('register-form');
    if (registerForm) {
        registerForm.addEventListener('submit', handleRegistration);
        setupPasswordValidation();
    }
}

// Handle login form submission
function handleLogin(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const remember = document.getElementById('remember').checked;
    const captcha = document.getElementById('captcha').checked;

    // Basic validation
    if (!email || !password) {
        showMessage('Please fill in all required fields.', 'error');
        return;
    }

    if (!captcha) {
        showMessage('Please complete the captcha verification.', 'error');
        return;
    }

    // Show loading state
    const submitBtn = event.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Signing In...';
    submitBtn.disabled = true;

    // Simulate API call
    setTimeout(() => {
        // For demo purposes, accept any email/password
        if (email && password.length >= 6) {
            showMessage('Login successful! Redirecting...', 'success');

            // Store session if remember me is checked
            if (remember) {
                localStorage.setItem('datemaker_session', JSON.stringify({
                    email: email,
                    loginTime: Date.now()
                }));
            }

            setTimeout(() => {
                window.location.href = 'index.html';
            }, 1500);
        } else {
            showMessage('Invalid email or password. Please try again.', 'error');
        }

        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }, 2000);
}

// Handle registration form submission
function handleRegistration(event) {
    const firstname = document.getElementById('firstname');
    const lastname = document.getElementById('lastname');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    const terms = document.getElementById('terms');

    // CHECK EMAIL VERIFICATION FIRST - Priority #1
    const emailVerified = sessionStorage.getItem('emailVerified');
    if (emailVerified !== 'true') {
        event.preventDefault();
        showMessage('Please verify your email first before registering.', 'error');
        return;
    }

    // Then validate form fields
    if (!firstname || !lastname || !email || !password || !confirmPassword) {
        event.preventDefault();
        showMessage('Please fill in all required fields.', 'error');
        return;
    }

    if (!firstname.value || !lastname.value || !email.value || !password.value || !confirmPassword.value) {
        event.preventDefault();
        showMessage('Please fill in all required fields.', 'error');
        return;
    }

    if (password.value !== confirmPassword.value) {
        event.preventDefault();
        showMessage('Passwords do not match.', 'error');
        return;
    }

    if (password.value.length < 6) {
        event.preventDefault();
        showMessage('Password must be at least 6 characters long.', 'error');
        return;
    }

    if (terms && !terms.checked) {
        event.preventDefault();
        showMessage('Please accept the Terms of Service and Privacy Policy.', 'error');
        return;
    }

    // All validation passed - let the form submit normally to Laravel backend
    // Don't prevent default - form will POST to the action URL
}// Setup password validation for registration
// Throttle function for better performance
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

function setupPasswordValidation() {
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirmPassword');

    // Throttled validation function
    const throttledValidation = throttle(() => {
        validatePassword();
        validatePasswordMatch();
    }, 100);

    if (passwordField) {
        passwordField.addEventListener('input', throttledValidation);
    }

    if (confirmPasswordField) {
        confirmPasswordField.addEventListener('input', throttledValidation);
    }
}

// Validate password requirements
// Cache DOM elements for better performance
let passwordElements = null;

function initPasswordElements() {
    if (!passwordElements) {
        passwordElements = {
            password: document.getElementById('password'),
            confirmPassword: document.getElementById('confirmPassword'),
            lengthReq: document.getElementById('length-req'),
            capitalReq: document.getElementById('capital-req'),
            specialReq: document.getElementById('special-req'),
            matchReq: document.getElementById('password-match')
        };
    }
}

function validatePassword() {
    initPasswordElements();
    if (!passwordElements.password && !passwordElements.confirmPassword) return;

    const password = passwordElements.password?.value || '';
    const confirmPassword = passwordElements.confirmPassword?.value || '';
    const passwordToValidate = password || confirmPassword;

    // Use toggle for better performance
    if (passwordElements.lengthReq) {
        passwordElements.lengthReq.classList.toggle('valid', passwordToValidate.length >= 6);
    }

    if (passwordElements.capitalReq) {
        passwordElements.capitalReq.classList.toggle('valid', /[A-Z]/.test(passwordToValidate));
    }

    if (passwordElements.specialReq) {
        passwordElements.specialReq.classList.toggle('valid', /[!@#$%^&*(),.?":{}|<>]/.test(passwordToValidate));
    }

    validatePasswordMatch();
}

// Validate password match
function validatePasswordMatch() {
    initPasswordElements();
    if (!passwordElements.password || !passwordElements.confirmPassword || !passwordElements.matchReq) return;

    const password = passwordElements.password.value;
    const confirmPassword = passwordElements.confirmPassword.value;

    passwordElements.matchReq.classList.toggle('valid',
        password && confirmPassword && password === confirmPassword);
}

// Show message to user
function showMessage(message, type = 'info') {
    // Remove existing messages
    const existingMessages = document.querySelectorAll('.auth-message');
    existingMessages.forEach(msg => msg.remove());

    // Create new message
    const messageDiv = document.createElement('div');
    messageDiv.className = `auth-message ${type}`;
    messageDiv.textContent = message;

    // Style the message
    messageDiv.style.cssText = `
        padding: 1rem;
        margin: 1rem 0;
        border-radius: 8px;
        text-align: center;
        font-weight: 500;
        animation: slideDown 0.3s ease-out;
    `;

    if (type === 'error') {
        messageDiv.style.backgroundColor = '#ffe6e6';
        messageDiv.style.color = '#d63031';
        messageDiv.style.border = '1px solid #fab1a0';
    } else if (type === 'success') {
        messageDiv.style.backgroundColor = '#e6f7e6';
        messageDiv.style.color = '#00b894';
        messageDiv.style.border = '1px solid #a8e6cf';
    } else {
        messageDiv.style.backgroundColor = '#e6f3ff';
        messageDiv.style.color = '#0984e3';
        messageDiv.style.border = '1px solid #a8d8ff';
    }

    // Insert message
    const form = document.querySelector('.auth-form');
    if (form) {
        form.insertBefore(messageDiv, form.firstChild);
    }

    // Auto remove after 5 seconds
    setTimeout(() => {
        if (messageDiv.parentNode) {
            messageDiv.style.animation = 'slideUp 0.3s ease-in';
            setTimeout(() => messageDiv.remove(), 300);
        }
    }, 5000);
}

// Animation keyframes
const style = document.createElement('style');
style.textContent = `
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideUp {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(-20px);
        }
    }

    .requirement {
        color: #e17055;
        transition: all 0.3s ease;
        position: relative;
        padding-left: 2rem;
        list-style: none;
    }

    .requirement::before {
        content: '\\1F494';
        position: absolute;
        left: 0;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        width: 1.5rem;
        display: inline-block;
    }

    .requirement.valid {
        color: var(--primary-pink);
    }

    .requirement.valid::before {
        content: '\\1F496';
        transform: scale(1.1);
    }

    .password-requirements ul {
        list-style: none;
        padding-left: 0;
    }
`;
document.head.appendChild(style);

// Initialize profile circle functionality
function initializeProfileCircle() {
    const profileCircle = document.getElementById('profile-circle');
    if (profileCircle) {
        profileCircle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);

            // Check if user is logged in (you can customize this logic)
            const isLoggedIn = localStorage.getItem('datemaker_user') || sessionStorage.getItem('datemaker_user');

            if (isLoggedIn) {
                showProfileMenu();
            } else {
                // Redirect to login page
                window.location.href = 'login.html';
            }
        });
    }
}

// Show profile dropdown menu
function showProfileMenu() {
    // Remove existing dropdown if any
    const existingDropdown = document.querySelector('.profile-dropdown');
    if (existingDropdown) {
        existingDropdown.remove();
        return; // Toggle off if clicking again
    }

    // Create dropdown menu
    const dropdown = document.createElement('div');
    dropdown.className = 'profile-dropdown';
    dropdown.innerHTML = `
        <div class="profile-dropdown-content">
            <div class="profile-dropdown-header">
                <div class="profile-avatar">👤</div>
                <div class="profile-info">
                    <div class="profile-name">Welcome Back!</div>
                    <div class="profile-status">DateMaker Member</div>
                </div>
            </div>
            <div class="profile-dropdown-divider"></div>
            <ul class="profile-dropdown-menu">
                <li><a href="#" onclick="alert('Profile page coming soon! 💖')">👤 My Profile</a></li>
                <li><a href="#" onclick="alert('Messages coming soon! 💌')">💌 Messages</a></li>
                <li><a href="#" onclick="alert('Matches coming soon! 💕')">💕 My Matches</a></li>
                <li><a href="pricing.html">💎 Upgrade Plan</a></li>
                <li><a href="#" onclick="alert('Settings coming soon! ⚙️')">⚙️ Settings</a></li>
                <li class="dropdown-divider"></li>
                <li><a href="#" onclick="logout()" class="logout-link">🚪 Logout</a></li>
            </ul>
        </div>
    `;

    // Position dropdown
    const profileCircle = document.getElementById('profile-circle');
    document.body.appendChild(dropdown);

    // Position the dropdown relative to profile circle
    const rect = profileCircle.getBoundingClientRect();
    dropdown.style.position = 'fixed';
    dropdown.style.top = (rect.bottom + 10) + 'px';
    dropdown.style.right = '20px';
    dropdown.style.zIndex = '1000';

    // Add click outside to close
    setTimeout(() => {
        document.addEventListener('click', function closeDropdown(e) {
            if (!dropdown.contains(e.target) && !profileCircle.contains(e.target)) {
                dropdown.remove();
                document.removeEventListener('click', closeDropdown);
            }
        });
    }, 100);
}

// Logout function
function logout() {
    localStorage.removeItem('datemaker_user');
    sessionStorage.removeItem('datemaker_user');
    alert('Logged out successfully! 👋');
    window.location.href = 'index.html';
}

// Initialize download button functionality
function initializeDownloadButton() {
    const downloadBtn = document.getElementById('download-btn');
    if (downloadBtn) {
        downloadBtn.addEventListener('click', function(e) {
            e.preventDefault();

            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);

            // Create and download placeholder file
            downloadDateMakerApp();
        });
    }
}

// Download DateMaker app placeholder
function downloadDateMakerApp() {
    // Create a placeholder file content
    const fileContent = `
Welcome to DateMaker! 💕

Thank you for downloading the DateMaker app!

This is a placeholder download file. In a real application, this would be:
- A mobile app installer (.apk for Android)
- An iOS app store link
- A desktop application installer

Features you'll get in the full app:
💖 Smart AI matching algorithm
💬 Secure messaging system
📹 Video chat capabilities
🎭 Personality insights
📅 Date planning assistance
🛡️ Advanced safety features

Visit us at: https://datemaker.love
Contact: support@datemaker.love

Happy dating! ✨
DateMaker Team
`;

    // Create blob and download
    const blob = new Blob([fileContent], { type: 'text/plain' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'DateMaker-App-Installer.txt';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    window.URL.revokeObjectURL(url);

    // Show success message
    showMessage('DateMaker app download started! 💕', 'success');
}
