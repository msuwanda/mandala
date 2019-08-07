<?php
class DbConfig
{
    private $_host     = '__HOST__';
    private $_username = '__DB_USER__';
    private $_password = '__DB_PASS__';
    private $_database = '__DB_NAMA__';

    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {

            $this->connection = new PDO("mysql:host=".$this->_host.";dbname=".$this->_database, $this->_username, $this->_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this->connection;
    }
}

?>
