function criterioPesquisa(){
	var criterio_pesquisa = $("#criterio_pesquisa").val();
	if (criterio_pesquisa === "1" || criterio_pesquisa === ""){
		$("#criterio_pesquisa_texto").attr("placeholder", "Digite o nome");
		$("#id_pesquisa").val("1");
	}
	if (criterio_pesquisa === "2"){
		$("#criterio_pesquisa_texto").attr("placeholder", "Digite o CPF");
		$("#id_pesquisa").val("2");
	}
}