<!-- Modifica el archivo 001campeones.php y guárdalo como 002campeones.php pero pon al lado 
de cada uno de los campeones listados un botón para editar y otro para borrar. Cada uno de 
esos botones hará la correspondiente función dependiendo del id del campeón seleccionado. -->
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
        Descripción: $campeones[descripcion] <br>
        <a href='003editando.php?id=$campeones[id]'><button>Editar</button></a> <a><button>Borrar</button></a><br><br>";
    }
}

?>