const troca = (event) => {
    
    const img = document.getElementById('carta-costas1')
    if (img.src.endsWith('images.jpg')) {
      img.src = './annihilape.jpg';
    } else if (event.target.innerText == 'Botao 2') {
      img.src = './img/imagem.jpg';
    }
  };
  
  export default troca;
