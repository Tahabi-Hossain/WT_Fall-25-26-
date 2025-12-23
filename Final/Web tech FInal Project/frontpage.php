<?php
session_start();

// Jodi age theke login thake, tobe welcome page-e niye jabe
if(isset($_SESSION['username'])){
    header("Location: welcome.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Ekhonkar moto basic static check
    if ($user == "tahabi" && $pass == "00000") {
        $_SESSION['username'] = $user; 
        header("Location: welcome.php");
    } else {
        $error = "Incorrect username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAR RENTAL MANAGEMENT</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        
        /* Navigation Bar */
        nav {
            background-color: #333;
            color: white;
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a { color: white; text-decoration: none; margin-left: 20px; }
        
        /* Hero Section */
        .hero {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1494976388531-d1058494cdd8?auto=format&fit=crop&w=1350&q=80');
            height: 500px;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .hero h1 { font-size: 50px; margin-bottom: 10px; }
        
        /* Login Form Section */
        .login-container {
            padding: 50px;
            text-align: center;
            background: #f4f4f4;
        }
        .login-form {
            display: inline-block;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="password"] {
            width: 250px;
            padding: 10px;
            margin: 10px 0;
            display: block;
        }
        input[type="submit"] {
            background: #ff9800;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo"><h2>Car Rental Services</h2></div>
        <div>
            <a href="index.php">Home</a>
            <a href="#">About Us</a>
            <a href="#login-section">Login</a>
        </div>
    </nav>

    <div class="hero">
        <h1>Rent Your Dream Car Easily</h1>
        <p>Simple, Fast and Affordable Car Rental System</p>
    </div>

    <div id="login-section" class="login-container">
        <div class="login-form">
            <h3>Login to Your Account</h3>
            <form method="post" action="">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>
            <p style="color:red;"><?php echo $error; ?></p>
        </div>
    </div>

</body>
</html>