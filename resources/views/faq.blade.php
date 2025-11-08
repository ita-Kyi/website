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

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I connect with my partner?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>After creating your account, you'll receive a unique invite link to share with your partner. They can use this link to join your couple's profile. Once connected, all your dates, memories, and milestones will be synced between both accounts.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I change my email or password?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes! Go to Settings > Account Settings to update your email address or password. For security, you'll need to verify your current password before making changes. Your partner will be notified of any major account changes.</p>
                        </div>
                    </div>
                </div>

                <!-- Features FAQs -->
                <div class="faq-category" data-category="matching">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How does date planning work?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>DateMaker suggests personalized date ideas based on your preferences, location, and past activities. You can browse suggestions, save favorites, and collaborate with your partner to plan the perfect date. The app also sends reminders and helps coordinate logistics.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What are relationship milestones?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Milestones are special moments in your relationship that DateMaker helps you track and celebrate—like your first date, anniversaries, moving in together, or other meaningful events. You'll earn badges for completing milestones and can look back on your journey together.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I add custom date ideas?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Absolutely! While DateMaker provides curated suggestions, you can also create and save your own custom date ideas. Add details like location, budget, time needed, and notes. Your partner can see and vote on ideas to help decide together.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I save memories?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>After each date, you can add photos, notes, and rate your experience. These memories are stored in your private shared timeline, creating a beautiful digital scrapbook of your relationship. Only you and your partner can see these memories.</p>
                        </div>
                    </div>
                </div>

                <!-- Safety FAQs -->
                <div class="faq-category" data-category="safety">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Is my data secure?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes! We use bank-level encryption to protect your data. All photos, messages, and personal information are encrypted both in transit and at rest. We never share your data with third parties, and you can delete your account and all data at any time.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can others see my dates and memories?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>No. DateMaker is completely private between you and your partner. Your dates, photos, messages, and milestones are visible only to the two of you. We don't have social features or public profiles—your relationship is yours alone.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What if I want to disconnect from my partner?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>You can disconnect from your partner in Settings. Both parties will retain a copy of shared memories, but you'll no longer be able to plan dates together or see each other's activity. You can then connect with a new partner or use the app solo.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you protect my privacy?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>We follow strict privacy policies and comply with international data protection regulations. We don't sell your data, use it for advertising, or share it with third parties. You control what information you share, and you can export or delete all your data at any time.</p>
                        </div>
                    </div>
                </div>

                <!-- Billing FAQs -->
                <div class="faq-category" data-category="billing">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How much does DateMaker cost?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>DateMaker offers a free basic plan with core features. Premium plans start at $9.99/month and include unlimited date ideas, advanced planning tools, priority support, and exclusive badges. Check our Pricing page for current offers and annual discounts.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I cancel my subscription?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, you can cancel anytime from Settings > Subscription. Your premium features will remain active until the end of your billing period. After cancellation, you'll automatically switch to the free plan and keep all your existing dates and memories.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What payment methods do you accept?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>We accept all major credit cards (Visa, Mastercard, American Express), debit cards, PayPal, Apple Pay, and Google Pay. All payments are processed securely through encrypted payment gateways. We never store your full payment details.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you offer refunds?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>We offer a 30-day money-back guarantee for first-time subscribers. If you're not satisfied with Premium, contact support within 30 days of your first payment for a full refund. Renewals are non-refundable, but you can cancel anytime to avoid future charges.</p>
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

    <script>
        // FAQ Accordion functionality
        document.addEventListener('DOMContentLoaded', () => {
            const faqItems = document.querySelectorAll('.faq-item');
            const tabButtons = document.querySelectorAll('.tab-btn');
            const faqCategories = document.querySelectorAll('.faq-category');
            const searchInput = document.getElementById('faq-search');

            // Check if URL has a hash to switch to specific category
            const hash = window.location.hash.substring(1); // Remove the #
            if (hash === 'safety') {
                // Find and click the safety tab
                const safetyTab = document.querySelector('[data-category="safety"]');
                if (safetyTab) {
                    safetyTab.click();
                }
            }

            // Toggle FAQ answers
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                const answer = item.querySelector('.faq-answer');
                const toggle = item.querySelector('.faq-toggle');

                question.addEventListener('click', () => {
                    const isOpen = item.classList.contains('open');

                    // Close all other items
                    faqItems.forEach(otherItem => {
                        otherItem.classList.remove('open');
                        otherItem.querySelector('.faq-toggle').textContent = '+';
                    });

                    // Toggle current item
                    if (!isOpen) {
                        item.classList.add('open');
                        toggle.textContent = '-';
                    }
                });
            });

            // Category tabs functionality
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const category = button.getAttribute('data-category');

                    // Update active tab
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    // Show matching category
                    faqCategories.forEach(cat => {
                        if (cat.getAttribute('data-category') === category) {
                            cat.classList.add('active');
                        } else {
                            cat.classList.remove('active');
                        }
                    });

                    // Close all FAQ items
                    faqItems.forEach(item => {
                        item.classList.remove('open');
                        item.querySelector('.faq-toggle').textContent = '+';
                    });
                });
            });

            // Search functionality
            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    const searchTerm = e.target.value.toLowerCase();

                    faqItems.forEach(item => {
                        const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
                        const answer = item.querySelector('.faq-answer p').textContent.toLowerCase();

                        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });

                    // If search is empty, show all items
                    if (searchTerm === '') {
                        faqItems.forEach(item => {
                            item.style.display = 'block';
                        });
                    }
                });
            }
        });
    </script>
</body>
</html>
