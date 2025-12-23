<?php
session_start();


if(isset($_SESSION['username'])){
    header("Location: welcome.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    
    if ($user == "tahabi" && $pass == "00000") {
        $_SESSION['username'] = $user; 
        header("Location: welcome.php");
    } else {
        $error = "incorrect user name or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Login Form</h2>
    <form method="post" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p style="color:red;"><?php echo $error; ?></p>
</body>
</html>