<?php
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$dni = $_POST["dni"];
$pais = $_POST["pais"];
$sexo = $_POST["sexo"];

include("../dll/config.php");
include("../dll/class_mysqli.php");
$miconexion = new clase_mysqli;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$resultado = $miconexion->consulta("insert into inscritos values('','$nombres','$apellidos','$correo','$dni','$pais','$sexo')");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetació en HTML y CSS</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php include '../components/nav.php'; ?>
    <main class="content_page">
        <section class="formulario">
            <?php
            if ($resultado == 1) {
                echo "<h3 class='msgSuccessful'>Felicidades..!  Se registro correctamente</h3>";
            } else {
                echo "<h3 class='msgDanger'>Imposible su registro..!</h3>";
            }
            ?>
            <a href="../">
                <button>
                    Regresar
                </button>
            </a>

        </section>
    </main>
    <?php include '../components/footer.php'; ?>
</body>

</html>