<?php 	

$usuario="ufcuzcqb9dlgoirb";
$contrasena="RWg1Gx0bOUYfZ38BbnT4";
$host="bb2fl7a7fwalbxsfk1hw-mysql.services.clever-cloud.com";
$bd="bb2fl7a7fwalbxsfk1hw";
$puerto="3306";



$conexion =mysqli_connect($host,$usuario,$contrasena,$bd,$puerto);

$usuario = utf8_decode($_POST['usuario']);
$contrasena= utf8_decode($_POST['contrasena']);



$sql="SELECT Usuario,Contrasena from AlumnosPP where usuario='$usuario' and contrasena='$contrasena';";

$result=mysqli_query($conexion,$sql);
if ($result->num_rows>0) { ?>
	<script>
	window.location.href='PrincipalPP.html';
	</script>
	<?php 
}else{ ?>
	<script>
	window.location.href='IS1PRE.html';
	</script>
	<?php 
}
?>