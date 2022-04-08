<?php

function cutString($line, $length = 12, $appends = '...'): string
{
    if (strlen($line) <= $length) {
        return $line;
    }
    $newStr = "";
    for ($i = 0; $i < $length; $i++) {
        $newStr .= $line[$i];
    }
    $newStr .= $appends;
    return $newStr;
}
