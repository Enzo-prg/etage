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
                
                <h1 class="text-white mb-5" style="font-size: 39px">Cuiabá: O Piso Vinílico em Placa que Combina Durabilidade e Charme</h1>

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
        <h2>Cuiabá: Um Piso que Reflete a Alma de uma Cidade</h2>
        <p>Localizada no coração do Brasil, Cuiabá é conhecida por sua cultura rica, belezas naturais e hospitalidade. E assim como a cidade, o piso vinílico em placa Cuiabá da Etage é um verdadeiro reflexo de durabilidade, encanto e versatilidade. Vamos descobrir o porquê.</p>
    </div>

    <div class="row pt-5"> 
        
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="images/vitoria.jpg" alt="piso vinilico belo florianopolis 3.0"/>
            
        </div>

        <div class="col-md-6 ">
            <H2>Transforme seu ambiente corporativo com o Piso Vinílico em Placa Cuiabá:</H2>
            <p>Se você busca durabilidade, versatilidade e um toque de charme inspirado pela cidade de Cuiabá, o Piso Vinílico em Placa Cuiabá da Etage é a escolha perfeita.</p>
            <hr/>
            <p>Não perca a oportunidade de transformar seu espaço de trabalho em um local agradável e convidativo. Solicite um orçamento agora mesmo e traga a energia de Cuiabá para o seu ambiente corporativo!</p>
        </div>
        
    </div>

    <div class="row pt-5"> 


        <div class="col-md-6 pt-2">
            <h2>Atributos do Piso Vinílico Cuiabá</h2>
            <p>O piso vinílico em placa Cuiabá apresenta uma espessura de 5mm, garantindo a resistência necessária para suportar o tráfego intenso de ambientes corporativos. Com uma capa de uso de 0,77mm, o piso é capaz de resistir a arranhões, manchas e desgaste diário, mantendo sua beleza ao longo do tempo.</p>
            <hr/>
            <h3 class="h4">Fácil Limpeza e Instalação</h3>
            <p>Em um ambiente corporativo movimentado, a praticidade é essencial. O piso Cuiabá se destaca por ser extremamente fácil de limpar, bastando um pano úmido e produtos de limpeza suaves para manter sua aparência impecável. Além disso, a instalação é simples e rápida, permitindo que você renove seu espaço de trabalho sem grandes inconvenientes.</p>
            <hr/>
            <h3 class="h4">Versatilidade que Encanta</h3>
            <p>Cuiabá é uma cidade onde o tradicional se encontra com o moderno, e o piso vinílico em placa Cuiabá segue essa mesma proposta. Disponível em diferentes padrões, cores e texturas, ele permite que você crie ambientes corporativos únicos e sofisticados. Seja em uma sala de reuniões elegante ou em um escritório descolado, o piso Cuiabá se adapta a qualquer estilo.</p>
        </div>
        <div class="col-md-6">
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/novo-piso-etage-rj-3.jpg" alt="piso vinilico manaus" />
        </div>

        <div class="col-md-2 d-none d-md-block">
            <img class=" w-100" src="images/regua-cuiaba.jpg" alt="piso vinilico cuiaba" />
        </div>

        <div class="col-md-10 d-flex justify-content-center">
            <img class="w-75 pt-5" src="images/autoportante-fixa.jpg" alt="fixa tecnica" />
        </div>

    </div>

</section>

@endsection