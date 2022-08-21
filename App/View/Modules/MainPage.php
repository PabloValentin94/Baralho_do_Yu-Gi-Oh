<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="View/Modules/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="View/Modules/CSS/Styles.css">

        <title> Yu-Gi-Oh </title>

    </head>

    <body>

    <?php foreach($model->rows as $item) ?>
        
        <div class="interface">

            <div class="alternar_carta">

                <div id="carta">

                    <img src="<?php $item->link_imagem_carta ?>">

                </div>

                <div class="botoes">

                    <button id="botao"> Anterior </button>

                    <button id="botao"> Próxima </button>

                </div>

            </div>

            <div class="informacoes">

                <div id="definicao">

                    <p> <?php $item->descricao_carta ?> </p>

                </div>

                <div id="titulo">

                    <p> Portador da Carta: </p>

                </div>

                <div class="portador">

                    <div id="pessoa">

                        <img src="<?php $item->link_imagem_portador ?>" alt="<?php $item->nome_portador ?>">

                    </div>

                    <div id="nome_pessoa">

                        <p> <?php $item->nome_portador ?> </p>

                    </div>

                </div>

            </div>

        </div>
        
    </body>

</html>