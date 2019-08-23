
<h1>Jednostavan kalkulator sa odabirom operacije</h1>

<p>
    U ovom primjeru se koriste GET varijable za prosljedjivanje parametara / podataka na server te se tamo obradjuju i server vraca rezultat. Takodje se salje i operacija kojom zelimo da tretiramo brojeve.
</p>

<form action="kalkulator2.php" method="GET">
     Num1: <input type="number" name="num1" value="<?= $_GET['num1'] ?>">
     Num2: <input type="number" name="num2" value="<?= $_GET['num2'] ?>">
     <input type="submit" value="+" name="oper">
     <input type="submit" value="-" name="oper">
     <input type="submit" value="%" name="oper">
     <input type="submit" value="*" name="oper">
</form>

<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $oper = $_GET['oper'];
    echo 'Rezultat: ' . number_format(calculate($num1, $num2, $oper), 2);


    function calculate($num1, $num2, $oper) {
        switch ($oper) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '%':
            return $num1 / $num2;
        case '*':
            return $num1 * $num2;
        default:
            return 'ERROR';
        }
    }
?>
