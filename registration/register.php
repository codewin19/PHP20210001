<?php


function sanitize($value)
{
    return htmlspecialchars(trim($value),ENT_QUOTES);
}

    $username = sanitize($_POST['name']);

    $pass= md5(sanitize($_POST['pass']));

    $email = sanitize($_POST['email']);


    // valdiation code goes here : TODO

   // code for database connection 
    try{
        $dbconn = new PDO('mysql:host=localhost;dbname=codewin2021','root','');

        $dbconn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "Connected TO database!";
    }catch(PDOException $e){
        echo 'Error:  Unable ot connect to database : ',$e->getMessage();
        die();
    }



    $sql = "INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES (NULL, '{$username}', '{$email}', '{$pass}')";

    try{
        $dbconn->exec($sql);
        echo "<h1 style='color:Green;text-align:center;'>User Created!</h1>";
        echo "<p><a href='http://localhost/codewin2021/registration/'>Go to Home</a></p>";
    }catch(PDOException $e){
        echo "Error :  Failed to Execute Sql : ",$e->getMessage();
        die();
    }

    echo "<br/>",$sql,"<br/>";