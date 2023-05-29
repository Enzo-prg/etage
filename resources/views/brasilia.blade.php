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
    <div class="section-overlay" style="background: linear-gradient( rgba(0, 0, 0, .40), rgba(0, 0, 0, 0.85) ), url(images/prime_mb2.jpg) no-repeat bottom; background-size: cover; opacity: 1;"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                
                <h1 class="text-white mb-5" style="font-size: 39px">Carpete em Placa Brasília: A Conexão entre o Design e a Funcionalidade</h1>

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
        <h2>Carpete em Placa Brasília</h2>
        <p>Inspira modernidade e reúne traços característicos de uma obra de arte. Podíamos estar falando da capital do Brasil, mas essas atribuições são do carpete Brasília, da ETAGE!<br/>
            O Carpete Modular em Placas Brasília é uma escolha inteligente para quem procura um piso durável, fácil de instalar e de manter. Nossos carpetes são feitos de materiais de alta qualidade e projetados para suportar o uso constante e a pressão de tráfego intenso. Eles são perfeitos para qualquer ambiente comercial ou residencial que precise de um piso confiável e resistente.</p>
    </div>

    <div class="row pt-5"> 
        
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/blog-carpete-placa-brasilia-2.jpg" alt="piso vinilico belo florianopolis 3.0"/>
            
        </div>

        <div class="col-md-6">
            <H2>Atributos do Carpete Brasília</H2>
            <p>O Carpete em Placa Brasília é produzido com tecnologia de ponta, utilizando fios de alta qualidade que proporcionam maior durabilidade e resistência. Além disso, o carpete é produzido com materiais sustentáveis, o que o torna uma opção ecologicamente correta. O design do carpete Brasília é inspirado na arquitetura moderna de Brasília, com linhas retas e formas geométricas, criando um ambiente contemporâneo e sofisticado.</p>
            
        </div>
        
    </div>

    <div class="row pt-5 pb-5"> 

        <div class="col-md-6 pt-2">
            <h2 class="h3">Vantagens de Comprar um Carpete em Placa</h2>
            <p>O Carpete em Placa apresenta diversas vantagens em relação a outros tipos de revestimento de piso. Além da praticidade de instalação e substituição, o carpete em placa também é fácil de limpar, basta usar um aspirador de pó ou uma vassoura macia. O carpete em placa também é resistente ao desgaste, mantendo sua aparência de novo por mais tempo. O Carpete em Placa Brasília é uma excelente opção para quem procura um piso prático e com design moderno. Além de trazer as vantagens do carpete em placa, o carpete Brasília é produzido com materiais de alta qualidade e sustentáveis, inspirado na arquitetura moderna de Brasília. Ao escolher o Carpete em Placa Brasília, você terá um ambiente elegante e funcional.</p>
        </div>
        <div class="col-md-6">
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/a/m/amostra_n_6281_m.b_prime_mb_-_brasi_lia_sequencial_2.png" alt="piso vinilico manaus" />
        </div>

    </div>

</section>

@endsection