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
        
        <div class="interface">

            <?php foreach($model->rows as $item): ?>

                <div class="alternar_carta">

                    <div id="carta">

                        <img src="<?=$item->link_imagem_carta?>" alt="<?=$item->nome_carta?>">

                    </div>

                    <div class="form">

                        <form method="post" action="/search">

                            <legend id="" style="color: #FFFFFF;"> Escolha Uma das Cartas Disponíveis: </legend>

                            <br/>

                            <input id="id_carta" name="id_carta" type="number">

                            <button id="botao" type="submit"> Procurar </button>

                        </form>

                    </div>

                </div>

                <div class="informacoes">

                    <div id="definicao">

                        <p> <?= $item->descricao_carta ?> </p>

                    </div>

                    <div id="titulo">

                        <p> Portador da Carta: </p>

                    </div>

                    <div class="portador">

                        <div id="pessoa">

                            <img src="<?= $item->link_imagem_portador ?>" alt="<?= $item->nome_portador ?>">

                        </div>

                        <div id="nome_pessoa">

                            <p> <?= $item->nome_portador ?> </p>

                        </div>

                    </div>

                </div>

            <?php endforeach ?>

            <?php if(count($model->rows) == 0): ?>

                <div id="no_rows">

                    <p> Nenhum registro encontrado no sistema! </p>

                </div>

            <?php endif ?>

        </div>
        
    </body>

</html>