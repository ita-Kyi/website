<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register - DateMaker</title>
    @vite(['resources/css/datemaker.css'])
</head>
<body class="register-page">
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="{{ route('home') }}">DateMaker</a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('features') }}" class="nav-link">Features</a>
                    <div class="dropdown">
                        <a href="{{ route('features') }}#smart-matching" class="dropdown-item">
                            <div class="dropdown-icon">🧠</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Smart Matching</div>
                                <div class="dropdown-desc">AI-powered compatibility algorithm</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#video-chat" class="dropdown-item">
                            <div class="dropdown-icon">📹</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Video Chat</div>
                                <div class="dropdown-desc">Secure video calls & virtual dates</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#personality-insights" class="dropdown-item">
                            <div class="dropdown-icon">🎭</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Personality Insights</div>
                                <div class="dropdown-desc">Deep compatibility analysis</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#safety-first" class="dropdown-item">
                            <div class="dropdown-icon">🛡️</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Safety First</div>
                                <div class="dropdown-desc">Advanced verification & protection</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#date-planning" class="dropdown-item">
                            <div class="dropdown-icon">📅</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Date Planning</div>
                                <div class="dropdown-desc">Smart suggestions & event coordination</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#community" class="dropdown-item">
                            <div class="dropdown-icon">👥</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Community Events</div>
                                <div class="dropdown-desc">Local meetups & group activities</div>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pricing') }}" class="nav-link">Pricing</a>
                </li>
            </ul>
            <div class="nav-right">
                <button class="download-btn" id="download-btn">
                    Download
                </button>
                <div class="profile-circle" id="profile-circle" title="User Profile">
                    <div class="profile-icon">&#128100;</div>
                    <div class="pulse-wave"></div>
                    <div class="pulse-wave"></div>
                    <div class="pulse-wave"></div>
                </div>
                <div class="nav-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Register Section -->
    <main>
        <section class="register-section">
            <div class="register-container">
                <div class="auth-card">
                    <div class="auth-form-section">
                        <div class="auth-header">
                            <h1>Join DateMaker</h1>
                            <p>Create your account and start your journey to finding love</p>
                        </div>

                        <form class="auth-form register-form" id="register-form" method="POST" action="{{ route('register.post') }}">
                            @csrf

                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" id="firstname" name="firstname" required value="{{ old('firstname') }}">
                                @error('firstname')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" id="lastname" name="lastname" required value="{{ old('lastname') }}">
                                @error('lastname')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}">
                                @error('email')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="password-input-container">
                                    <input type="password" id="password" name="password" required minlength="6">
                                    <button type="button" class="password-toggle" id="password-toggle">&#128526;</button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <div class="password-input-container">
                                    <input type="password" id="confirmPassword" name="password_confirmation" required minlength="6">
                                    <button type="button" class="password-toggle" id="confirm-password-toggle">&#128526;</button>
                                </div>
                            </div>

                            <!-- Password Requirements -->
                            <div class="password-requirements">
                                <h4>Password Requirements:</h4>
                                <ul>
                                    <li id="length-req" class="requirement">At least 6 characters</li>
                                    <li id="capital-req" class="requirement">One uppercase letter</li>
                                    <li id="special-req" class="requirement">One special character</li>
                                    <li id="password-match" class="requirement">Passwords match</li>
                                </ul>
                            </div>

                            <!-- Checkbox Row -->
                            <div class="checkbox-row">
                                <div class="form-group">
                                    <label class="checkbox-label">
                                        <input type="checkbox" id="terms" name="terms" required>
                                        <span class="checkmark"></span>
                                        I agree to the <a href="#terms" target="_blank">Terms of Service</a> and <a href="#privacy" target="_blank">Privacy Policy</a>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="checkbox-label">
                                        <input type="checkbox" id="newsletter" name="newsletter">
                                        <span class="checkmark"></span>
                                        Send me dating tips and success stories
                                    </label>
                                </div>
                            </div>

                            <!-- CAPTCHA Section -->
                            <div class="captcha-section">
                                <div class="captcha-container">
                                    <div class="captcha-checkbox">
                                        <input type="checkbox" id="captcha" name="captcha" required>
                                        <label for="captcha">I'm not a robot</label>
                                    </div>
                                    <div class="captcha-logo">
                                        <div class="captcha-icon">&#129302;</div>
                                        <div class="captcha-text">CAPTCHA</div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-full" id="register-btn">Create Account</button>
                        </form>

                        <div class="login-divider">
                            <span>or</span>
                        </div>

                        <div class="social-login">
                            <button class="btn btn-social btn-google" type="button">
                                <span class="social-icon">&#71;</span>
                                Sign up with Google
                            </button>
                            <button class="btn btn-social btn-github" type="button">
                                <span class="social-icon">&#128187;</span>
                                Sign up with GitHub
                            </button>
                        </div>

                        <div class="signup-link">
                            <p>Already have an account? <a href="{{ route('login') }}" id="login-link">Sign in here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>DateMaker</h3>
                    <p>Connecting hearts, creating futures.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">&#128214;</a>
                        <a href="#" class="social-link">&#128038;</a>
                        <a href="#" class="social-link">&#128247;</a>
                        <a href="#" class="social-link">&#128188;</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="#careers">Careers</a></li>
                        <li><a href="#press">Press</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="#help">Help Center</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#safety">Safety</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#privacy">Privacy Policy</a></li>
                        <li><a href="#terms">Terms of Service</a></li>
                        <li><a href="#cookies">Cookie Policy</a></li>
                        <li><a href="#community">Community Guidelines</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Singleton. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @vite(['resources/js/api-client.js', 'resources/js/auth.js', 'resources/js/email-verification.js'])

    <script>
        // Additional password toggle for confirm password
        document.addEventListener('DOMContentLoaded', function() {
            const confirmPasswordToggle = document.getElementById('confirm-password-toggle');
            const confirmPasswordField = document.getElementById('confirmPassword');

            if (confirmPasswordToggle && confirmPasswordField) {
                confirmPasswordToggle.addEventListener('click', function() {
                    const isPassword = confirmPasswordField.type === 'password';

                    // Add click animation
                    confirmPasswordToggle.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        confirmPasswordToggle.style.transform = 'scale(1)';
                    }, 150);

                    if (isPassword) {
                        confirmPasswordField.type = 'text';
                        confirmPasswordToggle.innerHTML = '&#128525;'; // Heart eyes
                        confirmPasswordToggle.title = 'Hide password';
                    } else {
                        confirmPasswordField.type = 'password';
                        confirmPasswordToggle.innerHTML = '&#128526;'; // Sunglasses
                        confirmPasswordToggle.title = 'Show password';
                    }
                });
            }
        });
    </script>
</body>
</html>
