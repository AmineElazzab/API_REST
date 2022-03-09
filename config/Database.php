<?php
    class Database {
        // private $host = 'localhost';
        // private $db_name = 'flight';
        // private $username = 'root';
        // private $password = '';
        private $conn;

        public function  connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=localhost;dbname=myblog","root","");
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e) {
                echo 'Connect Error: ' . $e->getMessage();
            }

            return $this->conn;
        }
    }