<?php
        $mysqli_user = "root";
        $mysqli_password = "root";
        $port = "19542";
        
        $conn = mysqli_connect("localhost:".$port, $mysqli_user, $mysqli_password);
        if(!$conn) 
            die("Нет соединения с MySQL");

        $resultSelectDB = mysqli_select_db($conn, "sample");

        if(!$resultSelectDB)
            die("<p>Не удалось выбрать базу данных</p>" . mysqli_error($conn));
?>