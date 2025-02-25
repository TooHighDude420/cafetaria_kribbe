<!DOCTYPE html>
<html lang="en">

<?php
    require_once('autoLoad.php');

    use App\Controllers\Menu;
    $menu = new Menu();
    
    $page = "";
    isset($_SESSION) ? : session_start();
    if (isset($_GET['page'])){
        $page = $_GET['page'];
        $_SESSION['page'] = $page;
    } else {
        $page = 'home';
    }
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