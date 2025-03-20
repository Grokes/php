<?php
require_once "config/config.php";

$request = $_SERVER['REQUEST_URI'];
$request = trim($request, '/');

if ($request == "") $request = "Main.php";

require_once ROOT . "/src/Views/Pages/$request";
?>