<!-- Al pinchar en editar, el usuario será redirigido al archivo 003editando.php donde mostrará un 
formulario con los campos rellenos por los datos del campeón seleccionado. Al darle al botón 
de guardar los datos se guardarán en la base de datos y el usuario será redirigido a la lista de 
champs para poder ver los cambios. -->

<?php
$id = $_GET['id'] ?? $_POST['id'];

$conexion = mysqli_connect("localhost", "root", "", "lol");

if (mysqli_connect_errno()) {
  echo "conexión con la base de datos fallida: " . mysqli_connect_error();
  exit();
}

if (isset($id)) {
  $consulta = "SELECT * FROM `champ` WHERE id = $id";
  $listarCampeon = mysqli_query($conexion, $consulta);

  if ($listarCampeon) {

    foreach ($listarCampeon as $campeon) {
    }
  }
}

if (isset($_POST['enviar'])) {

  $update = "UPDATE champ SET  
  name = '$_POST[nombre]',
  rol = '$_POST[rol]',
  dificultad = '$_POST[dificultad]',
  descripcion = '$_POST[descripcion]'
  WHERE id = $id";

  $modificarCampeon = mysqli_query($conexion, $update);
  header('Location:002campeones.php');
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
    <h1 class="ml-2">Editando <?php echo $campeon['name'] ?></h1>
    <form class="ml-1 row g-3 needs-validation" method="post" novalidate>
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" value="" name="nombre" required>
        <div class="col-12"><br>

          <div class="col-md-12">
            <select name="rol" class="form-select">
              <option value="Rol" selected disabled>Rol</option>
              <option value="Atacante">Atacante</option>
              <option value="Defensor">Defensor</option>
            </select>
            <div class="col-12">
              <br>
              <div>
                <select name="dificultad" class="form-select">
                  <option selected disabled>Dificultad</option>
                  <option value="Dificil" >Dificil</option>
                  <option value="Medio" >Medio</option>
                  <option value="Facil" >Fácil</option>
                </select> <br>
                <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                <div class="col-12">

                  <br>
                  <button class="btn btn-primary" type="submit" name="enviar">GUARDAR</button>
                </div>
    </form>
  </div>

</body>

</html>