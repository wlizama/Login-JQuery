<?php

$server   = "localhost:3307";
$usuario  = "root";
$password = "";
$bd       = "bdtrabajo";

$conexion = "";

//echo "Enviado";

$conexion = mysql_connect($server, $usuario, $password) or die("No se puede Conectar");
$base     = mysql_select_db($bd);

$nivel    = "";
$pass     = "";

$nivel    = $_POST["cmbNivel"];
$pass     = $_POST["txtPassword"];

$tabla    = "";
$p        = "";

if ($nivel == 1){
	$tabla = "administrativos";
	$p     = "adm_password";
}
if ($nivel == 2) {
	$tabla = "docentes";
	$p     = "doc_password";
}
if ($nivel == 3){
	$tabla = "alumnos";
	$p     = "alu_password";
}
	 


$sql       = "Select * From ".$tabla;
$sql      .= " Where ".$p. " = '".$pass."'"; 
$resp      =  mysql_query($sql,$conexion);

if (mysql_num_rows($resp) > 0) {
    echo "Bienvenido!";
}
 else {
    echo "Usuario no existe";    
}
mysql_close($conexion);
?>