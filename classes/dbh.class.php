<?php
    class Dbh {
        private $dbServerName;
        private $dbUsername;
        private $dbPassword;
        private $dbDatabase;

        public function __construct(){
            $this->dbServerName = 'localhost';
            $this->dbUsername = 'root';
            $this->dbPassword = 'root';
            $this->dbDatabase = 'swportal';
        }

        protected function connect(){
            $dsn = 'mysql:host='.$this->dbServerName. ';dbname='.$this->dbDatabase;
            $pdo = new PDO($dsn, $this->dbUsername, $this->dbPassword);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }