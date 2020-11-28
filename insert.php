<?php
    require("dbinfo.php");//login SQL
    $title=$_POST["name"];//get form data 
    if(strlen($title)>0){
    $sql = "INSERT INTO news (title) Value ('$title')";// sql to insert data
    $conn->query($sql);
    }
    $conn->close();
    header("Location: /nkust_php-1121");
?>