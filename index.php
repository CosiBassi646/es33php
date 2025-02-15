<?php
    include("connessione.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-danger text-center">Visualizza i Romanzi di un'autore dal DATABASE</h1>
    <div class="w-25 mx-auto my-auto">
    <form action="./action.php">
      <?php
        $query = mysqli_query($conn, "SELECT * FROM Autori");
        echo "<select name='autori' class='form-select'>"; // Aggiunto il nome tra apici singoli
        while ($row = mysqli_fetch_array($query)) {
            $nome = $row["NomeAutore"];
            echo "<option value=\"$nome\">$nome</option>"; // valore tra virgolette
        }
        echo "</select>";
      ?>
      <br>
      <button type="submit" class="btn btn-success">Invia</button>
    </form>
    <br>
    <form action="./action2.php" method="GET">
      <div class="mb-3">
        <h3 class="form-label text-danger">Ricerca un libro attraverso il suo ID</h3>
        <input type="number" class="form-control" id="idLibro" name="idLibro">
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>