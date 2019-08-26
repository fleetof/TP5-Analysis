<?php

$file = '../config/test.ini';
$res = parse_ini_file($file);
var_dump($res);