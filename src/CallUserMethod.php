<?php

class CallUserMethod
{
    public function helloWorld($name)
    {
        echo 'Hello ' . $name;
    }
}

call_user_method('helloWorld', new CallUserMethod, 'Alice');

call_user_method_array('helloWorld', new CallUserMethod, ['Alice']);
