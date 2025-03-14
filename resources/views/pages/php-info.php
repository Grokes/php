<?php ?>
<html lang="En-En">

<head>
    <title>php-info</title>
    <?php include_once("../partials/index_head.php"); ?>
</head>

<body>
    <header>
    <?php include_once("$ROOT/resources/views/partials/header.php"); ?>
    </header>
    <?php phpinfo() ?>
    <?php include_once("$ROOT/LoginForm/registerForm_body.php"); ?>
    <?php include_once("$ROOT/LoginForm/loginForm_body.php") ?>
</body>

</html>