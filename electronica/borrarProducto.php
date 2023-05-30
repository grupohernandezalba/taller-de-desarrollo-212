<?php
    $id = $_GET["id"];
    $consulta  = "DELETE FROM tb_productos WHERE pk_clave_pro = ?";
    $query = $conn->prepare($consulta);
    $query->execute();

?>

<h1>SE ELIMINO EL PRODUCTO SELECCIONADO</h1>