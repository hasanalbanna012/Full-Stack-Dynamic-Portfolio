@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Loading Screen -->
<div class="loading-screen" id="loadingScreen">
    <div class="loader"></div>
</div>

<!-- Hero Section -->
<section class="cyber-section cyber-hero">
    <div class="hero-content">
        <div class="hero-subtitle" data-aos="fade-up">SYSTEM_ONLINE</div>
        <h1 class="hero-title glitch" data-text="HASAN AL BANNA" data-aos="fade-up" data-aos-delay="200">
            HASAN AL BANNA
        </h1>
        <p class="hero-description" data-aos="fade-up" data-aos-delay="400">
            <span class="text-gradient">Android App Developer</span> | Crafting next-generation mobile experiences with cutting-edge technology and innovative solutions.
        </p>
        
        <div class="hero-contact" data-aos="fade-up" data-aos-delay="600">
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <span>shahhasanita@gmail.com</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <span>01735-721773</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>Digital Space • Earth</span>
            </div>
        </div>
        
        <div class="hero-actions" data-aos="fade-up" data-aos-delay="800">
            <a href="{{ url('/portfolio') }}" class="cyber-btn cyber-btn-primary">
                <i class="fas fa-rocket"></i>
                EXPLORE PROJECTS
            </a>
            <a href="{{ url('/contact') }}" class="cyber-btn cyber-btn-secondary">
                <i class="fas fa-terminal"></i>
                INITIALIZE_CONTACT
            </a>
            <a href="{{ route('auth.login') }}" class="cyber-btn cyber-btn-secondary">
                <i class="fas fa-lock"></i>
                ADMIN_ACCESS
            </a>
        </div>
    </div>
    
    <div class="hero-visual" data-aos="zoom-in" data-aos-delay="1000">
        <div class="hero-image-container">
            <img src="assets/images/profile.jpg" alt="Hasan Al Banna - Android Developer" class="hero-image">
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="cyber-section">
    <div class="cyber-grid cyber-grid-4">
        <div class="cyber-card text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-number text-gradient">50+</div>
            <div class="stat-label">Projects Completed</div>
        </div>
        <div class="cyber-card text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="stat-number text-gradient">3+</div>
            <div class="stat-label">Years Experience</div>
        </div>
        <div class="cyber-card text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="stat-number text-gradient">100+</div>
            <div class="stat-label">Happy Clients</div>
        </div>
        <div class="cyber-card text-center" data-aos="fade-up" data-aos-delay="800">
            <div class="stat-number text-gradient">24/7</div>
            <div class="stat-label">System Uptime</div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="cyber-section">
    <h2 class="section-title" data-aos="fade-up">CORE_TECHNOLOGIES</h2>
    <div class="cyber-grid cyber-grid-3">
        <div class="cyber-card" data-aos="fade-up" data-aos-delay="200">
            <div class="tech-icon">
                <i class="fab fa-android" style="font-size: 3rem; color: var(--neon-green);"></i>
            </div>
            <h3 class="tech-title">Android Development</h3>
            <p class="tech-description">Native Android applications using Java, Kotlin, and modern architectural patterns.</p>
        </div>
        <div class="cyber-card" data-aos="fade-up" data-aos-delay="400">
            <div class="tech-icon">
                <i class="fas fa-database" style="font-size: 3rem; color: var(--primary-cyan);"></i>
            </div>
            <h3 class="tech-title">Database Systems</h3>
            <p class="tech-description">Efficient data management with SQLite, Firebase, and cloud databases.</p>
        </div>
        <div class="cyber-card" data-aos="fade-up" data-aos-delay="600">
            <div class="tech-icon">
                <i class="fas fa-cloud" style="font-size: 3rem; color: var(--accent-orange);"></i>
            </div>
            <h3 class="tech-title">Cloud Integration</h3>
            <p class="tech-description">Seamless cloud services integration and API development.</p>
        </div>
    </div>
</section>

<style>
.stat-number {
    font-family: var(--font-primary);
    font-size: 3rem;
    font-weight: 900;
    margin-bottom: 0.5rem;
}

.stat-label {
    color: var(--text-secondary);
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.tech-icon {
    text-align: center;
    margin-bottom: 1.5rem;
}

.tech-title {
    font-family: var(--font-primary);
    color: var(--primary-cyan);
    font-size: 1.3rem;
    margin-bottom: 1rem;
    text-align: center;
}

.tech-description {
    color: var(--text-secondary);
    line-height: 1.6;
    text-align: center;
}
</style>

<script>
// Hide loading screen after page load
window.addEventListener('load', function() {
    setTimeout(() => {
        const loadingScreen = document.getElementById('loadingScreen');
        loadingScreen.classList.add('fade-out');
        setTimeout(() => {
            loadingScreen.style.display = 'none';
        }, 500);
    }, 1500);
});

// Simple AOS (Animate On Scroll) implementation
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('[data-aos]').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        observer.observe(el);
    });
});
</script>
@endsection
