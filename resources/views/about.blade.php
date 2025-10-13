<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - DateMaker</title>
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
                    <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link active">About Us</a>
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

    <!-- About Hero -->
    <main>
        <section class="page-hero">
            <div class="container">
                <h1>About DateMaker</h1>
                <p>Connecting hearts and creating meaningful relationships since 2020</p>
            </div>
        </section>

        <!-- Developers Section -->
        <section class="developers-section">
            <div class="container">
                <h2>Meet Our Developers 💕</h2>
                <p class="developers-intro">The creative minds behind DateMaker's romantic experience</p>
                <div class="developers-grid">
                    <div class="developer-card">
                        <div class="developer-image">
                            <div class="image-placeholder">
                                <div class="heart-corner top-left">💖</div>
                                <div class="heart-corner top-right">💖</div>
                                <div class="heart-corner bottom-left">💖</div>
                                <div class="heart-corner bottom-right">💖</div>
                                <div class="placeholder-icon">👨‍💻</div>
                            </div>
                        </div>
                        <div class="developer-info">
                            <h3 class="developer-name">Selim</h3>
                            <h4 class="developer-title">BACKEND</h4>
                            <p class="developer-description">
                                Selim is the mastermind behind DateMaker's seamless user experience and robust backend architecture.
                                With 8+ years in web development and a passion for creating meaningful connections, he specializes
                                in React, Node.js, and database optimization. When he's not coding, Selim enjoys romantic comedies
                                and believes that the best love stories start with great technology.
                            </p>
                            <div class="developer-social">
                                <a href="#" class="social-link" title="Follow Selim on Instagram">&#128247;</a>
                                <a href="#" class="social-link" title="Check out Selim's GitHub">&#128187;</a>
                                <a href="#" class="social-link" title="Follow Selim on X">&#128038;</a>
                                <a href="#" class="social-link" title="Connect with Selim on LinkedIn">&#128188;</a>
                            </div>
                        </div>
                    </div>

                    <div class="developer-card">
                        <div class="developer-image">
                            <div class="image-placeholder">
                                <div class="heart-corner top-left">💖</div>
                                <div class="heart-corner top-right">💖</div>
                                <div class="heart-corner bottom-left">💖</div>
                                <div class="heart-corner bottom-right">💖</div>
                                <div class="placeholder-icon">👨‍💻</div>
                            </div>
                        </div>
                        <div class="developer-info">
                            <h3 class="developer-name">Rics</h3>
                            <h4 class="developer-title">Frontend Developer & UI/UX Designer</h4>
                            <p class="developer-description">
                                Rics brings DateMaker's romantic vision to life through stunning visual design and intuitive user
                                interfaces. With expertise in CSS animations, responsive design, and user psychology, he creates
                                the beautiful pink "lovy duby" theme that makes hearts flutter. Rics believes that love should
                                be beautiful, and his designs reflect that philosophy in every pixel.
                            </p>
                            <div class="developer-social">
                                <a href="#" class="social-link" title="Follow Rics on Instagram">&#128247;</a>
                                <a href="#" class="social-link" title="Check out Rics's GitHub">&#128187;</a>
                                <a href="#" class="social-link" title="Follow Rics on X">&#128038;</a>
                                <a href="#" class="social-link" title="Connect with Rics on LinkedIn">&#128188;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-content">
                    <div class="contact-info">
                        <h2>Get in Touch</h2>
                        <p>Have questions or want to learn more about DateMaker? We'd love to hear from you.</p>
                        <div class="contact-methods">
                            <div class="contact-method">
                                <span class="contact-icon">📧</span>
                                <div>
                                    <h4>Email Us</h4>
                                    <p>hello@datemaker.com</p>
                                </div>
                            </div>
                            <div class="contact-method">
                                <span class="contact-icon">📞</span>
                                <div>
                                    <h4>Call Us</h4>
                                    <p>1-800-DATEMAKER</p>
                                </div>
                            </div>
                            <div class="contact-method">
                                <span class="contact-icon">📍</span>
                                <div>
                                    <h4>Visit Us</h4>
                                    <p>123 Love Street<br>San Francisco, CA 94105</p>
                                </div>
                            </div>
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
