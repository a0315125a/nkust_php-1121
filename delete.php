<?php
    require("dbinfo.php");//login SQL
    $id=$_GET["id"];//get data id
    $sql = "DELETE FROM news WHERE id='$id'";// sql to delete a record
    $conn->query($sql);
    $conn->close();
    header("Location: /nkust_php-1121");
?>

