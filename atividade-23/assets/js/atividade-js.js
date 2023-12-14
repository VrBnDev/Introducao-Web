
function minhaFuncao() {
    alert("Merece um dez!");
}

function raizQuadrada(num) {
    var raiz = Math.sqrt(num); 
    return alert(`A raiz quadrada de ${num} é ${raiz}`);
}

function contagem(n){  
    const containerPai = document.getElementById('desafio-02'); 
    const container = document.createElement('div');
    container.classList.add('resultado');

    for(var inicio = 1; inicio <= n; inicio++){
        const numero = document.createElement('span');
        numero.classList.add('text-danger');
        numero.innerText = `${inicio} `;
        container.appendChild(numero);
    }
    containerPai.appendChild(container);
}

function limparContagem() {
    const containerPai = document.getElementById('desafio-02');
    const elementoASerRemovido = containerPai.querySelector('div');
    
    if (elementoASerRemovido) {
        containerPai.removeChild(elementoASerRemovido);
    } else {
        console.log('Elemento <span> não encontrado.');
    }
}

function escreve(arg) {
    document.write(arg);
}

function escreveModal() {
    var texto = prompt('Digite aqui o que você quer escrever na modal');

    if (texto) {
        const modalBody = document.querySelector('.modal-body'); 

        const resposta = document.createElement('p');
        resposta.classList.add('text-center')
        resposta.innerText = texto;

        modalBody.appendChild(resposta);
    }
}
