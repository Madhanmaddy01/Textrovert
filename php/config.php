<?php
    $conn = mysqli_connect("localhost","root","root","chat");
    if($conn){
        echo "database connected";
    }else{
        echo "ERROR";
    }

?>