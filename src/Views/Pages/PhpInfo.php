<?php
require_once ROOT . "/src/Abstracts/BasePage.php";
class PhpInfo extends BasePage
{
    public function RenderContent()
    {
        echo phpinfo();
    }
}
?>

<?php
$Page = new PhpInfo;
$Page->RenderPage();
?>