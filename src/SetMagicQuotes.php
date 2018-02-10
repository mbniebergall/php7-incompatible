<?php

class SetMagicQuotes
{
    public function set($value)
    {
        set_magic_quotes_runtime($value);
    }
}