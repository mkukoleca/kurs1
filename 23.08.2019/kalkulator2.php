
<h1>Jednostavan kalkulator sa odabirom operacije</h1>

<p>
    U ovom primjeru se koriste POST varijable za prosljedjivanje parametara / podataka na server te se tamo obradjuju i server vraca rezultat. Takodje se salje i operacija kojom zelimo da tretiramo brojeve.
</p>

<form action="kalkulator2.php" method="POST">
     Num1: <input type="number" name="num1" value="<?= $_POST['num1'] ?>">
     Num2: <input type="number" name="num2" value="<?= $_POST['num2'] ?>">
     <input type="submit" value="+" name="oper">
     <input type="submit" value="-" name="oper">
     <input type="submit" value="%" name="oper">
     <input type="submit" value="*" name="oper">
</form>

<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['oper'];
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
                return 0;
        }
    }
?>
<p>
    Funkcija za obradu brojeva:
</p>
<pre>
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
            return 0;
    }
}
</pre>