let pacotesViagens = [
    {
        id:0,
        destino: 'Campos do Jordão - 2023',
        img: 'assets/imagens/campos-do-jordao.png',
        duracao: 'Duração: 3 dias | 2 noites',
        incluso: ['Hospedagem 4 estrelas', 'Café da Manhã', 'Passeio pelo Horto Florestal', 'Visita ao Palácio Boa Vista', 'Translado São Paulo/Campos do Jordão'],
        preco: 'R$ 1.500,00 / pessoa'
    },
    {
        id:1,
        destino: 'Pacote Maragogi - 2023',
        img: 'assets/imagens/maragogi.png',
        duracao: 'Duração: 7 dias | 6 noites',
        incluso: ['Hospedagem à beira-mar', 'Passagens de ida e volta', 'Translado Aeroporto/Resort', 'Café da manhã no resort', 'Passeios de Buggy'],
        preco: 'R$ 5.500,00 / pessoa'
    },
    {
        id:2,
        destino: 'Trancoso - 2023',
        img: 'assets/imagens/trancoso.png',
        duracao: 'Duração: 5 dias | 4 noites',
        incluso: ['Hospedagem em pousada', 'Café da Manhã', 'Passeios (Praias Coqueiros e Espelho)', 'Jantar em restaurante local', 'Translado Porto Seguro/Trancoso'],
        preco: 'R$ 2.800,00 / pessoa'
    },
    {
        id:3,
        destino: 'Sítio do Bosco - 2023',
        img: 'assets/imagens/sitio-do-bosco.png',
        duracao: 'Duração: 3 dias | 2 noites',
        incluso: ['Hospedagem em Glamping', 'Café da manhã, almoço e jantar', 'Trilhas e passeios', 'Noite de fogueira com música ao vivo', 'Voo livre'],
        preco: 'R$ 1.200,00 / pessoa'
    },
]

const containerPctViagens = document.querySelector('.container-pacote-viagem');


function pctViagens(){
    pacotesViagens.forEach(item => {
        
        const containerPct = document.createElement('div');
        containerPct.classList.add('card-pacote-viagem');
        
        const imagemCard = document.createElement('img');
        imagemCard.classList.add('imagem-pacote');
        imagemCard.src = item.img;
        
        const tituloCard = document.createElement('h2');
        tituloCard.classList.add('titulo-card');
        tituloCard.innerText = item.destino;
    
        const subtituloCard = document.createElement('h3');
        subtituloCard.classList.add('subtitulo-card');
        subtituloCard.innerText = 'Inclui:';
        
        
        const subtituloInclusoCard = document.createElement('h3');
        subtituloInclusoCard.classList.add('subtitulo-card');
        subtituloInclusoCard.innerText = item.duracao;
    
        const inclusoCard = document.createElement('ul');
        inclusoCard.classList.add('lista-card');
        const lista = item.incluso;
        lista.forEach(item => {
            const itemIncluso = document.createElement('li');
            itemIncluso.classList.add('item-lista');
            itemIncluso.innerHTML = '<i class="fa-solid fa-signs-post icone"></i>'+ item;
            inclusoCard.appendChild(itemIncluso);
        });
    
        const divCard = document.createElement('div');
        divCard.classList.add('rodape-card');
        
        const precoCard = document.createElement('h3');
        precoCard.classList.add('preco-pacote');
        precoCard.innerText = item.preco;
    
        const botaoCard = document.createElement('button');
        botaoCard.src = ''
        botaoCard.classList.add('botao-adquirir');
        botaoCard.innerText = 'Adquirir pacote';
    
        divCard.appendChild(precoCard)
        divCard.appendChild(botaoCard)
    
        containerPct.appendChild(imagemCard);
        containerPct.appendChild(tituloCard);
        containerPct.appendChild(subtituloInclusoCard);
        containerPct.appendChild(subtituloCard);
        containerPct.appendChild(inclusoCard);
        containerPct.appendChild(divCard);
        containerPctViagens.appendChild(containerPct);
        
    });
}