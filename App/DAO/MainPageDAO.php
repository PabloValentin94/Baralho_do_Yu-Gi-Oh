<?php

class MainPageDAO
{

    private $conexao;

    public function __construct()
    {

        $dsn = "mysql:host=localhost:3306;dbname=db_yu-gi-oh";

        $this->conexao = new PDO($dsn,"root","etecjau");
        
    }

    public function SelectByID(int $id)
    {

        $sql = "SELECT * FROM agrupar_tabelas WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }
    
}

?>