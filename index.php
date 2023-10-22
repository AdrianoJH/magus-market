<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magus Market</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <div class="header">
            <button class="btn">
                <img src="./assets/logo_magus.png" alt="LogoMagus" id="logo">
            </button>
            <div class="filter-header">
                        <div class="filter-input">
                            <input type="text" placeholder="Buscar" id="search-content-2">
                            <div class="boxImg">
                                <img src="./assets/search-normal.png" alt="Search" id="img-search">
                                <div class="border-right" id="border-right-header">|</div>
                                <img src="./assets/setting-4.png" alt="Filter" id="img-filter-header">
                            </div>
                        </div>
                        <div class="filter-header-expanded">
                            <div class="box-expanded">
                                <span class="txt-box-expanded">pokémon</span>
                                <button id="btn-box-expanded" class="btn-box-expanded-header">magic</button>
                                <span class="txt-box-expanded">yu-gi-oh</span>
                            </div>
                            <div class="box-expanded-2">
                                <h2 id="title-box-expanded-2">CMC <span id="txt-box-expanded-2">(Custo convertido da carta)</span></h2>
                                <div class="line-expanded-2">
                                    <div class="line1"></div>
                                    <i class="bi bi-dash-circle-fill"></i>
                                    <div class="line2"></div>
                                    <i class="bi bi-plus-circle-fill"></i>
                                    <div class="line1"></div>
                                </div>
                                <div class="number-expanded-2">
                                    <span class="text-number">2</span>
                                    <span class="text-number">6</span>
                                </div>
                                <span id="text-price">
                                    Preço <p>(R$)</p>
                                </span>
                                <div class="line-expanded-2">
                                    <div class="line1"></div>
                                    <i class="bi bi-dash-circle-fill"></i>
                                    <div class="line2"></div>
                                    <i class="bi bi-plus-circle-fill"></i>
                                    <div class="line1"></div>
                                </div>
                                <div class="number-expanded-2">
                                    <span class="text-number">
                                        <p>R$</p> 15,00
                                    </span>
                                    <span class="text-number">
                                        <p>R$</p> 15,00
                                    </span>
                                </div>
                            </div>
                            <div class="box-expanded-3">
                                <div class="content-box-expanded-3">
                                    <div class="box-title-arrow">
                                        <h2 id="title-box-expanded-3">Selecionar tipo</h2>
                                        <div class="arrow">
                                            <i class="bi bi-caret-up-fill"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>
                                    </div>
                                    <div class="options-expanded-3">
                                        <span class="txt-options-expanded-3">tipo</span>
                                    </div>
                                </div>
                                <div class="content-box-expanded-3">
                                    <div class="box-title-arrow">
                                        <h2 id="title-box-expanded-3">Selecionar edições</h2>
                                        <div class="arrow">
                                            <i class="bi bi-caret-up-fill"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>
                                    </div>
                                    <div class="options-expanded-3">
                                        <span class="txt-options-expanded-3">edição</span>
                                    </div>
                                </div>
                                <div class="content-box-expanded-3">
                                    <div class="box-title-arrow">
                                        <h2 id="title-box-expanded-3">Selecionar artista</h2>
                                        <div class="arrow">
                                            <i class="bi bi-caret-up-fill"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>
                                    </div>
                                    <div class="options-expanded-3">
                                        <span class="txt-options-expanded-3">artista</span>
                                    </div>
                                </div>
                                <div class="content-box-expanded-3">
                                    <div class="box-title-arrow">
                                        <h2 id="title-box-expanded-3">Poder e resistência</h2>
                                        <div class="arrow">
                                            <i class="bi bi-caret-up-fill"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>
                                    </div>
                                    <div class="options-expanded-3">
                                        <div class="duo-options">
                                            <span class="txt-options-expanded-3">artista</span>
                                            <span class="txt-options-expanded-3">artista</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-expanded-4">
                                <div class="card-box-expanded-4" id="card-box-expanded-4-header">
                                    <div class="box-up">
                                        <h1 id="title-card-box-expanded-4" class="title-box-upDown-header">Raridade</h1>
                                        <div class="options-raridade">
                                            <button class="btn-options-raridade" id="c">C</button>
                                            <button class="btn-options-raridade" id="i">I</button>
                                            <button class="btn-options-raridade" id="r">R</button>
                                            <button class="btn-options-raridade" id="m">M</button>
                                        </div>
                                    </div>
                                    <div class="box-down">
                                        <h1 id="title-card-box-expanded-4" class="title-box-upDown-header">Cor</h1>
                                        <div class="options-cor">
                                            <img src="./assets/mana-verde (1).png" alt="Icone" class="mana">
                                            <img src="./assets/mana-verde (2).png" alt="Mana" class="mana">
                                            <img src="./assets/mana-verde (3).png" alt="Mana1" class="mana">
                                            <img src="./assets/mana-verde (4).png" alt="Mana2" class="mana">
                                            <img src="./assets/mana-verde (5).png" alt="Mana3" class="mana">
                                            <img src="./assets/mana-verde (6).png" alt="Mana4" class="mana">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-expanded-5">
                                    <h2 id="title-box-expanded-5">Selecionar formatos: </h2>
                                    <div class="grid-box-expanded-5" id="grid-header">
                                        <div class="card-box-expanded-5" id="card1">
                                            <span class="txt-card-box-expanded-5-header">Commander</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card2">
                                            <span class="txt-card-box-expanded-5-header">Modern</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card3" >
                                            <span class="txt-card-box-expanded-5-header">Pauper</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card4">
                                            <span class="txt-card-box-expanded-5-header">Commander</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card5">
                                            <span class="txt-card-box-expanded-5-header">Modern</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card6">
                                            <span class="txt-card-box-expanded-5-header">Pauper</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-expanded-6">
                                    <button class="btn-box-expanded-6" id="btn-filter-header">limpar filtro</button>
                                </div>
                                <div class="box-expanded-7">
                                    <button class="btn-box-expanded-7">fechar filtro</button>
                                    <button class="btn-box-expanded-7-2">pesquisar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="img">
                <img src="./assets/carrinho.png" alt="Carrinho" id="carrinho">
                <img src="./assets/profile-circle.png" alt="Profile" id="profile">
            </div>
        </div>
        <div class="text">
            <p id="pointer">...</p>
            <p class="bigger">&gt;</p>
            <p class="txt-text active-text"></p>
            <p class="bigger">&gt;</p>
            <p class="txt-text"></p>
        </div>
        <div class="border"></div>
    </header>
    <main>
        <div class="container">
            <div class="content-1">
                <h1 id="title-content-1">Goose of Paradise</h1>
                <div class="box-1">
                    <img src="./assets/ícone.svg" alt="circle" id="circle">
                    <ul id="ul-box-1">
                        <li id="ctba">Curitiba/ PR</li>
                        <li id="sales">1024 vendas</li>
                        <li id="success">99,7% realizadas com sucesso</li>
                    </ul>
                    <img src="./assets/medal.png" alt="medal" id="medal">
                </div>
                <div class="box-2">
                    <div class="box-btn">
                        <button class="btn-box2">4,40</button>
                        <img src="./assets/truck.png" alt="truck" class="img-box-btn">
                    </div>
                    <div class="box-btn">
                        <button class="btn-box2">4,50</button>
                        <img src="./assets/cards.png" alt="cards" class="img-box-btn">
                    </div>
                    <div class="box-btn">
                        <button class="btn-box2">4,60</button>
                        <img src="./assets/chat.png" alt="chat" class="img-box-btn">
                    </div>
                </div>
                <div class="box-3">
                    <span class="txt-box-3">pokémon</span>
                    <button id="btn-box-3">magic</button>
                    <span class="txt-box-3">yu-gi-oh</span>
                </div>
            </div>
            <div class="content-2">
                <div class="box-content-2">
                    <div class="filter">
                        <div class="filter-input">
                            <input type="text" placeholder="Buscar" id="search-content-2">
                            <div class="boxImg">
                                <img src="./assets/search-normal.png" alt="Search" id="img-search">
                                <div class="border-right">|</div>
                                <img src="./assets/setting-4.png" alt="Filter" id="img-filter">
                            </div>
                        </div>
                        <div class="filter-expanded">
                            <div class="box-expanded">
                                <span class="txt-box-expanded">pokémon</span>
                                <button id="btn-box-expanded">magic</button>
                                <span class="txt-box-expanded">yu-gi-oh</span>
                            </div>
                            <div class="box-expanded-2">
                                <h2 id="title-box-expanded-2">CMC <span id="txt-box-expanded-2">(Custo convertido da carta)</span></h2>
                                <div class="line-expanded-2">
                                    <div class="line1"></div>
                                    <i class="bi bi-dash-circle-fill"></i>
                                    <div class="line2"></div>
                                    <i class="bi bi-plus-circle-fill"></i>
                                    <div class="line1"></div>
                                </div>
                                <div class="number-expanded-2">
                                    <span class="text-number">2</span>
                                    <span class="text-number">6</span>
                                </div>
                                <span id="text-price">
                                    Preço <p>(R$)</p>
                                </span>
                                <div class="line-expanded-2">
                                    <div class="line1"></div>
                                    <i class="bi bi-dash-circle-fill"></i>
                                    <div class="line2"></div>
                                    <i class="bi bi-plus-circle-fill"></i>
                                    <div class="line1"></div>
                                </div>
                                <div class="number-expanded-2">
                                    <span class="text-number">
                                        <p>R$</p> 15,00
                                    </span>
                                    <span class="text-number">
                                        <p>R$</p> 15,00
                                    </span>
                                </div>
                            </div>
                            <div class="box-expanded-3">
                                <div class="content-box-expanded-3">
                                    <div class="box-title-arrow">
                                        <h2 id="title-box-expanded-3">Selecionar tipo</h2>
                                        <div class="arrow">
                                            <i class="bi bi-caret-up-fill"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>
                                    </div>
                                    <div class="options-expanded-3">
                                        <span class="txt-options-expanded-3">tipo</span>
                                    </div>
                                </div>
                                <div class="content-box-expanded-3">
                                    <div class="box-title-arrow">
                                        <h2 id="title-box-expanded-3">Selecionar edições</h2>
                                        <div class="arrow">
                                            <i class="bi bi-caret-up-fill"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>
                                    </div>
                                    <div class="options-expanded-3">
                                        <span class="txt-options-expanded-3">edição</span>
                                    </div>
                                </div>
                                <div class="content-box-expanded-3">
                                    <div class="box-title-arrow">
                                        <h2 id="title-box-expanded-3">Selecionar artista</h2>
                                        <div class="arrow">
                                            <i class="bi bi-caret-up-fill"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>
                                    </div>
                                    <div class="options-expanded-3">
                                        <span class="txt-options-expanded-3">artista</span>
                                    </div>
                                </div>
                                <div class="content-box-expanded-3">
                                    <div class="box-title-arrow">
                                        <h2 id="title-box-expanded-3">Poder e resistência</h2>
                                        <div class="arrow">
                                            <i class="bi bi-caret-up-fill"></i>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>
                                    </div>
                                    <div class="options-expanded-3">
                                        <div class="duo-options">
                                            <span class="txt-options-expanded-3">artista</span>
                                            <span class="txt-options-expanded-3">artista</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-expanded-4">
                                <div class="card-box-expanded-4">
                                    <div class="box-up">
                                        <h1 id="title-card-box-expanded-4">Raridade</h1>
                                        <div class="options-raridade">
                                            <button class="btn-options-raridade">C</button>
                                            <button class="btn-options-raridade">I</button>
                                            <button class="btn-options-raridade">R</button>
                                            <button class="btn-options-raridade">M</button>
                                        </div>
                                    </div>
                                    <div class="box-down">
                                        <h1 id="title-card-box-expanded-4">Cor</h1>
                                        <div class="options-cor">
                                            <img src="./assets/ícone.png" alt="Icone" class="mana">
                                            <img src="./assets/mana.png" alt="Mana" class="mana">
                                            <img src="./assets/mana (1).png" alt="Mana1" class="mana">
                                            <img src="./assets/mana (2).png" alt="Mana2" class="mana">
                                            <img src="./assets/mana (3).png" alt="Mana3" class="mana">
                                            <img src="./assets/mana (4).png" alt="Mana4" class="mana">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-expanded-5">
                                    <h2 id="title-box-expanded-5">Selecionar formatos: </h2>
                                    <div class="grid-box-expanded-5">
                                        <div class="card-box-expanded-5" id="card1">
                                            <span class="txt-card-box-expanded-5">Commander</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card2">
                                            <span class="txt-card-box-expanded-5">Modern</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card3" >
                                            <span class="txt-card-box-expanded-5">Pauper</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card4">
                                            <span class="txt-card-box-expanded-5">Commander</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card5">
                                            <span class="txt-card-box-expanded-5">Modern</span>
                                        </div>
                                        <div class="card-box-expanded-5" id="card6">
                                            <span class="txt-card-box-expanded-5">Pauper</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-expanded-6">
                                    <button class="btn-box-expanded-6">limpar filtro</button>
                                </div>
                                <div class="box-expanded-7">
                                    <button class="btn-box-expanded-7">fechar filtro</button>
                                    <button class="btn-box-expanded-7-2">pesquisar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 id="title-box-content-2">Resultados de pesquisa</h1>
                </div>
            </div>
            <div class="content-3">
                <div class="box-content-3">
                    <h2 id="title-box-content-3">Selecionar visualizações</h2>
                    <div class="arrow">
                        <i class="bi bi-caret-up-fill"></i>
                        <i class="bi bi-caret-down-fill"></i>
                    </div>
                </div>
                <div class="box-container">
                    <h2 id="title-content-3">Resultados com o nome: <span id="text-content-3">Globin</span></h2>
                    <?php
                    include 'scryfall_api.php';
                    ?>
                    <div class="box-pagination">
                        <div id="pagination" class="text-center">
                        </div>
                        <button id="prevBtn" class="pagination-btn"><i class="bi bi-chevron-left"></i></button>
                        <button id="nextBtn" class="pagination-btn"><i class="bi bi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-footer">
            <div class="institutional">
                <h1 class="title-footer">Institucional</h1>
                <ul class="ul-footer">
                    <li class="list-footer"><a href="" class="link-footer">Política Comercial</a></li>
                    <li class="list-footer"><a href="" class="link-footer">Política de Resolução de Conflitos</a></li>
                    <li class="list-footer"><a href="" class="link-footer">Política de Privacidade</a></li>
                    <li class="list-footer"><a href="" class="link-footer">Taxas e Tarifas</a></li>
                </ul>
            </div>
            <div class="doubts">
                <h1 class="title-footer">Dúvidas</h1>
                <ul class="ul-footer">
                    <li class="list-footer"><a href="" class="link-footer">Fale Conosco</a></li>
                    <li class="list-footer"><a href="" class="link-footer">Guia de Condições do Produto</a></li>
                    <li class="list-footer"><a href="" class="link-footer">Perguntas Frequentes</a></li>
                    <li class="list-footer"><a href="" class="link-footer">Termos e Condições</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>