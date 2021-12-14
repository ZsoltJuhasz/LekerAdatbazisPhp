<?php

include_once('config.php');


function connectDb(){
    global $db;
    //echo 'működik';
    //echo $db['pass'];
    $con = mysqli_connect(
        $db['host'],
        $db['user'],
        $db['pass'],
        $db['name']
    );
    if(!$con){
        die('Hiba! A kapcsolódás sikertelen');
    }
    //echo 'működik';
    return $con;
}
//connectDb();