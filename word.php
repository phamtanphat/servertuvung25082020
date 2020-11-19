<?php

    require("connect.php");

    $query = "SELECT * FROM tuvung1";

    $data = mysqli_query($con , $query);

    if ($data){
        echo "Thanh cong";
    }else{
        echo mysqli_error($con);
    }

?>