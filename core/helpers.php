<?php

namespace Core\Helpers;

function truncate(string $string, int $lg_max = 150)
{
    if (strlen($string) > $lg_max) {
        $string = substr($string, 0, $lg_max);
        $last_space = strrpos($string, " ");

        if ($last_space !== false) {
            $string = substr($string, 0, $last_space);
        }
        $string .= "...";
    }

    return $string;
}
