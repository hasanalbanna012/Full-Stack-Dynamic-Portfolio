{{-- filepath: resources/views/admin/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<section class="cyber-section">
    <div class="cyber-card" style="max-width:900px;margin:2rem auto;">
        <div class="text-center mb-4">
            <div class="hero-subtitle">ADMIN_PANEL</div>
            <h1 class="hero-title">DASHBOARD.EXE</h1>
            <p class="hero-description">Welcome, <span class="text-gradient">{{ Auth::user()->name }}</span>! Manage your portfolio data below.</p>
        </div>
        <div class="cyber-grid cyber-grid-2 mb-4">
            <a href="{{ route('projects.index') }}" class="cyber-btn cyber-btn-primary"><i class="fas fa-rocket"></i> Manage Projects</a>
            <a href="{{ route('personal-details.index') }}" class="cyber-btn cyber-btn-secondary"><i class="fas fa-user"></i> Personal Details</a>
            <a href="{{ route('skills.index') }}" class="cyber-btn cyber-btn-secondary"><i class="fas fa-microchip"></i> Skills</a>
            <a href="{{ route('educations.index') }}" class="cyber-btn cyber-btn-secondary"><i class="fas fa-graduation-cap"></i> Educations</a>
            <a href="{{ route('achievements.index') }}" class="cyber-btn cyber-btn-secondary"><i class="fas fa-trophy"></i> Achievements</a>
            <a href="{{ route('experiences.index') }}" class="cyber-btn cyber-btn-secondary"><i class="fas fa-briefcase"></i> Experiences</a>
            <a href="{{ route('infos.index') }}" class="cyber-btn cyber-btn-secondary"><i class="fas fa-info-circle"></i> Infos</a>
        </div>
        <form action="{{ route('auth.logout') }}" method="POST" class="text-center mb-4">
            @csrf
            <button type="submit" class="cyber-btn cyber-btn-secondary" style="width:100%;max-width:300px;"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
        <hr class="mb-4">
        <!-- Editable Info Section -->
        <div class="mb-4">
            <h2 class="section-title">EDIT_PROFILE_INFO</h2>
            <form action="{{ route('personal-details.update', Auth::user()->id) }}" method="POST" class="cyber-card" style="max-width:600px;margin:0 auto;">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                </div>
                <div class="mb-2">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea id="bio" name="bio" class="form-control" rows="3">{{ Auth::user()->bio ?? '' }}</textarea>
                </div>
                <button type="submit" class="cyber-btn cyber-btn-primary mt-2"><i class="fas fa-save"></i> Save Changes</button>
            </form>
        </div>
    </div>
</section>
@endsection