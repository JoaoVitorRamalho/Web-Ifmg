//import { mudaParaVerde, mudaParaMadura } from "./funcoes.js";
import Trocador from "./funcoes.js";
// function executora(f){
//     f();
// }

// const minhaFuncao = function (){
//     alert('Executada.');
// }

// executora(minhaFuncao)

// function executora(f){
//     f();
// }

// const minhaFuncao = () => {
//     alert('Executada.');
// }

// function executora(f){
//     f();
// }

// executora(() => {
//     alert('Executada 4.');
// });

// function executora(f){
//     f();
// }
// executora(() => alert('Executada 5.'))
/*
window.addEventListener('load', () => {
    alert('Janela carregada');
});


*/

const bt1 = document.getElementById('bt01');
bt1.addEventListener('click', Trocador.paraVerde);

const bt2 = document.getElementById('bt02');
bt2.addEventListener('click', Trocador.paraMaduro);