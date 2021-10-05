<?php

function AddNummbesColor($n1, $n2, $color = '#EE33FF'){
echo "Sum is: <span style='color:".$color.";'>".($n1 + $n2)."</span></br/>";
}

function MyLink(&$b){
    $b++;
}

function PrintArray($array ){
    foreach ($array as $key => $value) {
        print($key . ': ' . $value . '<br>');
    }
}
