<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area of Rectangle = $area<br>";
echo "Perimeter of Rectangle = $perimeter";
?>
<br> <br>

<?php
$amount = 1000;

$vat = 0.15 * $amount;
$total = $amount + $vat;
echo "VAT Amount = $vat<br>";
echo "Total VAT = $total";
?>

<br> <br>

<?php
$num = 12;

if($num % 2 == 0){
    echo "$num is Even";
} else {
    echo "$num is Odd";
}
?>

<br> <br>

<?php
$a = 10;
$b = 25;
$c = 18;

if($a >= $b && $a >= $c){
    echo "$a is the largest";
}
else if($b >= $a && $b >= $c){
    echo "$b is the largest";
}
else{
    echo "$c is the largest";
}
?>
<br> <br>

<?php
for($i = 10; $i <= 100; $i++){
    if($i % 2 != 0){
        echo "$i ";
    }
}
?>

<br> <br>

<?php
$arr = [10, 20, 30, 40, 50];
$search = 30;

$found = false;

foreach($arr as $item){
    if($item == $search){
        $found = true;
        break;
    }
}

if($found){
    echo "$search Found";
} else {
    echo "$search Not Found";
}
?>

