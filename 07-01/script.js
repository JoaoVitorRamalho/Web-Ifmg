// const carregaCidades = () => {
//     const uf = document.querySelector('#estado').value;
//     const select = document.querySelector('#cidade');
//     select.innerHTML = ' ';
//     fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${uf}/municipios`)
//         .then((res) => {
//             return res.json();
//         })
//         .then((dados)=>{
//             console.log(dados);
//             for (let i = 0; i < dados.length; i++) {
//                const option = document.createElement('option');
//                option.innerText = dados[i].nome;
//                select.append(option);
//             }
//         })

// };

// const uf = document.querySelector('#estado');
// uf.addEventListener('input',carregaCidades);

const carregaCidades = async () => {
    const uf = document.querySelector('#estado').value;
    const select = document.querySelector('#cidade');
    select.innerHTML = ' ';
    const res = await fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${uf}/municipios`);
    const dados = await res.json();
    fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${uf}/municipios`)
        for (let i = 0; i < dados.length; i++) {
               const option = document.createElement('option');
               option.innerText = dados[i].nome;
               select.append(option);
        }

};

const uf = document.querySelector('#estado');
uf.addEventListener('input',carregaCidades);