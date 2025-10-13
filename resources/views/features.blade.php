<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - DateMaker</title>
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
                    <a href="{{ route('features') }}" class="nav-link active">Features</a>
                    <div class="dropdown">
                        <a href="{{ route('features') }}#smart-matching" class="dropdown-item">
                            <div class="dropdown-icon">🧠</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Smart Matching</div>
                                <div class="dropdown-desc">AI-powered compatibility algorithm</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#safety-first" class="dropdown-item">
                            <div class="dropdown-icon">&#128737;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Safety First</div>
                                <div class="dropdown-desc">Advanced verification & protection</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#video-chat" class="dropdown-item">
                            <div class="dropdown-icon">&#128249;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Video Chat</div>
                                <div class="dropdown-desc">Secure video calls & virtual dates</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#personality-insights" class="dropdown-item">
                            <div class="dropdown-icon">&#127917;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Personality Insights</div>
                                <div class="dropdown-desc">Deep compatibility analysis</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#date-planning" class="dropdown-item">
                            <div class="dropdown-icon">&#128197;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Date Planning</div>
                                <div class="dropdown-desc">Smart suggestions & event coordination</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#community" class="dropdown-item">
                            <div class="dropdown-icon">&#128101;</div>
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

    <!-- Features Hero -->
    <main>
        <section class="page-hero">
            <div class="container">
                <h1>Powerful Features</h1>
                <p>Discover what makes DateMaker the best platform for finding meaningful connections</p>
            </div>
        </section>

        <!-- Main Features -->
        <section class="features-section">
            <div class="container">
                <div class="features-layout">
                    <!-- Feature 1 - Smart Matching -->
                    <div class="feature-row" id="smart-matching">
                        <div class="feature-content">
                            <div class="feature-icon">🧠</div>
                            <h2>Smart Matching</h2>
                            <p>Our advanced AI-powered compatibility algorithm analyzes your preferences, interests, and behavior patterns to find the most compatible matches. With over 200 compatibility factors, we ensure quality over quantity.</p>
                            <ul class="feature-list">
                                <li>&#129504; AI-powered compatibility</li>
                                <li>&#128157; Deep personality analysis</li>
                                <li>&#128205; Location preferences</li>
                                <li>&#11088; Smart recommendations</li>
                            </ul>
                        </div>
                        <div class="feature-image">
                            <div class="feature-graphic">&#129504;&#128149;</div>
                        </div>
                    </div>

                    <!-- Feature 2 - Safety First -->
                    <div class="feature-row reverse" id="safety-first">
                        <div class="feature-content">
                            <div class="feature-icon">&#128737;&#65039;</div>
                            <h2>Safety First</h2>
                            <p>Your safety is our top priority. We provide advanced verification and protection features with bank-level encryption, photo verification, and comprehensive fraud detection to create a secure environment for genuine connections.</p>
                            <ul class="feature-list">
                                <li>&#128737;&#65039; Advanced verification system</li>
                                <li>&#128248; Real photo verification</li>
                                <li>&#128683; Anti-fraud protection</li>
                                <li>&#128272; End-to-end encryption</li>
                            </ul>
                        </div>
                        <div class="feature-image">
                            <div class="feature-graphic">&#128737;&#65039;&#128142;</div>
                        </div>
                    </div>

                    <!-- Feature 3 - Video Chat -->
                    <div class="feature-row" id="video-chat">
                        <div class="feature-content">
                            <div class="feature-icon">&#128249;</div>
                            <h2>Video Chat</h2>
                            <p>Connect authentically with secure video calls and virtual dates. Our high-quality video chat system lets you get to know your matches better before meeting in person, with fun features to break the ice.</p>
                            <ul class="feature-list">
                                <li>&#128249; HD secure video calls</li>
                                <li>&#127757; Virtual date experiences</li>
                                <li>&#128173; Ice-breaker games</li>
                                <li>&#127908; Voice messages</li>
                            </ul>
                        </div>
                        <div class="feature-image">
                            <div class="feature-graphic">&#128249;&#128149;</div>
                        </div>
                    </div>

                    <!-- Feature 4 - Personality Insights -->
                    <div class="feature-row reverse" id="personality-insights">
                        <div class="feature-content">
                            <div class="feature-icon">&#127917;</div>
                            <h2>Personality Insights</h2>
                            <p>Discover deep compatibility analysis through our advanced personality assessment system. Get detailed insights about yourself and your matches to build more meaningful connections based on psychological compatibility.</p>
                            <ul class="feature-list">
                                <li>🎭 Deep personality analysis</li>
                                <li>💡 Compatibility insights</li>
                                <li>🧠 Psychological matching</li>
                                <li>📋 Detailed compatibility reports</li>
                            </ul>
                        </div>
                        <div class="feature-image">
                            <div class="feature-graphic">🎭✨</div>
                        </div>
                    </div>

                    <!-- Feature 5 - Date Planning -->
                    <div class="feature-row" id="date-planning">
                        <div class="feature-content">
                            <div class="feature-icon">📅</div>
                            <h2>Date Planning</h2>
                            <p>Take the stress out of planning with our smart suggestion system and event coordination features. Get personalized date ideas, restaurant recommendations, and activity suggestions based on shared interests.</p>
                            <ul class="feature-list">
                                <li>📅 Smart date suggestions</li>
                                <li>🍽️ Restaurant recommendations</li>
                                <li>🎯 Activity matching</li>
                                <li>📍 Location coordination</li>
                            </ul>
                        </div>
                        <div class="feature-image">
                            <div class="feature-graphic">📅💕</div>
                        </div>
                    </div>

                    <!-- Feature 6 - Community Events -->
                    <div class="feature-row reverse" id="community">
                        <div class="feature-content">
                            <div class="feature-icon">👥</div>
                            <h2>Community Events</h2>
                            <p>Join local meetups and group activities to meet like-minded people in a fun, relaxed environment. From wine tastings to hiking groups, find your tribe and potentially your soulmate through shared experiences.</p>
                            <ul class="feature-list">
                                <li>👥 Local meetup groups</li>
                                <li>🎉 Social events</li>
                                <li>🏃‍♀️ Activity groups</li>
                                <li>🌟 Special interest communities</li>
                            </ul>
                        </div>
                        <div class="feature-image">
                            <div class="feature-graphic">👥💖</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Features Grid -->
        <section class="additional-features">
            <div class="container">
                <h2>More Amazing Features</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">⚡</div>
                        <h3>Lightning Fast</h3>
                        <p>Optimized for speed with instant messaging and quick profile loading.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📱</div>
                        <h3>Mobile First</h3>
                        <p>Designed for mobile with responsive design and native app features.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🎵</div>
                        <h3>Music Matching</h3>
                        <p>Connect through music taste with Spotify integration and concert meetups.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🏃</div>
                        <h3>Activity Partners</h3>
                        <p>Find workout buddies, hiking partners, and activity companions.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🎭</div>
                        <h3>Event Planning</h3>
                        <p>Plan virtual and in-person dates with our integrated event suggestions.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🏆</div>
                        <h3>Success Coaching</h3>
                        <p>Get personalized dating advice from relationship experts.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Experience All These Features</h2>
                    <p>Join DateMaker today and discover the future of online dating</p>
                    <div class="cta-buttons">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-large">Get Started Free</a>
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
