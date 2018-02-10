<?php

class FuncGetArg
{
    public function getArgs($int)
    {
        $int++;
        var_dump(func_get_arg(0));
        var_dump(func_get_args());
        var_dump(debug_backtrace());
    }
}