<?php

$a1 = 0;
$a2 = 0;
$a3 = 1;
$a4 = 1;

$b1 = 0;
$b2 = 1;
$b3 = 0;
$b4 = 1;

$boolTrue = "true";
$boolFalse = "false";
$own = 1;
$zero = 0;
$minusOwn = -1;
$stringOwn = "1";
$null = "null";
$php = "php";
function true($a, $b){
    if($a === $b){
        echo "true";
    }
}

function checkExcl($a){
    if(!$a){
        echo "<strong>true</strong>";
    }else{
        echo "false";
    }
}

function checkOr($a, $b){
    if($a||$b){
        echo "<strong>true</strong>";
    }else{
        echo "false";
    }
}

function checkAnd($a, $b){
    if($a&&$b){
        echo "<strong>true</strong>";
    }else{
        echo "false";
    }
}

function checkXor($a, $b){
    if($a xor $b){
        echo "<strong>true</strong>";
    }else{
        echo "false";
    }
}

function checkTrue($a, $b){
    if($a === $b){
        echo "<strong>true</strong>";
    }else{
        echo "false";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
        <tr>
          <th>A</th>
          <th>B</th>
          <th>!A</th>
          <th>A||B</th>
          <th>A && B</th>
          <th>A xor B</th>
        </tr>
        <tr>
            <th><?= $a1 ?></th>
            <th><?= $b1 ?></th>
            <th><?php checkExcl($a1)?></th>
            <th><?php checkOr($a1, $b1)?></th>
            <th><?php checkAnd($a1, $b1)?></th>
            <th><?php checkXor($a1, $b1)?></th>
        </tr>
        <tr>
            <th><?= $a2 ?></th>
            <th><?= $b2 ?></th>
            <th><?php checkExcl($a2)?></th>
            <th><?php checkOr($a2, $b2)?></th>
            <th><?php checkAnd($a2, $b2)?></th>
            <th><?php checkXor($a2, $b2)?></th>
        </tr>
        <tr>
            <th><?= $a3 ?></th>
            <th><?= $b3 ?></th>
            <th><?php checkExcl($a3)?></th>
            <th><?php checkOr($a3, $b3)?></th>
            <th><?php checkAnd($a3, $b3)?></th>
            <th><?php checkXor($a3, $b3)?></th>
        </tr>
        <tr>
            <th><?= $a4 ?></th>
            <th><?= $b4 ?></th>
            <th><?php checkExcl($a4)?></th>
            <th><?php checkOr($a4, $b4)?></th>
            <th><?php checkAnd($a4, $b4)?></th>
            <th><?php checkXor($a4, $b4)?></th>
        </tr>
    </table>

    <table>
        <tr>
          <th></th>
          <th>true</th>
          <th>false</th>
          <th>1</th>
          <th>0</th>
          <th>-1</th>
          <th>"1"</th>
          <th>null</th>
          <th>"php"</th>
        </tr>
        <tr>
            <th><?= $boolTrue ?></th>
            <th><?= checkTrue($boolTrue, $boolTrue)?></th>
            <th><?= checkTrue($boolTrue, $boolFalse)?></th>
            <th><?= checkTrue($boolTrue, $own)?></th>
            <th><?= checkTrue($boolTrue, $zero)?></th>
            <th><?= checkTrue($boolTrue, $minusOwn)?></th>
            <th><?= checkTrue($boolTrue, $stringOwn)?></th>
            <th><?= checkTrue($boolTrue, $null)?></th>
            <th><?= checkTrue($boolTrue, $php)?></th>
        </tr>
        <tr>
            <th><?= $boolFalse ?></th>
            <th><?= checkTrue($boolFalse, $boolTrue)?></th>
            <th><?= checkTrue($boolFalse, $boolFalse)?></th>
            <th><?= checkTrue($boolFalse, $own)?></th>
            <th><?= checkTrue($boolFalse, $zero)?></th>
            <th><?= checkTrue($boolFalse, $minusOwn)?></th>
            <th><?= checkTrue($boolFalse, $stringOwn)?></th>
            <th><?= checkTrue($boolFalse, $null)?></th>
            <th><?= checkTrue($boolFalse, $php)?></th>
        </tr>
        <tr>
            <th><?= $own ?></th>
            <th><?= checkTrue($own, $boolTrue)?></th>
            <th><?= checkTrue($own, $boolFalse)?></th>
            <th><?= checkTrue($own, $own)?></th>
            <th><?= checkTrue($own, $zero)?></th>
            <th><?= checkTrue($own, $minusOwn)?></th>
            <th><?= checkTrue($own, $stringOwn)?></th>
            <th><?= checkTrue($own, $null)?></th>
            <th><?= checkTrue($own, $php)?></th>
        </tr>
        <tr>
            <th><?= $zero ?></th>
            <th><?= checkTrue($zero, $boolTrue)?></th>
            <th><?= checkTrue($zero, $boolFalse)?></th>
            <th><?= checkTrue($zero, $own)?></th>
            <th><?= checkTrue($zero, $zero)?></th>
            <th><?= checkTrue($zero, $minusOwn)?></th>
            <th><?= checkTrue($zero, $stringOwn)?></th>
            <th><?= checkTrue($zero, $null)?></th>
            <th><?= checkTrue($zero, $php)?></th>
        </tr>
        <tr>
            <th><?= $minusOwn ?></th>
            <th><?= checkTrue($minusOwn, $boolTrue)?></th>
            <th><?= checkTrue($minusOwn, $boolFalse);?></th>
            <th><?= checkTrue($minusOwn, $own)?></th>
            <th><?= checkTrue($minusOwn, $zero)?></th>
            <th><?= checkTrue($minusOwn, $minusOwn)?></th>
            <th><?= checkTrue($minusOwn, $stringOwn)?></th>
            <th><?= checkTrue($minusOwn, $null)?></th>
            <th><?= checkTrue($minusOwn, $php)?></th>
        </tr>
        <tr>
            <th><?= $stringOwn ?></th>
            <th><?= checkTrue($stringOwn, $boolTrue)?></th>
            <th><?= checkTrue($stringOwn, $boolFalse)?></th>
            <th><?= checkTrue($stringOwn, $own)?></th>
            <th><?= checkTrue($stringOwn, $zero)?></th>
            <th><?= checkTrue($stringOwn, $minusOwn)?></th>
            <th><?= checkTrue($stringOwn, $stringOwn)?></th>
            <th><?= checkTrue($stringOwn, $null)?></th>
            <th><?= checkTrue($stringOwn, $php)?></th>
        </tr>
        <tr>
            <th><?= $null ?></th>
            <th><?= checkTrue($null, $boolTrue)?></th>
            <th><?= checkTrue($null, $boolFalse)?></th>
            <th><?= checkTrue($null, $own)?></th>
            <th><?= checkTrue($null, $zero)?></th>
            <th><?= checkTrue($null, $minusOwn)?></th>
            <th><?= checkTrue($null, $stringOwn)?></th>
            <th><?= checkTrue($null, $null)?></th>
            <th><?= checkTrue($null, $php)?></th>
        </tr>
        <tr>
            <th><?= $php ?></th>
            <th><?= checkTrue($php, $boolTrue) ?></th>
            <th><?= checkTrue($php, $boolFalse)?></th>
            <th><?= checkTrue($php, $own)?></th>
            <th><?= checkTrue($php, $zero)?></th>
            <th><?= checktrue($php, $minusOwn)?></th>
            <th><?= checkTrue($php, $stringOwn)?></th>
            <th><?= checkTrue($php, $null)?></th>
            <th><?= checkTrue($php, $php)?></th>
        </tr>
    </table>
</body>
</html>