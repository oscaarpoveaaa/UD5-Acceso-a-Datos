<!-- Crea el archivo 001campeones.php donde listes todos los campeones del LOL que has metido 
en tu base de datos. Acuérdate que para ello deberás hacer una conexión con la base de datos 
y un foreach para cada campeón que tengas albergado en la tabla champ. -->
<?php

$conexion = mysqli_connect("localhost", "root", "", "lol");

if (mysqli_connect_errno()) {
    echo "conexión con la base de datos fallida: " . mysqli_connect_error();
    exit();
}

$consulta = "SELECT * FROM `champ`";
$listaCampeones = mysqli_query($conexion, $consulta);

if ($listaCampeones) {

    foreach ($listaCampeones as $campeones) {
        echo "Nombre: $campeones[name] <br>
        Rol: $campeones[rol] <br>
        Dificultad: $campeones[dificultad] <br>
        Descripción: $campeones[descripcion] <br><br>";
    }
}

?>