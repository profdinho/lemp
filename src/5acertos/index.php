<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			html, body {
				height: 100%;
			}
			.fill { 
				min-height: 100%;
				height: 100%;
			}
			.container-fluid {
				position: relative;
				background: #000000;
				overflow: hidden;
			}
			.container-fluid h1, h4, h5 {
				text-align: center;
				z-index: 2;
				position: relative;
				color: #EEE200;
			}			
			.container-fluid img {
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				height: auto;
				z-index: 1;
				opacity: 0.35;
			}
		</style>
		<title>5 Acertos - Tudo que você precisa mais perto do que você imagina</title>
	</head>
	<body>
		<div class="container-fluid fill">
			<img src="img/hands_office.jpg">
			<div class="row" style="height:10%">
			</div>
			<div class="row" style="height:15%">
				<div class="col-12">
					<h1>5 Acertos</h1>
				</div>
			</div>
			<div class="row" style="height:50%">
				<div class="col-12">
					<h4>
						Aguarde por uma nova experiência na busca por produtos
						e serviços em sua região!!!
					</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h5 id="frase"></h5>
				</div>
			</div>
		</div>

		<!-- JavaScript (Opcional) -->
		<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script>
			frases = new Array();
			frases[0] = "O que seu negócio precisa, mais perto do que você imagina";
			frases[1] = "Claro que o seu negócio tem jeito! Procure a 5 acertos";
			frases[2] = "Pare de errar e comece a acertar";
			frases[3] = "Está tentando entender por quê não consegue vender?";
			frases[4] = "Seu maior concorrente pode estar bem ao seu lado";
			//frases[5] = "";
			var intervalo = 5000;
			var	i = 0;
			
			function mudaFundo(valor){
				$(".container-fluid").css("background-image","url('fundo" + valor + ".png')");
			}
			
			function selecionaFrase(){
				$('#frase').fadeOut("slow");
				$('#frase').hide();
				$('#frase').html(frases[i]);
				$('#frase').fadeIn("slow");
				if(++i == frases.length) i = 0;
			}
			
			$(document).ready(function(){
				selecionaFrase();
				//Executa a função MudaTexto, no interval definido
				setInterval(selecionaFrase, intervalo);
			});
		</script>
	</body>
</html>