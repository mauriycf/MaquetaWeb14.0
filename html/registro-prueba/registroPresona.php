<?php
$host='localhost';
$user='root';
$password='123456';
$database='Diplomado';

// 1. Create a database connection
$connection = mysqli_connect($host,$user,$password);
if (!$connection)
{
    die("Database connection failed: " . mysqli_error());
}
else
{
    die("...Connesso con successo al Server!");
}

// 2. Select a database to use
$db_select = mysqli_select_db($connection, $database);
if (!$db_select)
{
    die("Database selection failed: " . mysqli_error());
}
else
{
    die("...Connesso con successo al Database!");
}

$query="insert into persona(`int_idPersona`,' var_nombre', 'var_apellido', 'int_nacionalidad', 'var_pasaporte', 'date_fecha', 'var_correo', 'int_telefono', 'var_domicilio', 'int_estado', 'int_municipio', 'int_parroquia', 'int_tituloObtenido', 'var_carrera', 'var_institucion', 'var_profesion', 'var_nombreEmpresa', 'var_direccion')VALUES (NULL, '$nombre','$apellido','$cedula','$pasaporte','$fecha_nac','$lugar','$email','$telefonoCelular','$domicilio','$estados','$municipios','$parroquias','$tituloObtenido','$carrera','$institucion','$profesion','$nombreEmpresa','$direccionTrabajo')";
if (!mysqli_query($query,$db_select))
{print("errore inserimento dati");
}
?>
