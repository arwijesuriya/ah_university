<?php
    include('config.php'); // Include the database connection

    session_start();

    // Ensure the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php'); // Redirect to login page if not logged in
        exit();
    }

    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM students WHERE id = '$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } 
    else {
        echo "No user found!";
    }

    // Function to delete user account
    if (isset($_POST['delete_account'])) {
        $delete_sql = "DELETE FROM students WHERE id = '$user_id'";

        if ($conn->query($delete_sql) === TRUE) {
            session_unset(); // Destroy the session
            session_destroy();
            header('Location: login.php'); // Redirect to login page after deletion
            exit();
        } 
        else {
            $error_message = "Error deleting account: " . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Profile</title>
        
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            header {
                background-color: #4CAF50;
                color: white;
                padding: 20px;
                text-align: center;
            }
            nav {
                display: flex;
                justify-content: center;
                background-color: #333;
                padding: 10px;
            }
            nav a {
                color: white;
                margin: 0 15px;
                text-decoration: none;
                font-weight: bold;
            }
            nav a:hover {
                text-decoration: underline;
            }
            .content {
                max-width: 800px;
                margin: 50px auto;
                padding: 20px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                text-align: center;
            }
            p {
                font-size: 16px;
                line-height: 1.6;
                margin-bottom: 15px;
            }
            .delete-btn {
                display: block;
                width: 100%;
                padding: 12px;
                margin-top: 20px;
                background-color: #FF5733;
                color: white;
                font-size: 18px;
                text-align: center;
                border: none;
                border-radius: 8px;
                cursor: pointer;
            }
            .delete-btn:hover {
                background-color: #e04e2a;
            }
            .error-message {
                color: red;
                font-size: 16px;
            }
        </style>
    </head>

    <body>
        <header>
            <h1>Student Profile</h1>
        </header>

        <nav>
            <a href="home.php">Home</a>
            <a href="student.php">Profile</a>
            <a href="logout.php">Logout</a>
        </nav>

        <div class="content">
            <h2>Welcome, <?php echo htmlspecialchars($user['fname']); ?>!</h2>
            <p><strong>NIC:</strong> <?php echo htmlspecialchars($user['nic']); ?></p>
            <p><strong>Course:</strong> <?php echo htmlspecialchars($user['course']); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($user['address']); ?></p>
            <p><strong>Mobile Number:</strong> <?php echo htmlspecialchars($user['mobile_number']); ?></p>

            <form method="POST" action="student.php">
                <button type="submit" name="delete_account" class="delete-btn">Delete My Account</button>
            </form>

            <!-- error message -->
            <?php
                if (isset($error_message)) {
                    echo "<p class='error-message'>$error_message</p>"; // Show error message if deletion fails
                }
            ?>
        </div>
    </body>
</html>
