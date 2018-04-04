<?php
   session_start();
 try{
     $conn = new PDO('mysql:host=localhost:3306;dbname=inicio','root','');
     echo 'Conexion realizada';
    }            
catch (PDOException $ex) {
       echo $ex->getMessage();
       exit; 
    }
 
/* @var $_POST type */
$nombre= $_POST["email"];
$pass= $_POST["password"];


 if("SELECT PassLog FROM Login WHERE PassLog ='".mysql_real_escape_string($nombre)."'" == $nombre){
	 header("Location:index.html"); 
 }


?>