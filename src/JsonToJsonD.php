<?php

class JsonToJsonD
{
    public function encode()
    {
        $emptyString = json_decode('');
        $noDecimal = json_decode('{12.}');
        $expAfterDecimal = json_decode('{12.e3}');
    }
}