<!DOCTYPE html>
<html lang="es">
<head>

    <title>Darse de baja | myAlbum</title>
    <?php
    include("eleccionEstilo.php");
    ?>
</head>
<body>
<?php
include('headerSinLogear.php');
require("conexionBD.php");

if(!isset($_SESSION['sesion'])){
    $id_user = mysqli_real_escape_string($conexion, $_SESSION['sesion']['IdUsuario']);
}


if (isset($_SESSION['sesion'])) {
    session_destroy();
}
setcookie("recuerdame", " ", time() - 360);

$sql = "DELETE FROM usuarios WHERE IdUsuario = $id_user";

?>


<div id="background-removeUser" class="background_parallax">
    <section class="col-4 margin_auto padding20">
        <br><br><h2 class="white text_shadow"></h2>

        <?php
        if ($conexion->query($sql) === TRUE) {
    echo "<div style='padding: 1em 1em 0.3em 1em;'><img style='    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 25%;' src='img/sad2.png'>
    <h1 style='color:black; text-transform: uppercase; padding: 0.3em; font-size: 1.5em; text-align:center;'>Esperamos que vuelvas pronto!!</h1></div>";
}

?>
    </section>
</div><br><br>



<footer class="footer"></footer>

</body>
</html>