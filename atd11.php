<?php
$x = array("100" => "199", "250" => "300", "105" => "190");
foreach ($x as $key => $value) {
    if ($result = $key >= 100 && $value <= 200) {
    }
    var_dump($result);
}



?>