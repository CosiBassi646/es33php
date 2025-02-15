<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>action2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>risulatati della ricerca: </h1>
    <?php
      include("connessione.php");
      $idLibro = isset($_GET['idLibro']) ? intval($_GET['idLibro']) : 0;
      $query = mysqli_query($conn, "SELECT Nomeautore, titolo, CodiceR FROM Romanzi WHERE CodiceR = $idLibro");
      if($query){
        if(mysqli_num_rows($query) > 0){
          while ($row = $query->fetch_assoc()) {
            echo "<h6>Autore:</h6>"  . htmlspecialchars($row["Nomeautore"]) . "<h6>Titolo Libro:</h6>" . htmlspecialchars($row["titolo"]) . "<h6>ID Libro:</h6>" . htmlspecialchars($row["CodiceR"]) . "<br>";
          }
        }else{
          echo "<h2>Nessuna corrispondenza</h2>";
        }
      }
    ?>

    <p><a class="link-opacity-75" href="./index.php">torna alla home</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>