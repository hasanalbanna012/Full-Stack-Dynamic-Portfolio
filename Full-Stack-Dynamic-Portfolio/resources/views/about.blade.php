@extends('layouts.app')

@section('title', 'About')

@section('content')
<!-- About Hero Section -->
<section class="cyber-section">
    <div class="cyber-hero">
        <div class="hero-content">
            <div class="hero-subtitle" data-aos="fade-up">SYSTEM_PROFILE</div>
            <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">ABOUT_ME.EXE</h1>
            <p class="hero-description" data-aos="fade-up" data-aos-delay="400">
                I am a passionate <span class="text-gradient">Android App Developer</span> with over 3 years of experience 
                in crafting innovative mobile solutions. My mission is to transform ideas into powerful digital experiences 
                that push the boundaries of what's possible.
            </p>
        </div>
        <div class="hero-visual" data-aos="zoom-in" data-aos-delay="600">
            <div class="about-visual">
                <div class="code-window">
                    <div class="window-header">
                        <div class="window-controls">
                            <span class="control close"></span>
                            <span class="control minimize"></span>
                            <span class="control maximize"></span>
                        </div>
                        <div class="window-title">developer_profile.kt</div>
                    </div>
                    <div class="code-content">
                        <div class="code-line">
                            <span class="line-number">01</span>
                            <span class="code-text"><span class="keyword">class</span> <span class="class-name">Developer</span> {</span>
                        </div>
                        <div class="code-line">
                            <span class="line-number">02</span>
                            <span class="code-text">  <span class="keyword">val</span> <span class="variable">name</span> = <span class="string">"Hasan Al Banna"</span></span>
                        </div>
                        <div class="code-line">
                            <span class="line-number">03</span>
                            <span class="code-text">  <span class="keyword">val</span> <span class="variable">role</span> = <span class="string">"Android Developer"</span></span>
                        </div>
                        <div class="code-line">
                            <span class="line-number">04</span>
                            <span class="code-text">  <span class="keyword">val</span> <span class="variable">experience</span> = <span class="string">"3+ years"</span></span>
                        </div>
                        <div class="code-line">
                            <span class="line-number">05</span>
                            <span class="code-text">  <span class="keyword">val</span> <span class="variable">passion</span> = <span class="string">"Innovation"</span></span>
                        </div>
                        <div class="code-line">
                            <span class="line-number">06</span>
                            <span class="code-text">}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Matrix -->
<section class="cyber-section">
    <h2 class="section-title" data-aos="fade-up">SKILL_MATRIX</h2>
    <div class="skills-container">
        <div class="skill-category" data-aos="fade-up" data-aos-delay="200">
            <h3 class="skill-category-title">Programming Languages</h3>
            <div class="skills-grid">
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fab fa-java"></i>
                    </div>
                    <div class="skill-info">
                        <div class="skill-name">Java</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="90"></div>
                        </div>
                        <div class="skill-percentage">90%</div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="skill-info">
                        <div class="skill-name">Kotlin</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="85"></div>
                        </div>
                        <div class="skill-percentage">85%</div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fab fa-js"></i>
                    </div>
                    <div class="skill-info">
                        <div class="skill-name">JavaScript</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="75"></div>
                        </div>
                        <div class="skill-percentage">75%</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="skill-category" data-aos="fade-up" data-aos-delay="400">
            <h3 class="skill-category-title">Frameworks & Tools</h3>
            <div class="skills-grid">
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fab fa-android"></i>
                    </div>
                    <div class="skill-info">
                        <div class="skill-name">Android SDK</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="95"></div>
                        </div>
                        <div class="skill-percentage">95%</div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <div class="skill-info">
                        <div class="skill-name">Firebase</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="80"></div>
                        </div>
                        <div class="skill-percentage">80%</div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-icon">
                        <i class="fab fa-git-alt"></i>
                    </div>
                    <div class="skill-info">
                        <div class="skill-name">Git</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="88"></div>
                        </div>
                        <div class="skill-percentage">88%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Timeline -->
<section class="cyber-section">
    <h2 class="section-title" data-aos="fade-up">EXPERIENCE_LOG</h2>
    <div class="timeline">
        <div class="timeline-item" data-aos="fade-right" data-aos-delay="200">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <div class="timeline-year">2021 - Present</div>
                <h3 class="timeline-title">Senior Android Developer</h3>
                <div class="timeline-company">TechCorp Solutions</div>
                <p class="timeline-description">
                    Leading mobile development projects, implementing cutting-edge features, 
                    and mentoring junior developers in modern Android development practices.
                </p>
            </div>
        </div>
        <div class="timeline-item" data-aos="fade-left" data-aos-delay="400">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <div class="timeline-year">2020 - 2021</div>
                <h3 class="timeline-title">Android Developer</h3>
                <div class="timeline-company">Digital Innovations Ltd</div>
                <p class="timeline-description">
                    Developed and maintained multiple Android applications, improved app performance 
                    by 40%, and implemented new features based on user feedback.
                </p>
            </div>
        </div>
        <div class="timeline-item" data-aos="fade-right" data-aos-delay="600">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <div class="timeline-year">2019 - 2020</div>
                <h3 class="timeline-title">Junior Mobile Developer</h3>
                <div class="timeline-company">StartUp Hub</div>
                <p class="timeline-description">
                    Started my journey in mobile development, worked on various projects, 
                    and gained expertise in Android development fundamentals.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
