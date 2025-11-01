<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - DateMaker</title>
    @vite(['resources/css/datemaker.css'])
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

    <!-- About Hero -->
    <main>
        <section class="page-hero">
            <div class="container">
                <h1>Meet the DateMaker Team</h1>
                <p>Building the app for couples who want to create, plan, and celebrate their unique love story.</p>
            </div>
        </section>

        <!-- Developers Section -->
        <section class="developers-section">
            <div class="container">
                <h2>Meet Our Developers &#128149;</h2>
                <p class="developers-intro">The creative minds behind DateMaker's romantic experience</p>
                <div class="developers-grid">
                    <div class="developer-card">
                        <div class="developer-image">
                            <div class="image-placeholder">
                                <div class="heart-corner top-left">&#128150;</div>
                                <div class="heart-corner top-right">&#128150;</div>
                                <div class="heart-corner bottom-left">&#128150;</div>
                                <div class="heart-corner bottom-right">&#128150;</div>
                                <div class="placeholder-icon"><img src="{{ asset('selim.png') }}" alt="Selim's Image"></div>
                            </div>
                        </div>
                        <div class="developer-info">
                            <h3 class="developer-name">Selim</h3>
                            <h4 class="developer-title">Lead Developer</h4>
                            <p class="developer-description">
                                Selim is the architect behind DateMaker's robust backend and seamless user experience. With a passion for building tools that bring people together, Selim ensures every feature is reliable, secure, and fun to use.
                            </p>
                            <div class="developer-social">
                                <a href="https://www.instagram.com/aze_ezt_ne/" class="social-link" title="Follow Selim on Instagram">&#128247;</a>
                                <a href="https://github.com/ita-Kyi" class="social-link" title="Check out Selim's GitHub">&#128187;</a>
                            </div>
                        </div>
                    </div>
                    <div class="developer-card">
                        <div class="developer-image">
                            <div class="image-placeholder">
                                <div class="heart-corner top-left">&#128150;</div>
                                <div class="heart-corner top-right">&#128150;</div>
                                <div class="heart-corner bottom-left">&#128150;</div>
                                <div class="heart-corner bottom-right">&#128150;</div>
                                <div class="placeholder-icon"><img src="{{ asset('ricsi.png') }}" alt="Ricsi's Image"></div>
                            </div>
                        </div>
                        <div class="developer-info">
                            <h3 class="developer-name">Ricsi</h3>
                            <h4 class="developer-title">Frontend & UX Designer</h4>
                            <p class="developer-description">
                                Ricsi brings DateMaker's vision to life with beautiful, intuitive design and a focus on user experience. Every screen is crafted to make couples feel at home and inspired to create new memories.
                            </p>
                            <div class="developer-social">
                                <a href="#" class="social-link" title="Follow Ricsi on Instagram">&#128247;</a>
                                <a href="#" class="social-link" title="Check out Ricsi's GitHub">&#128187;</a>
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
                                <span class="contact-icon">&#128231;</span>
                                <div>
                                    <h4>Email Us</h4>
                                    <p>hello@datemaker.com</p>
                                </div>
                            </div>
                            <div class="contact-method">
                                <span class="contact-icon">&#128222;</span>
                                <div>
                                    <h4>Call Us</h4>
                                    <p>1-800-DATEMAKER</p>
                                </div>
                            </div>
                            <div class="contact-method">
                                <span class="contact-icon">&#128205;</span>
                                <div>
                                    <h4>Visit Us</h4>
                                    <p>123 Love Street<br>San Francisco, CA 94105</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="Your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="your@email.com" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" placeholder="What's this about?" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="5" placeholder="Tell us more..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
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
                <p>&copy; 2026 DateMaker Team. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @vite(['resources/js/mock-api-client.js', 'resources/js/api-client.js'])
</body>
</html>
