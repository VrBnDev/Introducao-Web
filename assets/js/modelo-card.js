// Variaveis
const container_aulas = document.querySelector('#container-aulas');
const titleInput = document.querySelector('#titulo-aula')
const adicionar = document.querySelector('#botao-add')

// Funções

const saveAula = (text) => {

    const aula = document.createElement('div')
    aula.classList.add("aula")

    const tituloAula = document.createElement('h3')
    tituloAula.innerText = text

    aula.appendChild(tituloAula)
    console.log(aula)
}


// Eventos

adicionar.addEventListener('click', (a)=>{
    a.preventDefault(); //serve para não recarregar a página ao submeter form
    
    const inputValue = titleInput.value;

    if(inputValue){
        saveAula(text);
    }
})

