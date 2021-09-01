<?php

 class Conexion{	  
    public static function conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'restaurante');
        define('usuario', 'root');
        define('password', '');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}
/*class Conexion
{
	//conexion segura pra una base de datos MYSQL
	static public function conectar() 
	{
		$host="localhost";
		$dbname="restaurante";
		$user="root";
		$pass="";
		try{
			$con= new  PDO("mysql:hots=localhost;dbname=restaurante;charset=utf8",$user,$pass);
			 
                        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $con;


		}catch(PDOException $e){
			echo $e->getMessage();

		}
	}

}*/
