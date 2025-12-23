<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { text-align: center; padding: 50px; font-family: sans-serif; }
        .card { border: 1px solid #ccc; padding: 20px; display: inline-block; border-radius: 10px; }
        .btn-logout { background: red; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>You have successfully logged into the Car Rental System.</p>
        <br><br>
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>
</body>
</html>