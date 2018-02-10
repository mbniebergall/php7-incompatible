<?php

class ExtraParens
{
    public function doSomething()
    {
        echo 'doing something';

        $this->doAnotherThing(($this->getThing()));
    }

    protected function doAnotherThing(&$thingToDo)
    {
        return $thingToDo;
    }

    protected function getThing()
    {
        return 'something amazing';
    }
}

