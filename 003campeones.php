<!-- Crea el archivo 001campeones.php donde listes todos los campeones del LOL que has metido 
en tu base de datos. Acuérdate que para ello deberás hacer una conexión con la base de datos 
y un foreach para cada campeón que tengas albergado en la tabla champ. -->
<?php
$ordenacion = $_GET['ordenacion'] ?? "";
$orden = $_GET['orden'] ?? "";
$conexion = mysqli_connect("localhost", "root", "", "lol");

if (mysqli_connect_errno()) {
    echo "conexión con la base de datos fallida: " . mysqli_connect_error();
    exit();
}
if($ordenacion != "" && $orden != ""){
    $mostrar = "SELECT * FROM `champ` ORDER BY $ordenacion $orden";
    $listaCampeones = mysqli_query($conexion, $mostrar);
} else {
    $consulta = "SELECT * FROM `champ`";
    $listaCampeones = mysqli_query($conexion, $consulta);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <table class='table'>
        <thead>
            <tr>
                <th scope='col'><a href='003campeones.php?ordenacion=id&orden=asc'><i class='bi bi-chevron-up'></i></a> ID <a href='003campeones.php?ordenacion=id&orden=desc'><i class='bi bi-chevron-down'></i></a></th>
                <th scope='col'><a href='003campeones.php?ordenacion=name&orden=asc'><i class='bi bi-chevron-up'></i></a> Nombre <a href='003campeones.php?ordenacion=name&orden=desc'><i class='bi bi-chevron-down'></i></a></th>
                <th scope='col'><a href='003campeones.php?ordenacion=rol&orden=asc'><i class='bi bi-chevron-up'></i></a> Rol <a href='003campeones.php?ordenacion=rol&orden=desc'><i class='bi bi-chevron-down'></i></th>
                <th scope='col'><a href='003campeones.php?ordenacion=dificultad&orden=asc'><i class='bi bi-chevron-up'></i></a> Dificultad <a href='003campeones.php?ordenacion=dificultad&orden=desc'><i class='bi bi-chevron-down'></i></th>
                <th scope='col'><a href='003campeones.php?ordenacion=descripcion&orden=asc'><i class='bi bi-chevron-up'></i></a> descripción <a href='003campeones.php?ordenacion=descripcion&orden=desc'><i class='bi bi-chevron-down'></i></a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($listaCampeones) {
                foreach ($listaCampeones as $campeones) {
                    echo "<tr>
                <th scope='row'>$campeones[id]</th>
                <td>$campeones[name]</td>
                <td>$campeones[rol]</td>
                <td>$campeones[dificultad]</td>
                <td>$campeones[descripcion]</td>
              </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>