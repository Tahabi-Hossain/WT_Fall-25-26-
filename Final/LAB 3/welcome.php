<?php
session_start();


if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Welcome to my website, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Login sucessfull</p>
    <br>
    <a href="logout.php"><button>Logout</button></a>
</body>
</html>