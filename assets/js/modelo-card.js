class Card {
    constructor(titulo, conteudo, isTrue) {
      this.titulo = titulo;
      this.conteudo = conteudo;
      this.isTrue = isTrue;
    }
  
    saveToLocalStorage() {
      const cardData = {
        title: this.title,
        content: this.content,
        isTrue: this.isTrue,
      };
      localStorage.setItem('infoCard', JSON.stringify(cardData));
    }
  
    static loadFromLocalStorage() {
      const cardData = JSON.parse(localStorage.getItem('infoCard'));
      if (cardData) {
        return new InfoCard(cardData.title, cardData.content, cardData.isTrue);
      }
      return null;
    }
  }
  
  // Exemplo de uso para salvar no localStorage
  const myInfoCard = new InfoCard(
    'Título do Card',
    'Conteúdo do Card',
    true
  );
  myInfoCard.saveToLocalStorage();
  
  // Exemplo de uso para carregar do localStorage
  const loadedCard = InfoCard.loadFromLocalStorage();
  if (loadedCard) {
    console.log('Título:', loadedCard.title);
    console.log('Conteúdo:', loadedCard.content);
    console.log('Verdadeiro/Falso:', loadedCard.isTrue);
  } else {
    console.log('Nenhum card encontrado no localStorage.');
  }
  