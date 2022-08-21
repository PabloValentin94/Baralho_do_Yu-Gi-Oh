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

        $sql = "select car.nome_carta, car.descricao_carta, car.link_imagem_carta, 
        por.nome_portador, por.link_imagem_portador 
        
        from carta car
        
        Join portador por on por.id = car.fk_portador";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }
    
}

?>