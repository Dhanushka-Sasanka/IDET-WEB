<?php


class DBConnection
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '1234';
    private $database = 'simple_pos';
    private $port = '3306';
    private $connection;


    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);
    }

    /**
     * @return mysqli
     */
    public function getConnection(): mysqli
    {
        return $this->connection;
    }

}
