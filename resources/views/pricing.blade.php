<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - DateMaker</title>
    @vite(['resources/css/datemaker.css'])
</head>
<body>
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
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pricing') }}" class="nav-link active">Pricing</a>
                </li>
            </ul>
            <div class="nav-right">
                <button class="download-btn" id="download-btn">Download</button>
                <div class="profile-circle" id="profile-circle" title="User Profile">
                    <div class="profile-icon">&#128100;</div>
                    <div class="pulse-wave"></div>
                    <div class="pulse-wave"></div>
                    <div class="pulse-wave"></div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section class="page-hero">
            <div class="container">
                <h1>Choose Your Love Plan &#128149;</h1>
                <p>Find the perfect plan to discover your soulmate</p>
            </div>
        </section>

        <!-- Pricing Section -->
        <section class="pricing-section">
            <div class="container">
                <div class="pricing-header">
                    <h2>Simple, Transparent Pricing</h2>
                    <p>Choose the plan that's right for your journey to find love</p>
                </div>

                <div class="pricing-grid">
                    <!-- Basic Plan -->
                    <div class="pricing-card basic">
                        <div class="pricing-header-card">
                            <div class="plan-icon">💝</div>
                            <h3>Basic</h3>
                            <p class="plan-subtitle">Perfect for getting started</p>
                        </div>
                        <div class="pricing-price">
                            <span class="currency">$</span>
                            <span class="amount">0</span>
                            <span class="period">/month</span>
                        </div>
                        <ul class="features-list">
                            <li>✨ Create your profile</li>
                            <li>💕 Browse potential matches</li>
                            <li>👋 Send 5 likes per day</li>
                            <li>💬 Limited messaging (3 conversations)</li>
                            <li>🔍 Basic search filters</li>
                            <li>📱 Mobile app access</li>
                        </ul>
                        <button class="pricing-btn btn-basic">Get Started Free</button>
                        <p class="plan-note">No credit card required</p>
                    </div>

                    <!-- Premium Plan -->
                    <div class="pricing-card premium popular">
                        <div class="popular-badge">Most Popular 🌟</div>
                        <div class="pricing-header-card">
                            <div class="plan-icon">💖</div>
                            <h3>Premium</h3>
                            <p class="plan-subtitle">For serious daters</p>
                        </div>
                        <div class="pricing-price">
                            <span class="currency">$</span>
                            <span class="amount">19</span>
                            <span class="period">/month</span>
                        </div>
                        <ul class="features-list">
                            <li>✨ Everything in Basic</li>
                            <li>💫 Unlimited likes & matches</li>
                            <li>💬 Unlimited messaging</li>
                            <li>🎭 Advanced personality insights</li>
                            <li>🔍 Premium search filters</li>
                            <li>👁️ See who liked you</li>
                            <li>⚡ Boost your profile visibility</li>
                            <li>📹 Video chat access</li>
                            <li>🛡️ Enhanced safety features</li>
                        </ul>
                        <button class="pricing-btn btn-premium">Choose Premium</button>
                        <p class="plan-note">Cancel anytime</p>
                    </div>

                    <!-- Cupido Plan -->
                    <div class="pricing-card cupido">
                        <div class="cupido-badge">VIP Experience 👑</div>
                        <div class="pricing-header-card">
                            <div class="plan-icon">💘</div>
                            <h3>Cupido</h3>
                            <p class="plan-subtitle">The ultimate love experience</p>
                        </div>
                        <div class="pricing-price">
                            <span class="currency">$</span>
                            <span class="amount">49</span>
                            <span class="period">/month</span>
                        </div>
                        <ul class="features-list">
                            <li>💖 Everything in Premium</li>
                            <li>🏆 Priority matching algorithm</li>
                            <li>💎 Exclusive Cupido member badge</li>
                            <li>🎪 Access to exclusive events</li>
                            <li>👥 Personal matchmaking assistance</li>
                            <li>📅 Professional date planning</li>
                            <li>🎁 Monthly surprise gifts</li>
                            <li>⭐ 24/7 VIP customer support</li>
                            <li>🌹 Custom profile themes</li>
                            <li>💌 Love letters feature</li>
                            <li>🎯 Success coach consultation</li>
                        </ul>
                        <button class="pricing-btn btn-cupido">Go VIP with Cupido</button>
                        <p class="plan-note">Includes personal concierge</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Find Your Perfect Match?</h2>
                    <p>Join thousands of happy couples who found love on DateMaker</p>
                    <div class="cta-buttons">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-large">Start Your Journey</a>
                        <a href="{{ route('login') }}" class="btn btn-outline btn-large">Sign In</a>
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
                        <a href="#" class="social-link">📘</a>
                        <a href="#" class="social-link">🐦</a>
                        <a href="#" class="social-link">📷</a>
                        <a href="#" class="social-link">💼</a>
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

    @vite(['resources/js/mock-api-client.js', 'resources/js/auth.js', 'resources/js/api-client.js'])
</body>
</html>
