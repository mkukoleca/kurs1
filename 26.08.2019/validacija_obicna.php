<?php

include_once 'variables.php';

foreach($serviceParams as $param => $type) {
    echo ("<br>Provjeravamo <strong>{$param}</strong> parametar sa tipom <strong>{$type}</strong>");

    // num1 ima tip: number

    if (!isset($_POST[$param])) {
        die("<br>Validacija neuspjesna. Nedostaje parametar {$param}");
    }

    if (!validateParameterType($_POST[$param], $type)) {
        die("<br>Validacija neuspjesna. Parametar {$param} nije tipa {$type}");
    }

    echo "... OK";
}

echo "<br><br>Validacija uspjesna!";

// Ovu provjeru cemo zamjenuti funkcijom koju cemo pozivati nekoliko puta
// if (!isset($_POST['num1']) || !validateParameter($_POST['num1'], 'number')) {
//     die('parametar num1 je nevalidan.');
// }

function validateParameterType($value, $type) {
    switch($type) {
        case 'string':
            return is_string($value);
        case 'number':
            return is_numeric($value);
        case 'bool':
            return is_bool($value);
        default:
            return false;
    }
}