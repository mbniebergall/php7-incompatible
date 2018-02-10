<?php

class SwitchMultiDefault
{
    public function multiDefault($value)
    {
        switch ($value) {
            default:
                echo $value;
                break;

            default:
                var_dump($value);
                break;
        }
    }
}