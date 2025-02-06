const cartasSection1 = document.querySelectorAll('#section1 img');
const cartasSection2 = document.querySelectorAll('#section2 img');

cartasSection2.forEach((carta) => {
  carta.addEventListener('click', () => {
    const cartaAtual = Array.from(cartasSection1).find((carta) => 
      carta.src.includes('images.jpg')
    );
    if (cartaAtual) {
      cartaAtual.src = carta.src;
    } 
  });
});

cartasSection1.forEach((carta) => {
  carta.addEventListener('click', () => {
    carta.src = './images.jpg';
  });
});