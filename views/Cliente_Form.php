<form method="POST">
    <input type="text" name="nome" placeholder="Nome" value="<?php echo $cliente['nome'] ?? ''; ?>" require><br>
    <input type="email" name="email" placeholder="Email" value="<?php echo $cliente['email'] ?? ''; ?>" require><br>
    <input type="text" name="telefone" placeholder="Telefone" value="<?php echo $cliente['telefone'] ?? ''; ?>" ><br>
    <textarea name="endereco" placeholder="Endereço"> <?php echo $cliente['endereco'] ?? ''; ?> </textarea> <br>
</form>