<?php

class MainPageController
{

    static public function Index()
    {

        include "Model/MainPageModel.php";

        $model = new MainPageModel;

        $model->GetByID(1);

        include "View/Modules/MainPage.php";

    }

    static public function Proxima_Carta()
    {

        

    }

}

?>