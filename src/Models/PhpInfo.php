<?php
require_once ROOT . "/src/Models/Abstracts/BasePage.php";
class PhpInfo extends BasePage
{
    public function RenderContent()
    {
        echo phpinfo();
    }
}
?>