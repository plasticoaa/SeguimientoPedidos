<?php
session_start();
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$envio = (isset($_POST['envio'])) ? $_POST['envio'] : '';


$consulta = "SELECT Repartidor.Nombre AS NombreRepartidor, Estado.estado
 AS EnvioEstado, Clientes.Nombre AS NombreCliente,Clientes.direccion_uno AS 
 DireccionEnvio, Envios.Observaciones AS Observaciones, Envios.Recibe AS Receptor 
 FROM Envios INNER JOIN Repartidor ON Envios.Id_repartidor=Repartidor.Id 
 INNER JOIN Estado ON Envios.Id_estado=Estado.id 
INNER JOIN Clientes ON Envios.Id_clientes=Clientes.Id WHERE Envios.Id=$envio ";	
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


if($resultado->rowCount() >= 1){ 
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);    
    $_SESSION["s_envio"] = $envio;
    $_SESSION["s_NombreRepartidor"] = $data[0]["NombreRepartidor"];
    $_SESSION["s_NombreCliente"] = $data[0]["NombreCliente"];
    $_SESSION["s_DireccionEnvio"] = $data[0]["DireccionEnvio"];
    $_SESSION["s_EnvioEstado"] = $data[0]["EnvioEstado"];
    $_SESSION["s_Observaciones"] = $data[0]["Observaciones"];
    $_SESSION["s_Receptor"] = $data[0]["Receptor"];
    
}else{
    $_SESSION["s_envio"] = null;  
    $data=null;
}

print json_encode($data);//envio el array final el formato json a AJAX
$conexion=null; 