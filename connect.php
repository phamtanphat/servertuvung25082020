<?php
    // error_reporting(E_ERROR | E_PARSE);
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "databasetuvung";

    $con = new mysqli($hostname,$username,$password,$databasename);

    if($con->connect_errno){
        echo "Lỗi connect";
    }else{
        $con->set_charset("utf8");
    }

?>