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
    <div class="section-overlay" style="background: linear-gradient( rgba(0, 0, 0, .40), rgba(0, 0, 0, 0.85) ), url(https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/i/piso_vinilico_florianopolis.png) no-repeat bottom; background-size: cover; opacity: 1;"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                
                <h1 class="text-white mb-5" style="font-size: 39px">Florianópolis: a magia em formato de piso vinílico</h1>

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
        <h2>Piso vinílico Florianópolis</h2>
        <p>Beleza encantadora e queridinha por todos. Podíamos estar falando de Floripa, mas essas atribuições são do piso vinílico Florianópolis!<br/>
            Este piso vinílico LVT em régua é super indicado para uso em casas, apartamentos e até mesmo para escritórios individuais, com baixa circulação.<br/>
            O piso Florianópolis possui uma maior resistência ao desgaste causado pela fricção, graças aos seus 2 mm de espessura e a maior capa de uso entre os pisos disponíveis no mercado brasileiro.</p>
    </div>

    <div class="row pt-5"> 
        <div class="col-md-12"><H2>Inspiração do piso vinílico Florianópolis</H2></div>
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="images/florianopolis.jpg" alt="piso vinilico belo florianopolis 3.0"/>
            
        </div>

        <div class="col-md-6 pt-4">
            
            <p>Conhecida como Ilha da Magia, Florianópolis dá nome ao piso vinílico de beleza encantadora e queridinho por todos. Este piso vinílico LVT em régua busca trazer para as composições onde é aplicado a imponência das árvores símbolo da cidade, as Guarapuvus, que podem chegar a 30 metros de altura. Sendo super indicado para uso em casas, apartamentos e até mesmo para escritórios individuais, com baixa circulação.</p>
            <hr/>
            <h3 class="h4">Piso vinílico LVT</h3>
            <p>LVT é a sigla para Luxury Vinyl Tile. São pisos heterogêneos modulares, e podem ser clicados, colados ou autoportantes. Suas estampas possuem alta resolução, com riqueza de detalhes, e é normalmente impressa em um filme de PVC.</p>
        </div>
    </div>

    <div class="row pt-5"> 
        <div class="col-md-12"><H2>Instalação do piso vinílico Florianópolis</H2></div>

        <div class="col-md-6 pt-4">
            
            <p>Quando se pensa em instalação de piso vinílico em régua, uma das preocupações é referente a vida útil do mesmo. Com o piso Florianópolis você poderá canalizar sua preocupação para outras coisas, pois ele possui uma maior resistência ao desgaste causado pela fricção, graças aos seus 2 mm de espessura e a maior capa de uso entre os pisos disponíveis no mercado brasileiro. Isso prolonga o tempo de usabilidade deste tipo de piso. Mas não para por aí, entre as camadas do piso existe uma tela de fibra de vidro que garante maior estabilidade dimensional e eleva sua amplitude térmica, evitando dilatação das réguas e, também, preservando-as por mais tempo.</p>
            <p>Seu processo de produção em linha é totalmente automatizado fundindo suas camadas que interagem e propiciam uma elevada tecnologia que resulta no melhor Piso Vinílico LVT disponível no mundo.</p>
        </div>

        <div class="col-md-6">
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/blog-piso-vinilico-vitoria-3.jpg" alt="piso vinilico belo horizonte 3.0"/>
        </div>

        <div class="col-md-12">
            <h3 class="h4">Confira dicas para preservar seu piso vinílico:</h3>
            <p>
                • A limpeza frequente melhora a aparência do piso, aumenta a durabilidade e reduz o custo de conservação.
                           </p>
                
                          <p>
                • Na limpeza do piso use apenas detergente neutro para não estragar a superfície do piso.
                           </p>
                
                          <p>
                • Não utilize solventes e derivados de petróleo na limpeza ou remoção de manchas.
                           </p>
                
                          <p>
                • Utilize o mínimo de água possível na limpeza do piso.
                           </p>
                
                          <p>
                • Remova o detergente neutro do piso usando rodo e pano limpo ou mop-água.
                           </p>
                
                          <p>
                • Espere o piso secar totalmente antes de liberar o ambiente para uso.
                           </p>
                
                          <p>
                • A colocação de um capacho na porta de entrada do ambiente elimina até 80% dos resíduos que as pessoas trazem nas solas dos sapatos. Isso facilita a limpeza do dia a dia.
                           </p>
                
                          <p>
                • Use rodízios de poliuretano nos móveis para não danificar a superfície.
                           </p>
                • Proteja os pés dos móveis com feltro e evite arrastá-los durante o deslocamento, pois eles podem rasgar a superfície do piso.
                           </p>
                
                          <p>
                • A frequência da limpeza do piso vai depender do sistema aplicado, do uso do local e da intensidade de tráfego. Quanto mais movimentado é o ambiente, mais será necessário efetuar a limpeza.
                          </p>
                
                         <p>
                Quer mais dicas e muito mais informações sobre pisos e revestimentos? Acesse nosso site e veja qual o melhor tipo de material para a sua obra.
                </p>
        </div>

        <div class="col-md-2 pt-3 d-none d-md-block">
            <img class="pt-5 w-100" src="https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/f/l/florian_polis_1.jpg" alt="Régua piso vitória" />
        </div>

        <div class="col-md-10 d-flex justify-content-center">
            <img class="w-75 pt-5" src="images/ficha_tecnica2.0.jpeg" alt="fixa tecnica" />
        </div>

    </div>

</section>

@endsection