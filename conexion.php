
<?php
$servidor="localhost";
$usuario="root";
$password= "khegel1997";//"khegel1997 mysqlMAO97";
$db="erp";
$connection = new mysqli($servidor, $usuario, $password, $db);
if( $connection -> connect_errno ){
    echo("Problemas de conexi&#243;n con la base de datos");
    exit();
}
if(!$connection->set_charset("utf8")){
    printf("Error al cargar el conjunto de caracteres utf8:%s\n",
        $connection->error);
    exit ();
}
?>