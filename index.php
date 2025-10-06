<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Get page content from database
$page_content = getPageContent('home');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($page_content['meta_description'] ?? 'Turnpage Networks - Professional Website Design and Hosting Solutions'); ?>">
    <title>Turnpage Networks - Business Website Design & Hosting</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo-placeholder.png" alt="Turnpage Networks Logo" class="logo-img">
                        </a>
                    </div>
                    <div class="hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="nav-menu" id="navMenu">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="admin/index.php" class="btn-admin">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title animate-fade-in">
                    <?php echo htmlspecialchars($page_content['hero_title'] ?? 'Transform Your Business Online'); ?>
                </h1>
                <p class="hero-subtitle animate-fade-in-delay">
                    <?php echo htmlspecialchars($page_content['hero_subtitle'] ?? 'Professional website design and reliable hosting solutions for businesses ready to grow'); ?>
                </p>
                <div class="hero-buttons animate-fade-in-delay-2">
                    <a href="contact.php" class="btn btn-primary">Get Started</a>
                    <a href="services.php" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Comprehensive solutions for your digital presence</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 2H3C1.9 2 1 2.9 1 4V16C1 17.1 1.9 18 3 18H10L8 21V22H16V21L14 18H21C22.1 18 23 17.1 23 16V4C23 2.9 22.1 2 21 2ZM21 16H3V4H21V16Z" fill="#0066CC"/>
                        </svg>
                    </div>
                    <h3>Business Website Design</h3>
                    <p>Custom, professional websites tailored to your brand. We create stunning, user-friendly designs that convert visitors into customers.</p>
                    <ul class="service-features">
                        <li>Responsive Design</li>
                        <li>Custom Development</li>
                        <li>SEO Optimized</li>
                        <li>Modern UI/UX</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20ZM12 6C8.69 6 6 8.69 6 12C6 15.31 8.69 18 12 18C15.31 18 18 15.31 18 12C18 8.69 15.31 6 12 6Z" fill="#0066CC"/>
                        </svg>
                    </div>
                    <h3>Web Hosting</h3>
                    <p>Reliable, fast, and secure hosting solutions. Keep your website running smoothly with our premium hosting infrastructure.</p>
                    <ul class="service-features">
                        <li>99.9% Uptime</li>
                        <li>SSL Security</li>
                        <li>Daily Backups</li>
                        <li>24/7 Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Turnpage Networks</h2>
                <p>We deliver excellence in every project</p>
            </div>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">⚡</div>
                    <h4>Fast Loading</h4>
                    <p>Optimized performance for lightning-fast page loads</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🔒</div>
                    <h4>SSL Security</h4>
                    <p>Enterprise-grade security to protect your data</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📱</div>
                    <h4>Mobile Responsive</h4>
                    <p>Perfect display on all devices and screen sizes</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🚀</div>
                    <h4>SEO Optimized</h4>
                    <p>Built with search engine optimization in mind</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">💬</div>
                    <h4>24/7 Support</h4>
                    <p>Round-the-clock assistance whenever you need it</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📈</div>
                    <h4>Scalable</h4>
                    <p>Solutions that grow with your business</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Online Presence?</h2>
                <p>Let's build something amazing together</p>
                <a href="contact.php" class="btn btn-light">Contact Us Today</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h4>Turnpage Networks</h4>
                    <p>Professional website design and hosting solutions for businesses.</p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="services.php">Website Design</a></li>
                        <li><a href="services.php">Web Hosting</a></li>
                        <li><a href="services.php">SEO Services</a></li>
                        <li><a href="services.php">Maintenance</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li>Email: info@turnpagenetworks.com</li>
                        <li>Phone: (555) 123-4567</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Turnpage Networks. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>
