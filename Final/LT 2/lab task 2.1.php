<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$email = "";
$emailerror="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email address is required";
    } else {
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}
?>

<h2><center>Lab scenario 2</center></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  E-mail: <input type="text" name="email">
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if (!empty($email) && empty($emailErr))
{
echo "<h2>Your Input:</h2>";
echo $email;
}
?>

</body>
</html>