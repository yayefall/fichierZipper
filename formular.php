

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/vendor.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- script================================================== -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/pace.min.js"></script>

    <title>Archivage de Fichiers</title>
</head>
<body>

  <section id="homedesigne" class="s-homedesigne">
    <p class="lead">Bienvenue dans l'espace de YayeFallDevAuthentique !</p>
  </section>
<div class="container" style="width:50%;">
        <h2>Archivage de Fichiers</h2>
        <form action="archive.php" method="post" enctype="multipart/form-data">
            <label for="files">Choisissez les fichiers à archiver :</label><br><br>
            <input type="file" name="files[]" multiple required><br><br>
            <button type="submit" class="btn" style="background-color: green; color:aliceblue">Créer Archive ZIP</button>
        </form>
    </div>
</body>
<?php include('footer.php'); ?>
</html>

