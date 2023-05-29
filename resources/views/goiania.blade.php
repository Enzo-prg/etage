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
                
                <h1 class="text-white mb-5" style="font-size: 39px">Descubra o Encanto de Goiânia em seu Ambiente com o Piso Vinílico em placa Goiânia</h1>

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
        <h2>Piso vinílico Autoportante Goiânia</h2>
        <p>Aqui você encontrará tudo o que precisa saber sobre o Piso Vinílico em placa Goiânia, um revestimento encantador, inspirado na capital do Goiás. Se você está em busca de um piso versátil, durável e de fácil instalação, você veio ao lugar certo. Continue lendo para descobrir como o Piso Vinílico em placa Goiânia pode transformar o seu ambiente.</p>
    </div>

    <div class="row pt-5"> 
        
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="images/vitoria.jpg" alt="piso vinilico belo florianopolis 3.0"/>
            
        </div>

        <div class="col-md-6 ">
            <H2>Conhecendo o Piso Vinílico em placa Goiânia</H2>
            <p>O Goiânia é um piso vinílico em placa fabricado pela renomada marca Etage. Com 5mm de espessura e uma capa de uso de 0,7mm, ele combina beleza e resistência em um só produto. Sua inspiração na cidade de Goiânia traz consigo um toque de modernidade e sofisticação para qualquer ambiente.</p>
            <hr/>
            <h3 class="h4">A Beleza de Goiânia em Seu Ambiente</h3>
            <p>Goiânia, a capital de Goiás, é conhecida por sua arquitetura arrojada, espaços verdes e vida cultural pulsante. O piso vinílico em placa Goiânia traz elementos dessa cidade encantadora para dentro da sua casa ou escritório. Com suas placa que se encaixam perfeitamente, ele cria padrões harmônicos que lembram as linhas arquitetônicas de Goiânia.</p>
        </div>
        
    </div>

    <div class="row pt-5"> 

        <div class="col-12">
            <h2>Atributos e vantagens do Piso Vinílico em Placa Goiânia</h2>
        </div>

        <div class="col-md-6 pt-2">
            <h3 class="h4">Fácil de Limpar e Manter:</h3>
            <p>Uma das grandes vantagens do piso vinílico em placa Goiânia é a facilidade de limpeza e manutenção. Com sua superfície resistente a manchas e riscos, basta um pano úmido e um pouco de detergente neutro para deixá-lo impecável. Além disso, sua camada protetora evita o acúmulo de sujeira, facilitando ainda mais a rotina de cuidados.</p>
            <hr/>
            <h3 class="h4">Instalação Descomplicada:</h3>
            <p>Outro benefício do piso vinílico em placa Goiânia é a sua instalação descomplicada. Com um sistema de encaixe simples e prático, é possível realizar a colocação do piso de forma rápida e sem complicações. Você mesmo(a) pode fazer a instalação, economizando tempo e dinheiro com mão de obra especializada.</p>
            <hr/>
            <h3 class="h4">Versatilidade e Durabilidade em um só Piso:</h3>
            <p>O piso vinílico em placa Goiânia destaca-se pela sua versatilidade. Ele pode ser utilizado em diferentes ambientes, como salas, quartos, escritórios e até mesmo áreas comerciais de médio tráfego. Além disso, sua camada de desgaste de 0,7mm confere uma excelente durabilidade, garantindo que seu investimento seja duradouro e resistente ao desgaste do dia a dia.

                Se você deseja trazer a beleza e o encanto da cidade de Goiânia para dentro do seu ambiente, o piso vinílico em placa Goiânia é a escolha perfeita. Com sua fácil limpeza, instalação descomplicada, versatilidade e durabilidade, ele oferece inúmeras vantagens.</p>
        </div>
        <div class="col-md-6">
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/novo-piso-etage-rj-3.jpg" alt="piso vinilico manaus" />
        </div>

        <div class="col-md-4 d-none d-md-block" style="padding-top: 16%">
            <img class=" w-100" src="images/placa-goiania.jpg" alt="piso vinilico goiania" />
        </div>

        <div class="col-md-8">
            <img class="w-100 pt-5" src="images/autoportante-fixa.jpg" alt="fixa tecnica" />
        </div>

    </div>

</section>

@endsection