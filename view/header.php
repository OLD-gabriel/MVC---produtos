<body>

    <header class="header">

        <h1 class="header-title">Sistema de Gerenciamento de Produtos</h1><br>
        
            <nav class="navigation">
                <ul>
                    <li><a href="index.php?action=home">Home</a></li> 
                    <li><a href="index.php?action=list_edit">Alterações</a></li>
                    <li><a href="index.php?action=add">Adicionar Produto</a></li>
                </ul>
            </nav>

            <div class="info-user">
                <span><?php echo $_SESSION["usuario"] ?></span> <br>
                <span><?php echo $_SESSION["nome"] ?></span> <br>
                <span><?php echo $_SESSION["email"] ?></span> <br>
                <span><a href="index.php?action=close">Sair</a></span>
            </div>
        
    </header>