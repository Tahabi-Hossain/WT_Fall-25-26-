<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>
 
<body>
<h1>This is our 1st php code </h1>    
 
 
<?php
 
$name= "";
$nameerror= "";
 
if (empty ($_POST["name"]))
{
$nameerror="Name is req"; // value empty
}
else{
$name= test_input($_POST["name"]); //clean out input
if (!preg_match("/^[a-zA-Z ]*$/",$name))  // only letter and middle space
{
    $nameerror ="Only letters and white space allowed";
}
 
}
 
function test_input($data)
{
$data = trim($data); // trim amr previous data remove kore dai
return $data;
}
 
?>
 
 
<form method="post" action="">
 
Name: <input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerror; ?>
 
Age: <input type="number" name="age" >
 
Email : <input type="text" name="email">
 
 
<input type="submit" name="submit" value="Submit">
</form>
 
 
<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
 
}
 
?>
 
 
 
 
</body>
</html>