<!DOCTYPE html>
<html>
<body>

<h1>American International University-Bangladesh</h1>

<?php

echo "Name: Tahabi Hossain <br>";
echo "ID: 22-47610-2 <br><br>";


$firstFour = "2247";

echo "First 4 digits of ID: $firstFour <br><br>";

$sum = 0;
for ($i = 0; $i < strlen($firstFour); $i++) {
    $sum += $firstFour[$i];
}

echo "Sum of first 4 digits = $sum <br><br>";


echo "Even/Odd check of each digit:<br>";

for ($i = 0; $i < strlen($firstFour); $i++) {
    $digit = $firstFour[$i];

    if ($digit % 2 == 0) {
        echo "$digit is EVEN <br>";
    } else {
        echo "$digit is ODD <br>";
    }
}

?>

</body>
</html>
