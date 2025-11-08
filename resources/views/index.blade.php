<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DateMaker - Find Your Perfect Date</title>
    @vite(['resources/css/datemaker.css'])
   <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
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
                    <a href="{{ route('home') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('features') }}" class="nav-link">Features</a>
                    <div class="dropdown">
                        <a href="{{ route('features') }}#smart-matching" class="dropdown-item">
                            <div class="dropdown-icon">&#129504;</div>
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
                <div class="nav-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Find Your Perfect Date</h1>
                <p class="hero-subtitle">Plan amazing dates, celebrate milestones, and create lasting memories with your partner</p>
                <div class="hero-buttons">
                    <a href="{{ route('features') }}" class="btn btn-primary">Explore Features</a>
                    <a href="{{ route('about') }}" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-graphic">
                    <div class="floating-heart">&#128150;</div>
                    <div class="floating-heart">&#128149;</div>
                    <div class="floating-heart">&#128151;</div>
                    <div class="floating-heart">&#128157;</div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">10M+</div>
                        <div class="stat-label">Happy Couples</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50M+</div>
                        <div class="stat-label">Active Users</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">Countries</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">99.9%</div>
                        <div class="stat-label">Success Rate</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Preview -->
        <section class="features-preview">
            <div class="container">
                <h2>Why Choose DateMaker?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">&#127919;</div>
                        <h3>AI Date Planning</h3>
                        <p>Smart suggestions for dates based on your interests, location, and relationship milestones.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">&#128274;</div>
                        <h3>Private & Secure</h3>
                        <p>Your memories and plans are private with end-to-end encryption—just for you two.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">&#128172;</div>
                        <h3>Around Me</h3>
                        <p>Discover local date spots, events, and hidden gems perfect for couples.</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('features') }}" class="btn btn-outline">View All Features</a>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials">
            <div class="container">
                <h2>Success Stories</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"DateMaker helps us plan the best dates! We've tried so many new places and activities together."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">&#128107;&#8205;&#10084;&#65039;&#8205;&#128104;</div>
                            <div class="author-info">
                                <h4>Sarah & Mike</h4>
                                <span>Together 2 years</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"The milestone badges and memory gallery are our favorite features. It's like a digital scrapbook of our love!"</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">&#128145;</div>
                            <div class="author-info">
                                <h4>Emma & David</h4>
                                <span>Together 3 years</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"The video chat feature helped us connect on a deeper level before our first date. Highly recommend!"</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">&#128149;</div>
                            <div class="author-info">
                                <h4>Alex & Jordan</h4>
                                <span>Engaged 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Elevate Your Relationship?</h2>
                    <p>Join thousands of couples creating amazing memories with DateMaker</p>
                    <div class="cta-buttons">
                        <a href="{{ route('features') }}" class="btn btn-primary btn-large">Explore Features</a>
                        <a href="{{ route('about') }}" class="btn btn-outline btn-large">Learn About Us</a>
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
