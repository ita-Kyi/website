<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - DateMaker</title>
    @vite(['resources/css/datemaker.css'])
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
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
                <button class="download-btn" id="download-btn">
                    Download
                </button>
                <div class="nav-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
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
                    <p>Choose the plan that's right for your journey to find true love</p>
                </div>

                <div class="pricing-grid">
                    <!-- Basic Plan -->
                    <div class="pricing-card basic">
                        <div class="pricing-header-card">
                            <div class="plan-icon">&#128157;</div>
                            <h3>Basic</h3>
                            <p class="plan-subtitle">Perfect for getting started</p>
                        </div>
                        <div class="pricing-price">
                            <span class="currency">$</span>
                            <span class="amount">0</span>
                            <span class="period">/month</span>
                        </div>
                        <ul class="features-list">
                            <li>&#10024; Set up couple account</li>
                            <li>&#10133; Create dates</li>
                            <li>&#128172; Built-in chatbox</li>
                            <li>&#128149; Memory Lane</li>
                            <li>&#128269; Calendar sync</li>
                            <li>&#128241; Partner linking</li>
                        </ul>
                        <button class="pricing-btn btn-basic">Get Started Free</button>
                        <p class="plan-note">No credit card required</p>
                    </div>

                    <!-- Premium Plan -->
                    <div class="pricing-card premium popular">
                        <div class="popular-badge">Most Popular &#11088;</div>
                        <div class="pricing-header-card">
                            <div class="plan-icon">&#128150;</div>
                            <h3>Premium</h3>
                            <p class="plan-subtitle">For serious daters</p>
                        </div>
                        <div class="pricing-price">
                            <span class="currency">$</span>
                            <span class="amount">19</span>
                            <span class="period">/month</span>
                        </div>
                        <ul class="features-list">
                            <li>&#10024; Everything in Basic</li>
                            <li>&#128171; Access to premade dates</li>
                            <li>&#9889; Budget tracker</li>
                            <li>&#127917; Advanced personality insights</li>
                            <li>&#128269; Milestone badges and couple stats</li>
                            <li>&#9889; Shared calendar sync</li>
                            <li>&#128737; Enhanced safety features</li>
                        </ul>
                        <button class="pricing-btn btn-premium">Choose Premium</button>
                        <p class="plan-note">Cancel anytime</p>
                    </div>

                    <!-- Cupido Plan -->
                    <div class="pricing-card cupido">
                        <div class="cupido-badge">VIP Experience &#128081;</div>
                        <div class="pricing-header-card">
                            <div class="plan-icon">&#128152;</div>
                            <h3>Cupido</h3>
                            <p class="plan-subtitle">The ultimate love experience</p>
                        </div>
                        <div class="pricing-price">
                            <span class="currency">$</span>
                            <span class="amount">49</span>
                            <span class="period">/month</span>
                        </div>
                        <ul class="features-list">
                            <li>&#128150; Everything in Premium</li>
                            <li>&#127942; AI-powered Date Generator</li>
                            <li>&#128142; Exclusive Cupido member badge</li>
                            <li>&#127914; Access to exclusive events</li>
                            <li>&#128101; "Around me" feature</li>
                            <li>&#128197; Gift list feature</li>
                            <li>&#127873; Smart reminders</li>
                            <li>&#11088; 24/7 VIP customer support</li>
                            <li>&#127801; Shared Spotify/YouTube playlists for each date</li>
                            <li>&#128140; Sort dates by preferences</li>

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
                    <h2>Ready to Find Your Perfect Date?</h2>
                    <p>Join DateMaker today and start your journey to meaningful connections</p>
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
                        <li><a href="{{ route('about') }}#careers">Careers</a></li>
                        <li><a href="#press">Press</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="{{ route('about') }}#careers">Help Center</a></li>
                        <li><a href="{{ route('about') }}#careers">Contact</a></li>
                        <li><a href="{{ route('faq') }}#safety">Safety</a></li>
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
                <p>&copy; 2026 Singleton. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @vite(['resources/js/mock-api-client.js', 'resources/js/api-client.js'])
</body>
</html>
