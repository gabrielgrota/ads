<?php
session_start();
if (empty($_SESSION)) {
  print "<script>location.href='index.html';</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <script src="script.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="main.css">
  <title>PIZZARIA NERDOLA</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
  <header>
    <div class="header-titulo">
      <img class="logo-site" src="images/logo.png" alt="Pizzaria Nerdola">
    </div>

    <div class="sobre">
      <a href="#menu-link" class="icon-header-menu">menu</a>
      <a href="#redes-sociais" class="icon-header-menu">sobre</a>
      <a href="#redes-sociais" class="icon-header-menu">contato</a>
    </div>


    <div class="sobre">

      <div>
        <?php
        print "<a><i class='bi bi-person'></i> Olá, @" . "<strong>" . $_SESSION["nome"] . "</strong></a>";
        ?>
      </div>
      <div>
        <a href="#menu-link" class="icon-header-button"><i class="bi bi-cart"></i></a>
      </div>
      <div>
        <?php
        print "<a class='icon-header-button' href='logout.php';><i class='bi bi-box-arrow-right'></i></a>"
          ?>
      </div>

    </div>



  </header>
  <div class="container">
    <div class="accordion" id="accordionExample">

      <h3 id="menu-link"><strong>Menu:</strong></h3>
      <!-- ITEM 1 - PIZZAS -->

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <img class="icon-header" src="images/pizza.png">
            <strong>PIZZAS</strong>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">


            <!-- Cards de sabores de pizza
                   - Identificar cada um com título e descrição
                  -->
            <div class="card-group">

              <!-- PIZZA - CALABRESA -->

              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pizzas/pizza1.webp" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Calabresa</h5>
                  <p class="card-text">Calabresa com mussarela e cebola</p>
                </div>
                <div class="card-footer">

                  <!-- Mostra o título, descrição e valor do produto, usuário seleciona a quantidade que deseja -->

                  <div id="menu">
                    <div class="menu-item" data-name="Pizza Calabresa" data-price="28.00">R$28.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>

                </div>
              </div>

              <!-- PIZZA - FRANGOCATUPIRY -->

              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pizzas/pizza2.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Frango com Catupiry</h5>
                  <p class="card-text">Frango desfiado com catupiry</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pizza Francatupiry" data-price="25.00">R$25.00<button
                        type="button" class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pizzas/pizza3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Brócolis</h5>
                  <p class="card-text">Brócolis com queijo e bacon</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pizza Brócolis" data-price="30.00">R$30.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pizzas/pizza4.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Portuguesa</h5>
                  <p class="card-text">Mussarela, presunto, tomate, ovo e cebola</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pizza Portuguesa" data-price="35.00">R$35.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pizzas/pizza5.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Mussarela</h5>
                  <p class="card-text">Queijo mussarela importado</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pizza Mussarela" data-price="20.00">R$20.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pizzas/pizza6.webp" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Marguerita</h5>
                  <p class="card-text">Queijo, tomate e manjericão</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pizza Marguerita" data-price="30.00">R$30.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


            </div>

          </div>
        </div>
      </div>

      <!-- ITEM 2 - LANCHES -->

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <img class="icon-header" src="images/hamburger.png">
            LANCHES
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">

            <div class="card-group">

              <div class="card">
                <img class="card-img-top imagem-produto" src="images/lanches/lanche1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">X-Burger</h5>
                  <p class="card-text">Hambúrguer com queijo</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="X-Burguer" data-price="20.00">R$20.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/lanches/lanche2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">X-Salad</h5>
                  <p class="card-text">Hambúrguer, queijo, alface e tomate</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="X-Salad" data-price="20.00">R$20.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/lanches/lanche3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">X-Bacon</h5>
                  <p class="card-text">Hambúrguer, queijo e bacon</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="X-Bacon" data-price="25.00">R$25.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/lanches/lanche4.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Duplo Bacon</h5>
                  <p class="card-text">Dois hambúrgueres, queijo e bacon</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Duplo Bacon" data-price="29.00">R$29.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/lanches/lanche5.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Duplo Salad</h5>
                  <p class="card-text">Dois hambúrgueres, queijo, alface e molho especial</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Duplo Salad" data-price="27.00">R$27.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/lanches/lanche6.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Big Salad</h5>
                  <p class="card-text">Três hambúrgueres, queijo, alface e molho especial</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Big Salad" data-price="31.00">R$31.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- ITEM 3 - PASTÉIS -->

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <img class="icon-header" src="images/pastel.png">
            PASTÉIS
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">

            <div class="card-group">

              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pasteis/pastel1.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Frango com Catupiry</h5>
                  <p class="card-text">Frango desfiado e temperado com Catupiry</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pastel Francatupiry" data-price="12.00">R$12.00<button
                        type="button" class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pasteis/pastel2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Carne</h5>
                  <p class="card-text">Carne temperada e molho de tomate</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pastel Carne" data-price="12.00">R$12.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pasteis/pastel3.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Queijo</h5>
                  <p class="card-text">Mussarela</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pastel Queijo" data-price="12.00">R$12.00<button
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pasteis/pastel4.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Bauru</h5>
                  <p class="card-text">Presunto, queijo, tomate e orégano</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" div data-name="Pastel Bauru" data-price="12.00">R$12.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pasteis/pastel5.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Calabresa</h5>
                  <p class="card-text">Calabresa com mussarela</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pastel Calabresa" data-price="10.00">R$10.00<button type="button"
                        class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button></div>
                  </div>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top imagem-produto" src="images/pasteis/pastel6.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Frango com Cheddar</h5>
                  <p class="card-text">Frango desfiado com queijo cheddar</p>
                </div>
                <div class="card-footer">
                  <div id="menu">
                    <div class="menu-item" data-name="Pastel Frango com cheddar" data-price="14.00">R$14.00<button
                        type="button" class="add-to-cart btn btn-success"><i class="bi bi-plus-circle"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="accordion div-cart" id="accordionExample">
      <h3 id="menu-link"><strong>Carrinho:</strong></h3>
      <!-- ITEM 4 - PEDIDOS -->

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <img class="icon-header" src="images/order.png">
            <strong>PEDIDOS</strong>
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">

            <div id="cart-link">
              <ul id="cart">
                <!-- Itens do carrinho serão exibidos aqui -->
              </ul>
              <p><strong>Total: $<span id="total">0.00</span></strong></p>
              <style>
                /* Definindo as variáveis de estilo */
                :root {
                  --bs-btn-color: #000;
                  --bs-btn-bg: #ffc107;
                  --bs-btn-border-color: #ffc107;
                  --bs-btn-hover-color: #000;
                  --bs-btn-hover-bg: #ffca2c;
                  --bs-btn-hover-border-color: #ffc720;
                  --bs-btn-focus-shadow-rgb: 217, 164, 6;
                  --bs-btn-active-color: #000;
                  --bs-btn-active-bg: #ffcd39;
                  --bs-btn-active-border-color: #ffc720;
                  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                  --bs-btn-disabled-color: #000;
                  --bs-btn-disabled-bg: #ffc107;
                  --bs-btn-disabled-border-color: #ffc107;
                }

                /* Estilizando o botão */
                button {
                  color: var(--bs-btn-color);
                  background-color: var(--bs-btn-bg);
                  border-color: var(--bs-btn-border-color);
                  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
                }

                button:hover {
                  color: var(--bs-btn-hover-color);
                  background-color: var(--bs-btn-hover-bg);
                  border-color: var(--bs-btn-hover-border-color);
                }

                button:focus {
                  box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), 0.25);
                }

                button:active {
                  color: var(--bs-btn-active-color);
                  background-color: var(--bs-btn-active-bg);
                  border-color: var(--bs-btn-active-border-color);
                  box-shadow: var(--bs-btn-active-shadow);
                }

                button:disabled {
                  color: var(--bs-btn-disabled-color);
                  background-color: var(--bs-btn-disabled-bg);
                  border-color: var(--bs-btn-disabled-border-color);
                }
              </style>
              <a class="btn-pag" href="pag-pagamento.php"><button type="button" class="btn btn-warning">Finalizar Pedido</button></a>
            </div>



          </div>
        </div>
      </div>
    </div>





    <div class="redes-sociais" id="redes-sociais">
      <a href="+5511999999999" class="icone-contato"><i class="bi bi-telephone" style="color: #000000;"></i></a>
      <a href="https://web.whatsapp.com/" class="icone-contato"><i class="bi bi-whatsapp"
          style="color: #25D366;"></i></a>
      <a href="https://instagram.com/" class="icone-contato"><i class="bi bi-instagram" style="color: #d62976;"></i></a>
      <a href="https://facebook.com/" class="icone-contato"><i class="bi bi-facebook" style="color: #4267B2;"></i></a>
    </div>

    <div class="text-center">© 2023 Copyright: <a class="text-dark" href="#">PizzariaNerdola.com</a></div>

  </div>

</body>

</html>