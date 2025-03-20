<?php

namespace Components\UniversalForm;

class UniversalFormData
{
    //private string $username{get => $this->username;}
    //private string $password{get => $this->password;}

    public function __construct()
    {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
    }

    // public function getUsername()
    // {
    //     return $this->username;
    // }
    // public function getPassword()
    // {
    //     return $this->password;
    // }
}
?>