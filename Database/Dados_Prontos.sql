-- Inserções:

Insert Into portador(nome_portador, link_imagem_portador) Values("Yugi Muto", "View/Modules/Images/Portadores/Yugi_Muto.png");

Insert Into Carta(nome_carta, descricao_carta, link_imagem_carta, fk_portador) 
Values("Mago Negro", 
"Mago Negro é um dos personagens da série Yu-Gi-Oh! e a carta assinatura de Monstros de Duelo de Yugi.", 
"View/Modules/Images/Baralhos/Yugi_Muto/Mago_Negro.jpg", 
1);

Insert Into portador(nome_portador, link_imagem_portador) Values("Seto Kaiba", "View/Modules/Images/Portadores/Seto_Kaiba.png");

Insert Into Carta(nome_carta, descricao_carta, link_imagem_carta, fk_portador) 
Values("Dragão Branco de Olhos Azuis", 
"Dragão Branco de Olhos Azuis é um dos personagens da série Yu-Gi-Oh! e a carta assinatura de Monstros de Duelo de Kaiba.", 
"View/Modules/Images/Baralhos/Seto_Kaiba/Dragao_Branco_de_Olhos_Azuis.jpg", 
2);

Insert Into portador(nome_portador, link_imagem_portador) Values("Joe Wheeler", "View/Modules/Images/Portadores/Joe_Wheeler.png");

Insert Into Carta(nome_carta, descricao_carta, link_imagem_carta, fk_portador) 
Values("Dragão Negro de Olhos Vermelhos", 
"Dragão Negro de Olhos Vermelhos é um dos personagens da série Yu-Gi-Oh! e a carta assinatura de Monstros de Duelo de Joe.", 
"View/Modules/Images/Baralhos/Joe_Wheeler/Dragao_Negro_de_Olhos_Vermelhos.jpg", 
3);

-- Visualização:

Select * From agrupar_tabelas;