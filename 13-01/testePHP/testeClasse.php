<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Testes Classes</h1>
    <?php
    class teste
    {
        private $codigo;
        private $nome;


        public function __construct($nome, $codigo = null)
        {
            $this->nome = $nome;
            $this->codigo = $codigo;
        }

        public function setCodigo($codigo): void
        {
            $this->codigo = $codigo;
        }

        public function getCodigo(): mixed
        {
            return $this->codigo;
        }

        public function setNome($nome): void
        {
            $this->nome = $nome;
        }

        public function getNome(): mixed
        {
            return $this->nome;
        }

    }

    $obj = new teste(nome: 'Lúcio Silas', codigo: 456548);
    var_dump($obj);
    ?>
</body>

</html>