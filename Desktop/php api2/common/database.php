<?php
    function getConnection()
    {
        $host = 'localhost';
        $db_name = 'restapitest2';
        $username = 'root';
        $password = '';
        $conn= new mysqli($host, $username, $password, $db_name);
        if ($conn->connect_error) {
            $conn= null;
        }
        return $conn;
    }