<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menù | 21 OVEN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <style>
    /* Animazione automatica all'apertura della pagina */
    .menu-title-animation {
        animation: slideIn 1.5s ease forwards;
    }

    /* Keyframe per l'animazione */
    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="specialita" style="padding-top: 180px;">
        <div class="container">
            <!-- Solo questa parte avrà la transizione -->
            <h2 class="menu-title-animation" style="color:#BB0620; margin-top: 75px;">Il nostro Menù</h2>
            
            <div class="grid">
                <!-- Pizza Margherita -->
                <div class="item">
                    <h3 style="margin-bottom: 10px;">Pizza Margherita</h3>
                    <p style="color: #808080;">La classica pizza con pomodoro, mozzarella e basilico fresco.</p>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <strong>€ 7.00</strong>
                    </div>
                </div>

                <!-- Pizza Pepperoni -->
                        <div class="item">
            <h3 style="margin-bottom: 10px;">Pizza Salsiccia e Friarielli</h3>
            <p style="color: #808080;">Pizza con salsiccia fresca, friarielli, mozzarella e un tocco di olio piccante.</p>
            <div style="text-align: center; padding-bottom: 20px;">
                <strong>€ 11.50</strong>
            </div>
        </div>


                <!-- Pizza Quattro Stagioni -->
                <div class="item">
                    <h3 style="margin-bottom: 10px;">Pizza Quattro Stagioni</h3>
                    <p style="color: #808080;">Un mix di funghi, prosciutto, carciofi e olive nere.</p>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <strong>€ 10.50</strong>
                    </div>
                </div>

                <!-- Pizza Diavola -->
                <div class="item">
                    <h3 style="margin-bottom: 10px;">Pizza Diavola</h3>
                    <p style="color: #808080;">Pizza con salame piccante, pomodoro, mozzarella e peperoncini.</p>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <strong>€ 11.00</strong>
                    </div>
                </div>

                <!-- Pizza Vegetariana -->
                <div class="item">
                    <h3 style="margin-bottom: 10px;">Pizza Vegetariana</h3>
                    <p style="color: #808080;">Con verdure fresche, pomodoro, mozzarella e olio d'oliva.</p>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <strong>€ 9.00</strong>
                    </div>
                </div>

                <!-- Pizza Capricciosa -->
                <div class="item">
                    <h3 style="margin-bottom: 10px;">Pizza Capricciosa</h3>
                    <p style="color: #808080;">Pizza con prosciutto cotto, funghi, carciofi e olive.</p>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <strong>€ 10.00</strong>
                    </div>
                </div>

                <!-- Pizza Quattro Formaggi -->
                <div class="item">
                    <h3 style="margin-bottom: 10px;">Pizza Quattro Formaggi</h3>
                    <p style="color: #808080;">Una deliziosa combinazione di mozzarella, gorgonzola, parmigiano e emmental.</p>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <strong>€ 12.00</strong>
                    </div>
                </div>

                <!-- Pizza Marinara -->
                <div class="item">
                    <h3 style="margin-bottom: 10px;">Pizza Marinara</h3>
                    <p style="color: #808080;">Pizza con pomodoro, aglio, origano e olio d'oliva.</p>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <strong>€ 6.00</strong>
                    </div>
                </div>

                <!-- Nuova Pizza: Pizza Prosciutto e Funghi -->
                <div class="item">
                    <h3 style="margin-bottom: 10px;">Pizza Prosciutto e Funghi</h3>
                    <p style="color: #808080;">Pizza con prosciutto cotto, funghi freschi, pomodoro e mozzarella.</p>
                    <div style="text-align: center; padding-bottom: 20px;">
                        <strong>€ 9.50</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>

