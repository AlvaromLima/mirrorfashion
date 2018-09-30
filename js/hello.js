	// alert("Olá, Mundo!");

	var mensagem = "olá, mundo!";
	console.log(mensagem);

	function mostraAlerta(){
		alert("Funciona!");
	}
	
	var titulo = document.querySelector("button");
	
	titulo.onclick = mostraAlerta;