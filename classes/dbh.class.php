<?php

class Dbh {
    
    private $host = 'localhost';
    private $userName = 'root';
    private $pwd = '';
    private $dbName = 'users';

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = New PDO($dsn, $this->userName, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }

}


