<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php

    $alunos_notas = [
        ["nome" => "João", "nota" => 8],
        ["nome" => "Maria", "nota" => 2],
        ["nome" => "Pedro", "nota" => 4],
        ["nome" => "Ana", "nota" => 9],
        ["nome" => "Bia", "nota" => 5]
    ];

    $aprovados = [];
    $reprovados = [];
    $na_final = [];

    foreach ($alunos_notas as $aluno) {
        if ($aluno["nota"] > 7) {
            $aprovados[] = $aluno["nome"];
        } elseif ($aluno["nota"] < 3) {
            $reprovados[] = $aluno["nome"];
        } else {
            $na_final[] = $aluno["nome"];
        }
    }

    echo "Alunos aprovados:<br>";
    foreach ($aprovados as $aprovado) {
        echo $aprovado . "<br>";
    }

    echo "Alunos reprovados:<br>";
    foreach ($reprovados as $reprovado) {
        echo $reprovado . "<br>";
    }

    echo "Alunos na final:<br>";
    foreach ($na_final as $aluno_final) {
        echo $aluno_final . "<br>";
    }

    ?>
</body>
</html>