<?php
    $servername='localhost';
    $dbname='frs';
    $username='root';
    $password='';

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    $sql = "select user.uname,user.email,images.image from user inner join images on  user.uid=images.uid order by user.uid";
    
?>