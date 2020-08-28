<?php
    $quant= $_GET["quantidade"];
    $resultado=0;

    for($i=1; $i<=$quant; $i++){
        $resultado ++
        echo " $resultado </br>";
    }
?>