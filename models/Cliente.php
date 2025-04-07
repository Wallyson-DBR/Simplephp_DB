<?php 

class Cliente {
    private $conn;
    private $table_new = "clientes";

    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $endereco;
    public $data_cadastro;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO" . $this->table_new . "(nome, email, telefone, endereco) VALUES (:nome, :email, :telefone, :endereco)"

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam("nome", $this->nome);
        $stmt->bindParam("email", $this->email);
        $stmt->bindParam("telefone", $this->telefone);
        $stmt->bindParam("endereco", $this->endereco);

        if ($stmt->execute()) (
            return true;
        )
        return false;
    }

    public function read() {
        $query = "SELECT id, nome, email, telefone, endereco, data_cadastro FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParm(":nome, $this->nome");
        $stmt->bindParm(":email, $this->email");
        $stmt->bindParm(":telefone, $this->telefone");
        $stmt->bindParm(":endereco, $this->endereco");
        $stmt->bindParm(":id, $this->id");

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);


        if ($stmt->execute())  {
            return true;
        }

        return false;
    }
}
?>