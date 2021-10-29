<?php
    //0.//incluir la clase conBD para abrir la base de datos
include ('ConBD.PHP');

$id =$_GET['id'];

$operacionBD = new conBD();
//realizar consulta sql para eliminaar
$consultaSQL=("DELETE FROM empleados WHERE'$id'=Identificacion");

$operacionBD->AgregarRegistro($consultaSQL,"delete");
?>