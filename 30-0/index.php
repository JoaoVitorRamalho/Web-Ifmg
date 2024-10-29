<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvimento Web</title>
    <style>
        h1{
            color: blue;
        }
        p{
            text-indent: 1cm;
            text-align: justify;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Teste</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, vitae dolorum delectus minus molestias eaque tempore tempora sapiente quas, libero quam officia repudiandae magni. Rem cum officia aspernatur obcaecati nihil-Joao.
    </p>
    <button>Salvar</button>
    <br>
    <?php
        $a = 'Welcome to hell';
        
        echo $a;
    ?>
</body>
<script>
    function minhaFuncao(){
        alert('Hello!');
    }
    const bt = document.querySelector('button');
    bt.addEventListener('click',minhaFuncao);
</script>
</html>