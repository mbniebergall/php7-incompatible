<?php

class TooFewArguments
{
    public function doThing($a)
    {
        return $this->doOtherThing($a);
    }

    protected function doOtherThing($a, $b)
    {
        return $a . $b;
    }
}