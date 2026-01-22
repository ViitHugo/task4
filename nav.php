    <?php include("header.php"); ?>
    <!-------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------->
<body class="d-flex flex-column min-vh-100"> 
    <div id="div_nav_primary" class="text-light">
    <nav id="nav_primary" class="container-fluid px-5 d-flex justify-content-between align-items-center fs-5"> <!-------------------- NAVEGAÇÃO PRIMÁRIA -->
        
        <!-- ideia: <div class="d-flex justify-content-start gap-5"> -->
        <div id="div_main_icon">
        <a href="../task4">
            <img src="img/unnamed.png" class="img-fluid" alt="main icon eneba" width="150px" height="100px">
        </a>
        </div>

        <form id="form_search_bar" action="#" method="GET" class="d-flex justify-content-between"> <!-------------------------------------------- BARRA DE PESQUISA -->
            <input class="text-light" placeholder="Pesquise por jogos, gift-cards, licenças e mais...">
            <button class="btn bi bi-search"></button>
        </form>
        <!-- ideia: </div> -->

        <div class="d-flex justify-content-end gap-4">
            <button class="btn_nav_1 btn text-light bi bi-globe fs-5"></i> Idioma | XX</button>
            <button class="btn_nav_1 btn text-light bi bi-heart fs-5"></i></button>
            <button class="btn_nav_1 btn text-light bi bi-cart fs-5"></i></button>
            
            <div>
                <button class="btn_nav_1 btn text-light bi bi-person fs-5"></i> Entrar</button>
                <span>|</span>
                <button class="btn_nav_1 btn text-light fs-5"></i>Registrar</button>
            </div>
        </div>

    </nav>
    </div>

    <!-------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------->

    <div id="div_nav_secundary" class="text-light">
    <nav id="nav_secundary" class="container d-flex justify-content-between align-items-center"> <!---------------------------------------------- NAVEGAÇÃO SECUNDÁRIA -->

        <button class="btn_nav_2 btn bi bi-list text-light fs-5"> Categorias</button>

        <button class="btn_nav_2 btn text-light fs-5">Ofertas do Mês</button>
        <button class="btn_nav_2 btn text-light fs-5">Jogos Baratos</button>
        <button class="btn_nav_2 btn text-light fs-5">Windows Keys</button>
        <button class="btn_nav_2 btn text-light fs-5">Grandes Esperados</button>
        <button class="btn_nav_2 btn text-light fs-5">1º Lote</button>
        <button class="btn_nav_2 btn text-light fs-5">Mais Comprados</button>
        <span> | </span>
        <button class="btn_nav_2 btn text-light fs-5">Promoção</button>

    </nav>
    </div>