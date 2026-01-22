<?php include("../task4/nav.php"); ?>



<title>Início - Eneba</title>


<div id="carouselTopSponsers" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselTopSponsers" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselTopSponsers" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselTopSponsers" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselTopSponsers" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  
  <div class="carousel-inner">
    <div id="container-steam-card" class="carousel-item active">
      <img id="img-steam-card" src="../task4/img/cards/card_steam.png" class="img-carousel-sponsers d-block" alt="steam card">
    </div>

    <div id="container-xbox-card" class="carousel-item">
      <img id="img-xbox-card" src="../task4/img/cards/card_xbox.png" class="img-carousel-sponsers d-block" alt="xbox card">
    </div>

    <div id="container-mojang-card" class="carousel-item">
      <img id="img-mojang-card" src="../task4/img/cards/card_mojang.png" class="img-carousel-sponsers d-block" alt="mojang card">
    </div>

    <div id="container-microsoft-card" class="carousel-item">
      <img id="img-microsoft-card" src="../task4/img/cards/card_microsoft.png" class="img-carousel-sponsers d-block" alt="microsoft card">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselTopSponsers" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselTopSponsers" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------->

<div id="div_subnav_catalog"> <!--class="bg-primary"-->
<nav class="container d-flex flex-row gap-5 align-items-center overflow-x-auto py-3">
    <button class="btn bi bi-caret-left fs-5 text-light"></button>

    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-controller"></i>
        <span>Jogos</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-controller"></i>
        <span>Jogos</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-controller"></i>
        <span>Jogos</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-controller"></i>
        <span>Jogos</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-gift"></i>
        <span>Game Cards</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-gift"></i>
        <span>Gift Cards</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-key"></i>
        <span>Chaves</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-steam"></i>
        <span>Steam</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-xbox"></i>
        <span>Xbox</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-microsoft"></i>
        <span>Microsoft</span>
    </a>
    <a class="btn d-flex flex-column fs-5 text-light">
        <i class="bi bi-playstation"></i>
        <span>Playstation</span>
    </a>








    <button class="btn bi bi-caret-right fs-5 text-light"></button>






</nav>
</div>











<?php include("../task4/footer.php") ?>