<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Electrónica</title>

</head>
<body>
    <h1>Hola PHP</h1>
    <div class="container">
        <div class="row">

    <?php

    $usuario    = "adminelectronicalasalle";
    $contrasena = "Qq0t9%!X9H^b&VGW";
    try{
        $conn = new PDO('mysql:host=localhost;dbname=electronicalasalle', $usuario, $contrasena);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
            {
                echo "ERROR: " . $e->getMessage();
            }

    $consulta  = "SELECT * FROM tb_productos";
    $query = $conn->prepare($consulta);
    $query->execute();
    while($registro = $query->fetch())
    {
    ?>
        <div class="col-12 col-md-4 text-center">
            <div class="card">
                <img src="<?=$registro["txt_foto_pro"]?>" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?=$registro["txt_nombre_pro"]?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    <?php
    }

    ?>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>