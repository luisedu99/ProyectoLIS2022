<?php

$conexion = mysqli_connect("localhost","root","","proyecto_clinica");

$query = $conexion->query("SELECT * FROM customers");

echo '<option value="0">Seleccione un paciente</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codpaci']. '">' . $row['nombrep'] . '</option>' . "\n";
}
