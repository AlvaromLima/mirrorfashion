/*
	Função: TrocaBanner
	Autor: Alvaro 
	Descrição: Troca banner em 4 e 4 segundos
*/

	var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
	var bannerAtual = 0;
	
	function trocaBanner(){
		bannerAtual = (bannerAtual + 1) % 2;
		document.querySelector(".destaque img").src = banners[bannerAtual];
	}
	
	timer = setInterval(trocaBanner, 4000);
	