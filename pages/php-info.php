<?php ?>
<html lang="En-En">

<head>
    <title>php-info</title>
    <?php include_once("../partials/index_head.php"); ?>
</head>

<body>
    <header>
        <?php include_once("$ROOT/partials/header.php"); ?>
    </header>
    <?php phpinfo() ?>
    <?php include_once("$ROOT/Components/loginForm_body.php"); ?>
</body>

</html>