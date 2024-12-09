// const mudaParaVerde = () =>{
//     const img = document.getElementById('img01');
//     img.src = './verde.jpg';
// }

// const mudaParaMadura = () =>{
//     const img = document.getElementById('img01');
//     img.src = './banana.jpg';
// }

// export {mudaParaVerde,mudaParaMadura}

const Trocador = {
    "paraVerde": () => {
        const img = document.getElementById('img01');
        img.src = './verde.jpg';
    },
    "paraMaduro": () =>{
        const img = document.getElementById('img01');
        img.src = './banana.jpg';
    }
}

export default Trocador