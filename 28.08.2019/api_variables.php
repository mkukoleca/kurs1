<?php

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'), true);

$dbFile = 'articles.json';

$articleParams = [
    'id' => 'number',
    'name' => 'string',
    'body' => 'string',
    'link' => 'string'
];