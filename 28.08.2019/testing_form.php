<?php

include_once 'api_variables.php';

?>

<html>
    <head>
        <title>Tester za servis</title>
    </head>
    <body>
        <form action="services.php/articles" method="GET">
            <h2>Dohvatanje svih artikala</h2>
            <table>
                <tr><td></td> <td><button type="submit">Submit</button></td></tr>
            </table>
        </form>
        <form action="services.php/articles/123" method="GET">
            <h2>Dohvatanje artikala 123</h2>
            <table>
                <tr><td></td> <td><button type="submit">Submit</button></td></tr>
            </table>
        </form> 
        <form action="services.php/articles" method="PUT">
            <h2>Kreiranje artikla</h2>
            <table>
                <tr><th>Naziv polja</th><th>Unesi vrijednost</th></tr>
                <tr><td>id</td> <td><input name="id" value="123"></td></tr>
                <tr><td>title</td> <td><input name="title"></td></tr>
                <tr><td>body</td> <td><input name="body"></td></tr>
                <tr><td>link</td> <td><input name="link"></td></tr>
                <tr><td></td> <td><button type="submit">Submit</button></td></tr>
            </table>
        </form>
        <form action="services.php/articles/123" method="POST">
            <h2>Update artikla</h2>
            <table>
                <tr><th>Naziv polja</th><th>Unesi vrijednost</th></tr>
                <tr><td>title</td> <td><input name="title"></td></tr>
                <tr><td>body</td> <td><input name="body"></td></tr>
                <tr><td>link</td> <td><input name="link"></td></tr>
                <tr><td></td> <td><button type="submit">Submit</button></td></tr>
            </table>
        </form>
        <form action="services.php/articles/123" method="DELETE">
            <h2>Brisanje artikla</h2>
            <table>
                <tr><td></td> <td><button type="submit">Submit</button></td></tr>
            </table>
        </form>
    </body>
</html>