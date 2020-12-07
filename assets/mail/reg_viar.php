<?php

// INSERTAR DATOS POR MSQLI
// $conexion = mysqli_connect("www.aula-ec.com", "aulaec_aulaec", "pasajero47", "aulaec_atomo");
// //Recibir datos y almacenar en variables
// $name = $_POST["name"];
// $phone = $_POST["phone"];
// $email_address = $_POST["email"];

// //Consulta para insertar
// $insertar = "INSERT INTO clientes(name, phone, email_address) VALUES ('$name', '$phone',  '$email_address')";
// //Ejecutar consulta
// $resultado = mysqli_query($conexion, $insertar);
// if (!$resultado) {
//         echo "Usuario no registrado";
  
// }else { 
//          header ("Location:index.html");
//    }
//    //Cierre e conexion
//    mysqli_close($conexion);


   // PDO DB CONNECT
   $servername = "www.aula-ec.com";
   $dbname = "aulaec_principal";
   $username = "aulaec_aulaec";
   $password = "pasajero47";

   try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $insert = $conn->prepare("INSERT INTO registro_principal(name, email)
            VALUES (:name, :email)");
  
    $insert->bindParam(':name', $name);
    // $insert->bindParam(':phone', $phone);
    $insert->bindParam(':email', $email);
  
    $name = $_POST["name"];
    // $phone = $_POST["phone"];
    $email = $_POST["email"];
  
    $insert->execute();
    
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;





?>