<?php

class MainPageModel
{

    public $rows;

    public function GetAllRows()
    {

        include "DAO/MainPageDAO.php";

        $dao = new MainPageDAO();

        $this->rows = $dao->Select();

        var_dump($this->rows);

    }
    
}

?>