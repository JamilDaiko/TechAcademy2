<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="home">
                    <img src="imagens/image-removebg-preview (7) (1).png" alt="" width="120px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon icon-white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="home">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="contato">CONTATO</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link active fw-bold" aria-current="page" href="quemsomos">QUEM SOMOS</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn fw-bold" type="submit"><a class="nav-link active fw-bold" href="login">Entrar</a></button>
                        <button class="btn fw-bold" type="submit"><a class="nav-link active fw-bold" href="cadastro">Cadastre</a></button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
<footer class="text-white pt-4" div data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="index.php?param=home"><img src="imagens/image-removebg-preview (7) (1).png" alt="" width="150px"></a>
            </div>
            <div class="col-md-4">
                <h5>Navegação</h5>
                <ul class="list-unstyled">
                    <li><a href="home" class="text-white">Home</a></li>
                    <li><a href="contato" class="text-white">Contato</a></li>
                    <li><a href="quemsomos" class="text-white">Quem Somos</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> Rua Simão Pereira 07, Campina da Lagoa, Parana</li>
                    <li><i class="fas fa-phone"></i> (44) 998403-5623</li>
                    <li><i class="fas fa-envelope"></i> juniordaiko2005@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <a href="https://www.facebook.com/jamil.junior.1829" target="_blank" class="text-white mr-3"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/jj_daiko/" target="_blank" class="text-white mr-3"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/jamil-josé-daiko-júnior-41bab3298/" target="_blank" class="text-white mr-3"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/JamilDaiko" target="_blank" class="text-white mr-3"><i class="fab fa-github"></i></a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <p>&copy; 2024 Site feito por Jamil Junior. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

</html>