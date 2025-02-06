import { URL_BASE_API } from '../constantes/urls.js';
import { checkSeLogadoNaApiEMontaLink } from '../autenticacao/check.js';

async function buscaDaApiExibeNaTabela() {
    const res = await fetch(`${URL_BASE_API}/grupo/listar`);
    const data = await res.json();
    const tbody = document.querySelector('tbody');
    tbody.innerHTML = '';
    for (let i = 0; i < data.length; i++) {
        const tr = document.createElement('tr');
        const td1 = document.createElement('td');
        const td2 = document.createElement('td');
        const td3 = document.createElement('td');
        const td4 = document.createElement('td');
        const td5 = document.createElement('td');
        const td6 = document.createElement('td');
        const btEd = document.createElement('button');
        const btEx = document.createElement('button');
        btEd.innerText = 'edi';
        btEd.setAttribute('data-id', data[i].id);
        btEd.addEventListener('click', preencheDadosParaEdicao);
        btEx.innerText = 'del';
        btEx.setAttribute('data-id', data[i].id);
        btEx.addEventListener('click', solicitaExclusaoDeGrupoNaApi);
        td1.innerText = data[i].nome;
        td2.innerText = data[i].cpf;
        td3.innerText = data[i].parentesco;
        td4.innerText = data[i].numero;
        td5.innerText = data[i].idaluno;
        td6.append(btEd, btEx);
        tr.append(td1, td2, td3,td4,td5,td6);
        tbody.append(tr);
    }
}

async function preencheDadosParaEdicao(e) {
    e.preventDefault();
    document.forms[0].id.value = e.target.getAttribute('data-id');
    const dados = new FormData();
    dados.append('id', e.target.getAttribute('data-id'));
    const opt = {
        method: 'post',
        body: dados
    };
    const res = await fetch(`${URL_BASE_API}/grupo/um`, opt);
    const data = await res.json();
    console.log(data);
    document.forms[0].id.value = data.id;
    document.forms[0].nome.value = data.nome;
    document.forms[0].cpf.value = data.cpf;
    document.forms[0].parentesco.value = data.parentesco;
    document.forms[0].numero.value = data.numero;
    document.forms[0].idaluno.value = data.idaluno;
}

async function enviaDadosParaCadastroOuEdicaoNaApi(e) {
    e.preventDefault();
    const opt = {
        method: 'post',
        body: new FormData(e.target)
    };
    let op = '';
    if (document.forms[0].id.value) {
        op = 'editar';
    } else {
        op = 'inserir';
    }
    const res = await fetch(`${URL_BASE_API}/grupo/${op}`, opt);
    const data = await res.json();
    e.target.reset();
    document.forms[0].id.value = '';
    alert(data.status);
    buscaDaApiExibeNaTabela();
}

async function solicitaExclusaoDeGrupoNaApi(e) {
    e.preventDefault();
    const dados = new FormData();
    dados.append('id', e.target.getAttribute('data-id'));
    const opt = {
        method: 'post',
        body: dados
    };
    const res = await fetch(`${URL_BASE_API}/grupo/excluir`, opt);
    const data = await res.json();
    alert(data.status);
    buscaDaApiExibeNaTabela();
}

document.forms[0].addEventListener('submit', enviaDadosParaCadastroOuEdicaoNaApi);
window.addEventListener('pageshow', () => {
    checkSeLogadoNaApiEMontaLink(document.querySelector('#link_login'));
    buscaDaApiExibeNaTabela();
});
