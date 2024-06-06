<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .navbar {
            background-color: #007bff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .navbar .nav-links {
            display: flex;
        }
        .content {
            padding: 40px 20px;
            text-align: center;
        }
        .content h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="/dashboard">Dashboard</a>
        </div>
        <div class="nav-links">
            <a href="{{ route('profile') }}">Profile</a>
            <form id="logout-form" action="" method="" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </nav>
    <div class="content">
        <h1>Welcome to Your Dashboard</h1>
        <p>Here you can manage your tasks, view your progress, and much more.</p>
        <!-- Add more interesting content here -->
    </div>
</body>
</html>
