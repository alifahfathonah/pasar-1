<?php

$buah = [
    ["apel","manggis","jeruk"],
    ["3","2","1"],
    [10,20,30]
];

for ($i=0; $i < count($buah) ; $i++) { 
    for ($j=0; $j < count($buah); $j++) { 
        echo $buah[$i][$j] . " ";
    }
    echo "<br>";
}

foreach($buah as $b) {
    
}