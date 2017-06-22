<?php
require('class/alumno.php');
 

 $boleta=$_POST['boleta'];
 $pwd=$_POST['pwd'];

  $result=Alumno::Recover_id($boleta);
 foreach ($result as  $value) {
 	$id=$value['boleta'];
 	$matricula=base64_encode($id);    
 }

 header("location: aceptado2.php?id=$matricula");



?>