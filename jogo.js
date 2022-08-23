var contaErros   = 0;
var contaAcertos = 0;

let jogador = {
    vida: 100,
    poder: 20
}

let adversario = {
    vida: 100,
    poder: 20
}
var pontos =0;

const restart = () => {
    $("#vidaJogador").css('width','100%');
    $("#vidaAdversario").css('width','100%');
    $("#vidaJogador").css("background-color", "green");
    $("#vidaAdversario").css("background-color", "green");
    jogador.vida    = 100;
    adversario.vida = 100;
    contaErros   = 0;
    contaAcertos = 0;
    telaJogo();
    {ids : ""};
}

var idOptionCorreta;
   
function getRadioValor(name){
    var rads = document.getElementsByName(name);
     
    for(var i = 0; i < rads.length; i++){
        if(rads[i].checked){
            return rads[i];
        }
    }
     
    return null;
}

const buscarProximaPergunta = () => {
    $.post(
        'consulta.php',
        {ids: ids},
        function(data){
            document.getElementById('texto').innerText = data.texto;

            var idOptions = ['al', 'bl', 'cl', 'dl'];            
            
            var idOption = idOptions.splice(Math.floor(Math.random() * idOptions.length), 1);
            idOptionCorreta = idOption;
            document.getElementById(idOption).innerText = data.alternativa_correta;

            var idOption = idOptions.splice (Math.floor(Math.random() * idOptions.length), 1);
            document.getElementById(idOption).innerText = data.alternativa_e1;

            var idOption = idOptions.splice (Math.floor(Math.random() * idOptions.length), 1);
            document.getElementById(idOption).innerText = data.alternativa_e2;

            var idOption = idOptions.splice (Math.floor(Math.random() * idOptions.length), 1);
            document.getElementById(idOption).innerText = data.alternativa_e3;

            ids.push(data.id);
        },
        'json'
    );
}
    document.getElementById('restart-button').hidden = true;
const atack = () => {  
    let atackButton = document.getElementById('atack-button');
    let mensagem = document.getElementById('mensagem');
    AtackJogador();
    telaJogo();
    if(jogador.vida <= 50){
        $("#vidaJogador").css("background-color", "yellow");
    }
    if(adversario.vida <= 50){
        $("#vidaAdversario").css("background-color", "yellow");
    }
    if(jogador.vida <= 25){
        $("#vidaJogador").css("background-color", "red");
    }
    if(adversario.vida <= 25){
        $("#vidaAdversario").css("background-color", "red");
    }
    atackButton.hidden = true; 
    if(adversario.vida <= 0){
        pontos = (contaAcertos*5)-(contaErros*3);
        mensagem.innerText = "Você Ganhou!! Total de Pontos: "+pontos+" Acertou: " +contaAcertos+" e Errou: "+contaErros;
        atackButton.hidden = true; 
        document.getElementById('restart-button').hidden = false;
    }
    else{
        atackButton.hidden = true; 
        mensagem.innerText = "Turno do Oponente";
        setTimeout(() => {
            if(jogador.vida <= 0){
                pontos = (contaAcertos*5)-(contaErros-3);
                mensagem.innerText = "Você Perdeu!! Total de Pontos: "+pontos+" Acertou: " +contaAcertos+" e Errou: "+contaErros;
                atackButton.hidden = true; 
                document.getElementById('restart-button').hidden = false;
            }
            else{
                atackButton.hidden = false;
                mensagem.innerText = "Seu Turno";
                buscarProximaPergunta();
            }
        }, 3000);
        
       

        var newForm = jQuery('<form>', {
            'action': 'http://www.google.com/search',
            'target': '_top'
        });
        newForm.append(jQuery('<input>', {
            'name': 'acertos',
            'value': contaAcertos,
            'type': 'hidden'
        }));
        newForm.append(jQuery('<input>', {
            'name': 'erros',
            'value': contaErros,
            'type': 'hidden'
        }));
        newForm.submit();
    }
}

function AtackJogador(){
    var elementoMarcado =  getRadioValor('alternativa');
    $('atack-button').hide(true);
    if(idOptionCorreta == elementoMarcado.id + 'l'){
        let ataqueJogador = Math.floor(Math.random() * (jogador.poder - 5)) + 5;  
        adversario.vida -= ataqueJogador;
        $("#vidaAdversario").css('width', adversario.vida +'%');
        contaAcertos++;
        setTimeout(() => {
            $("#figuraInimigo").attr('src', 'Img/rafael.gif');
            $("#figuraJogador").attr('src', 'Img/vitor.gif');
            
        }, 2000);
        $("#figuraInimigo").attr('src', 'Img/rafaelts2.gif');
        $("#figuraJogador").attr('src', 'Img/vitords.gif');
        
        telaJogo();
    }
    else{
        let ataqueAdversario = Math.floor(Math.random() * (adversario.poder - 5)) + 5;
        jogador.vida -= ataqueAdversario;
        $("#vidaJogador").css('width', jogador.vida +'%');
        contaErros++;
        setTimeout(() => {
            $("#figuraJogador").attr('src', 'Img/vitor.gif');
            $("#figuraInimigo").attr('src', 'Img/rafael.gif');
        }, 2000);
        $("#figuraJogador").attr('src', 'Img/vitorts.gif');
        $("#figuraInimigo").attr('src', 'Img/rafaelds.gif');
        telaJogo();

    }
}

function AtackAdversario(){
    let ataqueAdversario = Math.floor(Math.random()* adversario.poder);
    jogador.vida -= ataqueAdversario;
}

const telaJogo =() =>{
    document.getElementById('vidaJo').innerText = jogador.vida;
    document.getElementById('vidaA').innerText = adversario.vida;   
    document.getElementById('restart-button').hidden = true;
    document.getElementById('atack-button').hidden   = false;
}

var ids=[];

telaJogo();