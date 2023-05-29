@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg p-0">
    <div class="container">
        <a class="navbar-brand" style="max-width: 200px;" href="/">
           <img class="w-100" src="images/logo_principal.png">
        </a>

        

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                <!--<li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Home</a>
                </li>-->

                <li class="nav-item">
                    <a class="nav-link " href="/">Etage</a>
                </li>

                <li class="nav-item">
                    <!-- dropdown-->
                    <div class="dropdown">
                        <a class="nav-link click-scroll" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Brasis LVT 2.0
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <ul class="list-group list-group-flush ">
                                <li class="list-group-item"><a class="text-dark" href="/vitoria">Vitória</a></li>
                                <li class="list-group-item"><a class="text-dark" href="/florianopolis">Florianópolis</a></li>
                                <li class="list-group-item"><a class="text-dark" href="/curitiba">Curitiba</a></li>
                              </ul>
                        </div>
                      </div>
                    <!--fim dropdon-->
                </li>

                <li class="nav-item">
                    <!-- dropdown-->
                    <div class="dropdown">
                        <a class="nav-link click-scroll" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Brasis LVT 3.0
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a class="text-dark" href="/belo-horizonte">Belo horizonte</a></li>
                                <li class="list-group-item"><a class="text-dark" href="/sao-paulo">São Paulo</a></li>
                                <li class="list-group-item"><a class="text-dark" href="/rio-de-janeiro">Rio de Janeiro
                                </a></li>
                              </ul>
                        </div>
                      </div>
                    <!--fim dropdon-->
                </li>

                <li class="nav-item">
                    <!-- dropdown-->
                    <div class="dropdown">
                        <a class="nav-link click-scroll" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Brasis Autoportante
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a class="text-dark" href="/manaus">Manaus</a></li>
                                <li class="list-group-item"><a class="text-dark" href="/goiania">Goiânia</a></li>
                                <li class="list-group-item"><a class="text-dark" href="/cuiaba">Cuiabá</a></li>
                              </ul>
                        </div>
                      </div>
                    <!--fim dropdon-->
                </li>

                <li class="nav-item">
                    <!-- dropdown-->
                    <div class="dropdown">
                        <a class="nav-link click-scroll" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Carpete Prime MB
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a class="text-dark" href="/porto-alegre">Porto Alegre</a></li>
                                <li class="list-group-item"><a class="text-dark" href="/brasilia">Brasilia</a></li>
                                <li class="list-group-item"><a class="text-dark" href="/recife">Recife</a></li>
                              </ul>
                        </div>
                      </div>
                    <!--fim dropdon-->
                </li>

                <!--<li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_6">Contato</a>
                </li>-->
            </ul>

            <!--<a href="ticket.html" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>-->
        </div>
    </div>
</nav>

<section class="hero-section">
    <div class="section-overlay" style="background: linear-gradient( rgba(0, 0, 0, .40), rgba(0, 0, 0, 0.85) ), url(images/belo-horizonte.jpg) no-repeat bottom; background-size: cover; opacity: 1;"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                
                <h1 class="text-white mb-5" style="font-size: 39px">Piso Vinílico em Régua Belo Horizonte: Beleza, Durabilidade e Praticidade</h1>

                <p class="text-white mb-5 d-block" style="font-size: 20px;">Comprar em:</p>

                <a class="btn btn-success custom-btn smoothscroll" style="font-size: 20px;" href="/">www.afrel.com.br</a>
            </div>

            <div class="col-lg-12 col-12 mt-auto  flex-column flex-lg-row text-center">
                

                <div class="social-share text-center">
                    <ul class="social-icon d-flex align-items-center justify-content-center">
                        <span class="text-white me-3">Encontre-nos:</span>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-facebook"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-twitter"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-instagram"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
            
    </div>
</section>


<section class="container pt-5">


    <div class="row p-3"> 
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/novo-piso-etage-bh-2.jpg" alt="piso vinilico belo horizonte 3.0"/>
            
        </div>

        <div class="col-md-6 pt-5">
            <H2>Piso Vinílico em Régua Belo Horizonte</H2>
            <p><strong>O piso vinílico em régua Belo Horizonte</strong>, faz parte da linha Brasis, e é produzido pela marca Etage, uma marca própria da Afrel. é uma opção de revestimento de piso que tem ganhado cada vez mais espaço no mercado. Esse tipo de piso é composto por réguas que imitam a aparência da madeira, mas com a praticidade e durabilidade do vinil, entregando mais brasilidade para seu projeto.</p>
            <hr/>
            <h3 class="h4">A inspiração na cidade de Belo Horizonte</h3>
            <p>O piso vinílico em régua Belo Horizonte recebe esse nome em homenagem à capital mineira, que é conhecida por sua arquitetura marcante, paisagens naturais exuberantes e tradição cultural. A ideia é reproduzir nas réguas do piso as características mais marcantes da cidade, como as cores e texturas das montanhas e das construções históricas.</p>
        </div>
    </div>

    <div class="row p-3"> 
        

        <div class="col-md-6 pt-5 ">
            <H2>Vantagens práticas do piso vinílico em régua</H2>
            <p>Além da beleza estética, <strong>o piso vinílico em régua</strong> apresenta diversas vantagens práticas para quem opta por esse material. Em primeiro lugar, ele é muito fácil de limpar e manter, pois é resistente à água e à umidade, além de não acumular sujeira ou poeira com facilidade. Isso faz dele uma ótima escolha para ambientes com grande fluxo de pessoas ou onde a higiene é essencial, como hospitais, clínicas, escolas e restaurantes.</p>
            <hr/>
            <h3 class="h4">Instalação fácil e rápida</h3>
            <p>Outra vantagem importante do <strong>piso vinílico em régua</strong> é a sua instalação rápida e simples. Esse tipo de piso pode ser facilmente instalado sobre outras superfícies, como pisos de cerâmica ou de madeira, sem a necessidade de quebrar ou remover o revestimento anterior. Isso faz com que a instalação seja mais econômica e rápida, sem gerar entulhos ou sujeira no ambiente.
            </p>
        </div>

        <div class="col-md-6">
            
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/novo-piso-etage-bh-3.jpg" alt="piso vinilico belo horizonte 3.0"/>
            
        </div>

        <div class="col-md-2 pt-3 d-none d-md-block">
            <img class="pt-5 w-100" src="https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/b/e/belo_horizonte.jpg" alt="" />
        </div>

        <div class="col-md-10 d-flex justify-content-center">
            <img class="w-75 pt-5" src="images/ficha_tecnica3.0.png" alt="fixa tecnica" />
        </div>

    </div>

</section>

@endsection