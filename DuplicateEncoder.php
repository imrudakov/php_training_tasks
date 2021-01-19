<?php

function duplicate_encode( $string ){
    $string = mb_strtolower($string);
    $array = str_split($string);
    $array_2 = $array;
    $array_len = count($array);
    $answer = '';
    for ($count = 0; $count<$array_len; $count++){
        unset($array_2[$count]);
        $b = ($array[$count]);
        if (in_array($array[$count],$array_2)){
            for ($count2 = 0; $count2<$array_len; $count2++){
                $d = $array[$count2];
                $g = ($array[$count]);
                if ($array[$count2] == $b){
                    $array[$count2] = ')';
                }
            }
        } elseif ($array[$count] == ')'){
            null;
        } else
            $array[$count] = '(';
        unset($array_2[$count]);
    }
    $string = '';
    foreach ($array as $unit) {
        $string.=$unit;
    }
    return $string;
}

$a = duplicate_encode('recede');
print($a);