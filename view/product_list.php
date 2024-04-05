<div class="table-container">
        <h1>Lista de Produtos</h1>
        <table class="table"> 
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
                <?php foreach($produtos as $produto) { ?>
                <tr>
                    <td><?php echo $produto["id"] ?></td>
                    <td><?php echo $produto["nome_produto"] ?></td>
                    <td><?php echo $produto["preco"] ?></td>
                    <td><?php echo $produto["quantidade"] ?></td>
                </tr>
                <?php } ?> 
        </table>
    </div>