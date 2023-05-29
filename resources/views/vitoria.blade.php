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
    <div class="section-overlay" style="background: linear-gradient( rgba(0, 0, 0, .40), rgba(0, 0, 0, 0.85) ), url(https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/i/piso_vinilico_lvt_2.0_ref._vitoria_1.png) no-repeat bottom; background-size: cover; opacity: 1;"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                
                <h1 class="text-white mb-5" style="font-size: 39px">Vitória: o piso vinílico que retrata qualidade de vida</h1>

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
        <h2>Piso vinílico Vitória</h2>
        <p>O Piso Vinílico LVT em régua Vitória é um revestimento versátil indicado para uso comercial, como escritórios e espaços de coworking, e até para ambientes residenciais.<br/>
        O piso vinílico em régua é considerado a melhor opção para quem quer fazer uma reforma sem precisar passar por uma bagunça durante a obra, já que ele pode ser instalado sobre o revestimento antigo.</p>
    </div>

    <div class="row pt-5"> 
        <div class="col-md-12"><H2>Inspiração do piso vinílico Vitória</H2></div>
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/i/piso_vinilico_lvt_2.0_ref._vitoria_2.png" alt="piso vinilico belo horizonte 3.0"/>
            
        </div>

        <div class="col-md-6 pt-4">
            
            <p>Recentemente Vitória foi eleita a segunda capital com a melhor qualidade de vida do país. E o piso Vitória busca esse status trazendo alta tecnologia, beleza e conforto aos ambientes onde são instalados Este piso vinílico tem uma aparência que combina muito com tons terrosos e pode formar composições com itens de artesanato na decoração, ponto forte da capital capixaba.

            </p>
            <hr/>
            <h3 class="h4">Piso vinílico LVT</h3>
            <p>O <strong>piso vinílico LVT</strong> é uma grande tendência no ramo de arquitetura e design de interiores. Afinal, é um material muito fácil de usar e instalar, durável e resistente, além de muito bonito e de fácil manutenção. Assim, pode ser utilizado em todo tipo de projeto e proporciona uma satisfação muito grande.</p>
        </div>
    </div>

    <div class="row pt-5"> 
        <div class="col-md-12"><H2>Oque o piso vinílico vitória é?</H2></div>

        <div class="col-md-6 pt-4">
            
            <p>O Piso Vinílico LVT em régua Vitória é um revestimento versátil indicado para uso comercial, como escritórios e espaços de coworking, e até para ambientes residenciais. O piso vinílico em régua é considerado a melhor opção para quem quer fazer uma reforma sem precisar passar por uma bagunça durante a obra, já que ele pode ser instalado sobre o revestimento antigo. Este piso possui 2mm e, entre os disponíveis no mercado brasileiro, é o que possui maior capa de uso, isso lhe confere uma maior resistência à abrasão. O piso Vitória também possui proteção contra raios UVs e microrganismos.</p>
        </div>

        <div class="col-md-6">
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/blog-piso-vinilico-vitoria-3.jpg" alt="piso vinilico belo horizonte 3.0"/>
        </div>

        <div class="col-md-12">
            <h3 class="h4">Vantagens do piso vinílico em régua</h3>
            <p><strong>Velocidade na sua obra:</strong> O piso vinílico em régua, principalmente o clicado, é um produto muito fácil de ser instalado - como citado acima. Com profissionais qualificados, é possível revestir grandes ambientes com apenas poucas horas, visto que a instalação precisa apenas da aplicação da cola e do revestimento. Mas seguindo os passo a passo do seu manual, você consegue fazer a instalação do seu piso vinílico.</p>
            <p><strong>Obra limpa é um sonho possível</strong> Por não precisar de argamassa, rejunte ou recortes que normalmente geram poeira, a instalação do piso vinílico em régua tem como resultado uma obra sempre muito limpa, proporcionando muita satisfação aos clientes com um pós-obra muito simples.</p>
            <p><strong>Conforto termoacústico: Sem chão frio e sem “toc-toc” dos sapatos</strong> O piso vinílico é um produto que não sofre muitas variações térmicas, deixando o espaço mais aconchegante ao toque, uma sensação buscada por clientes de regiões mais frias e úmidas. Além disso, também possui a capacidade de absorção de pequenos ruídos, proporcionando conforto para ambientes corporativos. Quer mais dicas e muito mais informações sobre pisos e revestimentos? Acesse nosso  e veja qual o melhor tipo de material para a sua obra.</p>
        </div>

        <div class="col-md-2 pt-3 d-none d-md-block">
            <img class="pt-5 w-100" src="https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/v/i/vit_ria.jpg" alt="Régua piso vitória" />
        </div>

        <div class="col-md-10 d-flex justify-content-center">
            <img class="w-75 pt-5" src="images/ficha_tecnica2.0.jpeg" alt="fixa tecnica" />
        </div>

    </div>

</section>

@endsection