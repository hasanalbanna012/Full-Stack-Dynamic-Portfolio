@extends('layouts.app')

@section('title', 'Services')

@section('content')
<!-- Services Hero Section -->
<section class="cyber-section">
    <div class="text-center">
        <div class="hero-subtitle" data-aos="fade-up">SYSTEM_CAPABILITIES</div>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">SERVICES.EXECUTE()</h1>
        <p class="hero-description" data-aos="fade-up" data-aos-delay="400">
            Comprehensive digital solutions powered by cutting-edge technology and innovative methodologies
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="cyber-section">
    <div class="cyber-grid cyber-grid-2">
        <!-- Mobile App Development -->
        <div class="service-card" data-aos="fade-up" data-aos-delay="200">
            <div class="service-icon">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="service-content">
                <h3 class="service-title">Mobile App Development</h3>
                <p class="service-description">
                    Native Android applications built with modern architecture patterns, 
                    ensuring optimal performance and user experience.
                </p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Native Android Development</li>
                    <li><i class="fas fa-check"></i> Kotlin & Java Programming</li>
                    <li><i class="fas fa-check"></i> MVVM Architecture</li>
                    <li><i class="fas fa-check"></i> Material Design UI</li>
                </ul>
                <div class="service-tech">
                    <span class="tech-tag">Android SDK</span>
                    <span class="tech-tag">Kotlin</span>
                    <span class="tech-tag">Java</span>
                </div>
            </div>
        </div>

        <!-- UI/UX Design -->
        <div class="service-card" data-aos="fade-up" data-aos-delay="400">
            <div class="service-icon">
                <i class="fas fa-palette"></i>
            </div>
            <div class="service-content">
                <h3 class="service-title">UI/UX Design</h3>
                <p class="service-description">
                    Crafting intuitive and visually stunning interfaces that enhance user 
                    engagement and deliver exceptional digital experiences.
                </p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> User Interface Design</li>
                    <li><i class="fas fa-check"></i> User Experience Research</li>
                    <li><i class="fas fa-check"></i> Prototyping & Wireframing</li>
                    <li><i class="fas fa-check"></i> Responsive Design</li>
                </ul>
                <div class="service-tech">
                    <span class="tech-tag">Figma</span>
                    <span class="tech-tag">Adobe XD</span>
                    <span class="tech-tag">Sketch</span>
                </div>
            </div>
        </div>

        <!-- Backend Development -->
        <div class="service-card" data-aos="fade-up" data-aos-delay="600">
            <div class="service-icon">
                <i class="fas fa-server"></i>
            </div>
            <div class="service-content">
                <h3 class="service-title">Backend Development</h3>
                <p class="service-description">
                    Robust server-side solutions with secure APIs, database optimization, 
                    and cloud integration for scalable applications.
                </p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> RESTful API Development</li>
                    <li><i class="fas fa-check"></i> Database Design</li>
                    <li><i class="fas fa-check"></i> Cloud Integration</li>
                    <li><i class="fas fa-check"></i> Security Implementation</li>
                </ul>
                <div class="service-tech">
                    <span class="tech-tag">Firebase</span>
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">MySQL</span>
                </div>
            </div>
        </div>

        <!-- Digital Optimization -->
        <div class="service-card" data-aos="fade-up" data-aos-delay="800">
            <div class="service-icon">
                <i class="fas fa-rocket"></i>
            </div>
            <div class="service-content">
                <h3 class="service-title">Digital Optimization</h3>
                <p class="service-description">
                    Performance optimization, SEO implementation, and analytics integration 
                    to maximize digital presence and user engagement.
                </p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Performance Optimization</li>
                    <li><i class="fas fa-check"></i> SEO Implementation</li>
                    <li><i class="fas fa-check"></i> Analytics Integration</li>
                    <li><i class="fas fa-check"></i> Conversion Optimization</li>
                </ul>
                <div class="service-tech">
                    <span class="tech-tag">Google Analytics</span>
                    <span class="tech-tag">SEO Tools</span>
                    <span class="tech-tag">Performance</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="cyber-section">
    <h2 class="section-title" data-aos="fade-up">DEVELOPMENT_PROCESS</h2>
    <div class="process-container">
        <div class="process-step" data-aos="fade-right" data-aos-delay="200">
            <div class="process-number">01</div>
            <div class="process-content">
                <h3 class="process-title">Analysis & Planning</h3>
                <p class="process-description">
                    Comprehensive requirement analysis, project planning, and technical architecture design.
                </p>
            </div>
        </div>
        <div class="process-step" data-aos="fade-left" data-aos-delay="400">
            <div class="process-number">02</div>
            <div class="process-content">
                <h3 class="process-title">Design & Prototyping</h3>
                <p class="process-description">
                    Creating user-centered designs, interactive prototypes, and technical specifications.
                </p>
            </div>
        </div>
        <div class="process-step" data-aos="fade-right" data-aos-delay="600">
            <div class="process-number">03</div>
            <div class="process-content">
                <h3 class="process-title">Development & Testing</h3>
                <p class="process-description">
                    Agile development approach with continuous testing and quality assurance.
                </p>
            </div>
        </div>
        <div class="process-step" data-aos="fade-left" data-aos-delay="800">
            <div class="process-number">04</div>
            <div class="process-content">
                <h3 class="process-title">Deployment & Support</h3>
                <p class="process-description">
                    Seamless deployment, performance monitoring, and ongoing maintenance support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cyber-section">
    <div class="cta-container" data-aos="zoom-in">
        <h2 class="cta-title">Ready to Launch Your Project?</h2>
        <p class="cta-description">
            Let's collaborate to bring your digital vision to life with cutting-edge technology and innovative solutions.
        </p>
        <div class="cta-actions">
            <a href="{{ url('/contact') }}" class="cyber-btn cyber-btn-primary">
                <i class="fas fa-paper-plane"></i>
                START PROJECT
            </a>
            <a href="{{ url('/portfolio') }}" class="cyber-btn cyber-btn-secondary">
                <i class="fas fa-eye"></i>
                VIEW PORTFOLIO
            </a>
        </div>
    </div>
