<?php
$conectar=mysqli_connect('localhost','root','');
if(!$conectar){

}else{
	mysqli_select_db($conectar,"fradastudio");
}
$destino="mendo1921@gmail.com";
if(isset($_POST["btn_Calcular"])){
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$asunto=$_POST['asunto'];
	$mensaje=$_POST['mensaje'];
}  
$sql="insert into contactos(id,nombre,email,asunto,mensaje) values(NULL,'".$nombre."','".$email."','".$asunto."','".$mensaje."')";
mysqli_query($conectar,$sql);
mysqli_close($conectar);
$contenido="Nombre: ".$nombre."\nCorreo: ".$email."\nMensaje: ".$mensaje;

mail($destino,$asunto,$contenido);

header("location: contactos.html");



?>