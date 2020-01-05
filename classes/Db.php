<?php

class Db{    
    
    public function connect(){
        $host = 'localhost';
        $user = 'kiridwex_laravel';
        $pass = 'laravel123';
        $db = 'kiridwex_laravel';
        
        // Create connection
        $conn = new mysqli($host, $user, $pass, $db);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;

    }
}