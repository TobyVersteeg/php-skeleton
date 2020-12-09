<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP app</title>

    <link rel="icon" href="images/cg-favicon.png" sizes="32x32">

    <link rel="stylesheet" href="css/bootstrap4_5_3.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/jquery3_5_1.min.js"></script>
    <script src="js/bootstrap-bundle4_5_3.min.js"></script>
</head>
<body>
    <?php require __DIR__ . '/app/helpers/requires.php'; ?>
    <?php 
        // require __DIR__ . '/app/database/migrate.php';
        // migrateDatabase(true);
    ?>

    <?php require 'views/register.php'; ?>

    <main>
        <?php require 'views/header.php'; ?>
        <?php require 'views/content.php'; ?>
        <?php require 'views/footer.php'; ?>
    </main>

    <script src="js/main.js"></script>
</body>
</html>