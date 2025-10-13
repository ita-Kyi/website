<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DateMaker</title>
    @vite(['resources/css/datemaker.css'])
</head>
<body>
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

    <!-- Login Section -->
    <main>
        <section class="login-section">
            <div class="login-container">
                <div class="auth-card">
                    <div class="auth-form-section">
                        <div class="auth-header">
                            <h1>Welcome Back</h1>
                            <p>Sign in to your DateMaker account</p>
                        </div>

                        <form class="auth-form login-form" id="login-form" method="POST" action="{{ route('login.post') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="password-input-container">
                                    <input type="password" id="password" name="password" required>
                                    <button type="button" class="password-toggle" id="password-toggle">&#128526;</button>
                                </div>
                            </div>

                            <!-- Form Options Row -->
                            <div class="checkbox-row">
                                <div class="form-group">
                                    <label class="checkbox-label">
                                        <input type="checkbox" id="remember" name="remember">
                                        <span class="checkmark"></span>
                                        Remember me
                                    </label>
                                </div>

                                <div class="form-group">
                                    <a href="{{ route('password.reset') }}" class="forgot-password" id="forgot-password-link">Forgot password?</a>
                                </div>
                            </div>

                            <!-- CAPTCHA Section -->
                            <div class="captcha-section">
                                <div class="captcha-container">
                                    <div class="captcha-checkbox">
                                        <input type="checkbox" id="login-captcha" name="captcha" required>
                                        <label for="login-captcha">I'm not a robot</label>
                                    </div>
                                    <div class="captcha-logo">
                                        <div class="captcha-icon">&#129302;</div>
                                        <div class="captcha-text">CAPTCHA</div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-full" id="login-btn">Sign In</button>
                        </form>

                        <div class="login-divider">
                            <span>or</span>
                        </div>

                        <div class="social-login">
                            <button class="btn btn-social btn-google" type="button">
                                <span class="social-icon">&#71;</span>
                                Continue with Google
                            </button>
                            <button class="btn btn-social btn-github" type="button">
                                <span class="social-icon">&#128187;</span>
                                Continue with GitHub
                            </button>
                        </div>

                        <div class="signup-link">
                            <p>Don't have an account? <a href="{{ route('register') }}" id="signup-link">Sign up here</a></p>
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

    @vite(['resources/js/api-client.js', 'resources/js/auth.js'])
</body>
</html>
