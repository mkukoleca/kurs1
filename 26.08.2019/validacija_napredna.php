<?php

include_once 'variables.php';

foreach($serviceParamsAdvanced as $param => $details) {
    echo ("<br>Provjeravamo <strong>{$param}</strong> parametar sa tipom <strong>{$details['type']}</strong>");

    if (!existsParameter($param)) {
        if ($details['required']) {
            die("<br>Validacija neuspjesna. Nedostaje parametar <strong>{$param}</strong>");
        }

        echo "... OK";
        continue;
    }

    $value = getParameterValue($param);

    if (!validateParameterType($value, $details['type'])) {
        die("<br>Validacija neuspjesna. Parametar <strong>{$param}</strong> nije tipa <strong>{$details['type']}</strong>");
    }

    if (validateParameterValue($value, $details) !== true) {
        $valueCheckDescription = validateParameterValue($value, $details);
        die("<br>Validacija neuspjesna. Parametar <strong>{$param}</strong> {$valueCheckDescription}");
    }

    echo "... OK";
}

echo "<br><br>Validacija uspjesna!";

// Ovu provjeru cemo zamjenuti funkcijom koju cemo pozivati nekoliko puta
// if (!isset($_POST['num1']) || !validateParameter($_POST['num1'], 'number')) {
//     die('parametar num1 je nevalidan.');
// }


function existsParameter($param) {
    return isset($_POST[$param]);
}

function getParameterValue($param) {
    if (!existsParameter($param)) {
        die('Parametar ne postoji!');
    }

    return $_POST[$param];
}

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

function validateParameterValue($value, $details) {
    if (isset($details['minValue']) && $value < $details['minValue'])
        return "je manji od minimalno dozvoljene vrijednosti: '{$details['minValue']}'";

    if (isset($details['maxValue']) && $value > $details['maxValue'])
        return "je veci od maksimalno dozvoljene vrijednosti: '{$details['maxValue']}'";

    if (isset($details['allowed']) && (array_search($value, $details['allowed']) === false))
        return 'se ne sadrzi u dozvoljenim vrijednostima: "' . join('", "', $details['allowed']) . '"';

    return true;
}