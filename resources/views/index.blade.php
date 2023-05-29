@extends('layouts.app')

@section('content')

<main>

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-person custom-icon me-2"></i>
                        <strong class="text-dark">Etage</strong>
                    </p>
                </div>

            </div>
        </div>
    </header>


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
                        <a class="nav-link click-scroll" href="#section_1">Etage</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">Brasis LVT 2.0</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Brasis LVT 3.0</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Brasis Autoportante</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Carpete Prime MB</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Contato</a>
                    </li>
                </ul>

                <!--<a href="ticket.html" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>-->
            </div>
        </div>
    </nav>


    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">

                <div class="col-12 mt-auto mb-5 text-center">
                    
                    <h1 class="text-white mb-5" style="font-size: 39px">Pisos e carpetes de alta performance!</h1>

                    <!--<p class="text-white mb-5 d-block" style="font-size: 25px;"></p>-->

                    <a class="btn custom-btn smoothscroll" href="#section_2">Entre em contato</a>
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

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="images/video-afrel.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
    </section>


    <section class="about-section section-padding pt-5 pb-5" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                    <div class="services-info">
                        <h2 class="text-white mb-4">Sobre a Etage</h2>

                        <p class="text-white">Os produtos Etage são projetados para terem superioridade técnica em suas respectivas categorias, em comparação com os produtos disponíveis no mercado. Eles se destacam por possuírem especificações técnicas superiores, um revestimento de uso de alta qualidade, uma base mais robusta e um tratamento de superfície excepcional.</p>

                        <h6 class="text-white mt-4">Produtos tecnicamente superiores</h6>

                        <p class="text-white">Os produtos Etage são produzidos a partir da mais elevada tecnologia disponível no mundo, seus Pisos Vinílicos e Carpetes em Placas possuem design único, alta tecnologia proporcionando elevada durabilidade e beleza ao longo dos anos, os revestimentos Etage possuem atributos que conferem certificações internacionais capazes de transmitir a confiança sobre todos os seus processos.</p>

                        <p class="text-white">Com sua alta qualidade, durabilidade e facilidade de manutenção, eles são uma ótima opção para qualquer pessoa que esteja procurando por pisos e carpetes de alta qualidade.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="about-text-wrap">
                        <img src="https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/i/piso_vinilico_lvt_2.0_ref._vitoria_1.png" class="about-image img-fluid">

                        <div class="about-text-info d-flex">
                            <div class="d-flex">
                                <i class="about-text-icon bi-person"></i>
                            </div>


                            <div class="ms-4">
                                <h3>Em resumo</h3>

                                <p class="mb-0">ETAGE é uma excelente escolha para qualquer ambiente.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    
    <!--linha produto 2-->
    <section class="artists-section section-padding pt-5" id="section_2">
        <div class="container">
            <div class="row"><!--Linha produto 1-->
                <div class="col-12 text-center pt-5 ">
                    <h2>Piso Brasis LVT 2.0</h2>
                    <small class="mb-4">Piso vinilico LVT em régua</small>
                </div>
            
                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 15%;">Vitória</h3>
                    <p><strong>O Piso Vinílico LVT em régua Vitória</strong> é um revestimento versátil indicado para uso comercial, como escritórios e espaços de coworking, e até para ambientes residenciais.</p>
                        <p>O piso vinílico em régua é considerado a melhor opção para quem quer fazer uma reforma sem precisar passar por uma bagunça durante a obra, já que ele pode ser instalado sobre o revestimento antigo.</p>
                    
                    <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/vitoria" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba  mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><img class="w-100" src="images/ficha_tecnica2.0.jpeg"></a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/vitoria.jpg"
                                class="artists-image img-fluid" alt="piso vinilico LVT em regua vitoria">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Vitória
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Piso Vinílico em Régua
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Residencial
                            </p>

                            <p>
                                <strong>Capa de uso:</strong>
                                0,2mm (m2)
                            </p>

                            <p>
                                <strong>Espessura:</strong>
                                2mm 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/brasis-lvt-2-0-vitoria-1.html">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <hr/>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/florianopolis.jpg"
                                class="artists-image img-fluid" alt="piso vinilico LVT em regua belo horizonte">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Florianópolis
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Piso Vinílico em Régua
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Residencial
                            </p>

                            <p>
                                <strong>Capa de uso:</strong>
                                0,2mm (m2)
                            </p>

                            <p>
                                <strong>Espessura:</strong>
                                2mm 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/etage">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 17%;">Florianópolis</h3>
                       
                        <p>Beleza encantadora e queridinha por todos. Podíamos estar falando de Floripa, mas essas atribuições são do piso vinílico Florianópolis!</p>
                            <p><strong> piso vinílico LVT em régua</strong> é super indicado para uso em casas, apartamentos e até mesmo para escritórios individuais, com baixa circulação.</p>
                        
                        <!--fixa tecinica-->
                        <div class="dropdown">
                        <a href="/florianopolis" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba  mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><img class="w-100" src="images/ficha_tecnica2.0.jpeg"></a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <hr/>

                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 17%;">Curitiba</h3>
                    <p><strong>Piso Vinílico LVT em régua Curitiba</strong> é um material indicado para uso residencial ou para escritórios individuais.</p> 
                       <p>Este piso vinílico possui 2mm e, entre os disponíveis no mercado brasileiro, é o que possui maior capa de uso, com 0,2 milímetros, conferindo maior resistência à abrasão. O piso Curitiba também possui proteção contra raios UVs e microrganismos.</p>
                    <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/curitiba" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="file:///Users/enzow/Documents/code/etage/images/ficha_tecnica2.0.jpeg"><img class="w-100" src="images/ficha_tecnica2.0.jpeg"></a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/curitiba.jpg"
                                class="artists-image img-fluid" alt="piso vinilico LVT em regua Curitiba">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Curitiba
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Piso Vinílico em Régua
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Residencial
                            </p>

                            <p>
                                <strong>Capa de uso:</strong>
                                0,2mm (m2)
                            </p>

                            <p>
                                <strong>Espessura:</strong>
                                2mm 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/etage">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>

            </div><!--linha produto 1-->
        </div>
    </section>
    <!--linha produto 3-->

    <section class="artists-section section-padding" id="section_3">
        <div class="container">
            <div class="row"><!--Linha produto 1-->
                <div class="col-12 text-center pt-5 ">
                    <h2>Piso Brasis LVT 3.0</h2>
                    <small class="mb-4">Piso vinilico LVT em régua</small>
                </div>
            
                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 17%;">Belo Horizonte</h3>
                    <p><strong>O piso vinílico em régua</strong> Belo Horizonte é uma opção para quem deseja o visual natural e elegante da madeira, mas sem os problemas e preocupações que vêm com a madeira real. Ele oferece uma aparência natural, mas é feito de materiais sintéticos de alta qualidade, tornando-o mais resistente a arranhões, manchas, umidade e até cupins. Além disso, é fácil de limpar e manter, tornando-o uma opção prática para ambientes de alto tráfego.</p>
                    <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/belo-horizonte" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba  mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="/belo-horizonte"><img class="w-100" src="images/ficha_tecnica3.0.png"></a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/belo-horizonte.jpg"
                                class="artists-image img-fluid" alt="piso vinilico LVT em regua belo horizonte">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Belo Horizonte
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Piso Vinílico em Régua
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Comercial
                            </p>

                            <p>
                                <strong>Capa de uso:</strong>
                                0,5mm (m2)
                            </p>

                            <p>
                                <strong>Espessura:</strong>
                                3mm 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/brasis-lvt-3-0-belo-horizontebrasis-lvt-3-0-belo-horizonte.html">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <hr/>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/sao-paulo.jpg"
                                class="artists-image img-fluid" alt="piso vinilico LVT em regua belo horizonte">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                São Paulo
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Piso Vinílico em Régua
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Comercial
                            </p>

                            <p>
                                <strong>Capa de uso:</strong>
                                0,5mm (m2)
                            </p>

                            <p>
                                <strong>Espessura:</strong>
                                3mm 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a href="https://www.afrel.com.br/etage">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 17%;">São Paulo</h3>
                       
                        <p>Ao escolher <strong>o Piso Vinílico em Régua São Paulo</strong>, você está trazendo um pouco do dinamismo paulistano para dentro dos seus ambientes. Com a Etage, você pode ter a certeza de estar escolhendo um produto de alta qualidade, que é fabricado com o máximo de cuidado e atenção aos detalhes.
                        </p>
                        <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/sao-paulo" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba  mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><img class="w-100" src="images/ficha_tecnica3.0.png"></a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <hr/>

                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 17%;">Rio de Janeiro</h3>
                    <p>Com um design inspirado na Cidade Maravilhosa, <strong>o piso vinílico</strong> apresenta uma textura suave e realista, com tons amadeirados que lembram o calçadão de Copacabana e as cores vibrantes das casas na Lapa. O resultado é um piso descontraído e moderno, que traz a beleza e a energia vibrante do Rio para dentro da sua casa.</p>
                    <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/rio-de-janeiro" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba  mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><img class="w-100" src="images/ficha_tecnica3.0.png"></a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/rio-de-janeiro.jpg"
                                class="artists-image img-fluid" alt="piso vinilico LVT em regua Rio de Janeiro">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Rio de Janeiro
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Piso Vinílico em Régua
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Comercial
                            </p>

                            <p>
                                <strong>Capa de uso:</strong>
                                0,5mm (m2)
                            </p>

                            <p>
                                <strong>Espessura:</strong>
                                3mm 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/etage">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>

            </div><!--linha produto 2-->
        </div>
    </section>

    <!--linha produto 5.0-->

    <section class="artists-section section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-5 ">
                    <h2>Piso Autoportante 5.0</h2>
                    <p class="mb-4">Piso Autoportante acústico em placa ou régua</p>
                </div>
            
                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 17%;">Manaus</h3>
                    <p>Se você está em busca de um revestimento prático, versátil e com uma dose extra de charme, você veio ao lugar certo. Mergulhe nas belezas da cidade de Manaus para  conhecer o incrível Piso Vinílico em Régua Manaus, da Linha Brasis, da Etage. Prepare-se para se encantar com essa opção que combina durabilidade, elegância e o estilo da floresta amazônica.</p>
                    <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/manaus" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba  mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><img class="w-100" src="images/autoportante-fixa.jpg"></a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/belo-horizonte.jpg"
                                class="artists-image img-fluid" alt="piso vinilico LVT em regua belo horizonte">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Belo Horizonte
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Piso Vinílico em Régua
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Comercial
                            </p>

                            <p>
                                <strong>Capa de uso:</strong>
                                0,5mm (m2)
                            </p>

                            <p>
                                <strong>Espessura:</strong>
                                3mm 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/brasis-lvt-3-0-belo-horizontebrasis-lvt-3-0-belo-horizonte.html">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <hr/>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/sao-paulo.jpg"
                                class="artists-image img-fluid" alt="piso vinilico LVT em regua belo horizonte">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                São Paulo
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Piso Vinílico em Régua
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Comercial
                            </p>

                            <p>
                                <strong>Capa de uso:</strong>
                                0,5mm (m2)
                            </p>

                            <p>
                                <strong>Espessura:</strong>
                                3mm 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a href="https://www.afrel.com.br/etage">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 17%;">Goiânia</h3>
                       
                        <p>O <strong>piso vinílico em régua Goiânia</strong>, uma opção encantadora que traz a beleza da cidade para dentro do seu ambiente. Se você está em busca de um piso versátil, durável e fácil de instalar, este artigo é para você. Prepare-se para descobrir os encantos desse revestimento inspirado na cidade de Goiânia e todas as vantagens que ele oferece.</p>
                        <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/goiania" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba  mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><img class="w-100" src="images/autoportante-fixa.jpg"></a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <hr/>

                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 17%;">Cuiabá</h3>
                    <p>Que tal uma solução prática e elegante para ambientes corporativos? O <strong>piso vinílico em placa Cuiabá</strong>, da renomada marca Etage. Neste artigo descontraído, vamos mergulhar nas características e vantagens deste piso, enquanto também fazemos uma homenagem à vibrante cidade de Cuiabá.
                    </p>
                    <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/cuiaba" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba  mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><img class="w-100" src="images/autoportante-fixa.jpg"></a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/rio-de-janeiro.jpg"
                                class="artists-image img-fluid" alt="piso vinilico LVT em regua Rio de Janeiro">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Rio de Janeiro
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Piso Vinílico em Régua
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Comercial
                            </p>

                            <p>
                                <strong>Capa de uso:</strong>
                                0,5mm (m2)
                            </p>

                            <p>
                                <strong>Espessura:</strong>
                                3mm 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/etage">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>

    <!--fim da linha produto 5.0-->

    <section class="artists-section section-padding pt-5 " id="section_5">
        <div class="container">
            <div class="row"><!--Linha produto 3-->
                <div class="col-12 text-center pt-5 ">
                    <h2>Carpete Prime MB</h2>
                    <small class="mb-4">Carpetes em placas</small>
                </div>
            
                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 13%;">Porto Alegre</h3>
                    <p><strong>Conheça o Carpete em Placa Porto Alegre</strong>, da Etage: Conforto e Durabilidade Inspirados na Cidade Gaúcha. Se você está em busca de um novo carpete para renovar o ambiente do seu escritório, o carpete em placa Porto Alegre pode ser a escolha perfeita para o seu projeto.</p>
                    <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/porto-alegre" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Saiba mais
                        </a>
                        <div class="dropdown-menu" style="width: 947px;" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">
                            <img class="w-100" src="images/ficha-tecnica.jpg">
                        </a>
                          
                        </div>
                      </div>
                    <!--fim da fixa tecnica-->
                </div>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/prime_mb1.jpg"
                                class="artists-image img-fluid" alt="Carpete em Placa Porto Alegre">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Porto Alegre
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Carpete em Placa
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Empresarial
                            </p>

                            <p>
                                <strong>Material:</strong>
                                100% nylon SDN
                            </p>

                            <p>
                                <strong>Tamanho:</strong>
                                6mm - 50 x 50 cm (m2)
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/prime-mb-porto-alegre-1.html">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <hr/>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/prime_mb2.jpg"
                                class="artists-image img-fluid" alt="carpetes em placa prime MB Brasilia">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Brasilia
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Carpete em Placa
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Empresarial
                            </p>

                            <p>
                                <strong>Material:</strong>
                                100% nylon SDN
                            </p>

                            <p>
                                <strong>Tamanho:</strong>
                                6mm - 50 x 50 cm (m2) 
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/prime-mb-brasilia-1.html">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6 ">
                    <h3 class="text-center" style="padding-top: 10%;">Brasilia</h3>
                       
                        <p>Inspira modernidade e reúne traços característicos de uma obra de arte. Podíamos estar falando da capital do Brasil, mas essas atribuições são do <strong>carpete Brasília, da ETAGE!</strong><br/>
                            <strong>O Carpete Modular em Placas Brasília</strong> é uma escolha inteligente para quem procura um piso durável, fácil de instalar e de manter. Nossos carpetes são feitos de materiais de alta qualidade e projetados para suportar o uso constante e a pressão de tráfego intenso.</p>
                        
                            <!--fixa tecinica-->
                            <div class="dropdown">
                                <a href="/brasilia" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Saiba mais
                                </a>
                                <div class="dropdown-menu" style="width: 947px;" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">
                                    <img class="w-100" src="images/ficha-tecnica.jpg">
                                </a>
                                
                                </div>
                            </div>
                            <!--fim da fixa tecnica-->
                </div>
                <hr/>

                <div class="col-md-6 p-3">
                    <h3 class="text-center" style="padding-top: 10%;">Recife</h3>
                    <p>Com inspiração na cidade homônima, o <strong>carpete em placa Recife</strong> une conforto e estilo em um só produto. Com uma paleta de cores neutras e desenhos geométricos discretos, ele é ideal para criar ambientes elegantes e sofisticados.<br/> 
                       Mas as vantagens do <strong>carpete em placa Recife</strong> não param por aí. Ele é fácil de instalar, sendo vendido em placas de 50 cm x 50 cm que são fixadas ao chão por meio de adesivos.</p>
                    <!--fixa tecinica-->
                    <div class="dropdown">
                        <a href="/recife" class="btn btn-lg btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Saiba mais
                        </a>
                        <div class="dropdown-menu" style="width: 947px;" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                            <img class="w-100" src="images/ficha-tecnica.jpg">
                        </a>
                        
                        </div>
                    </div>
                    <!--fim da fixa tecnica-->
                </div>
                <div class="col-md-6 p-2">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="images/prime_mb3.jpg"
                                class="artists-image img-fluid" alt="carpete em placa Recife">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Recife
                            </p>

                            <p>
                                <strong>Tipo de Produto:</strong>
                                Carpete em placa
                            </p>

                            <p>
                                <strong>Segmentos:</strong>
                                Empresarial
                            </p>

                            <p>
                                <strong>Material:</strong>
                                100% nylon SDN
                            </p>

                            <p>
                                <strong>Tamanho:</strong>
                                6mm - 50 x 50 cm (m2)
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Canal de Compra:</strong>
                                <a target="_blank" href="https://www.afrel.com.br/prime-mb-recife-1.html">www.Afrel.com.br</a>
                            </p>
                        </div>
                    </div>
                    
                </div>

            </div><!--linha produto 3-->
        </div>
    </section>


    <!--<section class="artists-section section-padding pt-5 pb-5" id="">
        
        <div class="starter-slider pt-5">
            <a href="#" class="item item1 rounded"></a>
            <a href="#" class="item item2 rounded"></a>
            <a href="#" class="item item3 rounded"></a>
            <a href="#" class="item item4 rounded"></a>
            <a href="#" class="item item5 rounded"></a>
            <a href="#" class="item item6 rounded"></a>
        </div>
          <script>
            $('.starter-slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true
            });
          </script>

        
    </section>-->


    <!--<section class="contact-section section-padding pb-5" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Interessado? entre em contato!</h2>

                    <nav class="d-flex justify-content-center">
                        <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                            role="tablist">
                            <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-ContactForm" type="button" role="tab"
                                aria-controls="nav-ContactForm" aria-selected="false">
                                <h5>Contact Form</h5>
                            </button>

                            <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-ContactMap" type="button" role="tab"
                                aria-controls="nav-ContactMap" aria-selected="false">
                                <h5>Google Maps</h5>
                            </button>
                        </div>
                    </nav>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                            aria-labelledby="nav-ContactForm-tab">
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                                role="form">
                                <div class="contact-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="contact-name" id="contact-name"
                                                class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="contact-email" id="contact-email"
                                                pattern="[^ @]*@[^ @]*" class="form-control"
                                                placeholder="Email address" required>
                                        </div>
                                    </div>

                                    <input type="text" name="contact-company" id="contact-company"
                                        class="form-control" placeholder="Company" required>

                                    <textarea name="contact-message" rows="3" class="form-control"
                                        id="contact-message" placeholder="Message"></textarea>

                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <--<div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                            aria-labelledby="nav-ContactMap-tab">
                            <iframe class="google-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29974.469402870927!2d120.94861466021855!3d14.106066818082482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e1!3m2!1sen!2smy!4v1670344209509!5m2!1sen!2smy"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>->
                            <-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // ->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>-->
</main>





<script src="/js/click-scroll.js"></script>
@endsection