<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

 $gender="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
   $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2><center>Gender Selection</center></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";

echo $gender;
?>

</body>
</html>