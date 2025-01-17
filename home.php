<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A.H University</title>
        
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background: #f9f9f9;
                color: #333;
            }

            header {
                background: #4CAF50;
                color: white;
                padding: 10px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .navbar {
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .university-name {
                font-size: 24px;
                color: white;
                margin: 0;
            }

            .nav-links {
                display: flex;
                justify-content: center;
                gap: 20px;
                flex: 1;
            }

            .nav-links a {
                color: white;
                text-decoration: none;
                font-weight: bold;
                padding: 10px 20px;
            }

            .nav-links a:hover {
                text-decoration: underline;
            }

            .auth-links {
                display: flex;
                gap: 15px;
            }

            .auth-links a {
                color: white;
                text-decoration: none;
                font-weight: bold;
                padding: 10px 20px;
                border-radius: 5px;
                background-color: #333;
            }

            .auth-links a:hover {
                background-color: #555;
            }

            .hero {
                background: url('university.jpg') no-repeat center center/cover;
                height: 60vh;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                text-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
            }

            .hero h2 {
                font-size: 48px;
                margin: 0;
            }

            .content {
                padding: 20px;
                text-align: center;
            }

            .content h3 {
                font-size: 28px;
                margin-bottom: 10px;
            }

            .content p {
                font-size: 16px;
                line-height: 1.6;
                color: #666;
            }

            footer {
                background: #333;
                color: white;
                padding: 10px;
                text-align: center;
            }

            footer a {
                color: #4CAF50;
                text-decoration: none;
            }

            footer a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="navbar">
                <h1 class="university-name">Angel Heights University</h1>
                <nav class="nav-links">
                    <a href="about_us.php">About Us</a>
                    <a href="contact_us.php">Contact Us</a>
                </nav>

                <div class="auth-links">
                    <a href="student.php">Student Profile</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </header>

        <div class="hero">
            <h2>Welcome to Our University</h2>
        </div>

        <div class="content">
            <h3>Empowering the Future</h3>
            <p>
                At our university, we are dedicated to providing quality education, fostering innovation, and creating opportunities for all students. Join us to experience a journey of learning and growth.
            </p>
        </div>

        <footer>
            <p>&copy; 2024 Angel Heights University. All rights reserved.</p>
        </footer>
    </body>
</html>