<html>
    <head>
        <title>Moj prvi php program</title>
    </head>
    <body>
<?php
echo "Hellooooo";
?>

<br>
<h1>Variable</h1>

<?php

$balance = 0;

$balance++;
++$balance;

echo "<br>";


echo $balance = $balance++ + 1;
echo $balance = ++$balance + 1;

$acc1 = 15;
$acc2 = 20;

$balance += $acc1;
$balance -= $acc2 + "a5";   // warning

echo $balance;
$balance--;


echo "<br> vjezba 2 <br>";


$a = "2";
$b = $a . 2;


$a = "mirko" . "slavko";

$c = 'mirko' . "mirko $a";

echo $b;


echo "$a \"$b\"";
echo '$a \"$b\"';

echo "'mirko'";

echo 'Bezveze recenica sa apos \'';


echo "<br> vjezba 3 <br>";

$cost = 14;
$balance = 0;

if ($balance > 0) {
    echo "Balance is positive";
} else if ($balance == 0) {
    echo "Balance is zero!";
} else {
    echo "Balance is negative";
}

if ($balance > $cost) {
    echo "Thank you for shoping in our little shop!";
}

?>
    </body>
</html>
