// Variaveis
const formAula = document.querySelector('#form-aula');
const campoTitulo = document.querySelector('#titulo-aula');
const campoConteudo = document.querySelector('#conteudo-aula');
const campoAtividade = document.querySelector('#url-atividade');
const containerAula = document.querySelector('section');

let lista = []



// Funções

function saveAula(t,c,a){

    const aula = document.createElement('div');
    aula.classList.add('card-aula');

    const tituloAula = document.createElement('h2');
    tituloAula.innerText = t;
    aula.appendChild(tituloAula);

    containerAula.appendChild(aula);
} 


// Eventos

formAula.addEventListener('submit', (e)=>{
    e.preventDefault();

    const titulo = campoTitulo.value;
    const conteudo = campoConteudo.value;
    const atividade = campoAtividade.value;

    saveAula(titulo, conteudo, atividade);
})

