<?php
include("../dll/config.php");
include("../dll/class_mysqli.php");
$miconexion = new clase_mysqli;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TALLER 3</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://kit.fontawesome.com/4feb140172.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
</head>

<body>
    <?php include '../components/nav.php'; ?>
    <main class="content_page">
        <section class="formulario">
            <h3 class="title">CLIENTES REGISTRADOS</h3>
            <?php
            $miconexion->consulta("select * from inscritos");
            $miconexion->verconsulta();
            ?>
        </section>
    </main>
    <?php include '../components/footer.php'; ?>
</body>

</html>