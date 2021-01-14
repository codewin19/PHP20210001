<?php

    try{
        $dbconn = new PDO('mysql:host=localhost;dbname=codewin2021','root','');
        echo "Connected TO database!";
    }catch(PDOException $e){
        echo 'Error:  Unable ot connect to database : ',$e->getMessage();
        die();
    }