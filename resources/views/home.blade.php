<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        .cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 250px;
            text-align: center;
        }
        .card img {
            max-width: 100%;
            border-radius: 8px;
        }
        .card h3 {
            margin-top: 15px;
            font-size: 1.5rem;
        }
        .card p {
            color: #666;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="/">MyApp</a>
        </div>
        <div class="nav-links">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </nav>
    <div class="content">
        <h1>Welcome to MyApp</h1>
        <p>Your one-stop solution for managing your tasks and projects efficiently.</p>
        <div class="cards">
            <div class="card">
                <img src="https://via.placeholder.com/250x150" alt="Feature Image">
                <h3>Feature 1</h3>
                <p>Discover amazing features that make your life easier.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/250x150" alt="Feature Image">
                <h3>Feature 2</h3>
                <p>Organize your tasks and projects with ease.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/250x150" alt="Feature Image">
                <h3>Feature 3</h3>
                <p>Collaborate with your team efficiently and effectively.</p>
            </div>
        </div>
    </div>
</body>
</html>
