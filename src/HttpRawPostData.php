<?php

class HttpRawPostData
{
    public function getPostData()
    {
        return $HTTP_RAW_POST_DATA;
        // return file_get_contents("php://input");
    }

    public function getGlobalsPostData()
    {
        return $GLOBALS['HTTP_RAW_POST_DATA'];
    }
}