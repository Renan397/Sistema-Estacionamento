<?php
class DBConnection {
    private $host = null;
    private $username = null;
    private $password = null;
    private $dbname = null;
    private $port = null;

    private $connection = null;
    
    function __construct() {

        $this->setHost      ('localhost');
        $this->setUsername  ('root');
        $this->setPassword  ('');
        $this->setDbname    ('bd_pooparking');
        $this->setPort      ('3306');
        
        $this->setConnection(
            new mysqli(
                $this->getHost(),
                $this->getUsername(),
                $this->getPassword(),
                $this->getDbname(),
                $this->getPort()
                )
            );
    }
    
    public function getHost(){
        return $this->host;
    }

    public function setHost($host){
        $this->host = $host;
        return $this;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username = $username;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
        return $this;
    }

    public function getDbname(){
        return $this->dbname;
    }

    public function setDbname($dbname){
        $this->dbname = $dbname;
        return $this;
    }

    public function getPort(){
        return $this->port;
    }

    public function setPort($port){
        $this->port = $port;
        return $this;
    }

    public function getConnection(){
        return $this->connection;
    }

    public function setConnection($connection){
        $this->connection = $connection;
        return $this;
    }
    
    public function query($sqlCommand) {
        $result = $this->getConnection()->query($sqlCommand);
        return ($result);
    }
}
?>