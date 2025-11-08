<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - DateMaker</title>
    @vite(['resources/css/datemaker.css'])
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=3">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=3">
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
                            <div class="dropdown-icon">&#129504;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Smart Matching</div>
                                <div class="dropdown-desc">AI-powered date crafting</div>
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
                                <div class="dropdown-title">Around Me</div>
                                <div class="dropdown-desc">Discover local date spots & events near you</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#personality-insights" class="dropdown-item">
                            <div class="dropdown-icon">&#127917;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Personality badges</div>
                                <div class="dropdown-desc">Color your relationship with unique badges</div>
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

    <!-- Features Hero -->
    <main>
        <section class="page-hero">
            <div class="container">
                <h1>DateMaker: The Relationship App</h1>
                <p>DateMaker is the app for couples who want to create, plan, and celebrate their unique love story. Discover features that help you connect, grow, and make every date memorable—no swiping, no awkward first messages, just real experiences for real relationships.</p>
            </div>
        </section>

        <!-- Main Features -->
        <section class="features-section">
            <div class="container">
                <div class="features-layout">
                    <!-- Feature 1 - Smart Matching -->
                    <div class="feature-row" id="smart-matching">
                        <div class="feature-content">
                            <div class="feature-icon">&#129504;</div>
                            <h2>Shared Date Creation</h2>
                            <p>Plan dates together with your partner using collaborative tools. Suggest, vote, and schedule activities that both of you will love. No more indecision—DateMaker makes planning fun and easy.</p>
                            <ul class="feature-list">
                                <li>🧠 Collaborative date planning</li>
                                <li>💬 Real-time suggestions and voting</li>
                                <li>📅 Shared calendar integration</li>
                                <li>⭐ Personalized recommendations</li>
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
                            <h2>Privacy & Security</h2>
                            <p>Your relationship is private. DateMaker uses secure, encrypted storage for your memories, plans, and chats. Only you and your partner can access your shared space—no ads, no data selling, ever.</p>
                            <ul class="feature-list">
                                <li>🔒 End-to-end encrypted messaging</li>
                                <li>🖼️ Private photo albums</li>
                                <li>🛡️ No third-party data sharing</li>
                                <li>🚫 No ads, ever</li>
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
                            <h2>Discover Together</h2>
                            <p>Find new places, events, and experiences as a couple. Get suggestions for local restaurants, hidden gems, and fun activities tailored to your shared interests and location.</p>
                            <ul class="feature-list">
                                <li>📍 Local date spot discovery</li>
                                <li>🌦️ Weather-aware suggestions</li>
                                <li>🎫 Event and activity finder</li>
                                <li>🗺️ Google Maps integration</li>
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
                            <h2>Relationship Milestones</h2>
                            <p>Celebrate your journey together! Earn badges for anniversaries, firsts, and shared achievements. Look back on your story with a timeline of memories and milestones.</p>
                            <ul class="feature-list">
                                <li>� Anniversary and event badges</li>
                                <li>� Relationship timeline</li>
                                <li>🏆 Shared achievements</li>
                                <li>� Private journal for your story</li>
                            </ul>
                        </div>
                        <div class="feature-image">
                            <div class="feature-graphic">&#127917;&#10024;</div>
                        </div>
                    </div>

                    <!-- Feature 5 - Date Planning -->
                    <div class="feature-row" id="date-planning">
                        <div class="feature-content">
                            <div class="feature-icon">&#128197;</div>
                            <h2>Effortless Date Planning</h2>
                            <p>Let DateMaker suggest, organize, and remind you of upcoming dates. Sync with your calendars, get reminders, and never miss a special moment again.</p>
                            <ul class="feature-list">
                                <li>📅 Smart date suggestions</li>
                                <li>⏰ Reminders and notifications</li>
                                <li>📆 Calendar sync</li>
                                <li>�️ Shared planning board</li>
                            </ul>
                        </div>
                        <div class="feature-image">
                            <div class="feature-graphic">&#128197;&#128149;</div>
                        </div>
                    </div>

                    <!-- Feature 6 - Community Events -->
                    <div class="feature-row reverse" id="community">
                        <div class="feature-content">
                            <div class="feature-icon">&#128101;</div>
                            <h2>Community & Inspiration</h2>
                            <p>Connect with other couples, share ideas, and get inspired. Join challenges, participate in group events, and be part of a supportive community focused on healthy relationships.</p>
                            <ul class="feature-list">
                                <li>👥 Couples community</li>
                                <li>🎉 Group challenges</li>
                                <li>💡 Inspiration feed</li>
                                <li>🌟 Relationship resources</li>
                            </ul>
                        </div>
                        <div class="feature-image">
                            <div class="feature-graphic">&#128101;&#128150;</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Features Grid -->
        <section class="additional-features">
            <div class="container">
                <h2>More DateMaker Features</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">&#9889;</div>
                        <h3>Lightning Fast</h3>
                        <p>Instant access to your shared plans, memories, and messages.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">&#128241;</div>
                        <h3>Mobile First</h3>
                        <p>Beautiful, responsive design for every device.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">&#127925;</div>
                        <h3>Shared Playlists</h3>
                        <p>Create playlists together and set the mood for every date.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">&#127939;</div>
                        <h3>Memory Gallery</h3>
                        <p>Save photos, notes, and favorite moments in your private gallery.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">&#127917;</div>
                        <h3>Event Planning</h3>
                        <p>Plan virtual and in-person dates with ease.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">&#127942;</div>
                        <h3>Relationship Tips</h3>
                        <p>Expert advice and tips for couples, right in the app.</p>
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
                        <a href="{{ route('pricing') }}" class="btn btn-primary btn-large">View Pricing</a>
                        <a href="{{ route('about') }}" class="btn btn-outline btn-large">Learn More</a>
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
                    <p>The Relationship App for Couples</p>
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
                <p>&copy; 2026 DateMaker Team. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @vite(['resources/js/mock-api-client.js', 'resources/js/api-client.js'])
    <!--
        Devs:
        - Selim (Lead Developer)
        - Kyi (Frontend & UX)
        - Singleton (Backend & Infra)
        - Special thanks to the DateMaker community
    -->
</body>
</html>
