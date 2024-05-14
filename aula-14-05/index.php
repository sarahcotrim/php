<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Array-laços</h1>

    <br>

    <h2>Exemplo 01</h2>

    <pre>
        <?php
            $A1 = array("Antonio", "Luis", "Jose", "Joao");
            for($i=0; $i<4; $i++) {
                echo "<br> Na posicao $i: o valor é $A1[$i]; <br>";
            }
        ?>
    </pre>
    <pre>
        <?php
            $A1 = array("Antonio", "Luis", "Jose", "Joao");
            foreach($A1 as $dado) {
                echo "<br> $dado <br>";
            }
        ?>
    </pre>

    <br>

    <h2>Exemplo 02 - for</h2>

    <pre>
        <?php
            $A2 = array(10, 9, 8, 7);
            for($i=0; $i<count($A2); $i++){
                echo "<br> $A2[$i] <br>";
            }
        ?>
    </pre>

    <br>

    <h2>Exemplo 03 - foreach</h2>

    <pre>
        <?php
            $A3 = array(10, 9, 8, 7);
            foreach ($A3 as $dado){
                echo "<br> $dado <br>";
            }
        ?>
    </pre>

    <br>

    <h2>Exemplo 04 - Array: definição explícita (com chaves)</h2>

    <pre>
        <?php
            $var = array("Maria" => 25,
                         "João" => 44,
                         "José" => 12,
                         "Neusa" => 73);
        foreach ($var as $chave => $dado){
        echo "<br> $chave: $dado <br>";
        }
        ?>
    </pre>
    <pre>
        <?php
            print_r($var);
        ?>
    </pre>

    <br>

    <h2>Exemplo 05</h2>

    <pre>
        <?php
            $alunos = array("Maria" => 
                                array("endereco" => "Rua Chile 1046",
                                      "bairro" => "Rebouças",
                                      "cidade" => "Guanambi"),
                            "João" => 
                                array("endereco" => "Rua Iapó 234",
                                      "bairro" => "Prado Velho",
                                      "cidade" => "Tanque Novo"),
                            "Zeca" => 
                                array("endereco" => "Rua Chile 1087",
                                      "bairro" => "Rebouças",
                                      "cidade" => "Guanambi")
            );
            print_r ($alunos["Maria"] ["endereco"]);
            echo "<br>";
            print_r ($alunos["Maria"] ["bairro"]);
            echo "<br>";
            print_r ($alunos["Maria"] ["cidade"]);
        ?>
    </pre>
    
    <br>

    <h2>Exemplo 06</h2>

    <pre>
        <?php
            foreach($alunos as $chave => $aux){
                echo "<br> $chave: <br>";
                foreach($aux as $chave => $valor){
                    echo "-$valor <br>";
                }
                echo "<br>";
            }
        ?>
    </pre>
</body>
</html>