<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>risulatati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-danger text-center">Pagina dei risulatati</h1>
    <div class="w-50 mx-auto my-auto">
        <?php
            include("connessione.php"); // Connessione al database
            if (isset($_GET["autori"])) {
                $nomeAutore = $_GET["autori"];
                echo "<h1>Romanzi dell'autore: " . htmlspecialchars($nomeAutore) . "</h1>";
                // Query per ottenere i romanzi scritti dall'autore selezionato
                $query = mysqli_query($conn, "SELECT Titolo FROM Romanzi WHERE NomeAutore = '$nomeAutore'");
                if (mysqli_num_rows($query) > 0) {
                    echo "<ul>"; //creazione di una lista dove stampare i rusltati della query
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<li>" . htmlspecialchars($row["Titolo"]) . "</li>"; //stampa dei risultati
                    }
                    echo "</ul>";
                } else {
                    echo "<p>Nessun romanzo trovato per questo autore.</p>";
                }
            } 
        ?>
    </div>
    <h4 class="text-center"><a class="link-opacity-75" href="./index.php">torna alla selezione</a></h4>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>