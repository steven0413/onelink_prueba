<?php
    //0.incluir la clase conBD, para abrir la base de datos

include('ConBD.PHP');

if(isset($_POST['Agregar'])){
    //1.recibir todos los datos que viajan atravez del name (formulario)
    $tipodocumento = $_PPOST["Tipodocumento"];
    $identificacion = $_POST["Identificacion"];
    $apellidos = $_POST["Apellidos"];
    $nombre = $_POST["Nombres"];
    $Area= $_POST["Area"];
    //2. instanciar la clase conBD
    $operacionBD = new conBD();

    //3. definir la consulta sql
    $consultaSQL = "INSERT INTO empleados(Tipodocumento,Identificacion,Apellidos,Nombres,Area)
    VALUES ( '$tipodocumento','$identificacion','$apellidos','$nombre','$area')";

    //4. llamar el metodo de la clase paara insertaar el registro 
    $operacionBD->AgregarRegistro($consultaSQL,"insert");

}
?>