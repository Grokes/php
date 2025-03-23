<?php
require_once ROOT . "/src/Abstracts/BasePage.php";
class Main extends BasePage
{
    public function RenderContent()
    {
    }
}
?>

<?php
$Page = new Main();
$Page->RenderPage();
?>