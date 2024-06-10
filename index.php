<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?param=home">
                    <img src="imagens/image-removebg-preview (7) (1).png" alt="" width="120px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon icon-white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="index.php?param=home">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="index.php?param=contato">CONTATO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="index.php?param=quemsomos">QUEM SOMOS</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn fw-bold" type="submit">Entrar</button>
                        <button class="btn fw-bold" type="submit">Cadastre</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            //separar o pagametro por /
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo") {
            $pagina = "jogo/{$jogo}.php";
        } else {
            $pagina = "paginas/{$page}.php";
        }

        //verificar se a pagina exite
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>
    <footer class="text-center">
        <h4>&copy; 2024 - Todos os direitos resservados - Desenvolvido por Jamil Jose Daiko Junior</h4>

        <p>Entre em contato pelo e-mail: juniordaiko2005@gmail.com</p>
        Fone para contato: (44) 98403-5623
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>