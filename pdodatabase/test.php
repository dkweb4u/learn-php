<?php 


$lines = file(dirname(__DIR__)."/.env",FILE_IGNORE_NEW_LINES);

print_r($lines );

foreach ($lines as $line) {

 list($name,$value)= explode(":",$line);

 $_ENV[$name]= $value;

}

print_r( $_ENV);
