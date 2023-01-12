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

$consulta = "SELECT * FROM `champ` WHERE id = $id";
$listarCampeon = mysqli_query($conexion, $consulta);



if ($listarCampeon) {

  foreach ($listarCampeon as $campeon) {
  }
}


$update = "UPDATE champ
    SET name = $_POST[nombre],
    rol = $_POST[nombre],
    dificultad = $_POST[nombre],
    descripcion = $_POST[nombre]
    WHERE id = $id;";
    
$modificarCampeon = mysqli_query($conexion, $update);
if ($modificarCampeon) {

  foreach ($modificarCampeon as $modificar) {

    
    
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>003</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container !direction !spacing align-center">
    <h1 class="ml-2">Editando <?php echo $campeon['name'] ?></h1>
    <form class="ml-1 row g-3 needs-validation" novalidate>
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" value="" name="nombre" required>
        <div class="col-12"><br>

          <div class="col-md-12">
            <select name="rol" class="form-select">
              <option value="Rol" selected disabled>Rol</option>
              <option value="Atacante" name="rol">Atacante</option>
              <option value="Defensor">Defensor</option>
            </select>
            <div class="col-12">
              <br>
              <div>
                <select name="rol" class="form-select">
                  <option value="Rol" selected disabled>Dificultad</option>
                  <option value="Dificil" name="dificultad">Dificil</option>
                  <option value="Medio" name="dificultad">Medio</option>
                  <option value="Facil" name="dificultad">Fácil</option>
                </select> <br>
                <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                <div class="col-12">

                  <br>
                  <a href="002campeones.php"><button class="btn btn-primary" type="submit">GUARDAR</button></a>
                </div>
    </form>
  </div>

</body>

</html>