<?php

function printArray($tableau) 
{
    $arr = $tableau;
    foreach ($arr as $key => $value) 
    {
        echo "{$key} => {$value}\n";
    }
}
printArray(array("lala", 2, "lolo", 4));
?>