</section>

<style>
/* Service Card Styles */
.service-card {
    background: var(--card-bg);
    border: 1px solid rgba(0, 255, 255, 0.2);
    border-radius: 20px;
    padding: 2.5rem;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0, 255, 255, 0.1), transparent);
    transition: left 0.6s ease;
}

.service-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary-cyan);
    box-shadow: 0 20px 40px rgba(0, 255, 255, 0.2);
}

.service-card:hover::before {
    left: 100%;
}

.service-icon {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--gradient-primary);
    border-radius: 20px;
    font-size: 2.5rem;
    color: var(--text-primary);
    margin-bottom: 2rem;
    position: relative;
    z-index: 2;
}

.service-content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.service-title {
    font-family: var(--font-primary);
    font-size: 1.5rem;
    color: var(--text-primary);
    margin-bottom: 1rem;
    font-weight: 700;
}

.service-description {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 2rem;
    flex-grow: 1;
}

.service-features {
    list-style: none;
    margin-bottom: 2rem;
}

.service-features li {
    display: flex;
    align-items: center;
    margin-bottom: 0.8rem;
    color: var(--text-secondary);
}

.service-features i {
    color: var(--neon-green);
    margin-right: 0.8rem;
    font-size: 0.9rem;
}

.service-tech {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.tech-tag {
    background: rgba(0, 255, 255, 0.1);
    border: 1px solid var(--primary-cyan);
    color: var(--primary-cyan);
    padding: 0.3rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-family: var(--font-primary);
    font-weight: 500;
}

/* Process Styles */
.process-container {
    display: grid;
    gap: 2rem;
    max-width: 800px;
    margin: 0 auto;
}

.process-step {
    display: flex;
    align-items: center;
    gap: 2rem;
    background: var(--card-bg);
    border: 1px solid rgba(0, 255, 255, 0.2);
    border-radius: 15px;
    padding: 2rem;
    transition: all 0.3s ease;
}

.process-step:hover {
    transform: translateX(10px);
    border-color: var(--primary-cyan);
    box-shadow: 0 10px 30px rgba(0, 255, 255, 0.2);
}

.process-number {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--gradient-primary);
    border-radius: 50%;
    font-family: var(--font-primary);
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-primary);
    flex-shrink: 0;
}

.process-content {
    flex: 1;
}

.process-title {
    font-family: var(--font-primary);
    font-size: 1.3rem;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.process-description {
    color: var(--text-secondary);
    line-height: 1.6;
}

/* CTA Styles */
.cta-container {
    text-align: center;
    background: var(--card-bg);
    border: 1px solid rgba(0, 255, 255, 0.2);
    border-radius: 20px;
    padding: 4rem 2rem;
    position: relative;
    overflow: hidden;
}

.cta-container::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: conic-gradient(transparent, rgba(0, 255, 255, 0.1), transparent);
    animation: rotate 10s linear infinite;
    z-index: -1;
}

.cta-title {
    font-family: var(--font-primary);
    font-size: 2.5rem;
    font-weight: 700;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1rem;
}

.cta-description {
    color: var(--text-secondary);
    font-size: 1.2rem;
    line-height: 1.6;
    margin-bottom: 2rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-actions {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
}

@media (max-width: 768px) {
    .service-card {
        padding: 2rem;
    }
    
    .service-icon {
        width: 60px;
        height: 60px;
        font-size: 2rem;
    }
    
    .process-step {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
    }
    
    .cta-title {
        font-size: 2rem;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
}
</style>
@endsection