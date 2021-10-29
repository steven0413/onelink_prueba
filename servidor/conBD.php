<?php

    //crear una clase para conectarce con mysql

    class ConBD{
        //1.esta clase no contiene propiedades ni atributos

        //2. crear un metodo constructor
        public function __construct(){} 

        //3. crear metodo conectar
        public function conectar (){
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=empleados','root','');
                return ($conexion);

            }
            catch(PDOException $mensajeError){
                header('location:error.php');
            }
        }
           
        public function consultar($conQuery){
            //1.conectamos ala base de datos
            $conexion = $this->conectar();

            //2.preparar base de datos para enviar una consulta sql
            $opracion = $conexion-> prepare($conQuery);

            //3.fecth_assoc, enviar los dstos en forma de array
            $opracion -> setFetchMode(PDO::FETCH_ASSOC);

            //4.ejecutar la operacion
            $resultado = $opracion->execute();

            //5. reetornar los datos solicitadsos
            return ($opracion->fetchAll());


        }   

        public function AgregarRegistro($consultaSQL,$tipoConsulta){
            //1.conectar ala base de datos
           $conexion = $this->conectar();
           $conexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           
           //2.prepara la base de datos para ejecutar con consulta sql,puede ser agregar o eliminar
           try{
               $operacion = $conexion->prepare($consultaSQL);
               $resultado = $operacion->execute();

               $this->ClasificarConsulta($tipoConsulta);
           }
           catch(PDOException $mensajeError){
               header('location:error.');
           }


        }
        public function ClasificarConsulta($tipoConsulta){
            switch ($tipoConsulta){
                case 'Insert':
                    $_SESSION["mensaje"]="se ha agregado nuevo registro";
                    header('location:../Index.php');
                    break;
                case 'delete':
                    $_SESSION["mensaje"]="registro eliminado";
                    header('location:../Index.php');    
                    break;

                    case'update':
                        $_SESSION['MENSAJE']="Registro actualizado";
                        header('Location:../index.php');
                        break;


            }
        }
        
    }

?>