<h2>Lista de Clientes</h2>
<table>
    <a href="index.php?action=create">Novo</a>
       <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ações</th>
       </tr>
    </thead>
    <tbody>
        </php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td><?php echo $cliente['telefone']; ?></td>
                <td><?php echo $cliente['endereco']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $cliente['id']; ?>">Editar</a> |
                    <a href="index.php?action=delete&id=<?php echo $cliente['id']; ?>">Excluir</a>
                </td>
            </tr>
        </php endforeach; ?>
    </tbody>
</table>