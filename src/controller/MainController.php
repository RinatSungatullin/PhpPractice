<?php

class MainController
{
    public function __construct()
    { }

    public function showMain()
    {
        require_once __DIR__ . '/../view/main.php';
    }
}