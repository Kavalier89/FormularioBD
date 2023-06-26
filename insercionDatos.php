<!-- Sergio Justicia Rodriguez --

El siguiente programa/formulario permite la insercion de datos en una base de datos local de usuario root y password Matins, de nombre usertest y tabla users.

Tambien permite la extracción de datos de la base de datos a traves del documento de identidad DNI introducido anteriormente en la base de datos.
Permite la subida de archivos (fotos en formato png, jpg, jpge y gif) que se almacenarán en la carpeta /uploads dentro del mismo archivo que el .php

Los datos extraídos serán mostrados unicamente de uno en uno por numero de DNI. #58b4c7

Tenemos implementado un sistema anti inyecciones que detecta y evita la inyección de código en nuestra base de datos.



-->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php 
#Función anti inyecciones de código
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

<body class="superflex">
    <h1>Formulario Registro</h1>
<div class="flexbox">
    <form action="insercionDatos.php" method="post" enctype="multipart/form-data">
    <label for="Nombre">
    <div>Introduce tu nombre:</div><input type="text" name="nombre" id="nombre">    
    </label>
    <label for="Apellidos">
    <div>Introduce tus apellidos: </div> <input type="text" name="apellidos" id="Apellidos">    
    </label>
    <label for="Fecha de nacimiento">
    <div>Elige tu fecha de nacimiento: </div> <input type="date" name="fecha" id="Fecha de nacimiento"> 
    </label>
    
    <label for="Email">
    <div>Introduce tu Email:<span>*</span> </div> <input type="email" name="email" id="Email"> 

    
    <?php 
        $emailErr = "";
        if (isset($_POST["SubmitGuardar"])) {
        if (empty($_POST["email"])) {
        $emailErr = "<span class='err'>Se necesita un email</span>";
        } else {
         $email = test_input($_POST["email"]);
        };} 
        echo $emailErr ;
    ?>      
    </label>
    
    <label for="tel">
        
    <div>Telefono: </div> <input type="tel" name="tel" id="tel">    
    </label>
    <label for="codigo postal">
    <div>Dirección Postal: </div> <input type="text" name="calle" id="codigo postal">    
    </label>
    <label for="Provincia">
    <div>Provincia: </div> <input type="text" name="provincia" id="Provincia">    
    </label>
    <label for="Pais">
    <div>País:  </div><select name="pais">
  <option value="Afganistan">Afghanistan</option>
  <option value="Aland Islands">Åland Islands</option>
  <option value="Albania">Albania</option>
  <option value="Algeria">Algeria</option>
  <option selected value="España">Spain</option>
 
  <option value="Zimbabwe">Zimbabwe</option>
</select>  
    </label>
    <label for="Codigo postal">
    <div>Código Postal: </div> <input type="text" name="postal" id="Codigo postal">    
    </label>
    <label for="tarjeta">
    <div>Nº Tarjeta: </div> <input type="text" name="tarjeta" id="tarjeta">    
    </label>
    <label for="dni">
    <div>Nº DNI: </div> <input type="text" name="dni" id="dni"> 

    </label>
    <label for="sexo"> <div>Sexo: </div>
        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>
</label>
    <label for="foto">
    <div>Introduce tu foto: </div> <input type="file" name="fileToUpload" id="fileToUpload"> 
    </label>
    <label for="terminos">
    <input type="checkbox" required name="checkbox" id="terminos"><span> Acepto los <a href="http://">términos</a> </span>
    </label>
    <input type="submit" name="SubmitGuardar">
    <!-- aqui iria un captcha -->
</div>
</form>







<?php



