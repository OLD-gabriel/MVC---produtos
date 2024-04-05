<div class="container">
        <form class="login-form" action="index.php?action=register_edit_product&id=<?php echo $id?>" method="post" >
            
            <h2>Login</h2>

            <div class="form-group">
                <label for="produto">Nome do Produto:</label> <br>
                <input type="text" id="produto" name="nome" value="<?php echo $produtos[$id]["nome_produto"] ?>" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="preco">Preço:</label> <br>
                <input type="text" id="preco" name="preco" value="<?php echo $produtos[$id]["preco"] ?>"  class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="quantidade">Quantidade:</label> <br>
                <input type="text" id="quantidade" name="quantidade" value="<?php echo $produtos[$id]["quantidade"] ?>"  class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        
        </form>
    </div>  