<?php
    //connect database
    $conn = new mysqli("localhost","root","12345678","usedcar-6239010002");
    if($conn->connect_errno){
        die("connection failed :".$conn->connect_error);
    }
?>