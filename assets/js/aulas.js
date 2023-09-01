let aulasCadastradas = [
    {
        id : 0,
        tema: "Arquitetura Cliente-Servidor",
        conteudo: 'A Arquitetura Cliente-Servidor divide sistemas em cliente e servidor. O cliente requisita serviços e o servidor os fornece, através de comunicação em rede. Amplamente presente em aplicações web e bancos de dados, oferece escalabilidade, manutenção simplificada e segurança de dados melhorada. - Chat GPT',
        atividade: 'Desafio #01 - Alterar projeto',
        url: 'atividade-01/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id : 1,
        tema: "Git Pages",
        conteudo: 'GitHub Pages é um serviço hospedagem para sites estáticos do GitHub. Permite criar sites de repositórios Git, ótimo para blogs e documentação. Fácil de configurar e personalizar, acessível via subdomínio GitHub ou domínio próprio. Ideal para compartilhar informações de maneira ágil e gratuita.',
        atividade: 'Desafio #02 - Git Pages',
        url: 'https://vrbndev.github.io/Introducao-Web/projeto.html',
        frequencia: 'Presença ✅'
    },
    {
        id : 2,
        tema: "Hierarquia de titulos e formatação de texto",
        conteudo: 'Aprendendo sobre a estrutura de uma página HTML. (Cabeçalhos, tag <br>, tag <p>, tag <hr>, formatação de texto, listas ordenadas e não-ordenadas e imagens)',
        atividade: 'Desafio #03 - Hierarquia e formatação',
        url: 'atividade-02/index.html',
        frequencia: 'Ausência ❌'
    },
    {
        id : 3,
        tema: "Links - Navegação entre páginas",
        conteudo: 'Aprendendo sobre a estrutura de uma página HTML. (tag <a>, organização em pastas)',
        atividade: 'Desafio #04 - Links',
        url: 'atividade-03/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id : 4,
        tema: "Tabelas",
        conteudo: 'O professor explicou que nos primórdios do desenvolvimento web as páginas eram construídas utilizando como recurso, a tag <table>. Esse aula foi voltada para compreender o uso da mesma e suas propriedades.',
        atividade: 'Desafio #05 - Tabelas',
        url: 'atividade-04/index.html',
        frequencia: 'Presença ✅'
    },
]

// Elementos da página

const containerAula = document.querySelector('section');

function listaAulas(){
    
    const container = document.createElement('div');
    container.classList.add('container-aulas');
    containerAula.appendChild(container)
    
    for (i=0; i < aulasCadastradas.length; i++){
        
        const aula = document.createElement('div');
        aula.classList.add('cardAula');
        
        const tituloAula = document.createElement('h3');
        tituloAula.classList.add('titulo-aula');
        tituloAula.innerText = aulasCadastradas[i].tema;
        aula.appendChild(tituloAula);

        const conteudoAula = document.createElement('p');
        conteudoAula.classList.add('conteudo-aula');
        conteudoAula.innerText = aulasCadastradas[i].conteudo;
        aula.appendChild(conteudoAula);

        const footerAula = document.createElement('div');
        footerAula.classList.add('footer-aula');
        aula.appendChild(footerAula);

        const atividadeAula = document.createElement('a');
        atividadeAula.classList.add('atividade-aula');
        atividadeAula.innerText = aulasCadastradas[i].atividade;
        atividadeAula.href = aulasCadastradas[i].url;
        footerAula.appendChild(atividadeAula);

        const frequenciaAtividade = document.createElement('p');
        frequenciaAtividade.classList.add('frequencia');
        frequenciaAtividade.innerText = aulasCadastradas[i].frequencia;
        footerAula.appendChild(frequenciaAtividade);

        container.appendChild(aula);
    }
}