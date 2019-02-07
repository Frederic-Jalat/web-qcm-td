<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
$s = $args[0];
$result=0;
$s = str_split($s);

foreach($s as $i) {
    if ($i === '0') {
        $result +=1;
    }
    if ($i === '6') {
        $result += 1;
    }
    if ($i === '8') {
        $result += 2;
    }
    if ($i === '9') {
        $result += 1;
    }
    
}


// Write an action using echo().
echo $result;
