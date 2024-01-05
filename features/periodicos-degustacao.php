<?php
	if(!isset($_SESSION)) {
		session_start();
	}else{
        unset($_SESSION);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-6JE9MQ9LZC"></script>

	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-6JE9MQ9LZC');
	</script>

	<!--  <base href="https://www.sgpsolucoes.com.br/" />-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Periódicos Degustação SGP Soluções</title>

	<meta name="robots" content="index,follow">
	<meta name="revisit-after" content="1 days"/>
	<meta name="distribution" content="global"/>
	<meta name="content-language" content="pt" />
	<meta name="rating" content="General" />
	<meta name="expires" content="never" />
	<meta name="geography" content="São Paulo - Brasil"/>

	<meta name="city" content="São Paulo"/>
	<meta name="country" content="Brasil"/>

	<meta name="author" content="by Tech Solutions - Soluções em TI">
	<meta name="publisher" content="https://www.bytechsolutions.com.br" />
	<meta name="copyright" content="by Tech Solutions"/>
	<meta name="reply-to" content="comercial@bytechsolutions.com.br">

	<link rel=”alternate” href=”https://www.sgpsolucoes.com.br/” hreflang=”pt-br” />

	<!--  <link href="https://www.sgpsolucoes.com.br/" rel="canonical" />-->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-webp" href='imagens/cabecalho/logoiconenavega.webp' />

	<link rel="stylesheet" type="text/css" href='css/css-cabecalho-home-site.css'>
		<link rel="stylesheet" type="text/css" href='css/css-rodape-home-site.css'>
	<!--<link rel="stylesheet" type="text/css" href='css/css-home-site.css'>-->
	<!--<link rel="stylesheet" type="text/css" href='css/css-login-site.css'>-->
	<link rel="stylesheet" type="text/css" href='css/css-periodicos-degustacao-site.css'>
	


	<link rel="stylesheet" href='css/bootstrap.css'>
	<link rel="stylesheet" href='css/bootstrap.min.css'>

	<link rel="stylesheet" href='css/bootstrap-grid.css'>
	<link rel="stylesheet" href='css/bootstrap-grid.min.css'>
	<link rel="stylesheet" href='css/bootstrap-reboot.css'>
	<link rel="stylesheet" href='css/bootstrap-reboot.min.css'>         

	<!-- JQUERY versão 3.4.1 completa -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<!-- Bootstrap versão 4 completa -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

		<!-- Buscando da nuvem CSS e JS Bootstrap versão 5 completa -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


	<!-- FONTAWESOME para pegar icones -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	<!-- Buscando da nuvem Fontes Google -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />






	<!-- Arquivo js LOGIN -->
	<script src='js/login-sgp.js'></script>
	<script src='js/periodicos-degustacao-sgp.js'></script>

	<!-- Arquivo js ASSINANTES
	<script src='js/assinantes-sgp.js'></script>-->

	<!-- BTS Arquivos do sistema -->
	<script src='js/funcoes_ambientesistema.js' ?>></script>
	
	<!-- Cria variável global javascript através da variável $caminhoforminstancias que se encontra no arquivo classe_ambientesistema.php  'urlraizsite' => string 'https://localhost/sgpsolucoes/'  -->   
	<script> //var caminhoforminstancias = <?php //echo $_SESSION['urlraizsite'] ?>"; </script>



</head>
	<body>
		
		<div class="container-fluid col-sm-12 mt-0 mb-0 ml-0 mr-0 pl-0 pr-0" id="periodicos-degustacao-pagina">


			<!-- ******** INÍCIO CABECALHO MENU SECTION  INCLUDE -->
			<section style="z-index: 10;" class="row col-sm-12 ml-0 mr-0 mt-1 mb-2 pl-0 pr-0 periodicos-degustacao-cabecalho-section" id="periodicos-degustacao-cabecalho-section">
				<!-- INÍCIO: Cabeçaho include * -->
				<?php include "cabecalho-padrao-site.php";?>			
			</section>
			<!-- ******** FIM CABECALHO MENU SECTION  INCLUDE -->
			
			<!-- banner da página -->
			<div id="NossosPeriodicos_content__HyHPQ" class="NossosPeriodicos_content__HyHPQ">
				
				<div class="NossosPeriodicos_bluredBall__4COSk">
				</div>
				<div id="NossosPeriodicos_headerContent__DbetY" class="NossosPeriodicos_headerContent__DbetY">
					<h1>Nossos periódicos</h1>
					<hr>
					<p> Edição reduzida para degustação.</p>
				</div>
			</div>




			<!-- Pesquisa Periódico -->
			<div class="NossosPeriodicos_pageSize__MLBde">
				<div class="NossosPeriodicos_periodicos__KPpMy">
					<div id="NossosPeriodicos_left__L6_r8" class="NossosPeriodicos_left__L6_r8">
						<h2>Assinale as opções</h2>
						<div class="NossosPeriodicos_dropdowns__Ys4TN">
							<div class="NossosPeriodicos_individual__dw5hE">

							


							<label for="tipo-periodico-selecionado-pesquisa-degustacao"> Periódico: </label>
								<select class="form-select periodico-degustacao-select" id="tipo-periodico-selecionado-pesquisa-degustacao" name="tipo-periodico-selecionado-pesquisa-degustacao" aria-label="Floating label select example">
									<option value="01">SLC</option>
									<option value="02">SAM</option>
								</select>
							</div>
							<div class="NossosPeriodicos_individual__dw5hE">
								<label for="ano-periodico-pesquisa-degustacao">Ano:</label>
								<select class="form-select periodico-degustacao-select" id="ano-periodico-pesquisa-degustacao" name="ano-periodico-pesquisa-degustacao" aria-label="Floating label select example">
								<?php
									// Obtenha o ano atual
									$anoAtual = date("Y");

									// Adicione opções automaticamente com base no ano atual até 2018
									for ($ano = $anoAtual; $ano >= 2018; $ano--) {
										echo "<option value=\"$ano\">$ano</option>";
									}
									?>
								</select>
							</div>

							<div class="NossosPeriodicos_individual__dw5hE">
								<label for="mes-periodico-pesquisa-degustacao">Mês</label>
								<select class="form-select periodico-degustacao-select" id="mes-periodico-pesquisa-degustacao" name="mes-periodico-pesquisa-degustacao" aria-label="Floating label select example">
									<option value="01">Janeiro</option>
									<option value="02">Fevereiro</option>
									<option value="03">Março</option>
									<option value="04">Abril</option>
									<option value="05">Maio</option>
									<option value="06">Junho</option>
									<option value="07">Julho</option>
									<option value="08">Agosto</option>
									<option value="09">Setembro</option>
									<option value="10">Outubro</option>
									<option value="11">Novembro</option>
									<option value="12">Dezembro</option>															
								</select>
							</div>
						</div>

						<div class="NossosPeriodicos_button__PQiiP">
							<button id="periodico-degustacao-pesquisar-botao" color="darkBlue" title="Pesquisar periódico" class="Button_button__OFOdO Button_buttonColorDarkBlue__YAotb">Pesquisar periódico

							</button>
						</div>


					</div>




					<div class="NossosPeriodicos_right__sg_lH">
						<div id="NossosPeriodicos_slc__273z7" class="NossosPeriodicos_slc__273z7">
							<!--<img alt="Solução em Licitações e Contratos" loading="lazy" width="384" height="292" decoding="async" data-nimg="1" class="imgOnHover" srcset="/_next/image?url=%2Fimages%2Fnossos-periodicos%2Fslc.webp&amp;w=384&amp;q=75 1x, /_next/image?url=%2Fimages%2Fnossos-periodicos%2Fslc.webp&amp;w=828&amp;q=75 2x" src="/_next/image?url=%2Fimages%2Fnossos-periodicos%2Fslc.webp&amp;w=828&amp;q=75" style="color: transparent;">--> 
							<span><strong>SLC - </strong>SOLUÇÃO em LICITAÇÕES e CONTRATOS</span>
						</div>
						<div id="NossosPeriodicos_sam__fvuJT" class="NossosPeriodicos_sam__fvuJT">
							<!--<img alt="Solução em direito administrativo e municipal" loading="lazy" width="384" height="292" decoding="async" data-nimg="1" class="imgOnHover" srcset="/_next/image?url=%2Fimages%2Fnossos-periodicos%2Fsam.webp&amp;w=384&amp;q=75 1x, /_next/image?url=%2Fimages%2Fnossos-periodicos%2Fsam.webp&amp;w=828&amp;q=75 2x" src="/_next/image?url=%2Fimages%2Fnossos-periodicos%2Fsam.webp&amp;w=828&amp;q=75" style="color: transparent;">-->
							<span><strong>SAM - </strong>SOLUÇÃO em DIREITO ADMINISTRATIVO e MUNICIPAL</span>
						</div>
					</div>

				</div>

				<div id="mensagem-periodico-degustacao-site" class="mensagem-periodico-degustacao-site">

				</div>

			<!-- banner corpo texto -->
			<div class="NossosPeriodicos_principaisSolucoesInovadoras__YoQv5">
				<div class="NossosPeriodicos_bluredBall__4COSk">
				</div>
				<div class="NossosPeriodicos_descricao__qq1ka">
					<h1>Conheça nossas principais Soluções Inovadoras</h1>
					<button color="blue" title="Conheça agora!" class="Button_button__OFOdO Button_buttonColorBlue__J8Eyl">Conheça agora!

					</button>
					<div>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 3.5h6a4 4 0 014 4v14a3 3 0 00-3-3H2v-15z"></path><path stroke="#ffffff" stroke-linecap="round" stroke-width="1.5" d="M22 3.5h-6a4 4 0 00-4 4v14a3 3 0 013-3h7v-15z"></path></svg>
						<span>Caso queira saber mais sobre a empresa SGP Soluções em Gestão Pública entre em contato através de nossos canais de atendimento.</span>
					</div>


				</div>




			</div>

			
				<!-- banner corpo imagem -->
				<div class="efeito-zoom-out NossosPeriodicos_imagem__GuPEV">
					<!--<img alt="Homem aprensentando as principais soluções inovadoras" loading="lazy" width="412" height="433" decoding="async" data-nimg="1" class="imgOnHover" srcset="/_next/image?url=%2Fimages%2Fnossos-periodicos%2Fhomem-apontando.webp&amp;w=640&amp;q=75 1x, /_next/image?url=%2Fimages%2Fnossos-periodicos%2Fhomem-apontando.webp&amp;w=828&amp;q=75 2x" src="/_next/image?url=%2Fimages%2Fnossos-periodicos%2Fhomem-apontando.webp&amp;w=828&amp;q=75" style="color: transparent;">-->
				</div>






			</div>









			<!-- ******** INÍCIO RODAPÉ MENU SECTION  INCLUDE -->
			<section class="col-sm-12 ml-0 mr-0 pl-0 pr-0 mt-0 pt-0" id="periodicos-degustacao-rodape">
			 	<?php include "rodape-padrao-site.php"?>
			</section>
			<!-- ******** FIM RODAPÉ MENU SECTION  INCLUDE -->

		</div>

		
	</body>
</html>