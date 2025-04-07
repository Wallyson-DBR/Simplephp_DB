<?php

class Database {
    private $host = "localhost";
    private $db_name = "phpmvc";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConection() {
        $this-> conn = null;

        try {
            $this->conn = new PDO("mysqli:host=($this->host) db_name=($this->db_name)", $this->username, $this->password);
            $this->conn->setAtribute(PDO: :ATTR_ERRMODE, PDO: :ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erro na conexão com o banco de dados: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>