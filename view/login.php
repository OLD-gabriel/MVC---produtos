<div class="container">
        <form class="login-form" action="index.php?action=login" method="post" >
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Usuário/email:</label> <br>
                <input type="text" id="username" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label> <br>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a class="register" href="index.php?action=register">Não tem uma conta? Registre-se</a>
        </form>
    </div>