let aulasCadastradas = [
    {
        id : 0,
        tema: "Tema 01",
        conteudo: 'Conteudo 01',
        atividade: 'Tem sim',
        frequencia: 'Presença'
    },
    {
        id : 1,
        tema: "",
        conteudo: '',
        atividade: '',
        frequencia: ''
    },
    {
        id : 2,
        tema: "",
        conteudo: '',
        atividade: '',
        frequencia: ''
    },
    {
        id : 3,
        tema: "",
        conteudo: '',
        atividade: '',
        frequencia: ''
    },
]

// Elementos da página

const containerAula = document.querySelector('section');

function listaAulas(){
    
    const aula = document.createElement('div');
    aula.classList.add('cardAula');
    
    const tituloAula = document.createElement('h3');
    tituloAula.classList.add('titulo-aula');
    tituloAula.innerText = aulasCadastradas[0].tema;
    aula.appendChild(tituloAula);

    const conteudoAula = document.createElement('p');
    conteudoAula.classList.add('conteudo-aula');
    conteudoAula.innerText = aulasCadastradas[0].conteudo;
    aula.appendChild(conteudoAula);

    const atividadeAula = document.createElement('p');
    atividadeAula.classList.add('atividade-aula');
    atividadeAula.innerText = aulasCadastradas[0].atividade;
    aula.appendChild(atividadeAula);


    containerAula.appendChild(aula);
}