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

        $sql = "SELECT * FROM Carta car JOIN Portador por ON por.id = car.fk_portador;";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function SelectById(int $id)
    {

        $sql = "SELECT car.nome_carta, car.descricao_carta, car.link_imagem_carta, 
        por.nome_portador, por.link_imagem_portador 
        
        FROM carta car

        WHERE car.id = ?
        
        INNER JOIN portador por ON por.id = car.fk_portador;";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject("MainPageModel");

    }
    
}

?>