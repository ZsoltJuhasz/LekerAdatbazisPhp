<?php

include_once('mariadb.php');

function lekerDolgozok(){
    $con = connectDb();

    $sql = 'select * from dolgozok';
    $res = mysqli_query($con,$sql);
    
    for($datar = array(); 
        $row = mysqli_fetch_assoc($res); 
        $datar[] = $row);
    
    //var_dump($datar);
    mysqli_close($con);
    return $datar;
}

