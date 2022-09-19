<?php

// Namespace ao qual este arquivo pertence.

namespace App\Controller;

// Namespaces que serão usados neste arquivo.

use App\Model\MainPageModel;

class MainPageController
{

    static public function Index()
    {

        include "Model/MainPageModel.php";

        $model = new MainPageModel();

        $model->GetByID($model->id);

        include "View/Modules/MainPage.php";

    }

    static public function Search()
    {

        include "Model/MainPageModel.php";

        $model = new MainPageModel();

        //$model->id = $_POST['id_carta'];

        $model->id = $_POST['valor_botao'];

        $model->Search($model->id);

        //var_dump($model->id);

        include "View/Modules/MainPage.php";
        
    }

}

?>
