<?php
 require_once "Conexion.php";
if(isset($_GET["nombre"])){
    $usuario=$_GET["nombre"];
    echo strtoupper($usuario);
   
    
    
}
if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
    // do user authentication as per your requirements
    // ...
    // ...
    // based on successful authentication
    
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}

if(isset($_POST['nombre']) && isset($_POST["dni"])){
     $stmt=Conexion::conectar()->prepare("INSERT INTO persona(nombre,dni) 
 		values(:nombre,:dni)");

 		 $stmt->bindParam(":nombre",$_POST['nombre']);
 		 $stmt->bindParam(":dni",$_POST["dni"]);
 		// se puede traer la cadena completa sin hacer uso del binParam() asi:
         //$stmt->execute($dato);
         // pero ojo $dato debe tener ek mismo orden que la tabla users y esta sencencia se pone 
         //dentro de el if 

 		 if($stmt->execute()){
			 return "ok";
                     
                    

		}else{
			print_r(Conexion::conectar()->errorInfo());
		}

        $stmt->close();
        $stmt=null;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

