<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="imagenes/favicon.png">
    <link rel="stylesheet" href="estilos/estiloGijon.css">
    <title>Formulario Contacto | Visita guiada</title>
</head>
<body>
    <?php
    $varNombre = $_REQUEST["nombre"];
    $varDni = $_REQUEST["dni"];
    $varFechanac = $_REQUEST["fechanac"];
    $varEmail = $_REQUEST["email"];
    $varTlf = $_REQUEST["tlf"];
    $varCont = $_REQUEST["cont"];
    $varOtro = $_REQUEST["otro"];
    $varTerm = $_REQUEST["term"];
    

  



    print "Los datos optenidos son: <br>";
    print "- Nombre completo: $varNombre <br>";
    print "- DNI: $varDni <br>";
    print "- Fecha de Nacimiento: $varFechanac <br>";
    print "- Correo Electronico: $varEmail <br>";
    print "- Telefono: $varTlf <br>";
    print "- Forma de contacto preferida: $varCont <br>";
    print "- El comentario que se ha dejado es: $varOtro <br>";
    print "- Terminos: $varTerm <br>";
    ?>
</body>
</html>