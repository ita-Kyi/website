/**
 * DateMaker Email Verification System
 * Handles email verification with 6-digit code
 */

class EmailVerification {
    constructor() {
        this.verifiedEmail = null;
        this.init();
    }

    init() {
        this.addVerifyButton();
        this.interceptRegisterForm();
    }

    /**
     * Add "Verify Email" button to register form
     */
    addVerifyButton() {
        const registerForm = document.getElementById('register-form');
        if (!registerForm) return;

        const emailInput = registerForm.querySelector('input[name="email"]');
        if (!emailInput) return;

        // Create verify button
        const buttonContainer = document.createElement('div');
        buttonContainer.style.marginTop = '10px';

        const verifyBtn = document.createElement('button');
        verifyBtn.type = 'button';
        verifyBtn.className = 'btn-secondary';
        verifyBtn.id = 'verify-email-btn';
        verifyBtn.textContent = '📧 Verify Email';
        verifyBtn.style.width = '100%';
        verifyBtn.onclick = () => this.sendVerificationCode();

        buttonContainer.appendChild(verifyBtn);
        emailInput.parentElement.appendChild(buttonContainer);

        // Add verified indicator
        const verifiedIndicator = document.createElement('div');
        verifiedIndicator.id = 'email-verified-indicator';
        verifiedIndicator.style.display = 'none';
        verifiedIndicator.style.color = '#28a745';
        verifiedIndicator.style.marginTop = '10px';
        verifiedIndicator.style.fontWeight = 'bold';
        verifiedIndicator.innerHTML = '✓ Email Verified';
        emailInput.parentElement.appendChild(verifiedIndicator);
    }

    /**
     * Intercept register form submission
     */
    interceptRegisterForm() {
        const registerForm = document.getElementById('register-form');
        if (!registerForm) return;

        const originalSubmit = registerForm.onsubmit;

        registerForm.onsubmit = (e) => {
            const emailInput = registerForm.querySelector('input[name="email"]');

            if (!this.verifiedEmail || this.verifiedEmail !== emailInput.value) {
                e.preventDefault();
                this.showMessage('Please verify your email address first! 📧', 'error');
                return false;
            }

            // Allow form submission
            return originalSubmit ? originalSubmit.call(registerForm, e) : true;
        };
    }

    /**
     * Send verification code to email
     */
    async sendVerificationCode() {
        const emailInput = document.querySelector('input[name="email"]');
        const email = emailInput?.value?.trim();

        if (!email || !this.isValidEmail(email)) {
            this.showMessage('Please enter a valid email address', 'error');
            return;
        }

        const verifyBtn = document.getElementById('verify-email-btn');
        if (verifyBtn) {
            verifyBtn.disabled = true;
            verifyBtn.textContent = 'Sending...';
        }

        try {
            const response = await fetch('/api/send-verification-code', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': this.getCsrfToken(),
                },
                body: JSON.stringify({ email }),
            });

            const data = await response.json();

