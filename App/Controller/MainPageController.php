<?php

class MainPageController
{

    /*static public function Index()
    {

        include "Model/MainPageModel.php";

        $model = new MainPageModel();

        $model->GetAllRows();

        include "View/Modules/MainPage.php";

    }*/

    static public function Change_Card()
    {

        include "Model/MainPageModel.php";

        $model = new MainPageModel();

        $_POST["descricao_carta"] = $model->descricao_carta;

        include "View/Modules/MainPage.php";

    }

}

?>