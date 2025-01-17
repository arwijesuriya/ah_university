<?php
    include('config.php'); // Include the database connection

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect input values
        $fname = $_POST['fname'];
        $nic = $_POST['nic'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $mobile_number = $_POST['mobile_number'];
        $course = $_POST['course'];

        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the data into the database
        $sql = "INSERT INTO students (fname, nic, password, address, mobile_number, course) 
                VALUES ('$fname', '$nic', '$hashed_password', '$address', '$mobile_number', '$course')";

        if ($conn->query($sql) === TRUE) {
            header('Location: login.php'); // Redirect to login page after successful registration
            exit();
        } 
        else {
            $error_message = "Error: " . $sql . "<br>" . $conn->error; // Show error message if there's an issue
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        
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
            .register-container {
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
            input, textarea, button {
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
            .login-link {
                text-align: center;
                margin-top: 15px;
            }
            .login-link a {
                color: #4CAF50;
                text-decoration: none;
                font-weight: bold;
            }
            .login-link a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>
        <div class="register-container">
            
            <h2>Student Registration</h2>
            
            <form method="POST" action="register.php">
                <input type="text" name="fname" placeholder="Full Name" required>
                <input type="text" name="nic" placeholder="NIC" required>
                <input type="password" name="password" placeholder="Password" required>
                <textarea name="address" placeholder="Address" required></textarea>
                <input type="text" name="mobile_number" placeholder="Mobile Number" required>
                <input type="text" name="course" placeholder="Course" required>
                <button type="submit">Register</button>
            </form>
            
            <div class="login-link">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
    </body>
</html>