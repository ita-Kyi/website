<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - DateMaker</title>
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
                    <button class="tab-btn" data-category="matching">Matching</button>
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
                            <p>DateMaker is a premium dating platform that uses advanced AI matching algorithms to help you find meaningful connections. We focus on compatibility, shared interests, and long-term relationship potential rather than just superficial matches.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How does DateMaker work?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>After creating your profile, our smart matching algorithm analyzes your preferences, interests, and behavior to suggest compatible matches. You can browse profiles, send messages, and even video chat with potential matches before meeting in person.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Is DateMaker free to use?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>DateMaker offers both free and premium features. Free users can create profiles, browse matches, and send limited messages. Premium members get unlimited messaging, advanced filters, video calling, and priority support.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What makes DateMaker different from other dating apps?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>We focus on quality matches over quantity, use advanced AI for compatibility assessment, provide video chat features, maintain strict safety standards, and offer personalized dating coaching to help you succeed.</p>
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
                            <p>Simply click "Get Started" on our homepage, enter your email and create a password. You'll then complete your profile with photos, interests, and preferences. The whole process takes about 10 minutes.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I delete my account?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, you can delete your account at any time from your settings page. This will permanently remove your profile, matches, and messages. If you have a subscription, remember to cancel it first.</p>
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
                <p>&copy; 2025 Singleton. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @vite(['resources/js/mock-api-client.js', 'resources/js/auth.js', 'resources/js/api-client.js'])
</body>
</html>
