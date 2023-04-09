<?php
$pessoas = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
rsort($pessoas);
$pessoas2 = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
rsort($pessoas2);




foreach ($pessoas as $key => $value) {
    echo ("A)Classificação em ordem crescente por valor é " . $value . "<br/>");

}
foreach ($pessoas2 as $key => $value) {
    echo ("B)Classificação em ordem crescente por chave " . $key . "<br/>");

}


?>