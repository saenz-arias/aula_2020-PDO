<?php

   // PDO DB CONNECT
   $servername = "www.aula-ec.com";
   $dbname = "aulaec_online";
   $username = "aulaec_aulaec";
   $password = "pasajero47";

   try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $insert = $conn->prepare("INSERT INTO registro_online(name, email)
            VALUES (:name, :email)");
  
    $insert->bindParam(':name', $name);
    // $insert->bindParam(':phone', $phone);
    $insert->bindParam(':email', $email);
  
    $name = $_POST["name"];
    // $phone = $_POST["phone"];
    $email = $_POST["email"];
  
    $insert->execute();
    
    // echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  header ("Location:https://www.aula-ec.com/online.html");
  $conn = null;


?>