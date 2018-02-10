<?php

class EregRemoved
{
    public function eregReplace($string)
    {
        return ereg_replace(',', '|', $string);
    }

    public function ereg($string)
    {
        return ereg($string);
    }
}