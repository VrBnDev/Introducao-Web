// Variaveis
const formAula = document.querySelector('#form-aula');
const campoTitulo = document.querySelector('#titulo-aula');
const campoConteudo = document.querySelector('#conteudo-aula');
const campoAtividade = document.querySelector('#url-atividade');

let lista = []



// Funções

function saveAula(t,c,a){
    console.log(t);
    console.log(c);
    console.log(a);
} 


// Eventos

formAula.addEventListener('submit', (e)=>{
    e.preventDefault();

    const titulo = campoTitulo.value;
    const conteudo = campoConteudo.value;
    const atividade = campoAtividade.value;

    saveAula(titulo, conteudo, atividade);
})

