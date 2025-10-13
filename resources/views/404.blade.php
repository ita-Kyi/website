<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | DateMaker</title>
    @vite(['resources/css/datemaker.css'])
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="{{ route('home') }}">💘 DateMaker</a>
            </div>
            <ul class="nav-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('features') }}">Features</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="{{ route('login') }}" class="btn-secondary">Log In</a>
                <a href="{{ route('register') }}" class="btn-primary">Sign Up</a>
            </div>
        </div>
    </nav>

    <!-- 404 Error Section -->
    <section class="error-section">
        <div class="container" style="text-align: center; padding: 100px 20px;">
            <div style="font-size: 120px; margin-bottom: 20px;">💔</div>
            <h1 style="font-size: 72px; color: var(--primary-color); margin-bottom: 20px;">404</h1>
            <h2 style="font-size: 36px; margin-bottom: 20px;">Oops! Page Not Found</h2>
            <p style="font-size: 20px; color: #666; margin-bottom: 40px;">
                {{ $message ?? "This page doesn't exist. Let's get you back to finding love!" }}
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('home') }}" class="btn-primary" style="padding: 15px 40px; font-size: 18px;">
                    💘 Go Home
                </a>
                <a href="{{ route('features') }}" class="btn-secondary" style="padding: 15px 40px; font-size: 18px;">
                    Explore Features
                </a>
            </div>
            <div style="margin-top: 60px; font-size: 48px;">
                💕 ➡️ 💖
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>DateMaker</h3>
                    <p>Find your perfect match today!</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('features') }}">Features</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 DateMaker. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