            if (data.success) {
                this.showMessage('Verification code sent! Check your email 📬', 'success');
                this.showVerificationModal(email, data.code); // data.code only exists in debug mode
            } else {
                this.showMessage(data.message || 'Email already registered or invalid', 'error');
            }
        } catch (error) {
            console.error('Error sending verification code:', error);
            this.showMessage('Failed to send verification code', 'error');
        } finally {
            if (verifyBtn) {
                verifyBtn.disabled = false;
                verifyBtn.textContent = '📧 Verify Email';
            }
        }
    }

    /**
     * Show verification code input modal
     */
    showVerificationModal(email, debugCode = null) {
        // Remove existing modal if any
        this.closeVerificationModal();

        const modal = document.createElement('div');
        modal.className = 'verification-modal';
        modal.id = 'verification-modal';
        modal.innerHTML = `
            <div class="verification-modal-overlay" onclick="emailVerification.closeVerificationModal()"></div>
            <div class="verification-modal-content">
                <button class="modal-close" onclick="emailVerification.closeVerificationModal()">×</button>
                <h2>📧 Verify Your Email</h2>
                <p>Enter the 6-digit code sent to:</p>
                <p><strong style="color: var(--primary-color);">${email}</strong></p>
                ${debugCode ? `<div style="background: #ffe6f0; padding: 15px; border-radius: 8px; margin: 15px 0;">
                    <p style="margin: 0; color: #ff1493; font-weight: bold;">🔍 Debug Mode - Your Code:</p>
                    <p style="margin: 5px 0 0 0; font-size: 32px; color: #ff1493; font-weight: bold; letter-spacing: 10px;">${debugCode}</p>
                </div>` : ''}
                <input
                    type="text"
                    id="verification-code-input"
                    maxlength="6"
                    placeholder="000000"
                    autocomplete="off"
                    style="font-size: 28px; text-align: center; letter-spacing: 8px; padding: 15px; margin: 20px 0; width: 100%; border: 2px solid #ddd; border-radius: 8px;">
                <div class="verification-buttons" style="display: flex; gap: 10px; margin-top: 20px;">
                    <button onclick="emailVerification.verifyCode('${email}')" class="btn-primary" style="flex: 1;">
                        ✓ Verify Code
                    </button>
                    <button onclick="emailVerification.resendCode('${email}')" class="btn-secondary" style="flex: 1;">
                        🔄 Resend
                    </button>
                </div>
                <p style="margin-top: 20px; font-size: 14px; color: #666;">
                    ⏱️ Code expires in 10 minutes
                </p>
            </div>
        `;

        document.body.appendChild(modal);

        // Focus on input
        setTimeout(() => {
            const input = document.getElementById('verification-code-input');
            if (input) {
                input.focus();

                // Only allow numbers
                input.addEventListener('input', (e) => {
                    e.target.value = e.target.value.replace(/[^0-9]/g, '');
                });

                // Auto-verify when 6 digits entered
                input.addEventListener('input', (e) => {
                    if (e.target.value.length === 6) {
                        this.verifyCode(email);
                    }
                });

                // Allow Enter key to verify
                input.addEventListener('keypress', (e) => {
                    if (e.key === 'Enter') {
                        this.verifyCode(email);
                    }
                });
            }
        }, 100);
    }

    /**
     * Close verification modal
     */
    closeVerificationModal() {
        const modal = document.getElementById('verification-modal');
        if (modal) {
            modal.remove();
        }
    }

    /**
     * Verify the entered code
     */
    async verifyCode(email) {
        const codeInput = document.getElementById('verification-code-input');
        const code = codeInput?.value?.trim();

        if (!code || code.length !== 6) {
            this.showMessage('Please enter a 6-digit code', 'error');
            return;
        }

        // Disable input while verifying
        if (codeInput) codeInput.disabled = true;

        try {
            const response = await fetch('/api/verify-code', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': this.getCsrfToken(),
                },
                body: JSON.stringify({ email, code }),
            });

            const data = await response.json();

            if (data.success) {
                this.verifiedEmail = email;
                this.showMessage('✓ Email verified successfully!', 'success');
                this.closeVerificationModal();
                this.markEmailAsVerified();
            } else {
                this.showMessage(data.message || '❌ Invalid verification code', 'error');
                if (codeInput) {
                    codeInput.disabled = false;
                    codeInput.value = '';
                    codeInput.focus();
                }
            }
        } catch (error) {
            console.error('Error verifying code:', error);
            this.showMessage('Failed to verify code', 'error');
            if (codeInput) {
                codeInput.disabled = false;
            }
        }
    }

    /**
     * Resend verification code
     */
    async resendCode(email) {
        this.closeVerificationModal();
        await this.sendVerificationCode();
    }

    /**
     * Mark email as verified in UI
     */
    markEmailAsVerified() {
        const emailInput = document.querySelector('input[name="email"]');
        const verifyBtn = document.getElementById('verify-email-btn');
        const indicator = document.getElementById('email-verified-indicator');

        if (emailInput) {
            emailInput.style.borderColor = '#28a745';
            emailInput.style.borderWidth = '2px';
            emailInput.disabled = true;
        }

        if (verifyBtn) {
            verifyBtn.textContent = '✓ Verified';
            verifyBtn.disabled = true;
            verifyBtn.style.backgroundColor = '#28a745';
            verifyBtn.style.borderColor = '#28a745';
        }

        if (indicator) {
            indicator.style.display = 'block';
        }
    }

    /**
     * Validate email format
     */
    isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    /**
     * Get CSRF token from meta tag or form
     */
    getCsrfToken() {
        const token = document.querySelector('meta[name="csrf-token"]')?.content ||
                      document.querySelector('input[name="_token"]')?.value;
        return token;
    }

    /**
     * Show message to user
     */
    showMessage(message, type = 'info') {
        // Use existing showMessage function if available
        if (typeof window.showMessage === 'function') {
            window.showMessage(message, type);
            return;
        }

        // Remove existing messages
        const existing = document.querySelector('.verification-message');
        if (existing) existing.remove();

        const messageDiv = document.createElement('div');
        messageDiv.className = `verification-message verification-message-${type}`;
        messageDiv.textContent = message;
        messageDiv.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            background: ${type === 'error' ? '#ff4444' : type === 'success' ? '#28a745' : '#007bff'};
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            z-index: 10000;
            font-weight: bold;
            animation: slideIn 0.3s ease-out;
        `;

        document.body.appendChild(messageDiv);

        setTimeout(() => {
            messageDiv.style.animation = 'slideOut 0.3s ease-out';
            setTimeout(() => messageDiv.remove(), 300);
        }, 5000);
    }
}

// Add CSS for modal
const style = document.createElement('style');
style.textContent = `
    .verification-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .verification-modal-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(5px);
    }

    .verification-modal-content {
        position: relative;
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.3);
        max-width: 500px;
        width: 90%;
        z-index: 1;
        animation: modalSlideIn 0.3s ease-out;
    }

    .modal-close {
        position: absolute;
        top: 15px;
        right: 15px;
        background: none;
        border: none;
        font-size: 32px;
        cursor: pointer;
        color: #999;
        line-height: 1;
        transition: color 0.2s;
    }

    .modal-close:hover {
        color: #333;
    }

    @keyframes modalSlideIn {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Initialize email verification when DOM is ready
let emailVerification;
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        emailVerification = new EmailVerification();
    });
} else {
    emailVerification = new EmailVerification();
}

// Export for use in other scripts
window.emailVerification = emailVerification;
