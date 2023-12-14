
function minhaFuncao() {
    alert("Merece um dez!")
}

function raizQuadrada(num) {
    var raiz = Math.sqrt(num) 
    return alert(`A raiz quadrada de ${num} é ${raiz}`)
}

function contagem(n){  
    const containerPai = document.getElementById('desafio-02') 
 
    for(var inicio = 1; inicio <= n; inicio++){
        const numero = document.createElement('span')
        numero.classList.add('text-danger')
        numero.innerText = `${inicio} `
        containerPai.appendChild(numero)
    }
}