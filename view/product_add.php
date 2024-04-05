<div class="container">
        <form class="login-form" action="index.php?action=register_product" method="post" >
            <h2>Login</h2>
            <div class="form-group">
                <label for="produto">Nome do Produto:</label> <br>
                <input type="text" id="produto" name="nome" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="preco">Preço:</label> <br>
                <input type="text" id="preco" name="preco" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="quantidade">Quantidade:</label> <br>
                <input type="text" id="quantidade" name="quantidade" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>