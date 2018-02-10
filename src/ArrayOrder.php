<?php

class ArrayOrder
{
    public function ordering()
    {
        $array      = [];
        $array['a'] = &$array['b'];
        $array['b'] = 1;
    }
}