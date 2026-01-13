<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando - StreamPlay</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div class="container">
        <h1>StreamPlay</h1>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="login.html">Entrar</a></li>
                <li><a href="cadastro.html">Assinar Agora</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="container">
    <section class="conteudo-principal">
        <?php
            $nome = htmlspecialchars($_POST['nome']);
            $plano = htmlspecialchars($_POST['plano']);
        ?>

        <h2>Bem-vindo(a), <?php echo $nome; ?>!</h2>

        <p>
            Sua solicitação para o plano <strong><?php echo ucfirst($plano); ?></strong> foi registrada com sucesso.
        </p>

        <p>
            Este é um ambiente de teste desenvolvido para fins acadêmicos.
        </p>

        <a href="index.html">
            <button class="btn-voltar">Voltar ao Início</button>
        </a>
    </section>
</main>

<footer>
    <p>Projeto acadêmico – Desenvolvimento Web</p>
    <p>
        Desenvolvido por 
        <a href="https://github.com/paulapascoal" target="_blank">
            Paula Pascoal
        </a>
    </p>
</footer>

</body>
</html>
