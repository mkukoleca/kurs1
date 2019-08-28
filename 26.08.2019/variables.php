<?php

// u ovom fajlu cemo navesti sve parametre za 

$serviceParams = [
//  param  => type
    'num1' => 'number',
    'num2' => 'number',
    'num3' => 'number',
    'oper' => 'string'
];

$serviceParamsAdvanced = [
    'num1' => ['required' => true,  'type' => 'number', 'minValue' => 0],
    'num2' => ['required' => false,  'type' => 'number', 'minValue' => 0],
    'num3' => ['required' => false, 'type' => 'number'],
    'oper' => ['required' => true,  'type' => 'string', 'allowed' => ['-', '+', '*', '%', '^2', '^3']]
];
