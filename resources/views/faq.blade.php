<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - DateMaker</title>
    @vite(['resources/css/datemaker.css'])
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
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
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link active">FAQ</a>
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

    <!-- FAQ Hero -->
    <main>
        <section class="page-hero">
            <div class="container">
                <h1>Frequently Asked Questions</h1>
                <p>Find answers to common questions about DateMaker</p>
            </div>
        </section>

        <!-- Search FAQ -->
        <section class="faq-search">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 2rem; font-family: var(--font-elegant); background: var(--love-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-size: 2.5rem;">Find Your Answers 💕</h2>
                <div class="search-box">
                    <input type="text" id="faq-search" placeholder="Ask me anything about DateMaker... 💖" />
                    <button type="button" class="search-btn" title="Search">🔍</button>
                </div>
                <p style="text-align: center; margin-top: 1rem; color: var(--text-light); font-style: italic;">Type your question and we'll find the perfect answer for you!</p>
            </div>
        </section>

        <!-- FAQ Categories -->
        <section class="faq-categories">
            <div class="container">
                <div class="category-tabs">
                    <button class="tab-btn active" data-category="general">General</button>
                    <button class="tab-btn" data-category="account">Account</button>
                    <button class="tab-btn" data-category="matching">Features</button>
                    <button class="tab-btn" data-category="safety">Safety</button>
                    <button class="tab-btn" data-category="billing">Billing</button>
                </div>
            </div>
        </section>

        <!-- FAQ Content -->
        <section class="faq-content">
            <div class="container">
                <!-- General FAQs -->
                <div class="faq-category active" data-category="general">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What is DateMaker?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>DateMaker is a relationship app for couples. It helps you plan dates together, discover local spots and events, celebrate milestones with badges, and store your favorite memories in a private shared space. It's not a dating app—it's for couples who are already together and want to strengthen their relationship.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How does DateMaker work?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>After signing up as a couple, you can plan dates collaboratively, vote on activity suggestions, sync your calendars, and discover date spots near you. DateMaker uses AI to recommend activities based on your interests, weather, and location. You can also track milestones, earn badges, and save photos in your private memory gallery.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Is DateMaker free to use?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>DateMaker offers both free and premium plans. Free users can create dates, use the Around Me feature, and earn basic badges. Premium members unlock unlimited date planning, advanced location filters, priority event access, and exclusive milestone badges.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What makes DateMaker different from other apps?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>DateMaker is built specifically for couples, not singles. We focus on strengthening existing relationships through shared experiences, collaborative planning, and celebrating your journey together. No swiping, no awkward introductions—just tools to help you make every date special.</p>
                        </div>
                    </div>
                </div>

                <!-- Account FAQs -->
                <div class="faq-category" data-category="account">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I create an account?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Download the DateMaker app and sign up with your email. You'll create a couple's account together with your partner by sending them an invite link. Once connected, you can start planning dates, tracking milestones, and exploring features together.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I delete my account?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, you can delete your account at any time from settings. This will permanently remove your shared dates, memories, and milestones. If you have a premium subscription, remember to cancel it first to avoid future charges.</p>
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
                <p>&copy; 2026 Singleton. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @vite(['resources/js/mock-api-client.js', 'resources/js/api-client.js'])
</body>
</html>
