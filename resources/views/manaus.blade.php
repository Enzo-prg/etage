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
    <div class="section-overlay" style="background: linear-gradient( rgba(0, 0, 0, .40), rgba(0, 0, 0, 0.85) ), url(https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/i/piso_vinilico_3.0_ref._rio_de_janeiro_1.png) no-repeat bottom; background-size: cover; opacity: 1;"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                
                <h1 class="text-white mb-5" style="font-size: 39px">Descubra a beleza tropical do Piso Vinílico em Régua Manaus, da Etage!</h1>

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
        <h2>Piso vinílico Autoportante Manaus</h2>
        <p>Se você está buscando uma forma de renovar o piso da sua casa e ainda trazer um pouco da beleza e da energia vibrante do Rio de Janeiro para dentro do seu lar, o piso vinílico em régua Rio de Janeiro da Etage é a escolha perfeita para você.<br/>
            Se você está em busca de um revestimento prático, versátil e com uma dose extra de charme, você veio ao lugar certo. Mergulhe nas belezas da cidade de Manaus para  conhecer o incrível Piso Vinílico em Régua Manaus, da Linha Brasis, da Etage. Prepare-se para se encantar com essa opção que combina durabilidade, elegância e o estilo da floresta amazônica.</p>
    </div>

    <div class="row pt-5"> 
        
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="images/vitoria.jpg" alt="piso vinilico belo florianopolis 3.0"/>
            
        </div>

        <div class="col-md-6">
            <H2>Experimente o encanto de Manaus</H2>
            <p>Imagine-se caminhando pelas paisagens exuberantes de Manaus, onde rios, florestas e vida selvagem se fundem em uma harmonia perfeita. Agora, imagine trazer toda essa beleza e encanto para dentro dos seus espaços. Com o Piso Vinílico em Régua Manaus, é possível!<br/>

                Inspirado nas maravilhas naturais dessa região deslumbrante, esse piso foi cuidadosamente projetado para transmitir a essência dos cenários que fazem de Manaus um lugar tão especial, com o visual vivo da madeira.<br/>
                
                O piso vinílico Manaus é recomendado para uso comercial pesado, em áreas de alto tráfego de pessoas, pois possui 5mm de espessura e uma capa de uso de 0,77mm, uma das maiores do mercado. Além de ser fácil de limpar, se tornando perfeita para quem busca comodidade e bem estar para ambientes corporativos.</p>
            
        </div>
        
    </div>

    <div class="row pt-5"> 

        <div class="col-12">
            <h2>Atributos e vantagens do Piso Vinílico em Régua Manaus</h2>
        </div>

        <div class="col-md-6 pt-5">
            <h3 class="h4">Durabilidade excepcional:</h3>
            <p>O Piso Vinílico em Régua Manaus foi desenvolvido com materiais de alta qualidade, garantindo uma resistência superior ao desgaste e ao tráfego constante. Sua camada de proteção ajuda a evitar riscos, manchas e o desbotamento causado pela luz solar, mantendo o piso com aparência de novo por muitos anos.</p>
            <hr/>
            <h3 class="h4">Fácil instalação e manutenção:</h3>
            <p>Com o sistema de encaixe simples e prático, a instalação do Piso Vinílico em Régua Manaus é rápida e descomplicada. Você não precisa ser um especialista em reformas para dar um toque especial aos seus espaços. Além disso, sua superfície é fácil de limpar, exigindo apenas uma rotina básica de manutenção para mantê-lo impecável.</p>
            <hr/>
            <h3 class="h4">Conforto acústico e térmico:</h3>
            <p>O Piso Vinílico em Régua Manaus possui propriedades isolantes, reduzindo o ruído de impacto e proporcionando um ambiente mais tranquilo e agradável. Além disso, sua composição ajuda a manter a temperatura interna estável, tornando-o uma escolha ideal para climas variados.</p>
        </div>
        <div class="col-md-6">
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/novo-piso-etage-rj-3.jpg" alt="piso vinilico manaus" />
        </div>

        <div class="col-md-2 pt-3 d-none d-md-block">
            <img class="pt-5 w-100" src="images/regua-manaus.jpg" alt="Régua piso sao paulo" />
        </div>

        <div class="col-md-10 d-flex justify-content-center">
            <img class="w-75 pt-5" src="images/autoportante-fixa.jpg" alt="fixa tecnica" />
        </div>

    </div>

</section>

@endsection