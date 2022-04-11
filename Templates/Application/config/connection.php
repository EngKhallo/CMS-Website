<?php
    function connect(){
        $conn = mysqli_connect($servername="localhost", $username="root", $password="", $dbname="expense_manager");
        if(!$conn) die("connection failed");
        return $conn;
    }
?>