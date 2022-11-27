<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/index.css">
    <title>www.siteHenrique.com.br</title>
</head>
<body>
    <header>
   <nav>
    <a class="logo" href="../index.php">Ricks´s enterprise</a>
    <ul class="nav-list">
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="../Screens/produtos.php">Produtos</a></li>
      <li><a href="../screens/contato.php">Contato</a></li>
      <li><a href="../screens/avaliação.php">Avaliação</a></li>
    </ul>
   </nav>
    </header>
<div class= "body-page">
    <div class="container">
        <div class="caixa-header">
        <h1>Quem nós somos?</h1>

        <div class="caixa-body">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet vero eaque velit quisquam molestias. A veritatis qui sit. Dolores sint minima harum nesciunt aperiam quos modi voluptate itaque veritatis iure.</p>
        </div>

        </div>
        <div class="caixar-R">
            Somos uma pequena empresa desenvolvedora de máquinas a longo prazo...
        </div>
    </div>
</div>

<div class=body-page2>
<div class="container">
        <div class="caixa-header">
        <h1>Avalie-nos</h1>

        <div class="caixa-body">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet vero eaque velit quisquam molestias. A veritatis qui sit. Dolores sint minima harum nesciunt aperiam quos modi voluptate itaque veritatis iure.</p>
        </div>

        </div>
        <div class="caixar-R">
            <form action="../Controle/Controle.avaliar.php" method="post">
                <label for="nome">Digite seu nome:</label><br><br>
                <input type="text" name="nome" class="input" required><br>
                <label for="e-mail">Digite seu E-mail:</label><br><br>
                <input type="email" name="email" class="input" required><br>
                <label for="texto">Digite sua avaliação:</label><br>
                <textarea name="texto" id="" cols="30" rows="10"></textarea><br>

                <input type="submit" name="botao" value="cadastrar" class="button">
            </form>
        </div>
    </div>

</div>

<footer>
    
</footer>
</body>
</html>