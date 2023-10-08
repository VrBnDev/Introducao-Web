const meuBotao = document.querySelector('#botao-estilo');

let botao = false;

function ligarEstilo() {
    if (botao){
        botao = false;
        const apagaEstilo = document.querySelector('.estilo');
        apagaEstilo.parentNode.removeChild(apagaEstilo);
    } else {
        botao = true;
        const elementoLink = document.createElement('link');
        elementoLink.setAttribute('rel', 'stylesheet');
        elementoLink.setAttribute('href', 'css/style.css');
        elementoLink.classList.add('estilo');
        document.head.appendChild(elementoLink)
    }
}