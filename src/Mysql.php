<?php

class Mysql
{
    public function connect()
    {
        mysql_connect('db.dev', 'dbuser', 'password123');
    }

    public function query()
    {
        mysql_query('SELECT id FROM TABLE');
    }

    public function getError()
    {
        return mysql_error();
    }
}