<?php
$val1, $val2 = "";
function add($val1, $val2){
    return $val1+$val2;
}

function multiply($val1, $val2){
    return $val1*$val2;
}
function subtract($val1, $val2){
    return $val1-$val2;
}
function devision($val1, $val2){
    return $val1/$val2;
}

$answer = ''
$ans1 = ''
$inp1 = $_POST['inp1'];
$inp2 = $_POST['inp2'];
$inp3 = $_POST['inp3'];
$opt1 = $_POST['opt1'];
$opt2 = $_POST['opt2'];

if ($inp1 !== '' || $inp2 !== '' || $inp3 !== '' || $opt1 !== '' || $opt2 !== ''){
    if ($opt1 == "+"){
        $ans1 = add($inp1, $inp2);
    }
    if ($opt1 == "-"){
        $ans1 = subtract($inp1, $inp2);
    }
    if ($opt1 == "*"){
        $ans1 = multiply($inp1, $inp2);
    }
    if ($opt1 == "/"){
        $ans1 = subtract($inp1, $inp2);
    }
    if ($opt2 == "+"){
        $answer = add($ans1, $inp2);
    }
    if ($opt2 == "-"){
        $answer = subtract($ans1, $inp2);
    }
    if ($opt2 == "*"){
        $answer = multiply($ans1, $inp2);
    }
    if ($opt2 == "/"){
        $answer = subtract($ans1, $inp2);
    }
    echo $answer;
}

?>