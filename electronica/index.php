<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Electrónica</title>
</head>
<body>
    <?php

        $categoria = 0;
        if(isset($_GET["categoria"]))
            $categoria = $_GET["categoria"];

        $accion = "inicio";
        if(isset($_GET["accion"]))
            $accion = $_GET["accion"];
        

        include("conexion.php");
        include("menu.php");

        switch ($accion) {
            case "inicio":
              include("inicio.php");
              break;
            case "productos":
                include("productos.php");
                break;
            case "ingresar":
                include("acceso/ingresar.php");
                break;
            case "somos":
                include("somos.php");
                break;
            case "ofertas":
                include("ofertas.php");
                break;
            case "borrarProducto":
                include("borrarProducto.php");
                break;
          }

        //include("productos.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>