<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Autori in vita e le loro opere: </h1>
    <?php
        include("connessione.php");
        $query = mysqli_query($conn, "SELECT autori.NomeAutore, count(romanzi.NomeAutore) AS nRomanzi  from autori
                                join romanzi on romanzi.NomeAutore = autori.NomeAutore 
                                where AnnoM IS NULL
                                group by autori.NomeAutore;");
        if ($query) {
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "Autore: " . htmlspecialchars($row["NomeAutore"]) . " - Numero di romanzi: " . htmlspecialchars($row["nRomanzi"]) . "<br>";
                }
            }
        }
    ?>
    <p><a class="link-opacity-75" href="./index.php">torna alla home</a></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>