<?php
include('conexion.php');
//include('claseEmpleado.php');
/* todo este codigo que esta aquí se esta preparado para recibir los datos
    que enviar el usario para agregar un empleado y todo eso lo hace mediante 
    el metodo post
 */
$id = utf8_decode($_POST['id']);
$nombre = utf8_decode($_POST['nombre']);

$apellidoP = utf8_decode($_POST['apellidoP']);
$apellidoM = utf8_decode($_POST['apellidoM']);

$curp = utf8_decode($_POST['curp']);
$jefe = utf8_decode($_POST['jefe']);

$areaTrabajo = utf8_decode($_POST['areaTrabajo']);
$puesto = utf8_decode($_POST['puesto']);

$ingreso = utf8_decode($_POST['ingreso']);

$nacimiento = utf8_decode($_POST['nacimiento']);

$correoPersonal =utf8_decode($_POST['correoPersonal']);
$idDireccion = utf8_decode($_POST['idDireccion']);

$NombreUsuario = utf8_decode($_POST['NombreUsuario']);
$contrasena = utf8_decode($_POST['contrasenaSistema']);


$estado = utf8_decode($_POST['Estado']);
$Municipio = utf8_decode($_POST['Municipio']);
$colonia = utf8_decode($_POST['colonia']);
$calle = utf8_decode($_POST['calle']);
if (empty($idDireccion ) or empty($nacimiento) or empty($ingreso) or empty($jefe ) or empty($correoPersonal) or empty($curp) ) {
    header('Location: ./advertencia.html');
}
if (empty($nombre) or empty($NombreUsuario) or empty($apellidoP)or empty($apellidoM) or empty($contrasena) or empty($id)) {
    header('Location: ./advertencia.html');
}

/* posteriormente lo que se realiza es  crar el script necesario 
para insertar un nuevo empleado en la base de datos, pero primero  se inserta la dirección
con sus respectivo campos.
*/
$db_name = "erp";
$db_table_name="empleado";
$insertCalle = "Insert into direccion (id_Direccion,estado,municipio,colonia,calle)
values('".$idDireccion."','".$estado."','".$Municipio."','".$colonia."','".$calle."');";

$result = $connection->query($insertCalle);

if (!$result) {
    
    //header('Location: index.php');
    echo "No fue posible añadir la direccion";
    
}
/* finalmente se realiza el cueri necesario para ahora sí ya ingresar el empleado
en la base de datos, especificamente en la tabla empleado y como vemos
ahí esta todos los datos para crarla y si esta mal o no funciona la inserción
muesta un mensaje de error  */
$connection->close();

include('conexion.php');

$query = "insert into empleado (id_Empleado,
 nombre_empleado, apellido_Paterno,apellido_Materno,curp,
jefeInmediato,AreaDeTrabajo, puestoDeTrabajo, fechaIngreso,
fechaNacimiento, correPersonal, id_Direccion, nombre_usuario,contraseña
)values('{$id}','{$nombre}','{$apellidoP}',' {$apellidoM} ',
        '{$curp}','{$jefe}','{$areaTrabajo}', '{$puesto}',
        '{$ingreso}', '{$nacimiento}','{$correoPersonal}',
        '{$idDireccion}', '{$NombreUsuario}','{$contrasena}')";
$result2 = $connection->query($query);
if (!$result2) {

    echo("No se ha podido añadir al empleado");
    echo $result2,"Este es el query",$query;
}
else{
    header('Location: ./IngresadoCorrectamente.html');
}

$connection->close();



?>