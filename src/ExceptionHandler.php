<?php

class ExceptionHandler
{
    public function __construct()
    {
        set_exception_handler(array($this, 'handleOld'));

        throw new Exception('Error from constructor' . PHP_EOL);
    }

    public function handleOld(Exception $e)
    {
        echo 'Handling error old: ' . $e->getMessage();
    }

    public function handleNew(Throwable $e)
    {
        echo 'Handling error new: ' . $e->getMessage();
    }

    public function handleBoth($e)
    {
        echo 'Handling error for both: ' . $e->getMessage();
    }

    public function triggerError()
    {

    }
}

$exceptionHandler = new ExceptionHandler('invalid parameter');
