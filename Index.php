<!DOCTYPE html>
<html lang="en">

<?php
    isset($_SESSION) ? : session_start();
    isset($_GET['page']) ? $page = $_GET['page'] : $page = 'home';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/index/links-index.inc.php" ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cafetaria Kribbe</title>
</head>

<body class="bg-[#07B0C1]">
    <header>
        <?php include "includes/navbar.inc.php" ?>
    </header>
    <main>
        <?php include "includes/$page.inc.php" ?>
    </main>
</body>

</html>