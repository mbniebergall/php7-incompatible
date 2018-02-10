<?php

class Mssql
{
    public function connect()
    {
        return mssql_connect('db.dev', 'dbuser', 'password123');
    }

    public function query()
    {
        mssql_query('SELECT id FROM TABLE');
    }

    public function getRowsAffected()
    {
        return mssql_rows_affected($this->connect());
    }
}