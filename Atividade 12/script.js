const vetor = [1,2,3,4,5];

function reduce() {
    const multiplicacao = vetor.reduce((acc,num) => acc * num,1);
    document.getElementById('resp').innerText = `reduce(): [${multiplicacao}]`;
}

function map() {
    const quadrado = vetor.map(vetor => vetor * vetor);
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

function exibirLista() {
    const lista = document.getElementById('listaNumeros');
    lista.innerHTML = ''; 

    vetor.forEach((num, index) => {
        const li = document.createElement('li');
        li.innerHTML = `${num} 
            <button onclick="editarNumero(${index})">Editar</button>
            <button onclick="excluirNumero(${index})">Excluir</button>`;
        lista.appendChild(li);
    });
}

function editarNumero(index) {
    const novoNumero = prompt('Digite o novo valor para o número:', vetor[index]);
    if (novoNumero !== null && !isNaN(novoNumero)) {
        vetor[index] = Number(novoNumero);
        exibirLista(); 
    }
}

function excluirNumero(index) {
    if (confirm('Tem certeza que deseja excluir este número?')) {
        vetor.splice(index, 1);
        exibirLista(); 
    }
}

exibirLista();