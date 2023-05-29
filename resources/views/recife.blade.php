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
    <div class="section-overlay" style="background: linear-gradient( rgba(0, 0, 0, .40), rgba(0, 0, 0, 0.85) ), url(images/prime_mb3.jpg) no-repeat bottom; background-size: cover; opacity: 1;"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                
                <h1 class="text-white mb-5" style="font-size: 39px">Carpete em placa Recife: conforto e estilo para seu ambiente</h1>

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
        <h2>Conheça o carpete em placa Recife da Etage:</h2>
        <p>Se você busca por um carpete de qualidade para sua casa ou escritório, o carpete em placas Recife, da Linha Brasis, da Etage, é uma ótima escolha para resolver seus problemas. Além de proporcionar conforto e aconchego para os ambientes, esse produto é fácil de instalar e apresenta diversas vantagens em relação aos carpetes em rolo tradicionais.<br/>
            Conheça abaixo os atributos do carpete em placa Recife e descubra por que ele pode ser a solução ideal para o seu projeto de decoração.</p>
    </div>

    <div class="row pt-5"> 
        
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/blog-carpete-placa-recife-1.jpg" alt="piso vinilico belo florianopolis 3.0"/>
            
        </div>

        <div class="col-md-6">
            <H3>Estilo inspirado na cidade de Recife</H3>
            <p>O carpete em placa Recife da Etage é um produto que une conforto e estilo, com uma estética inspirada na cidade homônima. A capital de Pernambuco é conhecida por sua arquitetura histórica, praias paradisíacas e cultura rica, e essa inspiração pode ser percebida nas cores e padrões do carpete Recife. A paleta de cores neutras e suaves do Recife da Etage é perfeita para criar ambientes elegantes e sofisticados, enquanto os desenhos geométricos discretos adicionam um toque de personalidade ao espaço.</p>
            
        </div>
        
    </div>

    <div class="row pt-5 pb-5"> 
        <div class="col-12 text-center pt-4"><h3 >Vantagens de Comprar um Carpete em Placa</h3></div>
        <div class="col-md-6 pt-5">
            <h4 class="h4">Fácil instalação</h4>
            <p>Ao contrário dos carpetes em rolo tradicionais, o Recife é vendido em placas de 50 cm x 50 cm, o que facilita muito a instalação. As placas são fixadas ao chão por meio de adesivos, dispensando a necessidade de cola ou ferramentas especiais. Esse sistema de instalação também facilita a manutenção e a troca de placas danificadas, tornando o carpete em placa Recife uma opção prática e econômica a longo prazo.</p>
        </div>
        <div class="col-md-6">
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/blog-carpete-placa-recife-2.jpg" alt="Carpete em placa Recife" />
        </div>

        <div class="col-12">
            <h4 class="h4">Conforto térmico e acústico</h4>
            <p>Um dos principais benefícios do carpete em placa Recife é o conforto térmico e acústico que ele proporciona. O material macio e aconchegante reduz a transmissão de som entre os ambientes e mantém a temperatura do ambiente mais estável, contribuindo para uma sensação de bem-estar e conforto.</p>
            <hr/>
            <h4 class="h4">Durabilidade e resistência</h4>
            <p>O carpete em placa Recife da Etage é produzido com materiais de alta qualidade, o que garante sua durabilidade e resistência. O produto é resistente a manchas, não desbota com o tempo e pode ser utilizado em ambientes de tráfego intenso, sem perder a aparência original. Além disso, as placas do carpete Recife têm uma camada de fibra de vidro que aumenta a resistência à tração, evitando que as placas se deformem ou se desloquem com o tempo.</p>
        </div>

    </div>

</section>

@endsection