<?php

class MainPageController
{

    static public function Index()
    {

        include "Model/MainPageModel.php";

        $model = new MainPageModel;

        $model->GetAllRows();

    }

}

?>