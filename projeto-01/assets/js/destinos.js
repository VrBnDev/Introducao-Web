let pacotesViagens = [
    {
        id:0,
        destino: 'Pacote Maragogi - 2023',
        img: 'assets/imagens/maragogi.png',
        duracao: 'Duração: 7 dias | 6 noites',
        incluso: ['Hospedagem à beira-mar', 'Passagens de ida e volta', 'Translado Aeroporto/Resort', 'Café da manhã no resort', 'Passeios de Buggy'],
        preco: 'R$ 5.500,00'
    },
    {
        id:1,
        destino: 'Trancoso',
        img: 'assets/imagens/trancoso.png'
    },
    {
        id:2,
        destino: 'Campos do Jordão',
        img: 'assets/imagens/campos-do-jordao.png'
    }
]

const containerPctViagens = document.querySelector('.container-pacote-viagem');


function pctViagens(){

    const containerPct = document.createElement('div');
    containerPct.classList.add('card-pacote-viagem');
    
    const imagemCard = document.createElement('img');
    imagemCard.classList.add('imagem-pacote');
    imagemCard.src = pacotesViagens[2].img;
    
    const tituloCard = document.createElement('h2');
    tituloCard.classList.add('titulo-card');
    tituloCard.innerText = pacotesViagens[2].destino;

    const subtituloCard = document.createElement('h3');
    subtituloCard.classList.add('subtitulo-card');
    subtituloCard.innerText = pacotesViagens[0].duracao;
    
    const inclusoCard = document.createElement('ul');
    inclusoCard.classList.add('subtitulo-card');
    inclusoCard.innerText = pacotesViagens[0].incluso;

    containerPct.appendChild(imagemCard);
    containerPct.appendChild(tituloCard);
    containerPct.appendChild(subtituloCard);
    containerPct.appendChild(inclusoCard);
    containerPctViagens.appendChild(containerPct);
    
}