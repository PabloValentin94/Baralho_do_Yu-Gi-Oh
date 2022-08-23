<?php

class MainPageDAO
{

    private $conexao;

    public function __construct()
    {

        $dsn = "mysql:host=localhost:3306;dbname=db_yu-gi-oh";

        $this->conexao = new PDO($dsn,"root","etecjau");
        
    }

    public function Select()
    {

        

    }
    
}

?>