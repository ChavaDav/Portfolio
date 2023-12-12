<?php
class Conexion
{
    public $servername = "localhost";
    public $usuario = "root";
    public $contraseña = "";
    public $bd = "dispositivos";
    public $conexion; // Variable para almacenar la conexión

    public function __construct() {
        // Crear una nueva conexión dentro del constructor
        $this->conexion = new mysqli($this->servername, $this->usuario, $this->contraseña, $this->bd);

        // Comprobamos la conexión
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    
   }
   function listarMovil()
   { 
       // Conexión a la base de datos y consulta
       $sql = "SELECT * FROM movil";
       $result = $this->conexion->query($sql);
       
       if ($result->num_rows > 0) {
           // Abre o crea el archivo "Movil.txt" en modo escritura
           $archivo = fopen("Movil.txt", "w+");
          
           if ($archivo) {
               $i = 0;
              
               while ($row = $result->fetch_assoc()) {
                   // Crear un objeto móvil con los atributos de la fila de la base de datos
                   $movil = new Movil(
                       $row["marca"],
                       $row["modelo"],
                       $row["año"],
                       $row["pulgadas"],
                       $row["tipo_pantalla"],
                       $row["conectividad"]
                   );
   
                   // Genera los datos a escribir en el archivo
                   $datos = "ID: " . $i++ . "\nMarca: " . $movil->getMarca() . "\nModelo: " . $movil->getModelo() . "\nAño: " . $movil->getAño() . "\nPulgadas: " . $movil->getPulgadas() . "\nTipo de Pantalla: " . $movil->getTipo_Pantalla() . "\nConectividad: " . $movil->getConectividad() . "\n\n";
   
                   // Escribe los datos en el archivo
                   fwrite($archivo, $datos);
               }
               
               // Cierra el archivo
               fclose($archivo);
           } else {
               echo "Error al abrir el archivo 'Movil.txt'";
           }
       } else {
           echo "No se encontraron resultados en la base de datos.";
       }
   }
   
   function listarPC()
   { 
       // Conexión a la base de datos y consulta
       $sql = "SELECT * FROM pc";
       $result = $this->conexion->query($sql);
       
       if ($result->num_rows > 0) {
           // Abre o crea el archivo "PC.txt" en modo escritura
           $archivo = fopen("PC.txt", "w+");
          
           if ($archivo) {
               $i = 0;
              
               while ($row = $result->fetch_assoc()) {
                   // Crear un objeto PC con los atributos de la fila de la base de datos
                   $pc = new PC(
                       $row["marca"],
                       $row["modelo"],
                       $row["año"],
                       $row["cpu"],
                       $row["tarjeta_grafica"],
                       $row["placa_base"]
                   );
   
                   // Genera los datos a escribir en el archivo
                   $datos = "ID: " . $i++ . "\nMarca: " . $pc->getMarca() . "\nModelo: " . $pc->getModelo() . "\nAño: " . $pc->getAño() . "\nCpu: " . $pc->getCPU() . "\nTarjeta_grafica : " . $pc->getTarjeta_Grafica() . "\nPlaca Base: " . $pc->getPlaca_Base() . "\n\n";
   
                   // Escribe los datos en el archivo
                   fwrite($archivo, $datos);
               }
               
               // Cierra el archivo
               fclose($archivo);
           } else {
               echo "Error al abrir el archivo 'PC.txt'";
           }
       } else {
           echo "No se encontraron resultados en la base de datos.";
       }
   }

//         // Ahora, $dispositivos contiene objetos movil basado en los datos de la base de datos

//         $sql = "SELECT * FROM pc";
//         $result = $this->conexion->query($sql);
        
//         if ($result->num_rows > 0) {
//             while($row = $result->fetch_assoc()) {
//                 $id = $row["id"];
//                 $marca = $row["marca"];
//                 $modelo = $row["modelo"];
//                 $año = $row["año"];
//                 $cpu = $row["cpu"];
//                 $tarjeta_grafica = $row["tarjeta_grafica"];
//                 $placa_base = $row["placa_base"];
        
//                 // Crear un objeto pc con los atributos de la fila de la base de datos
//                 $pc = new PC($id, $marca, $modelo, $año, $cpu, $tarjeta_grafica,$placa_base);
        
//                 // Agregar el objeto a la matriz de dispositivos
//                 $dispositivos[] = $pc;
//             }
//         }
        
//         // Ahora, $dispositivos contiene objetos pc basados en los datos de la base de datos
//         return $dispositivos;

//         //devuelve la lista para tratar los datos
        
//     }
//     function eliminar_todos()
// {
//     // Eliminar todos los registros de la tabla 'movil'
//     $sql_movil = "DELETE FROM movil";
//     if ($this->conexion->query($sql_movil) === TRUE) {
//         echo "console.log('Todos los registros de la tabla 'movil' han sido eliminados.')";
//     } else {
//         echo "console.log('Error al eliminar registros: ')" . $this->conexion->error;
//     }

//     // Eliminar todos los registros de la tabla 'pc'
//     $sql_pc = "DELETE FROM pc";
//     if ($this->conexion->query($sql_pc) === TRUE) {
//         echo "console.log('Todos los registros de la tabla 'pc' han sido eliminados.')";
//     } else {
//         echo "console.log('Error al eliminar registros: ')" . $this->conexion->error;
//     }
// }

// function eliminar_uno($id, $tipo)
// {
//     // Eliminar un registro basado en el ID y el tipo (movil o pc)
//     if ($tipo === 'movil') {
//         $sql = "DELETE FROM movil WHERE id = $id";
//     } elseif ($tipo === 'pc') {
//         $sql = "DELETE FROM pc WHERE id = $id";
//     } else {
//         echo "console.log('Tipo de dispositivo no válido.')";
//         return;
//     }

//     if ($this->conexion->query($sql) === TRUE) {
//         echo "console.log('Registro con ID $id en la tabla '$tipo' ha sido eliminado.')";
//     } else {
//         echo "console.log('Error al eliminar registro: " . $this->conexion->error;
//     }
// }
function añadirMovil($marca, $modelo, $año, $pulgadas, $tipo_pantalla, $conectividad)
{
    // Añadir un dispositivo a la base de datos (movil o pc)
   


    $sql = "INSERT INTO movil (marca, modelo, año, pulgadas, tipo_pantalla, conectividad) VALUES ('$marca', '$modelo', '$año', '$pulgadas', '$tipo_pantalla', '$conectividad')";
   
    if ($this->conexion->query($sql) === TRUE) {
        echo "<script>window.alert('Registro creado correctamente');</script>";
        header("Refresh:0; url=index.html");
    } else {
        echo "Error de SQL: " . $sql . "<br>" . $this->conexion->error;
    }
}

function añadirPC($marca, $modelo, $año, $cpu, $tarjeta_grafica, $placa_base)
{
    $sql = "INSERT INTO pc (marca, modelo, año, cpu, tarjeta_grafica, placa_base) VALUES ('$marca', '$modelo', '$año', '$cpu', '$tarjeta_grafica', '$placa_base')";
   
    if ($this->conexion->query($sql) === TRUE) {
        echo "<script>window.alert('Registro creado correctamente');</script>";
        header("Refresh:0; url=index.html");
    } else {
        echo "Error de SQL: " . $sql . "<br>" . $this->conexion->error;
    }
}
}
?>