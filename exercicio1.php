
<?php


$aluno1["nome"] = "Sarah";
$aluno1["idade"] = 17;
$aluno1["endereço"] = "rua dos hibiscos";
$aluno1["cidade"] = "Guanambi";
$aluno1["estado"] = "Bahia";
$aluno1["cpf"] = "123";

$aluno2["nome"] = "Kailla";
$aluno2["idade"] = 17;
$aluno2["endereço"] = "rua m";
$aluno2["cidade"] = "Licinio";
$aluno2["estado"] = "Bahia";
$aluno2["cpf"] = "456";

$aluno3["nome"] = "Taylor";
$aluno3["idade"] = 18;
$aluno3["endereço"] = "rua swiftier";
$aluno3["cidade"] = "Los Angeles";
$aluno3["estado"] = "California";
$aluno3["cpf"] = "789";

$professor["nome"] = "Fábio";
$professor["idade"] = 30;
$professor["endereço"] = "rua das dores";
$professor["cidade"] = "Guanambi";
$professor["estado"] = "Bahia";
$professor["cpf"] = "101";

echo "Aluno 1: <br>";
foreach ($aluno1 as $x) {
    echo  key($aluno1) . ": $x  <br>";
    next($aluno1);
}
echo "<br>Aluno 2: <br>";
foreach ($aluno2 as $x) {
    echo  key($aluno2) . ": $x  <br>";
    next($aluno2);
}
echo "<br> Aluno 3: <br>";
foreach ($aluno3 as $x) {
    echo  key($aluno3) . ": $x  <br>";
    next($aluno3);
}
echo "<br>Professor: <br>";
foreach ($professor as $x) {
    echo  key($professor) . ": $x  <br>";
    next($professor);
}