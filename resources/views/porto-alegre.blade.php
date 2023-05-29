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
    <div class="section-overlay" style="background: linear-gradient( rgba(0, 0, 0, .40), rgba(0, 0, 0, 0.85) ), url(images/prime_mb1.jpg) no-repeat bottom; background-size: cover; opacity: 1;"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                
                <h1 class="text-white mb-5" style="font-size: 39px">Porto Alegre: Conforto e Durabilidade Inspirados na Cidade Gaúcha</h1>

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


<section class="container pt-5 pb-5">

    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Carpete em placa Porto alegre</h2>
            <p>Com um nome que homenageia uma das cidades mais charmosas e vibrantes do sul do Brasil, esse carpete traz toda a qualidade e sofisticação que você espera da Etage, combinadas com a praticidade e versatilidade das placas modulares.</p>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/novo-carpete-etage-rs-3.jpg" alt="piso vinilico belo horizonte 3.0"/>
            
        </div>

        <div class="col-md-6 pt-2">
            <p><strong>O carpete em placa Porto Alegre</strong> é uma excelente escolha para quem busca um produto de qualidade, com conforto, durabilidade e elegância. Sua textura suave e macia proporciona conforto e aconchego para o ambiente, enquanto sua espessura ajuda a isolar o som e a manter a temperatura ambiente. Além disso, a sua durabilidade e resistência são garantidas pelo sistema de placas modulares, que permite a substituição de peças danificadas de forma fácil e econômica.</p>
            
            <p>O carpete Porto Alegre permite que você se adeque à decoração do seu ambiente, criando um espaço personalizado e único. Além disso, sua fácil instalação e remoção permitem que você faça a instalação por conta própria, mas recomendamos a contratação de um profissional especializado.</p>
            <hr/>
            <h3 class="h4">Vantagens de Adquirir um Carpete em Placa</h3>
            <p>Se você está em busca de um novo carpete para renovar o ambiente da sua casa ou escritório, o carpete em placa Porto Alegre da marca Etage pode ser a escolha perfeita. Com um nome que homenageia uma das cidades mais charmosas e vibrantes do sul do Brasil, esse carpete traz toda a qualidade e sofisticação que você espera da Etage, combinadas com a praticidade e versatilidade das placas modulares.</p>
        </div>
    </div>

    <div class="row p-3"> 
        

        <div class="col-md-6">
            <h3 class="h4">Conforto e maciez</h3>
            <p>Um dos principais diferenciais do <strong>carpete em placa Porto Alegre</strong> é o conforto que ele proporciona. Com uma textura suave e macia, ele é ideal para ambientes onde se passa muito tempo em pé ou sentado, como salas de estar, quartos e escritórios. Além disso, sua espessura ajuda a isolar o som e a manter a temperatura ambiente, tornando o ambiente mais aconchegante e acolhedor.</p>
            <hr/>
            <h3 class="h4">Durabilidade e resistência</h3>
            <p>Outra vantagem das placas de carpete é a sua durabilidade. Por serem modulares, elas são mais resistentes a desgastes e danos do que os carpetes em rolo tradicionais. Caso alguma placa seja danificada, é possível substituí-la facilmente sem precisar trocar todo o carpete. Isso também torna a instalação e a manutenção mais fáceis e econômicas.</p>
            <hr/>
            <h3 class="h4">Fácil instalação e remoção</h3>
            <p>A instalação do carpete em placa Porto Alegre é muito fácil e pode ser feita por qualquer pessoa, sem a necessidade de contratar um profissional especializado. Além disso, caso você precise remover o carpete futuramente, basta retirar as placas e limpá-las individualmente, sem a necessidade de desinstalar todo o carpete.</p>
        </div>

        <div class="col-md-6">
            
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/novo-piso-etage-bh-3.jpg" alt="piso vinilico belo horizonte 3.0"/>
            
        </div>

    </div>

</section>

@endsection