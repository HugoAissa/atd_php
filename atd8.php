<?php
$ceu = array("Itália" => "Roma", "Luxemburgo" => "Luxemburgo", "Bélgica" => "Bruxelas", "Dinamarca" => "Copenhague", "Finlândia" => "Helsinque ", "França" => "Paris", "Eslováquia" => "Bratislava", "Eslovênia" => "Ljubljana", "Alemanha" => "Berlim", "Grécia" => "Atenas", "Irlanda" => "Dublin", "Holanda" => "Amsterdam", "Portugal" => "Lisboa", "Espanha" => "Madri", "Suécia" => "Estocolmo", "Reino Unido" => "Londres ", "Chipre" => "Nicósia", "Lituânia" => "Vilnius", "República Tcheca" => "Praga", "Estônia" => "Tallin", "Hungria" => "Budapeste", "Letônia" => "Riga", "Malta" => "Valetta", " Áustria" => "Viena", "Polônia" => "Varsóvia");

foreach ($ceu as $key => $value) {
    echo ("A capital da " . $key . " é ". $value."<br/>");
}
?>
