function testeWindow(){
    /*
    console.log(window);
    console.log(window.document);
    console.log(window.location);
    window.open('https://www.google.com');
    window.alert('Teste Window')
    */
    console.log(window);
    console.log(document);
    console.log(location);
    open('https://www.google.com');
    alert('Teste Window')
}

function testeDocument() {
    console.log(document);
    console.log(document.forms);
    console.log(document.links);
    console.log(document.images);
}

function testeBusca(){
     // pelo ID diretamente
     console.log(nome);

     //pelo ID via document
     const iptNome = document.getElementById('nome');
     console.log(iptNome);

      // pelo nome da tag
      const links = document.getElementsByTagName('a');
      console.log('links');

      // pelo seletor CSS (único elemento)
      const ele = document.querySelector('section a');
      console.log(ele);

       // pelo seletor CSS (vários elementos)
       const eles = document.querySelectorAll('section a');
       console.log(eles);
}

function testeCssTexto() {
    const h1 = document.querySelector('header h1');
    const h3 = document.querySelector('footer h3');
    const tabela = document.querySelector('table')

    h1.innerText = 'Título Novo';
    h1.style.color = 'blue';
    h1.style.textAlign = 'center';
    h1.style.borderBottom = '0.2px solid red';

    h3.className = 'titulo-13';
    console.log(h3.className);

    //tabela.classList.add('tabela');
    tabela.classList.toggle('tabela');
}

function testeCriarEncaixar(e) {
    e.preventDefault();
    const corpoTabela = document.getElementById('corpo_tabela');
    const iptNome = document.getElementById('nome');
    const tr = document.createElement('tr');
    const td1 = document.createElement('td');
    const td2 = document.createElement('td');
    const td3 = document.createElement('td');
    td1.innerText = '#';
    td2.innerText = iptNome.value;
    td3.innerText = 'ações';

    tr.append(td1,td2,td3);
    corpoTabela.append(tr);
}

const bt1 = document.getElementById('bt01');
bt1.addEventListener('click', testeWindow);

const bt2 = document.getElementById('bt02');
bt2.addEventListener('click', testeDocument);

const bt3 = document.getElementById('bt03');
bt3.addEventListener('click', testeBusca);

const bt4 = document.getElementById('bt04');
bt4.addEventListener('click', testeCssTexto);

const form = document.querySelector('form');
form.addEventListener('submit',testeCriarEncaixar);