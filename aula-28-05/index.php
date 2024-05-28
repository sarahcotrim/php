<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Atividades</h1>

    <br>

    <h2>4.6 Constantes</h2>

    <?php
    define("PI", 3.14);
    echo PI; 
    ?> 

    <br>

    <h2>4.6.1 Constantes Pré-definidas</h2>

    <?php
    function funcConsts() {
        echo "ARQUIVO: ".__FILE__."<br>";
        echo "DIRETÓRIO: ".__DIR__."<br>";
        echo "LINHA: ".__LINE__."<br>";
        echo "FUNÇÃO: ".__FUNCTION__."<br>";
    }
    funcConsts();
    ?>

    <br>

    <?php
    class veiculo {
        private $marca;
        function __construct() {
            echo "CLASSE: ".__CLASS__."<br>";
        }
        function setMarca($marca) { 
            $this->marca = $marca;
            echo "MÉTODO: ".__METHOD__."<br>";
    } }
    $obj = new veiculo();
    $obj->setMarca("Wolksvagem");
    ?>

    <br>

    <h2>4.7 Variaveis Superglobais</h2>

    <h2>$_GLOBALS</h2>

    <pre>
        <?php
        print_r($GLOBALS);
        ?>
    </pre>

    <br>

    <h2>$_SERVER</h2>

    <pre>
        <?php
        print_r($_SERVER);
        ?>
    </pre>

    <br>

    <h2>$_COOKIE</h2>

    <pre>
        <?php
        print_r($_COOKIE);
        ?>
    </pre>

    <br>

    <h2>$_FILES</h2>

    <pre>
        <?php
        print_r($_FILES);
        ?>
    </pre>

    <br>

    <h2>$_ENV</h2>

    <pre>
        <?php
        print_r($_ENV);
        ?>
    </pre>

    <br>

    <h2>$_REQUEST</h2>

    <pre>
        <?php
        print_r($_REQUEST);
        ?>
    </pre>

    <br>

    <h2>$_SESSION</h2>

    <pre>
        <?php
        print_r($_SESSION);
        ?>
    </pre>

    <br>

    <h2>4.8 Funções - PHP</h2>

    <?php
    function nome_funcao($par_1 = 0, $par_2 = "vazio") {
        echo "Código da Função <br>";
        return "Dado de Retorno: ".$par_1."/".$par_2;
    }
    $retorno = nome_funcao();
    echo $retorno."<br><br>";
    $retorno = nome_funcao(12, "Bill Gates");
    echo $retorno."<br><br>";
    ?> 

    <br>

    <?php
    echo "<h2>Função sem parametro</h2>";
        function livros(){ //livros = lidos + nao lidos

            $l = 20;
            $nl = 6;
            $li = $l + $nl;
            echo "livros = $li <br>";

        }
    livros();
    livros();
    livros();
    ?>

    <br>

    <h2>Função com parametro</h2>

    <?php
    function livro($l, $nl){ 
        $li = $l/$nl;
        return "livros = $li";
    }
    print_r(livro(10, 25));
    echo "<br>";
    print_r(livro(2, 4));
    ?>

    <br>

    <h2>Soma/Multiplica</h2>

    <?php
    function books($b, $n, $s){
        $bo = $b+$n;
        $p = $bo*$s;
        return "books = $p";
    }
    print_r(books(20, 18, 6));
    echo "<br>";
    print_r(books(30, 8, 10));
    ?>

    <br>

    <h2>Todas as somas</h2>

    <?php
    function filmes($f, $g){
        $mo = $f+$g;
        $m = $mo*$f;
        $h = $m/$g;
        $r = $h-$f;
        return "$r";
    }
    print_r(filmes(20, 18));
    echo "<br>";
    print_r(filmes(30, 8));
    ?>

    <br>

    <h2>Elevado</h2>

    <?php
    function filme($f){
        $mo = $f*$f;
        return "$mo";
    }
    print_r(filme(20));
    echo "<br>";
    print_r(filme(8));
    ?>

</body>
</html>
