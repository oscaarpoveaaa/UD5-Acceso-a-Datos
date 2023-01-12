<?php
$id = $_GET['id'] ?? $_POST['id'];

$conexion = mysqli_connect("localhost", "root", "", "lol");

if (mysqli_connect_errno()) {
    echo "conexión con la base de datos fallida: " . mysqli_connect_error();
    exit();
}

if (isset($id)) {
    $delete = "DELETE * FROM `champ` WHERE id = $id";
    $eliminarCampeon = mysqli_query($conexion, $delete);

    if ($eliminarCampeon) {

        foreach ($eliminarCampeon as $campeon) {
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>003</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script defer src="js/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="container !direction !spacing align-center">
        <h1 class="ml-2">Se ha eliminado <?php echo $campeon['name'] ?> correctamente</h1>
    </div>
</body>

</html>