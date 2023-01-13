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

if (isset($id)) {
  $consulta = "SELECT * FROM `champ` WHERE id = $id";
  $listarCampeon = mysqli_query($conexion, $consulta);

  if ($listarCampeon) {

    foreach ($listarCampeon as $campeon) {
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>002</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script defer src="js/bootstrap.bundle.js"></script>
</head>

<body>
  <div class="container-fluid !direction !spacing">
    <?php
    if ($listaCampeones) {

      foreach ($listaCampeones as $campeones) {
        echo "Nombre: $campeones[name] <br>
        Rol: $campeones[rol] <br>
        Dificultad: $campeones[dificultad] <br>
        Descripción: $campeones[descripcion] <br>
        <a href='003editando.php?id=$campeones[id]'><button class='btn btn-primary'>Editar</button></a> <a><button type='button' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#exampleModal$campeones[id]'>Borrar</button></a><br><br>";
        echo "<div class='modal fade' id='exampleModal$campeones[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h1 class='modal-title fs-5' id='exampleModalLabel'>ESTAS SEGURO QUE QUIERES BORRARLO</h1>
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Cerrar'></button>
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
              <a href='paginaEliminar.php?id=$campeones[id]'><button type='button' class='btn btn-primary'>SI</button></a>
            </div>
          </div>
        </div>
      </div>";
      }
    }
    ?>
  </div>
</body>

</html>