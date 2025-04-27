<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>21 OVEN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/media-queries.css">

</head>

<body>

<?php include 'header.php'; ?>

<section class="hero">
    <img src="img/pizza.jpg" class="hero-img" alt="21 OVEN">
    <div class="hero-content">
        <h1 class="animate-fade-up">21 Oven: il gusto autentico, senza compromessi.</h1>
        <a href="menu.php" class="btn animate-fade-up delay-1" style="text-decoration: none;">Scopri il menù</a>
    </div>
</section>

<section class="specialita">
    <h2 style="color:#BB0620">Le nostre specialità</h2>
    <div class="grid">
        <div class="item">
            <a href="img/margherita.jpg" target="_blank">
                <img src="img/margherita.jpg" alt="Pizza Margherita Verace con pomodoro San Marzano e mozzarella di bufala DOP">
            </a>
            <h3>Margherita Verace</h3>
            <p>L'icona della pizza napoletana, semplice ma perfetta: pomodoro San Marzano, mozzarella di bufala DOP, basilico fresco, olio extravergine.</p>
        </div>
        <div class="item">
            <a href="img/burrata.jpg" target="_blank">
                <img src="img/burrata.jpg" alt="Pizza Gourmet con Burrata fresca, Crudo di Parma e rucola">
            </a>
            <h3>Gourmet con Burrata e Crudo</h3>
            <p>Base bianca, burrata fresca che si scioglie sopra, crudo di Parma aggiunto a crudo, rucola e scaglie di grana.</p>
        </div>
        <div class="item">
            <a href="img/diavola.jpg" target="_blank">
                <img src="img/diavola.jpg" alt="Pizza Diavola con salamino piccante artigianale">
            </a>
            <h3>Diavola con Salamino Piccante</h3>
            <p>Pomodoro, mozzarella fior di latte, salamino piccante artigianale.</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>


