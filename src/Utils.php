<?php

namespace Hexlet\Phpunits\Utils;

function reverseString(string $string): string
{

    return implode(array_reverse(str_split($string)));
}
