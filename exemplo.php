<?php
$artistas = array("Zendaya", "Phoebe", "Simone Ashley", "Madelyn Cline", "Sydney Sweeney", "Taylor Swift");

echo "nomes de artistas: <br>";
for ($a = 0; $a < count($artistas); $a++) {
    if ($a == 4) { 
        echo "$artistas[$a] <br>";
    }
}
?>