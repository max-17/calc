<?php

$inp1 = $_REQUEST["inp1"];
$inp2 = $_REQUEST["inp2"];
$inp3 = $_REQUEST["inp3"];

switch ($inp2) {
    case "+":
        echo (float)$inp1+(float)$inp3;
        break;
    case "-":
        echo (float)$inp1-(float)$inp3;
        break;
    case "*":
        echo (float)$inp1*(float)$inp3;
        break;
    case "/":
        echo (float)$inp1*(float)$inp3;
        break;
    
    default:
        echo "invalid input";
        break;
}

?>