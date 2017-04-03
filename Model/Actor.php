<?php

class Actor
{
    //mysql confuguration
    public $user = 'root';
    public $dbname = 'sakila';
    public $password = '';
    public $host = "localhost";
    public $dsn = '';
    public $pdo = 'mysql';
    public $testMode = TRUE;

    public $listActors = array();

    public function __construct()
    {
        $this->dsn = sprintf('mysql:dbname=%s;host=%s', $this->dbname, $this->host);
        if ($this->testMode) {
            $this->pdo = new PDO($this->dsn, $this->user, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        } else {
            $this->pdo = new PDO($this->dsn, $this->user, $this->password);
        }
        $sql = 'SELECT * FROM `actor`';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $this->listActors[] = $row;
        }
    }

    public function getActors()
    {

        return $this->listActors;
    }
}
