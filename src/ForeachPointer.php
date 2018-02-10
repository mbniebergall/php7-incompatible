<?php

class ForeachPointer
{
    public function loopIt(array $array)
    {
        foreach ($array as &$value) {
            echo current($array);
        }
    }

    public function copyOfArray(array $array)
    {
        foreach ($array as $key) {

        }
    }
}