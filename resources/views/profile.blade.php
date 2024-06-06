<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        .container {
            padding: 40px 20px;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-section {
            text-align: center;
            margin-bottom: 40px;
        }
        .profile-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .profile-section p {
            font-size: 1.2rem;
            color: #666;
        }
        .change-password-form, .change-photo-form {
            text-align: center;
            margin-bottom: 20px;
        }
        .change-password-form h2, .change-photo-form h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .change-password-form input, .change-photo-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .change-password-form button, .change-photo-form button {
            padding: 10px 20px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .change-password-form button:hover, .change-photo-form button:hover {
            background-color: #218838;
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
            <form id="logout-form" action="{{ route('logout') }}" method="" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </nav>
    <div class="container">
        <div class="profile-section">
            <h2>Profile</h2>
            <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        </div>
        <div class="change-photo-form">
            <h2>Change Profile Photo</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="profile_photo" required>
                <button type="submit">Change Photo</button>
            </form>
        </div>
        <div class="change-password-form">
            <h2>Change Password</h2>
            <form action="" method="POST">
                @csrf
                <input type="password" name="current_password" placeholder="Current Password" required>
                <input type="password" name="new_password" placeholder="New Password" required>
                <input type="password" name="new_password_confirmation" placeholder="Confirm New Password" required>
                <button type="submit">Change Password</button>
            </form>
        </div>
    </div>
</body>
</html>
