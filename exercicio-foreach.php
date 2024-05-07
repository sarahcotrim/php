<style>
p {
    background-color: lightblue;
}
</style>

<?php

$pessoa = array(
  array( "ocupacao" => "Aluno 1",
         "nome" => "Taylor", 
         "idade" => 30, 
         "end" => "rua da felicidade", 
         "cidade"=> "Los angeles",
         "estado"=> "California", 
         "cpf"=> "123"),

  array( "ocupacao" => "Aluno 2",
         "nome" => "Kailla", 
         "idade" => 17, 
         "end" => "rua M", 
         "cidade"=> "Licinio",
         "estado"=> "BA", 
         "cpf"=> "456"),

  array( "ocupacao" => "Aluno 3",
         "nome" => "Sarah", 
         "idade" => 17, 
         "end" => "rua dos hibiscos", 
         "cidade"=> "Ilheus",
         "estado"=> "BA", 
         "cpf"=> "789"),

  array( "ocupacao" => "Professor",
         "nome" => "Fabio", 
         "idade" => 29, 
         "end" => "rua das dores", 
         "cidade"=> "Guanambi",
         "estado"=> "BA", 
         "cpf"=> "101")
);

foreach ($pessoa as $pessoas) {
  echo "<p> " . $pessoas["ocupacao"] . " </p>"; 
  echo $pessoas["nome"] . "<br>";
  echo $pessoas["idade"] . "<br>";
  echo $pessoas["end"] . "<br>";
  echo $pessoas["cidade"] . "<br>";
  echo $pessoas["estado"] . "<br>";
  echo $pessoas["cpf"] . "<br>";
  echo "<br>";
}
?>