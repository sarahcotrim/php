<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <pre>
        <?php
        $array =['alunos' =>[
                            ['id'=> 4, 'nome'=> 'Maria', 'idade'=> 16, 'endereco'=> 'rua dos hibiscos'], 
                            ['id'=> 3, 'nome'=> 'Lucas', 'idade'=> 15, 'endereco'=> 'rua dos anjos'],
                            ['id'=> 5, 'nome'=> 'Luisa', 'idade'=> 17, 'endereco'=> 'rua dos castros'] 
                            ]
                ];
        echo '<pre>' . print_r ($array) . '</pre>';
        echo '<pre>' . print_r ($array['alunos'][2]['nome']) . '</pre>';
        echo '<pre>' . print_r ($array['alunos'][1]['endereco']) . '</pre>';
        ?>
    </pre>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Id</th>
            <th>Endereço</th>
        </tr>

        <tr>
            <td>
                <?php
                print_r ($array['alunos'][0]['nome'])
                ?>
            </td>
            <td class= "number">
            <?php
                print_r ($array['alunos'][0]['idade'])
                ?>
            </td>
            <td class= "number">
            <?php
                print_r ($array['alunos'][0]['id'])
                ?>
            </td>
            <td>
            <?php
                print_r ($array['alunos'][0]['endereco'])
                ?>
            </td>
        </tr>

        <tr>
            <td>
                <?php
                print_r ($array['alunos'][1]['nome'])
                ?>
            </td>
            <td class= "number">
            <?php
                print_r ($array['alunos'][1]['idade'])
                ?>
            </td>
            <td class= "number">
            <?php
                print_r ($array['alunos'][1]['id'])
                ?>
            </td>
            <td>
            <?php
                print_r ($array['alunos'][1]['endereco'])
                ?>
            </td>
        </tr>

        <tr>
            <td>
                <?php
                print_r ($array['alunos'][2]['nome'])
                ?>
            </td>
            <td class= "number">
            <?php
                print_r ($array['alunos'][2]['idade'])
                ?>
            </td>
            <td class= "number">
            <?php
                print_r ($array['alunos'][2]['id'])
                ?>
            </td>
            <td>
            <?php
                print_r ($array['alunos'][2]['endereco'])
                ?>
            </td>
        </tr>
    </table>

    <?php
    echo "<br>"
    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Id</th>
            <th>Endereço</th>
        </tr>

        <?php
            for ($i = 0; $i < count($array['alunos']); $i++) { 
        ?>
        <tr>
            <td>
                <?php print_r($array['alunos'][$i]['nome'])?>
            </td>
            <td>
                <?php print_r($array['alunos'][$i]['idade'])?>
            </td>
            <td>
                <?php print_r($array['alunos'][$i]['id'])?>
            </td>
            <td>
                <?php print_r($array['alunos'][$i]['endereco'])?>
            </td>
        </tr>

        <?php } ?>

    </table>

    
</body>
</html>