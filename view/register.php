<div class="container">
        <form class="register-form" action="index.php?action=register-account" method="post" >

            <h2>Registrar</h2>
            <div class="form-group">
                <label for="fullname">Nome completo:</label><br>
                <input type="text" id="fullname" name="fullname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label><br>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Usuário:</label> <br>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label><br>
                <input type="text" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a class="register" href="index.php">Já tem uma conta? Login</a>
        </form>
    </div>