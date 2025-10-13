// DateMaker Mock API Client
// Simulates API calls for authentication and user management

class MockAPIClient {
    constructor() {
        this.baseURL = 'https://api.datemaker.com';
        this.users = this.getStoredUsers();
        this.sessions = new Map();
    }

    // Get stored users from localStorage
    getStoredUsers() {
        try {
            return JSON.parse(localStorage.getItem('datemaker_users') || '[]');
        } catch {
            return [];
        }
    }

    // Save users to localStorage
    saveUsers() {
        localStorage.setItem('datemaker_users', JSON.stringify(this.users));
    }

    // Generate mock token
    generateToken() {
        return 'dm_' + Math.random().toString(36).substr(2, 9) + Date.now().toString(36);
    }

    // Simulate API delay
    async delay(ms = 1000) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    // Register new user
    async register(userData) {
        await this.delay();

        // Validate email doesn't exist
        if (this.users.some(user => user.email === userData.email)) {
            throw new Error('Email already registered');
        }

        // Create new user
        const newUser = {
            id: Date.now().toString(),
            fullName: userData.fullName,
            email: userData.email,
            password: userData.password, // In real app, this would be hashed
            verified: false,
            createdAt: new Date().toISOString(),
            profile: {
                avatar: null,
                bio: '',
                interests: [],
                location: '',
                age: null
            }
        };

        this.users.push(newUser);
        this.saveUsers();

        return {
            success: true,
            message: 'Registration successful! Please check your email for verification.',
            user: {
                id: newUser.id,
                fullName: newUser.fullName,
                email: newUser.email,
                verified: newUser.verified
            }
        };
    }

    // Login user
    async login(credentials) {
        await this.delay();

        const user = this.users.find(u => 
            u.email === credentials.email && 
            u.password === credentials.password
        );

        if (!user) {
            throw new Error('Invalid email or password');
        }

        // Generate session token
        const token = this.generateToken();
        const session = {
            token,
            userId: user.id,
            createdAt: Date.now(),
            expiresAt: Date.now() + (24 * 60 * 60 * 1000) // 24 hours
        };

        this.sessions.set(token, session);

        // Store session in localStorage
        localStorage.setItem('datemaker_session', JSON.stringify({
            token,
            user: {
                id: user.id,
                fullName: user.fullName,
                email: user.email,
                verified: user.verified
            },
            expiresAt: session.expiresAt
        }));

        return {
            success: true,
            message: 'Login successful!',
            token,
            user: {
                id: user.id,
                fullName: user.fullName,
                email: user.email,
                verified: user.verified
            }
        };
    }

    // Send password reset email
    async sendPasswordReset(email) {
        await this.delay();

        const user = this.users.find(u => u.email === email);
        if (!user) {
            throw new Error('Email address not found');
        }

        // Generate reset token
        const resetToken = this.generateToken();
        const resetData = {
            token: resetToken,
            email: email,
            expiresAt: Date.now() + (30 * 60 * 1000) // 30 minutes
        };

        // Store reset token
        localStorage.setItem(`reset_${resetToken}`, JSON.stringify(resetData));

        return {
            success: true,
            message: 'Password reset email sent! Check your inbox.',
            resetToken // In real app, this wouldn't be returned
        };
    }

    // Reset password with token
    async resetPassword(token, newPassword) {
        await this.delay();

        const resetData = JSON.parse(localStorage.getItem(`reset_${token}`) || 'null');
        
        if (!resetData || resetData.expiresAt < Date.now()) {
            throw new Error('Invalid or expired reset token');
        }

        // Find and update user
        const userIndex = this.users.findIndex(u => u.email === resetData.email);
        if (userIndex === -1) {
            throw new Error('User not found');
        }

        this.users[userIndex].password = newPassword;
        this.saveUsers();

        // Remove used token
        localStorage.removeItem(`reset_${token}`);

        return {
            success: true,
            message: 'Password reset successful! You can now login with your new password.'
        };
    }

    // Verify email
    async verifyEmail(token) {
        await this.delay();

        // Mock email verification
        return {
            success: true,
            message: 'Email verified successfully!'
        };
    }

    // Get current user session
    getCurrentSession() {
        try {
            const session = JSON.parse(localStorage.getItem('datemaker_session') || 'null');
            if (session && session.expiresAt > Date.now()) {
                return session;
            }
        } catch {
            // Invalid session data
        }
        
        this.logout();
        return null;
    }

    // Logout user
    logout() {
        localStorage.removeItem('datemaker_session');
        return {
            success: true,
            message: 'Logged out successfully'
        };
    }

    // Update user profile
    async updateProfile(profileData) {
        await this.delay();

        const session = this.getCurrentSession();
        if (!session) {
            throw new Error('Not authenticated');
        }

        const userIndex = this.users.findIndex(u => u.id === session.user.id);
        if (userIndex === -1) {
            throw new Error('User not found');
        }

        // Update profile
        this.users[userIndex].profile = {
            ...this.users[userIndex].profile,
            ...profileData
        };
        this.saveUsers();

        return {
            success: true,
            message: 'Profile updated successfully!',
            profile: this.users[userIndex].profile
        };
    }

    // Get user matches (mock data)
    async getMatches() {
        await this.delay();

        const session = this.getCurrentSession();
        if (!session) {
            throw new Error('Not authenticated');
        }

        // Return mock matches
        return {
            success: true,
            matches: [
                {
                    id: '1',
                    name: 'Alex Johnson',
                    age: 28,
                    location: 'New York',
                    bio: 'Love hiking and good coffee ☕',
                    avatar: '👨‍💼',
                    compatibility: 92
                },
                {
                    id: '2',
                    name: 'Sarah Williams',
                    age: 26,
                    location: 'San Francisco',
                    bio: 'Artist and dog lover 🎨🐕',
                    avatar: '👩‍🎨',
                    compatibility: 89
                },
                {
                    id: '3',
                    name: 'Mike Chen',
                    age: 30,
                    location: 'Seattle',
                    bio: 'Tech enthusiast and foodie 🍜',
                    avatar: '👨‍💻',
                    compatibility: 85
                }
            ]
        };
    }
}

// Create global instance
window.mockAPI = new MockAPIClient();

// Export for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = MockAPIClient;
}