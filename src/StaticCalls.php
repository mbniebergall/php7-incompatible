<?php

class StaticCalls
{
    public function doSomething()
    {
        echo __METHOD__;
    }

    public static function staticThing()
    {
        return __METHOD__;
    }
}

StaticCalls::doSomething();

$staticCalls = new StaticCalls;
$staticCalls->staticThing();