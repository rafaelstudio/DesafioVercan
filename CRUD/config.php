<?php

    try{
        $pdo = new PDO("mysql:dbname=desafiovercan;host=localhost","root","");
    }catch(PDOExeption $e){
        throw new PDOException($e);
        exit;
    }





