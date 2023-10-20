const menuHamburguer = document.querySelector('#navegacao-pagina');
const asideBar = document.querySelector('nav');

menuHamburguer.addEventListener("click", () => {
    document.body.classList.toggle("active");
});

