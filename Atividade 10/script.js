const vetor = [1,2,3,4,5];

function reduce() {
    const multiplicacao = vetor.reduce((acc,num) => acc * num,1);
    document.getElementById('resp').innerText = `reduce(): [${multiplicacao}]`;
}

function map() {
    const quadrado = vetor.map(numeros => numeros * numeros);
    document.getElementById('resp').innerText = `map(): [${quadrado}]`;
}

function filter(){
    const impar = vetor.filter(num => num % 2 != 0);
    document.getElementById('resp').innerText = `filter(): [${impar}]`;
}

function forEach() {
    let resultado = "";
    vetor.forEach(num => resultado += num + " ");
    document.getElementById('resp').innerText = `forEach(): [${resultado}]`;
}

