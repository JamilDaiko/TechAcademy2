<?php
$api = file_get_contents("https://nexusjj2.000webhostapp.com/api/games.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {
}
?>




<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagens/Morster Hunter.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagens/Goblin.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagens/Caminho.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagens/Nave.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container my-4">
    <div class="row">

        <?php
        foreach ($dadosApi as $jogo) {
        ?>

            <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-right">
                <div class="card">
                    <img src="<?= $jogo->fotoCard ?>" class="card-img-top" alt="<?= $jogo->title ?>">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $jogo->title ?></h5>
                        <p class="card-text"><?= $jogo->description ?></p>
                        <a href="<?= $jogo->linkJogo ?>" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                                <path d="M10.804 8 5 4.633v6.734zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696z" />
                            </svg></a>
                    </div>
                </div>
            </div>






        <?php
        }
        ?>





    </div>
</div>