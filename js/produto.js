/*
	Programa: produto.js (Javascript do produto.php)
	Nome: Alvaro Luis M de Lima
	Descrição: Mostra tamanho escolhido no slider.
*/
	var inputTamanho = document.querySelector('[name=tamanho]');
	var outputTamanho = document.querySelector('[name=valortamanho]');

	function mostraTamanho(){
		outputTamanho.value = inputTamanho.value;
		outputTamanho.textContent = event.target.value;
	}
	
	inputTamanho.oninput = mostraTamanho;
	inputTamanho.onchange = mostraTamanho;
	
