<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DateMaker - Find Your Perfect Date')</title>
    @vite(['resources/css/datemaker.css'])
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=2">
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
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('features') }}" class="nav-link {{ request()->routeIs('features') ? 'active' : '' }}">Features</a>
                    <div class="dropdown">
                        <a href="{{ route('features') }}#smart-matching" class="dropdown-item">
                            <div class="dropdown-icon">&#129504;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Shared Date Creation</div>
                                <div class="dropdown-desc">Plan dates together</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#safety-first" class="dropdown-item">
                            <div class="dropdown-icon">&#128274;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Privacy & Security</div>
                                <div class="dropdown-desc">Encrypted, private, ad-free</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#video-chat" class="dropdown-item">
                            <div class="dropdown-icon">&#128205;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Discover Together</div>
                                <div class="dropdown-desc">Find new places & events</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#personality-insights" class="dropdown-item">
                            <div class="dropdown-icon">&#127881;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Relationship Milestones</div>
                                <div class="dropdown-desc">Celebrate your journey</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#date-planning" class="dropdown-item">
                            <div class="dropdown-icon">&#9200;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Effortless Date Planning</div>
                                <div class="dropdown-desc">Reminders & shared calendar</div>
                            </div>
                        </a>
                        <a href="{{ route('features') }}#community" class="dropdown-item">
                            <div class="dropdown-icon">&#128101;</div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Community & Inspiration</div>
                                <div class="dropdown-desc">Connect with other couples</div>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pricing') }}" class="nav-link {{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a>
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

    @yield('content')

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
