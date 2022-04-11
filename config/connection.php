<?php
    function connect(){
        $conn = mysqli_connect($servername="localhost", $username="root", $password="", $dbname="hakaale");
        if(!$conn) die("connection failed");
        return $conn;
    }
?>