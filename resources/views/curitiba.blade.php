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
    <div class="section-overlay" style="background: linear-gradient( rgba(0, 0, 0, .40), rgba(0, 0, 0, 0.85) ), url(https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/i/piso_vinilico_lvt_2.0_ref._curitiba_1_.png) no-repeat bottom; background-size: cover; opacity: 1;"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                
                <h1 class="text-white mb-5" style="font-size: 39px">Curitiba: o piso vinílico que te dará só sorrisos</h1>

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
        <h2>Piso vinílico Curitiba</h2>
        <p>O Piso Vinílico LVT em régua Curitiba é um material indicado para uso residencial ou para escritórios individuais.<br/>
            Este piso vinílico possui 2mm e, entre os disponíveis no mercado brasileiro, é o que possui maior capa de uso, com 0,2 milímetros, conferindo maior resistência à abrasão. O piso Curitiba também possui proteção contra raios UVs e microrganismos.</p>
    </div>

    <div class="row pt-5"> 
        <div class="col-md-12"><H2>Inspiração do piso vinílico Curitiba</H2></div>
        <div class="col-md-6">
            
            <img class="w-100 rounded" src="images/curitiba.jpg" alt="piso vinilico belo florianopolis 3.0"/>
            
        </div>

        <div class="col-md-6 pt-4">
            
            <p>Conhecida como “Cidade Sorriso”, a capital paranaense Curitiba recebeu essa alcunha para fazer um contraponto aos curitibanos, que são famosos por uma característica que digamos ser peculiar. Este piso vinílico tem uma aparência que remete a madeira dos pinheiros, tipo de árvore muito comum na capital paranaense. Tanto que a cidade também é reconhecida como a capital dos pinheiros e seu nome vem da expressão indígena "kur yt iwa", que significa lugar cheio de pinheiros.</p>
            <hr/>
            <p>Com o frio que faz na região e especialmente na cidade, este Piso Vinílico LVT em régua se torna ideal, pois é um material indicado para uso residencial ou para escritórios individuais e possui proteção térmica, deixando o dia a dia mais aconchegante. Seus 2mm de espessura fazem com que o piso Curitiba, entre os pisos disponíveis no mercado brasileiro, seja o que possui maior capa de uso, dando a ele também uma maior resistência à abrasão.</p>
        </div>
    </div>

    <div class="row pt-5"> 
        <div class="col-md-12"><H2>Chegou a hora de limpar o piso vinílico. E agora?</H2></div>

        <div class="col-md-6 pt-4">
            
            <p>Um dos principais destaques é a facilidade de limpeza e conservação. É muito prático e rápido limpar seu piso vinílico. Claro que na hora de escolher entre pisos é normal se ter a dúvida de como limpá-los preservando suas características de fábrica, mas vamos te ajudar com esta questão. Como dissemos, este cuidado é simples, muito mais do que os outros tipos de revestimentos. Mas é importante seguir estas dicas para que a garantia de fábrica continue valendo caso aconteça algum imprevisto com seu piso. Confira:</p>
        </div>

        <div class="col-md-6">
            <img class="w-100 rounded" src="https://www.afrel.com.br/media/wysiwyg/lps/blog-piso-vinilico-vitoria-3.jpg" alt="piso vinilico belo horizonte 3.0"/>
        </div>

        <div class="col-md-12">
            <p>
                • Primeiramente é importante analisar o nível de limpeza necessário. Para a retirada de poeiras e pequenos resíduos o aconselhado é utilizar uma vassoura de pelos macios no sentido da textura ou aspirador de pó, sempre tomando cuidado para o mesmo não raspar o piso.
                           </p>
                
                          <p>
                • O uso de panos levemente umedecidos com água é permitido, mas é importante lembrar: nunca deixe seu piso exposto à quantidade excessivas de água. Isso causa a perda da garantia de seu piso e o estufamento do mesmo. Se necessário, utilize detergente neutro diluído em água, sempre fazendo uso do mínimo de água possível.
                           </p>
                
                          <p>
                • Detergente e o álcool podem ser utilizados para a retirada de manchas causadas por: Graxa de sapato, suco de uva, vinho, café, refrigerante, batom, mercúrio, esmalte de unha e tinta esmalte. Já as manchas causadas por canetas esferográficas, massa para modelar ou pincel atômico podem ser retiradas com o uso de álcool.
                </p>
        </div>

        <div class="col-md-2 pt-3 d-none d-md-block">
            <img class="pt-5 w-100" src="https://www.afrel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/c/u/curitiba.jpg" alt="Régua piso vitória" />
        </div>

        <div class="col-md-10 d-flex justify-content-center">
            <img class="w-75 pt-5" src="images/ficha_tecnica2.0.jpeg" alt="fixa tecnica" />
        </div>

    </div>

</section>

@endsection