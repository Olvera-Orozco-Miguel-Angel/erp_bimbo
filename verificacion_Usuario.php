<?php 
/* este documento tiene como proposito el mostrar validar que el 
usuario  exista primeramente en la base de datos  y posteriomente lo redirecciona
a lo que vendria siendo su area de trabajo
*/
include('conexion.php');
//include('conexion.php');

$usuario = utf8_decode($_POST['nombreUsario']);
$contrasena = utf8_decode($_POST['contrasena']);

$query = "Select id_empleado,contraseña,AreaDeTrabajo from empleado where id_empleado = '{$usuario}'  and contraseña = '{$contrasena}';" ;
//$query = "SELECT * from $bd_tabla WHERE `{$_POST['campo']}` LIKE '%{$_POST['palabra']}%'";
//".$p1."
$result = $connection->query($query);
if (!$result) {
    
    header('Location: index.php');
    
}
$row = $result->fetch_assoc();

/* es en estas condicnales donde se les redirecciona a las areas de trabajo
 */
if ($row['AreaDeTrabajo'] == 'Recursos Humanos') {
    header('Location: ./menu.html');
}

elseif ($row['AreaDeTrabajo'] == 'Contabilidad') {
    header('Location: ./factura/menu.html');
}
elseif ($row['AreaDeTrabajo'] == 'Produccion') {
    header('Location: ./produccion/menu.html');
}

$connection->close();


?>
