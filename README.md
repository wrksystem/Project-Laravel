# PROJETO-FACULDADE - LAR QUATRO PATAS

    Projeto do 1º Período
    Análise e Desenvolvimento de Sistemas Tecnólogo
    
    WERIK RODRIGUES DE ANDRADE    

# OBJETIVO-DO-PROJETO
    Fazer um site web/plataforma para que seja possível localizar animais em situação de abandono,
    para que pessoas que tenham as condições necessárias possam os adotar e assim ajudar a cuidar deles,
    dando todo carinho e atenção necessários para dar uma boa vida para esses amiguinhos.

# TECNOLOGIAS
    Para criar o site foi usado PHP em conjunto com os Frameworks Laravel e Bootstrap.
    
    Foi usado o template Anyar como base para desenvolvimento do front da aplicação
 https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
    
    Banco de dados relacional MySql.
    
    Arquitetura MVC, onde por padrão ja é aplicada no Laravel.

    A aplicação Web conta com responsividade adaptativa tanto para aparelhos celular quanto Tablet, dentro
    da parte feito com Bootstrap.
    
    A decisão de utilização do Laravel se deu pela facilidade que o Framework traz para quem tem pouca 
    experiência de programação permitindo que apenas configurando as rotas, controllers e os models, 
    seja possível fazer uma aplicação completa sem muito entendimento da linguagem em si, pesquisando
    dentro da própria documentação do Framework.
    

# PAINEL-DE-USUARIO
    O painel de usuário não é feito com Bootstrap, apenas HTML e CSS.
    
# PREVIZUALIZAÇÃO-DA-APLICAÇÃO

    Esta é a página principal e inicial da aplicação, contendo Login, Registro de Usuário, Galeria
    
![image](https://user-images.githubusercontent.com/51803873/176567143-2b0ea174-3ae9-4462-b3c5-422ce6d1a386.png)
   
    O site foi feito utilizando apenas um HTML, então apenas descendo o scroll é possível chegar no Login.
    
![image](https://user-images.githubusercontent.com/51803873/176567267-2635e097-2488-4b98-b896-aab90b63489b.png)
   
    Clicar nos links de acesso que estão presentes no Header da página também irá jogá-lo diretamente no 
    campo da página que deseja acessar.
    
![image](https://user-images.githubusercontent.com/51803873/176567428-ec41bfbe-9d84-466b-a7bf-d58ace9f286e.png)
   
# GALERIA
    
![image](https://user-images.githubusercontent.com/51803873/176567613-b48a76c3-ed2d-46c3-ba69-49449810b282.png)

    A intenção de ter uma galeria era divulgar os animais em adoção, permitindo que eles fossem vistos mesmo
    que o usuário não estivesse cadastrado na plataforma.
 
# BACK END

    Todas as informações são levadas para um banco MySql, então para rodar a aplicação é necessário o MySql 
    Workbench instalado localmente na máquina, e caso ainda não esteja instalado, siga o link e o instale 
    para prosseguir.    
 https://dev.mysql.com/downloads/workbench/
    
    Também será necessário instalar o Xampp.    
 https://www.apachefriends.org/pt_br/index.html
 
    Além do COMPOSER: 
 https://getcomposer.org/
 
    A partir disso o ambiente PHP básico estará quase pronto.
    
    Também é de extrema inportância instalar o Laravel caso queira fazer alterações no projeto.
    Rode o comando:
    
    composer global require laravel/installer
    
    e verá a tela de instalação do Laravel.
    Para mais dúvidas siga a documentação:
 https://laravel.com/docs/8.x#getting-started-on-windows   
    
    
# PROJETO CLONADO NA SUA MÁQUINA
    Com o projeto clonado na sua máquina, com ele aberto rode o comando>
    
    php artisan migrate:refresh
    
    esse comando irá criar dentro do banco de dados todas as tabelas necessárias para a base da aplicação, mas para 
    funcionar é necessário que dentro do arquivo .env esteja com seu usuário e senha logados;
    
# EXEMPLO

![Capturar](https://user-images.githubusercontent.com/51803873/176568975-53ab14cf-7424-45df-add1-3fad435ad491.PNG)

    Sem isso o MySql não irá identificar seu banco de dados dando erro na criação das migrattions.
    
    Com todas esses pré requisitos instalados na máquina e o banco de dados criado rode o comando:
    
    php artisan serve
    
    Com isso sua página estará rodando localmente dentro da sua máquina na porta http://127.0.0.1:8000/
    que geralmente é aplicada ao XAMPP.
      
    
    
# RECOMENDAÇÕES
    Para utilizar essa aplicação recomendo que use o GitHub Desktop como sistema de versionamento de código para clonar o 
    repositório, e para IDE, utilize o VSCode Studio, por ser mais simples, leve e também prático, onde instalando o 
    PHP Extension Pack, todas as extensões que são necessárias para uma boa produção serão inseridos tornando seu ambiente 
    PHP pronto.

    



