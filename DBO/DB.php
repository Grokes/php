<?php
namespace DBO;

require_once __DIR__.'../DataModel/CredentialTable.php';

use DBO\DataModel\CredentialsTable;
class DB
{
    //private array $credentials{get => $this.credentials;}

    public function __construct() {
        $this->credentials = [
            0 => new CredentialsTable(0,'admin', 'admin'),
            1 => new CredentialsTable(1,'root', 'root')
        ];
    }
}
?>