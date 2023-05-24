<?php

    $consulta  = "SELECT * FROM tb_categorias";
    $query = $conn->prepare($consulta);
    $query->execute();

    while($registro = $query->fetch())
    {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="?categoria=<?=$registro["id"]?>"><?=$registro["nombre"]?></a>
        </li>
        <?php
    }
?>