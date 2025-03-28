<?php
require_once ROOT . "/src/Interfaces/IPage.php";

abstract class BasePage implements IPage
{

    // TODO Пересмотреть праваа доступа к функциям
    public function RenderHead()
    {
        echo <<<HTML
            <title>about</title>
            <link rel="stylesheet" href="/public/css/style.css">
            <link rel="stylesheet" href="/public/css/header.css">
            <link rel="stylesheet" href="/public/css/loginForm.css">
        HTML;
    }
    public function RenderBody()
    {
        $this->RenderHeader();
        $this->RenderContent();
        $this->RenderModal();
    }

    public function RenderModal()
    {
        include_once(ROOT . "/LoginForm/registerForm_body.php");
        include_once(ROOT . "/LoginForm/loginForm_body.php");
    }

    public function RenderHeader()
    {
        require_once ROOT . "/src/Views/partials/header.php";
    }
    abstract public function RenderContent();

    public function RenderPage()
    {

        require_once ROOT . "/src/Views/partials/Layout.php";
    }
}
?>