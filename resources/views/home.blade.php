@extends('layouts.app')

@section('title', 'DateMaker - The Relationship App for Couples')

@section('content')
    <!-- Hero Section -->
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Create, Plan, and Celebrate Your Love Story</h1>
                <p class="hero-subtitle">DateMaker is the app for couples who want to make every date count. Plan together, discover new experiences, and celebrate your relationship milestones—all in one private, ad-free space.</p>
                <div class="hero-buttons">
                    <a href="{{ route('features') }}" class="btn btn-primary">See Features</a>
                    <a href="{{ route('about') }}" class="btn btn-secondary">Meet the Team</a>
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
                        <div class="stat-number">100K+</div>
                        <div class="stat-label">Dates Planned</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Memories Saved</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5K+</div>
                        <div class="stat-label">Milestones Celebrated</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">0</div>
                        <div class="stat-label">Ads or Data Sold</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Preview -->
        <section class="features-preview">
            <div class="container">
                <h2>Why Couples Love DateMaker</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">🧠</div>
                        <h3>Plan Dates Together</h3>
                        <p>Collaborate on ideas, vote, and schedule activities you both love.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔒</div>
                        <h3>Private & Secure</h3>
                        <p>All your memories, chats, and plans are encrypted and for your eyes only.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🎉</div>
                        <h3>Celebrate Milestones</h3>
                        <p>Earn badges and keep a timeline of your relationship’s special moments.</p>
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
                <h2>What Couples Are Saying</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"We used to argue about what to do on date night. Now, DateMaker helps us plan together and keeps things fun!"</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">&#128145;</div>
                            <div class="author-info">
                                <h4>Jess & Taylor</h4>
                                <span>Dating 2 years</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"We love looking back at our milestones and photos. The app makes our memories feel special."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">&#128107;&#8205;&#10084;&#65039;&#8205;&#128104;</div>
                            <div class="author-info">
                                <h4>Sam & Lee</h4>
                                <span>Engaged 2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"Finally, an app that’s just for us as a couple. No ads, no distractions—just our story."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">&#10084;&#65039;</div>
                            <div class="author-info">
                                <h4>Maya & Chris</h4>
                                <span>Together 4 years</span>
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
                    <h2>Ready to Make Every Date Count?</h2>
                    <p>Download DateMaker and start building your love story today.</p>
                    <div class="cta-buttons">
                        <a href="{{ route('features') }}" class="btn btn-primary btn-large">See Features</a>
                        <a href="{{ route('about') }}" class="btn btn-outline btn-large">Meet the Team</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
