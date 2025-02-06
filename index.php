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
    <div class="w-50 mx-auto my-auto">
    <form action="./action.php">
        <?php
            $query = mysqli_query($conn,"SELECT * FROM Autori");
            echo"<select name=autori>";
            while ($row = mysqli_fetch_array ($query))
            {
                $nome = $row["NomeAutore"];
            echo "<option value=" . $row["NomeAutore"] . ">" . $nome . "</option>";
            }
            echo "</select><br>";
            echo var_dump($nome);
        ?>
        <br>
        <input type="submit" value="invia">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>