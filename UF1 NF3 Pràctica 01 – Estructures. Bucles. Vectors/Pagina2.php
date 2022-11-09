<?php
session_start();
$color= $_POST['color'];
$fuente= $_POST['fuente'];
$tamaño= $_POST['tamaño'];
$texto= $_POST['texto'];

if (isset($_POST["guardar"])){
    setcookie('color', $color, time() + (86400 * 30), "/" );
    setcookie('fuente', $fuente, time() + (86400 * 30), "/" );
    setcookie('tamaño', $tamaño, time() + (86400 * 30), "/" );
    setcookie('texto', $texto, time() + (86400 * 30), "/" );
}
?>
<html>
<head>
<title>Pagina2</title>;
<style>
    .colores{
        color:<?php echo $color;?>;
        font-family:<?php echo $fuente;?>;
        font-size:<?php echo $tamaño;?>;
    }
</style>
</head>
<body>
    <p class="colores"><?php echo $texto ?></p>
</body>
</html>
