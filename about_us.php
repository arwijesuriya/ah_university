<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us - AHU</title>
        
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
                background: url('about-background.jpg') no-repeat center center/cover;
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
                    <a href="home.php">Home</a>
                    <a href="contact_us.php">Contact Us</a>
                </nav>

                <div class="auth-links">
                    <a href="student.php">Student Profile</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </header>

        <div class="hero">
            <h2>About Our University</h2>
        </div>

        <div class="content">
            <h3>Our Mission</h3>
            <p>
                At Angel Heights University, we strive to foster an environment where students can reach their full potential.
                Our faculty, staff, and students work together to promote creativity, critical thinking, and problem-solving
                skills that prepare them for success in an ever-changing world.
            </p>
            
            <h3>Our Vision</h3>
            <p>
                We aim to become a global leader in education, offering innovative programs and research that shape the future
                of society. We are committed to providing a supportive community that nurtures learning and personal growth.
            </p>
        </div>

        <footer>
            <p>&copy; 2024 Angel Heights University. All rights reserved.</p>
        </footer>
    </body>
</html>