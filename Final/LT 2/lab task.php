<DOCTYPE html>
<html>
<head><title>PHP Code</title>
<style>
</head>
 
<body>
<h1><center>Lab scenario 1</center> </h1>  

<?php
$name="";
$nameerror="";
if (empty ($_POST["name"]))
{
    $nameerror="Name is required";

}
else
{
    $name= test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
{
        $nameerror="only letter and white space";
}
}
function test_input($data)
{
$data = trim($data);
return $data;
}
 
?>

<form method="post" action="">

Name: <input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerror; ?><br><br>

<input type="submit" name="submit" value="Submit">

<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
 
}

 
?>




</form>
</body>
</html>
