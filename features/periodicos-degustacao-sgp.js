$(document).ready(function() {




    // Link para retornar a fazer nova pesquisa de peripodico degustação
    $('.periodico-degustacao-nova-pesquisa').on("click", function() {
        $('.mensagem-periodico-degustacao-site').html('');
    });

    // Ao clicar no Select/Option SLC / SAM na pesquisa periódio degustação
    $('#tipo-periodico-selecionado-pesquisa-degustacao').on("click", function() {
        $('.mensagem-periodico-degustacao-site').html('');
    });

    // Ao clicar no Ano pesquisar periódico desgustação
    $('#ano-periodico-pesquisa-degustacao').on("click", function() {
        $('.mensagem-periodico-degustacao-site').html('');
    });

    // Ao clicar no Mês pesquisar periódico desgustação
    $('#mes-periodico-pesquisa-degustacao').on("click", function() {
        $('.mensagem-periodico-degustacao-site').html('');
    });


    // PERIÓDICO DEGUSTAÇÃO - Botão Formulário Pesquisa Degustação Envia Form envi periódico degustação
    $('#periodico-degustacao-pesquisar-botao').on("click", function() {

		return new Promise((resolve, reject) => {
			async function buscarPeriodicoDegustacao() {

				try { 

					$(".mensagem-periodico-degustacao-site").html('<img  width="128px" src="imagens/periodicos-degustacao/imagem_carregadodados.gif">');
                    
                    await pesquisarPeriodicosDegustacao();

                    window.location.assign("#mensagem-periodico-degustacao-site");

                    resolve();

                } catch (err) {
                    console.log('???????????????????????????? Erro click #periodico-degustacao-pesquisar-botao fc buscarPeriodicoDegustacao()fc processoCarregarPeriodicosTemasPeriodicosPesquisaDegustacao() ');
                    console.log(" \r\n\r\n -------------------------------------------- >>> Erro: "+err);
                    console.log(err.responseText);
                    
                }
            };

            buscarPeriodicoDegustacao();

        });

    });


    // FUNÇÃO: INÍCIO Pesquisar e Apresentar Periodicos Degustação
    const pesquisarPeriodicosDegustacao = () => {
        // console.log("############################### Entrou função pesquisarPeriodicosDegustacao ");

        return new Promise((resolve, reject) => {
            async function pesquisarAPIPeriodicoDegustacao() {

                try { 

                    /* Função para LER cookie  para pegar o camanhio raiz */
                    function getCookie(cName) {
                        const name = cName + "=";
                        const cDecoded = decodeURIComponent(document.cookie); //to be careful
                        const cArr = cDecoded .split('; ');
                        let res;
                        cArr.forEach(val => {
                            if (val.indexOf(name) === 0) res = val.substring(name.length);
                        })
                        return res;
                    }
                    
                    caminhoRaiz = getCookie('caminhoraiz');
                    // console.log(caminhoRaiz);

                    if(typeof caminhoRaiz == "undefined") {

                        $('.mensagem-periodico-degustacao-site').html('<label> <span class="material-symbols-outlined"> error </span> É possível que foi realizado uma limpeza de histórico ou recarregamento da página. O processo de abertura de sessão autorizada foi perdida. Volte ao processo inicial, desde a página home do site.' + '<a id="periodicos-degustacao-retornar-processo" href="index#nossos-periodicos-degustacao"> Volte ao processo aqui! </a>' + '</label>');
                        
                    }else{

                        var tipoPeriodicoSelecionado = $('#tipo-periodico-selecionado-pesquisa-degustacao option:selected').val();
                        var anoPeriodicoSelecionado = $('#ano-periodico-pesquisa-degustacao option:selected').val();
                        var mesPeriodicoSelecionado = $('#mes-periodico-pesquisa-degustacao option:selected').val();

                        var tipoPeriodicoSelecionadoTexto = $('#tipo-periodico-selecionado-pesquisa-degustacao option:selected').text();
                        var anoPeriodicoSelecionadoTexto = $('#ano-periodico-pesquisa-degustacao option:selected').text();
                        var mesPeriodicoSelecionadoTexto = $('#mes-periodico-pesquisa-degustacao option:selected').text();

                        // console.log(tipoPeriodicoSelecionado);
                        // console.log(anoPeriodicoSelecionado);
                        // console.log(mesPeriodicoSelecionado);

                        // É https://localhost/sgpsolucoes/ ou  https://www.sgpsolucoes.com.br/
                        //https://www.sgpsolucoes.com.br/crm/api/?action=1&model=periodicosdegustacao&ano=1&mes=2019
                        //https://www.sgpsolucoes.com.br/crm/api/?action=1&model=periodicosdegustacao&tipo=SLC&ano=2020&mes=03
                        const retornoAPI = await buscarAPI(caminhoRaiz + "crm/api/?action=1&model=periodicosDegustacao&tipo=" + tipoPeriodicoSelecionado + "&ano=" + anoPeriodicoSelecionado + "&mes=" + mesPeriodicoSelecionado);
                    
                        // console.log(retornoAPI);
                        


                        if(typeof retornoAPI[0].codigoerror == "undefined") { // se não voltou como código de erro
                            // console.log('não há erro'); 
                            $('.mensagem-periodico-degustacao-site').html('<label>' + '<a target="_blank" href="' + retornoAPI[0].caminhonomepdfdegustacao + '"> <span class="material-symbols-outlined"> book_5 </span> Agora você pode abrir o Periódico ' + retornoAPI[0].tipoperiodico  + ' de ' + retornoAPI[0].mesperiodico  + ' de ' + retornoAPI[0].ano  + '</a> </br> </br>'  + '<a href="#NossosPeriodicos_left__L6_r8" class="periodico-degustacao-nova-pesquisa"> <span class="material-symbols-outlined"> find_in_page </span> Retorne a realizar nova pesquisa aqui! </a>' + '</label>');

                        }else{ // voltou mensagem de erro
                            // console.log('há erro'); 
                            $('.mensagem-periodico-degustacao-site').html('<label> ' + retornoAPI[0].error  + ' (' + tipoPeriodicoSelecionadoTexto + ' de ' + mesPeriodicoSelecionadoTexto + ' de ' + anoPeriodicoSelecionadoTexto + ' ) '  + '</a> </br> </br>'  + '<a href="#NossosPeriodicos_left__L6_r8" class="periodico-degustacao-nova-pesquisa"> <span class="material-symbols-outlined"> find_in_page </span> Retorne a realizar nova pesquisa aqui! </a>' + '</label>');
                        
                        }
                    }

                    resolve();

                } catch (err) {
                    console.log(" \r\n\r\n -------------------------------------------- >>> Erro: "+err);
                    console.log(err.responseText);
                }
            
            };	

            pesquisarAPIPeriodicoDegustacao();

        });
    }
    // FUNÇÃO: FIM  Pesquisar e Apresentar Periodicos Degustação



    // FUNÇÃO: INÍCIO Buscar API
    const buscarAPI = (caminhoAPI) => {
        // console.log("##################### Excecutnado API buscarAPI fetch");
        // console.log(caminhoAPI);
        return new Promise((resolve,reject) => {

            async function processarBuscaAPI() {
                                    
                try {
                    fetch(caminhoAPI)
                    .then(response => response.json())
                    .then(retornoAPI => {
                        // console.log(retornoAPI);
                        resolve(retornoAPI);
    
                    })
                } catch (err) {
                    
                    console.log(" \r\n\r\n -------------------------------------------- >>> Erro: "+err);
                    console.log(err.responseText);
                    
                }

            };

            processarBuscaAPI();    

        });
    }
    // FUNÇÃO: FIM Buscar API

    // Extrair uma data dia, mês, ano, hora, minutos, segundos e coloca em um objeto
    const extrairDataHora = (dataHora) => {
        dia = dataHora.getDate().toString().padStart(2,'0');
        mes = ((dataHora.getMonth())+1).toString().padStart(2,'0');
        ano = dataHora.getFullYear().toString().padStart(4,'0');
        hora = dataHora.getHours().toString().padStart(2,'0');
        minutos = dataHora.getMinutes().toString().padStart(2,'0');
        segundos = dataHora.getMilliseconds().toString().padStart(2,'0');

        switch(mes) {

            case '01':
                mesExtenso = "Janeiro";
                break;
            case '02':
                mesExtenso = "Fevereiro";
                break;      
            case '03':
                mesExtenso = "Março";
                break;
            case '04':
                mesExtenso = "Abril";
                break;                  
            case '05':
                mesExtenso = "Maio";
                break;
            case '06':
                mesExtenso = "Junho";
                break;  
            case '07':
                mesExtenso = "Julho";
                break;
            case '08':
                mesExtenso = "Agosto";
                break;      
            case '09':
                mesExtenso = "Setembro";
                break;
            case '10':
                mesExtenso = "Outubro";
                break;                  
            case '11':
                mesExtenso = "Novembro";
                break;
            case '12':
                mesExtenso = "Dezembro";
                break;                    

        }

        retornoDataHora = {'dia':dia,'mes':mes,'ano':ano,'hora':hora,'minutos':minutos,'segundos':segundos,'mesextenso':mesExtenso};

        return retornoDataHora;


    }

    //  Deixa como seleção padrão mes ano atual para pesquisa de  periódico desgustação no select/option
    const configurarSelectedMesAnoDesgutacao = () => {

        const dataAtual = new Date();

    
        retornoDataAtual = extrairDataHora(dataAtual); // Extrair uma data dia, mês, ano, hora, minutos, segundos e coloca em um objeto
    
        // console.log(retornoDataAtual.mes);
        // console.log(retornoDataAtual.ano);
    
        $("#mes-periodico-pesquisa-degustacao").find("option[value=" + retornoDataAtual.mes + "]").attr("selected", true); // Procura/find na lista de option o que é igual e seleciona/selected
        $("#ano-periodico-pesquisa-degustacao").find("option[value=" + retornoDataAtual.ano + "]").attr("selected", true); // Procura/find na lista de option o que é igual e seleciona/selected
        
    }

    configurarSelectedMesAnoDesgutacao();

});    