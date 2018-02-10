<?php

class SetStreamBlocking
{
    public function setIt($stream, $mode)
    {
        set_socket_blocking($stream, $mode);
    }
}