<!--
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e
[*] create un file index.php in cui:
[ ] - è definita una classe ‘Movie’
   [ ] => all'interno della classe sono dichiarate delle variabili d'istanza
   [ ] => all'interno della classe è definito un costruttore
   [ ] => all'interno della classe è definito almeno un metodo
[ ] - vengono istanziati almeno due oggetti ‘Movie’ e
[ ] stampati a schermo i valori delle relative proprietà
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Title -->
    <title>K-movies</title>
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<?php
require __DIR__ . "/classi.php"
?>

<body>
    <div id="app">
        <main>
            <div class="container">
                <?php foreach ($movies as $movie) { ?>
                    <div class="card">
                    <img src="<?php echo $movie->poster ?>" alt="">
                    <div class="text">
                        <div class="rated">
                            <?php echo $movie->getStars(); ?>
                        </div>
                        <h2><?php echo $movie->title ?></h2>
                        <p><?php echo $movie->description ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>

</html>