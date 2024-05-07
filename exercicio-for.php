<style>
p {
    background-color: lightblue;
}
</style>

<?php
$aluno1 = array("Taylor", 30, "rua da felicidade", "Los angeles", "California", "123");

echo "<p> Aluno 1 </p>" ;
for($a=0; $a<count($aluno1); $a++){
    echo "$aluno1[$a]" ."<br>";
}
echo "<br>";

$aluno2 = array("Kailla", 17, "rua M", "Licinio", "BA", "456");

echo "<p> Aluno 2 </p>" ;
for($a=0; $a<count($aluno2); $a++){
    echo "$aluno2[$a]" ."<br>";
}
echo "<br>";

$aluno3 = array("Sarah", 17, "rua dos hibiscos", "Ilheus", "BA", "789");

echo "<p> Aluno 3 </p>" ;
for($a=0; $a<count($aluno3); $a++){
    echo "$aluno3[$a]" ."<br>";
}
echo "<br>";

$professor = array("Fabio", 29, "rua das dores", "Guanambi", "BA", "101");

echo "<p> Professor </p>" ;
for($a=0; $a<count($professor); $a++){
    echo "$professor[$a]" ."<br>";
}
?>