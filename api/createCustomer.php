<?php

  //require_once("config/dbconnection.php");

  //http://localhost/clasephpcrud/api/createCustomer.php?nombre=Pedro&apellido=Crespi&email=aasdasd@asdasd.com&telefono=234234&detalle=sdfsdf
  
  $conexion = new mysqli("localhost", "root", "", "crudcustomer") or die("not connected".mysqli_connect_error());
  
  if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];
    $telephone = $_GET['telephone'];
    $details = $_GET['details'];

    //INSERT INTO `customers` (`id`, `name`, `lastname`, `email`, `telephone`, `details`) VALUES (NULL, 'Pedro', 'Crespi', 'pedro@crespi.com.ar', '+54915-5555-5555', 'First contact');
    $sql = "INSERT INTO `customers` (`id`, `name`, `lastname`, `email`, `telephone`, `details`) VALUES (NULL, '$name', '$lastname', '$email', '$telephone', '$details');";

    $query = mysqli_query($conexion, $sql);
    if($query){
      echo"1 row inserted";
    }else{
      echo mysqli_error($conexion);
    }
  }
?>