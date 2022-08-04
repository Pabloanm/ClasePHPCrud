<?php

// http://localhost/sistema_php/api/updateCustomer.php?nombre=Pedro&apellido=Crespi&email=aasdasd@asdasd.com&telefono=234234&detalle=sdfsdf&id=1
  $conexion = new mysqli("localhost", "root", "", "crudcustomer") or die("not connected".mysqli_connect_error());
  
  if (isset($_GET['name'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];
    $telephone = $_GET['telephone'];
    $details = $_GET['details'];

    $sql = "UPDATE `customers` SET `name` = '$name', `lastname` = '$lastname', `email` = '$email', `telephone` = '$telephone', `details` = '$details' WHERE `customers`.`id` = $id;";

    $query = mysqli_query($conexion, $sql);
    if($query){
      echo"1 row updated";
    }else{
      echo mysqli_error($conexion);
    }
  }
?>