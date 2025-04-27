<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti | 21 OVEN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/media-queries.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="contact-section">
    <h2 class="section-title" style="margin-top: 75px;">Contattaci</h2>

    <!-- Mostra il messaggio di conferma o errore se presente -->
    <?php if (isset($_GET['msg'])): ?>
        <div class="alert">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <div class="contact-container">
        <!-- Il form è qui, invia i dati a scrivi_file.php per l'elaborazione -->
        <form action="scrivi_file.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-Mail</label>
                <input type="email" class="form-control" name="mail" id="email" required>
            </div>
            <div class="mb-4">
                <label for="messaggio" class="form-label">Messaggio</label>
                <textarea class="form-control" name="messaggio" id="messaggio" rows="5" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="order-button">Invia</button>
                <button type="reset" class="order-button">Cancella</button>
            </div>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
