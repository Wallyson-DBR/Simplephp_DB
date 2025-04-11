<?php

include_once 'config/database.php';
include_once 'models/Cliente.php';

class ClienteController {

    private $db;
    private $cliente;

    public function _construct() {
        $this->db = (new Database()) ->getConnection();
        $this->cliente = new Cliente($this->db);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->cliente->nome = $_POST['nome'];
            $this->cliente->email = $_POST['email'];
            $this->cliente->telefone = $_POST['telefone'];
            $this->cliente->endereco = $_POST['endereco'];

            if ($this->cliente->create()) {
                echo "Cliente cadastrado com sucesso!.";
            } else {
                echo  "Erro ao cadastrar o cliente.";
            }
        }
        include_once 'views/create_cliente.php';
    }

    public function edit($id) {
        $this->cliente->id = $id;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->cliente->nome = $_POST['nome'];
            $this->cliente->email = $_POST['email'];
            $this->cliente->telefone = $_POST['telefone'];
            $this->cliente->endereco = $_POST['endereco'];

            if ($this->cliente->update()) {
                echo "Cliente atualizado com sucesso!.";
            } else {
                echo  "Erro ao atualizar o cliente.";
            }
        } else {
            $stmt = $this->cliente->readOne();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->cliente->nome = $row['nome'];
            $this->cliente->email = $row['email'];
            $this->cliente->telefone = $row['telefone'];
            $this->cliente->endereco = $row['endereco'];
        }
        include_once 'views/edit_cliente.php';
    }
    public function delete($id) {
        $this->cliente->id = $id;
        if ($this->cliente->delete()) {
            echo "Cliente excluído com sucesso!.";
        } else {
            echo  "Erro ao excluir o cliente.";
        }

        header('Location: index.php');
    }
}
?>


