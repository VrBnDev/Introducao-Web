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
        conteudo: 'Os links são sem dúvidas um dos recursos mais utilizados na web, eles permitem uma navegação entre páginas e conteúdos. Na aula focamos em praticar, com uma navegação entre páginas. (tag <a>, organização em pastas)',
        atividade: 'Desafio #04 - Links',
        url: 'atividade-03/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id : 4,
        tema: "Tabelas",
        conteudo: 'Foi abordado que nos primórdios do desenvolvimento web as páginas eram construídas utilizando como recurso, a tag <table> no intuito de melhor organizar o conteúdo de forma harmônica. Durante a aula foi compreendido de que forma essa tag e suas propriedades eram utilizadas.',
        atividade: 'Desafio #05 - Tabelas',
        url: 'atividade-04/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id : 5,
        tema: "Formulários",
        conteudo: 'Para colher dados e informações para alimentar o sistema, vamos precisar de campos que permitam ao usuário que entre com seus dados. Dessa forma, nessa aula estudamos os formulários, usando as tags <form> e <input>.',
        atividade: 'Desafio #06 - Formulários',
        url: 'atividade-05/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id : 6,
        tema: "Projeto 01 - JM Viagens",
        conteudo: 'O desenvolvimento da disciplina acontece, a partir de agora com a aplicação dos conceitos aprendidos, para verificar o acompanhamento da turma o professor propôs a execução do primeiro projeto. O projeto JM Viagens traz o protótipo de um site de turismo de vendas de pacotes de viagens, o site é estruturada através de tabelas, tem navegação através de links e outros recursos vistos nas aulas.',
        atividade: 'Projeto #01 - JM Viagens',
        url: 'projeto-01/index.html',
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