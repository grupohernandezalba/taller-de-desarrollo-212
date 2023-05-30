<div class="container">
        <div class="row">
            <?php
            
                if(!$categoria)
                    $consulta  = "SELECT * FROM tb_productos";
                else
                    $consulta  = "SELECT * FROM tb_productos 
                                WHERE fk_clave_cat = ".$categoria;

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
                            <a href="?accion=borrarProducto&id=<?=$registro["pk_clave_pro"]?>" class="btn btn-danger" onclick="return confirm('Estás seguro que quieres borrar este registro?');">Borrar</a>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
    </div>
</div>

