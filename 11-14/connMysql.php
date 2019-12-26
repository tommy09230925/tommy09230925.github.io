<?php 
    $servername = "localhost";
    $username = "root";
    $password = "1qaz@wsx";
    $database = "class";

    //create connection
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(mysqli_connect_error()){
        print "fail to connect to mysql:" . mysqli_connect_error();
    }else
        print "successful connection<br>";
    //設定連線編碼. mysqli_query( $conn, "SET NAMES 'utf8'" )
    //以便支援中文
    mysqli_query($conn,"SET NAMES utf8");
?>