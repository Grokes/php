<?php ?>
<html lang="En-En">

<head>
    <meta charset="UTF-8">
    <title>php-info</title>
    <link rel="icon" href="Images/icon.svg">
    <link rel="stylesheet" href="css/style.css" />
    <?php
    include_once("Components/index_head.php");
    ?>
    <link rel="stylesheet" href="css/header.css" />
</head>

<body>
    <dialog id="loginForm"><?php
    include_once("Components/index_body.php");
    ?></dialog>
    
    <header>
        <?php include_once("header.php"); ?>
    </header>
    <?php phpinfo() ?>
    <script src="js/modal.js"></script>
</body>

</html>