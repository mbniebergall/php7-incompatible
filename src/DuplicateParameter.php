<?php

class DuplicateParameter
{
    public function sameParameterNames($a, $a)
    {
        return $a;
    }
}