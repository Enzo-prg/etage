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

                
            </ul>

            
        </div>
    </div>
</nav>

<section class="hero-section">
    <div class="section-overlay" style="background: linear-gradient( rgba(0, 0, 0, .40), rgba(0, 0, 0, 0.85) ), url(https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/i/piso_vinilico_lvt_3.0_ref._sao_paulo_1.png) no-repeat bottom; background-size: cover; opacity: 1;"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                
                <h1 class="text-white mb-5" style="font-size: 39px">A sofisticação paulistana agora em seu revestimento</h1>

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

    <div class="col-md-12 text-center border-bottom">
        <h2>Piso vinílico São Paulo</h2>
        <p>Se você está procurando um piso moderno, sofisticado e fácil de instalar, você veio ao lugar certo. Com o Piso Vinílico em Régua da Etage, você pode ter a elegância da cidade de São Paulo em sua própria casa.<br/>
       O Piso Vinílico em Régua São Paulo é uma escolha perfeita para quem busca um ambiente elegante e moderno. Com sua textura suave e cores neutras, ele é fácil de combinar com qualquer estilo de decoração.</p>
    </div>

    <div class="row pt-5"> 
        <div class="col-md-12"><H2>Inspiração do piso vinílico São Paulo</H2></div>
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/novo-piso-etage-sp-3.jpg" alt="piso vinilico belo florianopolis 3.0"/>
            
        </div>

        <div class="col-md-6 pt-4">
            
            <p>São Paulo é uma cidade conhecida por sua diversidade cultural, gastronomia de dar água na boca e uma arquitetura de tirar o fôlego. Agora, você pode trazer um pouco do charme paulistano para dentro de sua casa com o Piso Vinílico em Régua São Paulo, da Etage. Com sua textura suave e cores neutras, o Piso Vinílico em Régua São Paulo é perfeito para quem busca um ambiente moderno e sofisticado. </p>
            <hr/>
            <h3 class="h4">Resistência e durabilidade</h3>
            <p>O Piso Vinílico em Régua São Paulo é resistente a riscos, manchas e desgastes causados pelo tempo, além de ser muito fácil de limpar. Isso significa que ele irá durar por muitos anos sem perder sua beleza.</p>
            <hr/>
            <h3 class="h4">Instalação prática</h3>
            <p>Com o sistema de encaixe clic, a instalação do Piso Vinílico em Régua São Paulo é prática e rápida, podendo ser feita por qualquer pessoa. Não é necessário utilizar cola ou outros adesivos, o que torna o processo ainda mais simples.</p>
            <hr/>
            <h3 class="h4">Conforto acústico e térmico</h3>
            <p>O Piso Vinílico em Régua São Paulo proporciona conforto acústico e térmico, reduzindo o impacto dos ruídos e tornando o ambiente mais aconchegante.<br/>
                </p>
        </div>
        <div class="col-12">
            <p>O Piso Vinílico em Régua São Paulo, assim como todos os materiais da Linha Brasis, da Etage, é ecologicamente correto, pois é produzido com materiais recicláveis e não emite substâncias tóxicas durante sua instalação.<br/>
                Então, se você quer transformar sua casa em um ambiente elegante e sofisticado, escolha o Piso Vinílico em Régua São Paulo, da marca Etage. Com ele, você terá a beleza da cidade de São Paulo em seu próprio escritório para se inspirar.</p>
        </div>
    </div>

    <div class="row pt-5"> 

        <div class="col-md-2 pt-3 d-none d-md-block">
            <img class="pt-5 w-100" src="https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/_/s_o_paulo.jpg" alt="Régua piso sao paulo" />
        </div>

        <div class="col-md-10 d-flex justify-content-center">
            <img class="w-75 pt-5" src="images/ficha_tecnica3.0.png" alt="fixa tecnica" />
        </div>

    </div>

</section>

@endsection