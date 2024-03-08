<?php

namespace Views;

class MainView
{
    private $fileName;

    const titulo = 'ProjetoMVC';

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }
    
    public function render()
    {
        include("pages/{$this->fileName}.php");
    }
}
