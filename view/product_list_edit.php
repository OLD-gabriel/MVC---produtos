<div class="table-container">
        <h1>Lista de Produtos</h1>
        <table class="table"> 
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                <?php foreach($produtos as $produto) { ?>
                <tr>
                    <td><?php echo $produto["id"] ?></td>
                    <td><?php echo $produto["nome_produto"] ?></td>
                    <td><?php echo $produto["preco"] ?></td>
                    <td><?php echo $produto["quantidade"] ?></td>

                    <td>
                        <form action="index.php?action=edit_product" method="post">
                            <button class="btn-edit" name="ID" type="submit" value="<?php echo $produto["id"] ?>" >Editar</button>
                        </form>
                    </td>

                    <td>
                        <form action="index.php?action=excluir_product" method="post">
                            <button class="btn-excluir" name="id" type="submit" value="<?php echo $produto["id"] ?>" >Excluir</button>
                        </form>
                    </td>

                </tr>
                
                <?php } ?> 
        </table>
    </div>