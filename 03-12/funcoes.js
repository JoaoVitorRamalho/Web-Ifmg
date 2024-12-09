function testesTipos() {
    let a = 10;
    let b = 26.65;
    let c = false;
    let d = 'Eu';
    let e = [];
    let f = {};
    let g = "Acredito";
    let h = `${d} ${g}!`;

    console.log(typeof a);
    console.log(typeof b);
    console.log(typeof c);
    console.log(typeof d);
    console.log(typeof e);
    console.log(typeof f);
    console.log(typeof g);
    console.log(typeof h);
    console.log(h);
    console.log(Number.parseInt('1') + 1);

}

function testesControles() {
    const opt = confirm('Certezas?');
    if (opt) {
        alert('Pedro');
    }else{
        alert('Cancelado');
    }
}

function testesLetConstVar() {
    if (true) {
        var a = 10;
    }
    console.log(a);

    const v = [2,3,42,23];
    v[0] = 10;

    const d = 45;

    if (true) {
        let b = 10;
    }
    console.log(b);
}

function testesObjetos() {
    const pessoa = {
        "nome": 'Kiko',
        "idade": 32,
        "cpf": '324.432.642.32'
    };

    console.log(typeof pessoa);
    console.log(pessoa);

    console.log(pessoa.nome);
    console.log(pessoa.idade);
    console.log(pessoa.cpf);
}

function testesArrayComObjetos() {
    const pessoas = [
        {"nome": 'Luis', "idade":23},
        {"nome": 'Junior', "idade":29},
        {"nome": 'Alex', "idade":31}
    ];

    for (let i = 0; i < pessoas.length; i++) {
        console.log(
            pessoas[i].nome
            + '; '
            + pessoas[i].idade
        );
        
    }
}

function testesObjetosComArray() {
    const pessoa = {
        "nome": 'Joao',
        "idade": 45,
        "dependentes":['Gustavin','FellipinBroxa','Caio']
    }
}