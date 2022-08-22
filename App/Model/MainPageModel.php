<?php

class MainPageModel
{

    public $id;

    // Variáveis que vão armazenar os dados da tabela Carta:

    public $nome_carta, $descricao_carta, $link_imagem_carta;

    // Variáveis que vão armazenar os dados da tabela Portador:

    public $nome_portador, $link_imagem_portador;

    public $rows;

    public function GetAllRows()
    {

        include "DAO/MainPageDAO.php";

        $dao = new MainPageDAO();

        $this->rows = $dao->Select();

    }

    public function GetById(int $id)
    {

        include "DAO/MainPageDAO.php";

        $dao = new MainPageDAO();

        $dao->SelectById($id);

    }
    
}

?>