{{-- filepath: resources/views/admin/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        .dashboard-container {
            max-width: 700px;
            margin: 3rem auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(44, 62, 80, 0.15);
            padding: 2.5rem 2rem;
        }
        .dashboard-container h2 {
            color: #2980b9;
            margin-bottom: 1.5rem;
        }
        .dashboard-links {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .dashboard-link {
            flex: 1 1 200px;
            background: linear-gradient(90deg, #2980b9, #6dd5fa);
            color: #fff;
            text-align: center;
            padding: 1.2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.2s;
        }
        .dashboard-link:hover {
            background: linear-gradient(90deg, #2574a9, #48b1f3);
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Admin Dashboard</h2>
        <p>Welcome, {{ Auth::user()->name }}!</p>
        <div class="dashboard-links">
            <a href="{{ route('projects.index') }}" class="dashboard-link">Manage Projects</a>
            <a href="{{ route('personal-details.index') }}" class="dashboard-link">Personal Details</a>
            <a href="{{ route('skills.index') }}" class="dashboard-link">Skills</a>
            <a href="{{ route('educations.index') }}" class="dashboard-link">Educations</a>
            <a href="{{ route('achievements.index') }}" class="dashboard-link">Achievements</a>
            <a href="{{ route('experiences.index') }}" class="dashboard-link">Experiences</a>
            <a href="{{ route('infos.index') }}" class="dashboard-link">Infos</a>
        </div>
        <form action="{{ route('auth.logout') }}" method="POST" style="margin-top:2rem;">
            @csrf
            <button type="submit" class="login-btn" style="width:100%;">Logout</button>
        </form>
    </div>
</body>
</html>