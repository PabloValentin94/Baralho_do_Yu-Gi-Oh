<?php

class MainPageModel
{

    public $rows;

    public function GetByID(int $id)
    {

        include "DAO/MainPageDAO.php";

        $dao = new MainPageDAO();

        $this->rows = $dao->SelectByID($id);

        /*foreach($this->rows as $dados)
        {

            var_dump($dados->nome_carta);
            var_dump($dados->descricao_carta);
            var_dump($dados->link_imagem_carta);

            var_dump($dados->nome_portador);
            var_dump($dados->link_imagem_portador);

        }*/

        //var_dump($this->rows);

    }
    
}

?>