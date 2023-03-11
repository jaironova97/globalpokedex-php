<?php



$host = "localhost";
$db="pokemonlist";
$user="root";
$pass = "";

try {
  $connection=new PDO("mysql:host=$host;dbname:$db",$user,$pass);
  if($connection){echo "Connected...";}
} catch (Exception $ex) {
  echo $ex->getMessage();
}


$sql = "INSERT INTO $db (idpokemon,nombrePokemon,tipoPokemon,regionPokemon) VALUES ('$idpokemon','$nombrePokemon','$tipoPokemon','$regionPokemon')";
if(!mysqli_query($con,$sql)) {
    echo 'Data not inserted';
} else {
    echo 'Data inserted';
}

// $idpokemon=(isset($_POST['idPokemon']))?$_POST['idPokemon']:"";



$idpokemon = $_POST ['idpokemon'] ?? ""; 
$nombrePokemon=$_POST['nombrePokemon'] ?? "";
$tipoPokemon=  $_POST['tipoPokemon']?? "";
$regionPokemon=$_POST['regionPokemon']?? "";
$imgPokemon=$_FILES['imgPokemon']?? ""; 

echo $idpokemon."<br/>";
echo $nombrePokemon. "<br/>";
echo $tipoPokemon."<br/>";
echo $regionPokemon."<br/>";

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <div class="jumbotron">
    <h1 class="display-3">Centro Pokemon</h1>
    <h1> En este apartado puedes agregar pokemones con su informacion </h1>
    <p class="lead">Entrenador! asegurate de que la informacion este correcta asi poder ayudar a otros entrenadores. </p>
    <hr class="my-2">
    
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="pokemons.php" role="button">Back to Pokemons</a>
    </p>
  </div>
            <div class="col-md-2">
            <form method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label for="idPokemon">ID Pokemon</label>
    <input name= "idPokemon" type="text" class="form-control" id="idPokemon" placeholder="001">
  </div>

  <div class="form-group">
    <label for="nombrePokemon">Pokemon's Name</label>
    <input name= "nombrePokemon" type="text" class="form-control" id="nombrePokemon" placeholder="Ex: Charizard">
  </div>

  <div class="form-group">
    <label for="tipoPokemon">Pokemon's Element</label>
    <select name= "tipoPokemon" class="form-control" id="tipoPokemon">
      <option value="normal" > Normal</option>
      <option value="Fire" >Fire</option>
      <option value="Water" >Water</option>
      <option value="Grass" >Grass</option>
      <option value="Flying" >Flying</option>
      <option value="Fighting" >Fighting</option>
      <option value="Poison" >Poison</option>
      <option value="Electric" >Electric</option>
      <option value="Ground" >Ground</option>
      <option value="Rock" >Rock</option>
      <option value="Psychic">Psychic</option>
      <option value="Ice">Ice</option>
      <option value="Bug">Bug</option>
      <option value="Ghost">Ghost</option>
      <option value="Steel">Steel</option>
      <option value="Dragon">Dragon</option>
      <option value="Dark">Dark</option>
      <option value="Fairy">Fairy</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="regionPokemon">Pokemon's Region</label>
    <select name= "regionPokemon" class="form-control" id="regionPokemon">
      <option value="Hoenn">Hoenn</option>    
      <option value="Kanto">Kanto</option>
      <option value="Johto">Johto</option>
      <option value="Sinnoh">Sinnoh</option>
      <option value="Unova">Unova</option>
      <option value="Kalos">Kalos</option>
      <option value="Alola">Alola</option>
      <option value="Galar">Galar</option>
      <option value="Paldea">Paldea</option>
      </select>
      <br/>

      <form>
  <div class="form-group">
    <label for="imgPokemon">Pokemon's Image</label>
    <input name="imgPokemon" type="file" class="form-control-file" id="imgPokemon">
  </div>

  <input class="btn btn-primary" type="submit" value="insert">
      <div class="btn-group" role="group" aria-label="">
        


      </div>

</form>




      </body>
</html>