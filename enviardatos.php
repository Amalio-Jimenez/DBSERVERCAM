<?php
$conexion = mysql_connect("sql106.epizy.com", "epiz_28614897", "12345678");
mysql_select_db("epiz_28614897_dbcam", $conexion);
mysql_query("SET NAMES 'utf8'");

$SENSOR1 = $_POST ['SENSOR1'];
$SENSOR2 = $_POST ['SENSOR2'];
$SENSOR3 = $_POST ['SENSOR3'];
$SENSOR4 = $_POST ['SENSOR4'];
$SENSOR5 = $_POST ['SENSOR5'];

mysql_query("INSERT INTO `epiz_28614897_dbcam`.`tablacam` (`id`, `SENSOR1`, `SENSOR2`, `SENSOR3`, `SENSOR4`, `SENSOR5`) VALUES (NULL, '$SENSOR1', '$SENSOR2', '$SENSOR3', '$SENSOR4', '$SENSOR5', CURRENT_TIMESTAMP);");

mysql_close();

echo "Datos ingresados correctamente.";
?>

