-- Inserções:

insert into portador(nome_portador, link_imagem_portador) values("Yugi Muto", "View/Modules/Images/Portadores/Yugi_Muto.png");

insert into Carta(nome_carta, descricao_carta, link_imagem_carta, fk_portador) 
values("Mago Negro", 
"Mago Negro é um dos personagens da série Yu-Gi-Oh! e a carta assinatura de Monstros de Duelo de Yugi.", 
"View/Modules/Images/Baralhos/Yugi_Muto/Mago_Negro.jpg", 
1);

insert into portador(nome_portador, link_imagem_portador) values("Seto Kaiba", "View/Modules/Images/Portadores/Seto_Kaiba.png");

insert into Carta(nome_carta, descricao_carta, link_imagem_carta, fk_portador) 
values("Dragão Branco de Olhos Azuis", 
"Dragão Branco de Olhos Azuis é um dos personagens da série Yu-Gi-Oh! e a carta assinatura de Monstros de Duelo de Kaiba.", 
"View/Modules/Images/Baralhos/Yugi_Muto/Mago_Negro.jpg", 
2);

insert into portador(nome_portador, link_imagem_portador) values("Joe Wheeler", "View/Modules/Images/Portadores/Joe_Wheeler.png");

insert into Carta(nome_carta, descricao_carta, link_imagem_carta, fk_portador) 
values("Dragão Negro de Olhos Vermelhos", 
"Dragão Negro de Olhos Vermelhos é um dos personagens da série Yu-Gi-Oh! e a carta assinatura de Monstros de Duelo de Joe.", 
"View/Modules/Images/Baralhos/Yugi_Muto/Mago_Negro.jpg", 
3);

-- Visualização:

select car.nome_carta, car.descricao_carta, car.link_imagem_carta, 
por.nome_portador, por.link_imagem_portador 

from carta car

Join portador por on por.id = car.fk_portador;