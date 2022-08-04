<?php
  //http://localhost/clasephpcrud/api/readAllCustomers.php
  $conexion = new mysqli("localhost", "root", "", "crudcustomer") or die("not connected".mysqli_connect_error());

  $sql = "SELECT * FROM `customers`;";

  $result = mysqli_query($conexion, $sql); //ejecuta la consulta en la base de datos
  
  $clientes = array();

  //recorre los resultados e imprime
  while ($fila = mysqli_fetch_array($result)) {
    //array multidimensional
    array_push($clientes, $fila); 
  }
  
  echo json_encode($clientes); //paso el array multidimensional a un objeto json

  mysqli_free_result($result);
  mysqli_close($conexion);

  ?>