$nombre = $emailErr = $email = $sexo = $terminos = $tel =  $dni = $tarjeta = $postal = $provincia = $calle = $fecha = $apellidos = $pais = "";
if (isset($_POST["SubmitGuardar"]))  {

     
   

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        
        
        // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $uploadOk = 0;
        }
    // Check if image file is a actual image or fake image
    if(isset($_POST["SubmitGuardar"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
        
        $uploadOk = 1;
        } else {
        $uploadOk = 0;
        }
    }
    
    
    
    // Si todo está correcto intenta subir el archivo.
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && (!empty($_FILES["fileToUpload"]["tmp_name"]))) {
      
    
    if (isset($_POST["fecha"])) {
        $fecha = $_POST["fecha"];
    }
 
    
    if (!empty($_POST["nombre"])) {
        $nombre = test_input($_POST["nombre"]);
    }
    if (!empty($_POST["apellidos"])) {
       $apellidos = test_input($_POST["apellidos"]);
    }
    if (!empty($_POST["email"])) {
       $email = test_input($_POST["email"]);
    }
    if (!empty($_POST["sexo"])) {
       $sexo = test_input($_POST["sexo"]);
    }
    if (!empty($_POST["tel"])) {
       $tel = test_input($_POST["tel"]);
    }
    if (!empty($_POST["dni"])) {
       $dni = test_input($_POST["dni"]);
    }
    if (!empty($_POST["tarjeta"])) {
       $tarjeta = test_input($_POST["tarjeta"]);
    }
   
    if (!empty($_POST["postal"])) {
       $postal = test_input($_POST["postal"]);
    }
   
    if (!empty($_POST["provincia"])) {
       $provincia = test_input($_POST["provincia"]);
    }
     if (!empty($_POST["calle"])) {
       $calle = test_input($_POST["calle"]);
    }
   
     if (!empty($_POST["pais"])) {
       $pais = test_input($_POST["pais"]);
    }}

$servername = "127.0.0.1";
$username = "root";
$password = "Matins";
$dbname = "userstest";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Comprobar conexión
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else { 
  echo "Datos guardados correctamente";
}
$sql = "INSERT INTO users (firstname, lastname, fechanacimiento, email, telefono, direccion, provincia, pais, codigopostal, tarjeta, dni, sexo, foto)
VALUES ('$nombre', '$apellidos', '$fecha', '$email', '$tel', '$calle', '$provincia', '$pais', '$postal', '$tarjeta', '$dni', '$sexo', '$target_file')";

mysqli_query($conn, $sql);
}
?>
<!-- AQUI EMPIEZA LA PARTE DE CODIGO DE SACAR LA INFORMACION DE LA BD -->

<form  action="insercionDatos.php" method="post" enctype="multipart/form-data">
    <label for="Nombre">
    <div style="margin-top: 30px;" class="margin">Introduce tu dni para realizar la busqueda</div><input type="text" name="lookFor" id="lookFor">    
    </label>
    <input type="submit" name="SubmitBuscar">
</form>

<?php
if (isset($_POST["SubmitBuscar"])) {
 

$lookFor = test_input($_POST["lookFor"]);
$servername = "127.0.0.1";
$username = "root";
$password = "Matins";
$dbname = "userstest";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
$querySelect = "SELECT * FROM users where dni = '$lookFor'";
$result = mysqli_query($conn, $querySelect);

if (mysqli_num_rows($result) > 0) {
  // salida de información de cada fila
  while($row = mysqli_fetch_assoc($result)) {
    $getNombre=$row["firstname"];
    $getApellido=$row["lastname"];
    $getFecha=$row["fechanacimiento"];
    $getEmail=$row["email"];
    $getTlf=$row["telefono"];
    $getCalle=$row["direccion"];
    $getProvincia=$row["provincia"];
    $getPais=$row["pais"];
    $getCP=$row["codigopostal"];
    $getTarjeta=$row["tarjeta"];
    $getDni=$row["dni"];
    $getSexo=$row["sexo"];
    $getFoto=$row["foto"];
    
  }


mysqli_close($conn);}}
?>


<?php 
if (isset($_POST["SubmitBuscar"])) {

echo "

<div class='contenedor' style='display:flex; gap: 30px; padding: 20px; background-color: #58b4c7; border-radius: 20px; color: black; margin-top: 40px; margin-bottom: 100px;'>
    <div class='imagen'><img src='$getFoto'></div>
    <div class='primeraCaja'>
        <p>Nombre:  $getNombre</p>
        <p>Apellido: $getApellido</p>
        <p>Fecha de nacimiento: $getFecha </p>
        <p>Email: $getEmail </p>
    </div>
    <div class='segundaCaja'>
        <p>CodigoPostal: $getCP </p>
        <p>Calle:  $getCalle </p>
        <p>Provincia: $getProvincia </p>
        <p>Pais: $getPais </p>
    </div>
    <div class='terceraCaja'>
        <p>Sexo: $getSexo</p>
        <p>Nº Tarjeta: $getTarjeta</p>
        <p>Telefono:  $getTlf </p>
    </div>
</div>"
;
}
?>

</body>
</html>