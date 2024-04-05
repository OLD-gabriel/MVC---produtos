├── model
│   ├── ProductModel.php
    ├── LoginModel.php
│   └── Database.php
├── view
│   ├── header.php
│   ├── footer.php
│   ├── product_list.php
│   ├── product_add.php
│   └── product_edit.php
├── controller
│   |── ProductController.php
│   └── LoginController.php
├── index.php
└── .htaccess

Funcionalidades:

Listar todos os produtos.
Adicionar um novo produto.
Editar um produto existente.
Excluir um produto.
Requisitos de Funcionamento:

O arquivo index.php será o ponto de entrada do seu sistema. Ele deve direcionar as solicitações para os controladores apropriados.
O arquivo .htaccess será usado para reescrever URLs e permitir URLs amigáveis.
O controlador ProductController.php irá manipular todas as operações relacionadas aos produtos, como adicionar, editar, listar e excluir.
A model ProductModel.php será responsável pela interação com o banco de dados para recuperar, adicionar, editar e excluir produtos.
As visualizações (views) serão arquivos PHP contendo HTML e serão usadas para renderizar as páginas HTML, como listar produtos, adicionar/editar produtos, etc.
O arquivo header.php e footer.php conterá o cabeçalho e o rodapé HTML, respectivamente, para serem incluídos em todas as páginas.
Esse exercício fornecerá uma experiência mais abrangente no desenvolvimento de aplicativos web usando PHP e MySQL, envolvendo a criação de várias páginas, interação com banco de dados e organização do código em uma estrutura MVC (Model-View-Controller).