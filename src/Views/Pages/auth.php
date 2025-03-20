<?php
$username = $_POST["username"];
$password = $_POST["password"];
$isAuthSuccess = false;

if ($username == "root" && $password == "root") {
    $isAuthSuccess = true;
}

?>

<html lang="en">

<head>
    <title>Auth</title>
    <?php include_once("../partials/index_head.php"); ?>
</head>

<body>
    <header>
    <?php include_once("../partials/index_head.php"); ?>
    </header>
    <?php
    if ($isAuthSuccess) {
        echo "Welcome $username. Auth success";
    } else {
        echo "Auth failed";
    }
    ?>
    <?php include_once("$ROOT/LoginForm/registerForm_body.php"); ?>
    <?php include_once("$ROOT/LoginForm/loginForm_body.php") ?>
</body>

</html>