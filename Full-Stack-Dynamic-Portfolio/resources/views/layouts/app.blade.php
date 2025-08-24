<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Hasan Al Banna</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Animated Background -->
    <div class="cyber-bg">
        <div class="grid-overlay"></div>
        <div class="particles"></div>
    </div>
    
    <!-- Navigation -->
    <header class="cyber-header">
        <div class="header-container">
            <div class="logo">
                <a href="{{ route('home') }}" class="logo-link">
                    <div class="logo-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <span class="logo-text">CYBER_PORTFOLIO</span>
                </a>
            </div>
            
            <nav class="cyber-nav">
                <div class="nav-toggle" id="navToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="{{ route('home') }}" class="nav-link"><i class="fas fa-home"></i> HOME</a></li>
                    <li><a href="{{ url('/about') }}" class="nav-link"><i class="fas fa-user"></i> ABOUT</a></li>
                    <li><a href="{{ url('/services') }}" class="nav-link"><i class="fas fa-cogs"></i> SERVICES</a></li>
                    <li><a href="{{ url('/portfolio') }}" class="nav-link"><i class="fas fa-briefcase"></i> PORTFOLIO</a></li>
                    <li><a href="{{ url('/contact') }}" class="nav-link"><i class="fas fa-envelope"></i> CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="cyber-main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="cyber-footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3 class="footer-title">CYBER_PORTFOLIO</h3>
                    <p class="footer-text">Crafting digital experiences with cutting-edge technology</p>
                </div>
                <div class="footer-section">
                    <h3 class="footer-title">CONNECT</h3>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Hasan Al Banna | All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Navigation Toggle
        document.getElementById('navToggle').addEventListener('click', function() {
            document.getElementById('navMenu').classList.toggle('active');
            this.classList.toggle('active');
        });

        // Particles Animation
        function createParticles() {
            const particlesContainer = document.querySelector('.particles');
            const particleCount = 50;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 20 + 10) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Initialize particles
        createParticles();

        // Smooth scrolling for navigation links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                // Add click effect
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Add typing effect for text elements
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Add entrance animations
            const elementsToAnimate = document.querySelectorAll('.cyber-header, .cyber-main, .cyber-footer');
            elementsToAnimate.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    element.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, index * 200);
            });
        });
    </script>
</body>
</html>
