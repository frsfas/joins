<?php
    include("conn.php");
    $id=$_GET['id'];
    $result=mysqli_query($conn,"delete from user where uid=$uid");
    header("location:indexes.php");
?>