<?php

include_once 'variables.php';

?>

<html>
    <head>
        <title>Tester za servis</title>
    </head>
    <body>
        <form action="validacija_obicna.php" method="POST">
            <h2>Obicna validacija</h2>
            <table>
                <tr><th>Naziv polja</th><th>Unesi vrijednost</th></tr>
                <tr><td>Num1:</td> <td><input name="num1"></td></tr>
                <tr><td>Num2:</td> <td><input name="num2"></td></tr>
                <tr><td>Num3:</td> <td><input name="num3"></td></tr>
                <tr><td>Oper:</td> <td><input name="oper"></td></tr>
                <tr><td></td> <td><button type="submit">Submit</button></td></tr>
            </table>
        </form>
        <form action="validacija_napredna.php" method="POST">
            <h2>Napredna validacija</h2>
            <table>
                <tr><th>Naziv polja</th><th>Unesi vrijednost</th></tr>
                <tr><td>Num1:</td> <td><input name="num1"></td></tr>
                <tr><td>Num2:</td> <td><input name="num2"></td></tr>
                <!-- <tr><td>Num3:</td> <td><input name="num3"></td></tr> -->
                <tr><td>Oper:</td> <td><input name="oper"></td></tr>
                <tr><td></td> <td><button type="submit">Submit</button></td></tr>
            </table>
        </form>
    </body>
</html>