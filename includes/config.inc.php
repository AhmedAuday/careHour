<?php

    class Database{
        private $host = "localhost";
        private $user = "root";
        private $pwd = "";
        private $dbName = "carehour";

        protected function db(){
          try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
            $pdo = null;
          }catch(PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
          }
        }
    }

?>
