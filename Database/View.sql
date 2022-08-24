Create View agrupar_tabelas as

	Select car.id as id, car.nome_carta, car.descricao_carta, car.link_imagem_carta,
	por.nome_portador, por.link_imagem_portador

	From carta car

	Join Portador por on por.id = car.fk_portador;