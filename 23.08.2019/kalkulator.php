
<h1>Jednostavan kalkulator za sabiranje dva broja</h1>

<p>
    U ovom primjeru se koriste GET varijable za prosljedjivanje parametara / podataka na server te se tamo obradjuju i server vraca rezultat.
</p>

<form action="kalkulator.php" method="GET">
     Broj1: <input type="number" name="num1">
     Broj2: <input type="number" name="num2">
     <input type="submit">
</form>

<?php
     $num1 = $_GET['num1'];
     $num2 = $_GET['num2'];
     echo 'Zbir unesenih brojeva: ' . ($num1 + $num2);
?>

<p>
Zadatak: 