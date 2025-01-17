<?php
    include('config.php'); // Include the database connection

    session_start(); // Start the session for storing logged-in user details

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect input values
        $nic = $_POST['nic'];
        $password = $_POST['password'];

        // Hash the password for comparison (ensure the passwords are hashed during registration)
        $sql = "SELECT * FROM students WHERE nic = '$nic'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User exists, fetch data
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Correct password
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['fname'] = $user['fname'];
                header('Location: student.php'); // Redirect to student page
                exit();
            } 
            else {
                $error_message = "Incorrect password!";
            }
        } 
        else {
            $error_message = "No user found with this NIC!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: url('background.jpg') no-repeat center center/cover;
                overflow: hidden;
            }
            body::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(5px);
                z-index: 0;
            }
            .login-container {
                position: relative;
                z-index: 1;
                background: rgba(255, 255, 255, 0.6);
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 400px;
                backdrop-filter: blur(10px);
            }
            h2 {
                text-align: center;
                color: #333;
            }
            form {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            input, button {
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            button {
                background-color: #4CAF50;
                color: #fff;
                border: none;
                cursor: pointer;
            }
            button:hover {
                background-color: #45a049;
            }
            .register-link {
                text-align: center;
                margin-top: 15px;
            }
            .register-link a {
                color: #4CAF50;
                text-decoration: none;
                font-weight: bold;
            }
            .register-link a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>
        <div class="login-container">
            <h2>Login</h2>
            <form method="POST" action="login.php">
                <input type="text" name="nic" placeholder="NIC" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            
            <!-- error message -->
            <?php
                if (isset($error_message)) {
                    echo "<p style='color: red;'>$error_message</p>"; // Show error message if login fails
                }
            ?>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register here</a></p>
            </div>
        </div>
    </body>
</html>