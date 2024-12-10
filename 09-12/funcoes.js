// const mudaParaVerde = () =>{
//     const img = document.getElementById('img01');
//     img.src = './verde.jpg';
// }

// const mudaParaMadura = () =>{
//     const img = document.getElementById('img01');
//     img.src = './banana.jpg';
// }

// export {mudaParaVerde,mudaParaMadura}

// const Trocador = {
//     "paraVerde": () => {
//         const img = document.getElementById('img01');
//         img.src = './verde.jpg';
    
//     },
//     "paraMaduro": () =>{
//         const img = document.getElementById('img01');
//         img.src = './banana.jpg';
//     }
// }

// export default Trocador

const troca = (event) => {
    // alert(event.target.innerText);
    const img = document.getElementById('img1')
    if (event.target.innerText == 'Botao 1') {
      img.src = './img/imagem2.jpg';
      console.log('imagem 1 carregada')
    } else if (event.target.innerText == 'Botao 2') {
      img.src = './img/imagem.jpg';
    }
  };
  
  export default troca;