/* About Visual Styles */
.about-visual {
    max-width: 400px;
    margin: 0 auto;
}

.code-window {
    background: rgba(15, 15, 25, 0.95);
    border: 1px solid var(--primary-cyan);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 255, 255, 0.2);
}

.window-header {
    background: linear-gradient(135deg, rgba(0, 255, 255, 0.1), rgba(0, 102, 255, 0.1));
    padding: 0.8rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid rgba(0, 255, 255, 0.3);
}

.window-controls {
    display: flex;
    gap: 0.5rem;
}

.control {
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

.control.close { background: #ff5f56; }
.control.minimize { background: #ffbd2e; }
.control.maximize { background: #27ca3f; }

.window-title {
    font-family: var(--font-primary);
    color: var(--primary-cyan);
    font-size: 0.9rem;
}

.code-content {
    padding: 1rem;
    font-family: 'Courier New', monospace;
}

.code-line {
    display: flex;
    margin-bottom: 0.5rem;
    animation: typeText 0.5s ease-in-out;
}

.line-number {
    color: rgba(0, 255, 255, 0.5);
    margin-right: 1rem;
    width: 20px;
    text-align: right;
}

.keyword { color: #ff6b6b; }
.class-name { color: #4ecdc4; }
.variable { color: #45b7d1; }
.string { color: #96ceb4; }

/* Skills Styles */
.skills-container {
    display: grid;
    gap: 3rem;
}

.skill-category {
    background: var(--card-bg);
    border: 1px solid rgba(0, 255, 255, 0.2);
    border-radius: 15px;
    padding: 2rem;
}

.skill-category-title {
    font-family: var(--font-primary);
    color: var(--primary-cyan);
    font-size: 1.5rem;
    margin-bottom: 2rem;
    text-align: center;
}

.skills-grid {
    display: grid;
    gap: 1.5rem;
}

.skill-item {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.skill-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 255, 255, 0.1);
    border: 1px solid var(--primary-cyan);
    border-radius: 10px;
    font-size: 1.5rem;
    color: var(--primary-cyan);
}

.skill-info {
    flex: 1;
}

.skill-name {
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: var(--text-primary);
}

.skill-bar {
    width: 100%;
    height: 8px;
    background: rgba(0, 255, 255, 0.1);
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 0.5rem;
}

.skill-progress {
    height: 100%;
    background: var(--gradient-primary);
    border-radius: 4px;
    width: 0%;
    transition: width 2s ease-in-out;
}

.skill-percentage {
    font-size: 0.9rem;
    color: var(--primary-cyan);
    font-weight: 600;
}

/* Timeline Styles */
.timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--gradient-primary);
    transform: translateX(-50%);
}

.timeline-item {
    position: relative;
    margin-bottom: 3rem;
    display: flex;
    align-items: center;
}

.timeline-item:nth-child(odd) .timeline-content {
    margin-right: auto;
    margin-left: 0;
    max-width: calc(50% - 2rem);
}

.timeline-item:nth-child(even) .timeline-content {
    margin-left: auto;
    margin-right: 0;
    max-width: calc(50% - 2rem);
}

.timeline-marker {
    position: absolute;
    left: 50%;
    width: 20px;
    height: 20px;
    background: var(--primary-cyan);
    border: 4px solid var(--dark-bg);
    border-radius: 50%;
    transform: translateX(-50%);
    box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
    z-index: 2;
}

.timeline-content {
    background: var(--card-bg);
    border: 1px solid rgba(0, 255, 255, 0.2);
    border-radius: 15px;
    padding: 2rem;
    position: relative;
}

.timeline-year {
    color: var(--primary-cyan);
    font-family: var(--font-primary);
    font-weight: 600;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}

.timeline-title {
    color: var(--text-primary);
    font-size: 1.3rem;
    margin-bottom: 0.5rem;
}

.timeline-company {
    color: var(--neon-green);
    font-weight: 600;
    margin-bottom: 1rem;
}

.timeline-description {
    color: var(--text-secondary);
    line-height: 1.6;
}

@media (max-width: 768px) {
    .timeline::before {
        left: 20px;
    }
    
    .timeline-item:nth-child(odd) .timeline-content,
    .timeline-item:nth-child(even) .timeline-content {
        margin-left: 50px;
        margin-right: 0;
        max-width: calc(100% - 50px);
    }
    
    .timeline-marker {
        left: 20px;
    }
    
    .skills-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Animate skill bars when they come into view
document.addEventListener('DOMContentLoaded', function() {
    const skillBars = document.querySelectorAll('.skill-progress');
    
    const observerOptions = {
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const width = entry.target.getAttribute('data-width');
                entry.target.style.width = width + '%';
            }
        });
    }, observerOptions);
    
    skillBars.forEach(bar => {
        observer.observe(bar);
    });
});
</script>
@endsection

