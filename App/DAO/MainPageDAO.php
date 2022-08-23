<?php

class MainPageDAO
{

    private $conexao;

    public function __construct()
    {

        $dsn = "mysql:host=localhost:3307;dbname=db_yu-gi-oh";

        $this->conexao = new PDO($dsn,"root","etecjau");
        
    }

    public function Select()
    {

        $sql = "SELECT * FROM Agrupar_Tabelas";

    }
    
}

?>