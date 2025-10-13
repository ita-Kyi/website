@extends('layouts.app')

@section('title', 'DateMaker - Find Your Perfect Match')

@section('content')
    <!-- Hero Section -->
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Find Your Perfect Match</h1>
                <p class="hero-subtitle">Connect with like-minded people and discover meaningful relationships with DateMaker</p>
                <div class="hero-buttons">
                    <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                    <a href="{{ route('features') }}" class="btn btn-secondary">Learn More</a>
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
                        <h3>Smart Matching</h3>
                        <p>Advanced AI algorithm finds your perfect match based on compatibility and shared interests.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">&#128274;</div>
                        <h3>Safe & Secure</h3>
                        <p>Your privacy and security are our top priority with end-to-end encryption.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">&#128172;</div>
                        <h3>Video Chat</h3>
                        <p>Connect face-to-face with built-in video calling before meeting in person.</p>
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
                            <p>"We met on DateMaker two years ago and got married last month! The matching algorithm is incredible."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">&#128107;&#8205;&#10084;&#65039;&#8205;&#128104;</div>
                            <div class="author-info">
                                <h4>Sarah & Mike</h4>
                                <span>Married 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"I was skeptical about dating apps, but DateMaker changed my mind. Found my soulmate here!"</p>
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
                    <h2>Ready to Find Love?</h2>
                    <p>Join millions of people who have found their perfect match on DateMaker</p>
                    <div class="cta-buttons">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-large">Start Your Journey</a>
                        <a href="{{ route('login') }}" class="btn btn-outline btn-large">Sign In</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
