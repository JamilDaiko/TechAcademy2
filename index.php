<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/logo.png">

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
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
<footer class="text-white pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="index.php?param=home"><img src="imagens/image-removebg-preview (7) (1).png" alt="" width="150px"></a>
                </div>
            <div class="col-md-4">
                <h5>Navegação</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php?param=home" class="text-white">Home</a></li>
                    <li><a href="index.php?param=contato" class="text-white">Contato</a></li>
                    <li><a href="index.php?param=quemsomos" class="text-white">Quem Somos</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> Endereço, Cidade, Estado</li>
                    <li><i class="fas fa-phone"></i> (11) 1234-5678</li>
                    <li><i class="fas fa-envelope"></i> contato@exemplo.com</li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mr-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white mr-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white mr-3"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>
</html>