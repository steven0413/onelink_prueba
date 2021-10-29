<?php
    //0.incluir la  clase conBD para abrir la base de datos
include('servidor/ConBD.PHP');

//1.instanciar la clase BD (crea un objeto)
$operacionBD = new ConBD();

//2.Prepara la identificacion del empleado a modificar o actualizar
$id = $_GET['Identificacion'];

//3.realizar consulta sql que permita visualizar los datos especificos
$conQuery = ("SELECT * FROM empleados where '$id' = Identificacion");

//4.aceder al metodo consultar y almacenar 
$estudiantes = $operacionBD->$_GET

?>