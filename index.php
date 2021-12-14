<?php

include_once('database.php');

$dolgozok = lekerDolgozok();

foreach($dolgozok as $dolgozo){
    echo $dolgozo[ 'nev' ] . "\n";
}

//print_r($dolgozok);  //tomb kiratasara kell a print_r() vagy a var_dump()