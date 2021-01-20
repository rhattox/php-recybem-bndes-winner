/**
* Capturar itens do banco de dados
*/

function carregarTudo(){
	carregarItensComunidades();
	carregarItensUsuario();
}
function carregarItensUsuario(){
	//variáveis
	var itens = "", url = "dbEmpresaIndex/querryUsuario.php";

    //Capturar Dados Usando Método AJAX do jQuery
    $.ajax({
        
	    url: url,
	    cache: false,
	    dataType: "json",
	    beforeSend: function() {
		    $("h4").html("Carregando..."); //Carregando
	    },
	    error: function() {
		    $("h4").html("Há algum problema com a fonte de dados");
	    },
	    success: function(retorno) {
		    if(retorno[0].erro){
			    $("h4").html(retorno[0].erro);
		    }
		    else{
			    //Laço para criar linhas da tabela
			    for(var i = 0; i<retorno.length; i++){
				    itens += "<tr>";
				    itens += "<td>" + retorno[i].usuarioNome + "</td>";
				    itens += "<td>" + retorno[i].somaTotal + "</td>"; 
				    itens += "</tr>";
			    }
			    //Preencher a Tabela
			    $("#minhaTabelaUsuario tbody").html(itens);		    
			    //Limpar Status de Carregando
			    $("h2").html("Carregado");
		    }
	    }
    });
}
function carregarItensComunidades(){
	//variáveis
	var itens = "", url = "dbEmpresaIndex/querryComunidade.php";

    //Capturar Dados Usando Método AJAX do jQuery
    $.ajax({
        
	    url: url,
	    cache: false,
	    dataType: "json",
	    beforeSend: function() {
		    $("h4").html("Carregando..."); //Carregando
	    },
	    error: function() {
		    $("h4").html("Há algum problema com a fonte de dados");
	    },
	    success: function(retorno) {
		    if(retorno[0].erro){
			    $("h4").html(retorno[0].erro);
		    }
		    else{
			    //Laço para criar linhas da tabela
			    for(var i = 0; i<retorno.length; i++){
				    itens += "<tr>";
				    itens += "<td>" + retorno[i].comunidadeNome + "</td>";
				    itens += "<td>" + retorno[i].somaTotal + "</td>"; 
				    itens += "</tr>";
			    }
			    //Preencher a Tabela
			    $("#minhaTabelaComunidade tbody").html(itens);		    
			    //Limpar Status de Carregando
			    $("h2").html("Carregado");
		    }
	    }
    });
}