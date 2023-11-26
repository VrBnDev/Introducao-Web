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
        tema: "Projeto #01 - JM Viagens",
        conteudo: 'O desenvolvimento da disciplina acontece, a partir de agora com a aplicação dos conceitos aprendidos, para verificar o acompanhamento da turma o professor propôs a execução do primeiro projeto. O projeto JM Viagens traz o protótipo de um site de turismo de vendas de pacotes de viagens, o site é estruturada através de tabelas, tem navegação através de links e outros recursos vistos nas aulas.',
        atividade: 'Projeto #01 - JM Viagens',
        url: 'projeto-01/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id : 7,
        tema: "CSS - Cascading Style Sheets",
        conteudo: 'A identidade visual de todo projeto é de extrema importância, na internet a tecnologia que nos ajuda é o CSS as folhas de estilo em cascata. Na aula o professor explicou como a tecnologia auxilia o desenvolvedor, explicou que pode-se usar internamente (inline ou tag) e externamente (arquivo).',
        atividade: 'Desafio #07 - CSS',
        url: 'atividade-06/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 8,
        tema: "Tag <div> e Tag <span>",
        conteudo: "Algumas aulas atrás o professor apresentou as tabelas como a principal medida de organização nos primórdios da internet, na aula de hoje passamos a conhecer a tag <div> bastante utilizada no desenvolvimento de sites e na organização da sua estrutura atualmente.",
        atividade: 'Desafio #08 - Div',
        url: 'atividade-07/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 9,
        tema: "Trabalhando com fontes",
        conteudo: "Nessa aula aprendemos sobre as propriedades das fontes, seus estilos, tamanhos e proporcionalidade utilizando unidades de medidas diferentes, como pixels e em. Conhecemos algumas famílias de fontes, como Helvetica, Arial, Monospace e suas especificidades.",
        atividade: 'Desafio #09 - Fontes',
        url: 'atividade-08/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 10,
        tema: "Box-Model",
        conteudo: "O Box Model é o paradigma que veio para superar o padrão de tabelas utilizado anteriormente. Ele considera que as informações e conteúdos de um documento HTML é organizado em caixas, essas caixas contem algumas propriedades como: margem, borda, preenchimento.",
        atividade: 'Desafio #10 - Box Model',
        url: 'atividade-09/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 11,
        tema: 'Display',
        conteudo: 'A propriedade display auxilia no modo de exibição dos elementos presentes na minha página. Ela determina se os objetos aparecem ou não, se eles se posicionam em colunas ou linhas, o distanciamento entre eles, entre outros.',
        atividade: 'Desafio #11 - Display',
        url: 'atividade-10/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 12,
        tema: 'Novas tags e formatação de links',
        conteudo: 'Nessa aula começamos a entender o ciclo de estados de links e como definir estilos para esses estados, isso permite links alinhados a identidade visual da ferramenta que estamos desenvolvendo. Começamos a estudar também novas tags, utilizadas nos projetos desenvolvidos atualmente, tags como: nav, header e footer.',
        atividade: 'Desafio #12 - Links e tags',
        url: 'atividade-11/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 13,
        tema: 'Tags Semânticas',
        conteudo: 'As tags semânticas surgem para atender a diversos desafios, elas servem para ajudar na acessibilidade do site pois torna mais fácil para as ferramentas identificar as partes de um site, também ajuda na manutenção do código facilitando ao programador identificar os erros e como corrigi-los e nas atividades do SEO.',
        atividade: 'Desafio #13 - Tags Semânticas',
        url: 'atividade-12/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 14,
        tema: 'Atributos personalizados',
        conteudo: 'As tags do HTML são utilizadas para estruturar toda a sua página, mas uma informação muito importante são os atributos que cada tag tem. Eles servem para personalizar e aprimorar a forma como os elementos HTML são exibidos e funcionam em uma página Web tornando a marcação mais ddinâmica e interativa.',
        atividade: 'Desafio #14 - Atributos',
        url: 'atividade-13/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 15,
        tema: 'CSS3 - Border Radius e Box sizing',
        conteudo: 'Nessa aula aprendemos sobre a propriedade `border-radius` permite arredondar os cantos de elementos, enquanto `box-sizing` define como as dimensões de um elemento são calculadas, considerando ou não o preenchimento e a borda. Juntas, essas propriedades tornam o design de elementos mais elegante e controlável em páginas web.',
        atividade: 'Desafio #15 - Border radius',
        url: 'atividade-14/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 16,
        tema: 'CSS3 - Sombras e transparências',
        conteudo: 'Nessa aula aprendemos sobre a propriedade `border-radius` permite arredondar os cantos de elementos, enquanto `box-sizing` define como as dimensões de um elemento são calculadas, considerando ou não o preenchimento e a borda. Juntas, essas propriedades tornam o design de elementos mais elegante e controlável em páginas web.',
        atividade: 'Desafio #16 - Sombras',
        url: 'atividade-15/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 17,
        tema: 'CSS3 - Transition e animation',
        conteudo: 'A propriedade "transition" é utilizada para suavizar mudanças de propriedades, como cor e tamanho, criando transições elegantes que transformam a experiência do usuário, adicionando fluidez e encanto aos elementos da página.',
        atividade: 'Desafio #17 - Animation',
        url: 'atividade-16/index.html',
        frequencia: 'Presença ✅'
    },
    {
        id: 18,
        tema: 'Design Responsivo',
        conteudo: 'A variedade de dispositivos existentes hoje, trouxe uma nova demanda para os desenvolvedores web, que é o design responsivo. A responsividade é a adaptabilidade da sua página aos diferentes tamanhos de tela.',
        atividade: 'Desafio #18 - Design Responsivo',
        url: 'atividade-17/index.html',
        frequencia: 'Ausência ❌'
    }
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