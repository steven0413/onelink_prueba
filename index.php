<?PHP
       //incluir la clase conBD para abrir la base de datos
   include ('servidor/ConBD.PHP');

   //1.INSTANCIAR la clase BD (crear un objeto de la clase conBD)
   $operacionBD = new ConBD();

   //2. HACER UNA CONSULTA para mostrar todos los datos de la tabla estudiantescrud
   $conQuery=("SELECT * FROM  empleados");
   
   //3.Acceder al metodo consultar y almacenamos el resultado en un array 
   $estudiantes = $operacionBD->consultar($conQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Prueba</title>
</head>
<body>
<nav><h1 class="text-center">REGISTRO DE EMPLEADOS</h1></nav>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-center">REGISTRAR EMPLEADOS</h3>
                    <form action="servidor/Insert.php"method="POST">
                        <input type="text" class="form-control mb-3"name="Tipodocumento" id="Tipodocumento"placeholder="Tipodocumento"><br>
                        <input type="text" class="form-control mb-3"name="Identificacion" id="Identificacion" placeholder="nro identificacion"><br>
                         <input type="text" class="form-control mb-3"name="Apellidos" id="Apellidos" placeholder="apellidos completos"><br>
                        <input type="text" class="form-control mb-3"name="Nombres" id="Nombres" placeholder="nombres completos"><br>
                        <input type="text" class="form-control mb-3"name="Area" id="Area" placeholder="Area"><br>
                        <input type="submit" class="btn btn-primary" name="Agregar" value="Agregar">
                        <input type="submit" class="btn btn-primary" name="Eliminar" value="Eliminar">
                     </form>


                </div>
                <div class="col-md-9">
                    <h2 class="text-center"></h2>
                    <table class="table">
                        <thead>
                            <tr>
                            <td>Tipo documento</td>
                            <td>Identificacion</td>
                            <td>Apellidos</td>
                            <td>Nombres</td>
                            <td>Area</td>
                        
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($estudiantes as $dato): ?>
                            <tr>
                                <td><?=$dato["Tipodocumento"]?></td>
                                <td><?=$dato["Identificacion"]?></td>
                                <td><?=$dato["Apellidos"]?></td>
                                <td><?=$dato["Nombres"]?></td>
                                <td><?=$dato["Area"]?></td>

                                <th><a href="Edit.php?id= <?php echo $dato['identificacion']?>" class = "btn btn-danger"></a></th>
                                <th><a href="servidor/Delete.php?id=<?php echo $dato['Identificacion']?>"class = "btn btn-danger">Eliminar></a></th>
                            </tr>
                            <?php endforeach?>  
                             
                        </tbody>

                    </table>


                </div>

            </div>

        </div>
    </main>
    <footer>
        <hr>
        <p><center>Developer:Steven Rios-Contacto:3016015386</center></p>
    </footer>



<script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script></script>    
    
</body>
</html>