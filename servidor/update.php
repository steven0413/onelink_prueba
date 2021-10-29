<?php
    //0.incluir la  clase conBD para abrir la base de datos
include('servidor/ConBD.PHP');

//1.resivir los dartos que queremos actualizar
$tipodocumento = $_PPOST["Tipodocumento"];
$identificacion =  $_POST["Identificacion"];
$apellidos = $_POST["Apellidos"];
$nombres = $_POST["Nombres"];
$area = $_POST["Area"];

//2.instanciaar la clase
$operacionBD = new conBD();

//3. instanciar la consulta de actualizacion
$consultaSQL = "UPDATE empleados SET Tipodocumento='$tipodocumento',Identificacion='$$identificacion',Apellidos='$apellidos',Nombres='$nombres',Area='$area',

    where Identificacion='$identificacion'";

$operacionBD->AgregarRegistro($consultaSQL,'update');
?>