<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>

<body>
<h1>This is our 1st php code </h1>

<?php

$name = "";
$age = "";
$email = "";

$nameerror = "";
$ageerror = "";
$emailerror = "";

// IF FORM SUBMITTED
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ---------------- NAME VALIDATION ----------------
    if (empty($_POST["name"])) {
        $nameerror = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerror = "Only letters and white space allowed";
        }
    }

    // ---------------- AGE VALIDATION ----------------
    if (empty($_POST["age"])) {
        $ageerror = "Age is required";
    } else {
        $age = test_input($_POST["age"]);
        if ($age < 1 || $age > 120) {
            $ageerror = "Enter a valid age";
        }
    }

    // ---------------- EMAIL VALIDATION ----------------
    if (empty($_POST["email"])) {
        $emailerror = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email format";
        }
    }
}

// CLEAN INPUT FUNCTION
function test_input($data)
{
    $data = trim($data);
    return $data;
}
?>

<form method="post" action="">
    
    Name: 
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red;"><?php echo $nameerror; ?></span>
    <br><br>

    Age: 
    <input type="number" name="age" value="<?php echo $age; ?>">
    <span style="color:red;"><?php echo $ageerror; ?></span>
    <br><br>

    Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;"><?php echo $emailerror; ?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
// ONLY DISPLAY IF NO ERRORS
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameerror) && empty($ageerror) && empty($emailerror)) {

    echo "<h3>Your Input: </h3>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Email: " . $email . "<br>";
}
?>

</body>
</html>
