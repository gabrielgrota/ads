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
  <link rel="stylesheet" href="pag-pagamento.css">
</head>

<body>
  <header>
    <div class="header-titulo">
      <img class="logo-site" src="images/logo.png" alt="Pizzaria Nerdola">
    </div>
  </header>


  <div class="container">
    <div class="accordion" id="accordionExample">

      <h3 id="menu-link"><strong>Método de Pagamento:</strong></h3>
      <!-- PAGAMENTO -->

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <img class="icon-header" src="images/cartao-de-credito.png">
            <strong>Cartão de crédito</strong>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body pagamento">



                <!--Formulario -->
                
                  

                    <div class="input-login">
                      <input type="number" name="numero_cartao" placeholder="Número do Cartão:" pattern="\d*" required>
                    </div>

                    <div class="input-validade-flex">
                      <div class="input-login input-validade">
                        <p>Mês</p>
                        <select name="mes" id="validade-mes" placeholder="Selecione">
                          <option value="Selecione" selected>Selecione</option>
                          <option value="01" default>01</option>
                          <option value="02" default>02</option>
                          <option value="03" default>03</option>
                          <option value="04" default>04</option>
                          <option value="05" default>05</option>
                          <option value="06" default>06</option>
                          <option value="07" default>07</option>
                          <option value="08" default>08</option>
                          <option value="09" default>09</option>
                          <option value="10" default>10</option>
                          <option value="11" default>11</option>
                          <option value="12" default>12</option>
                        </select>
                      </div>
                      <div class="input-login input-validade">
                        <p>Ano</p>
                        <select name="ano" id="validade-ano" placeholder="Selecione">
                          <option value="Selecione" selected>Selecione</option>
                          <option value="23" default>2023</option>
                          <option value="24" default>2024</option>
                          <option value="25" default>2025</option>
                          <option value="26" default>2026</option>
                          <option value="27" default>2027</option>
                          <option value="28" default>2028</option>
                          <option value="29" default>2029</option>
                          <option value="30" default>2030</option>
                        </select>
                      </div>
                    </div>

                    <div class="input-login">
                      <input type="number" name="cvv" placeholder="CVV" pattern="\d*" required>
                    </div>

                    <div class="input-login">
                      <input type="text" name="nome" placeholder="Nome Impresso no Cartão:" pattern="\d*" required>
                    </div>

                    <div class="input-login">
                      <input type="number" name="cpf" placeholder="CPF do Titular:" pattern="\d*" required>
                    </div>


                    <a onclick="finalizado()"><button style="margin-top:20px;" type="submit" class="btn btn-success">Enviar</button></a>
                
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- PIX -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" style="color:black;" class="icon-header">
              <defs />
              <g fill="#4BB8A9" fill-rule="evenodd">
                <path
                  d="M393.072 391.897c-20.082 0-38.969-7.81-53.176-22.02l-77.069-77.067c-5.375-5.375-14.773-5.395-20.17 0l-76.784 76.786c-14.209 14.207-33.095 22.019-53.179 22.019h-9.247l97.521 97.52c30.375 30.375 79.614 30.375 109.988 0l97.239-97.238h-15.123zm-105.049 74.327c-8.55 8.53-19.93 13.25-32.05 13.25h-.02c-12.12 0-23.522-4.721-32.05-13.25l-56.855-56.855c7.875-4.613 15.165-10.248 21.758-16.84l63.948-63.948 64.23 64.23c7.637 7.66 16.188 14.013 25.478 18.952l-54.439 54.46zM310.958 22.78c-30.374-30.374-79.613-30.374-109.988 0l-97.52 97.52h9.247c20.082 0 38.97 7.834 53.178 22.02l76.784 76.785c5.57 5.592 14.622 5.57 20.17 0l77.069-77.068c14.207-14.187 33.094-22.02 53.176-22.02h15.123l-97.239-97.237zm6.028 96.346l-64.23 64.23-63.97-63.97c-6.593-6.592-13.86-12.206-21.736-16.818l56.853-56.877c17.69-17.645 46.476-17.668 64.121 0l54.44 54.461c-9.292 4.961-17.842 11.315-25.479 18.974h.001z" />
                <path
                  d="M489.149 200.97l-58.379-58.377h-37.706c-13.838 0-27.394 5.635-37.185 15.426l-77.068 77.069c-7.202 7.18-16.623 10.77-26.067 10.77-9.443 0-18.885-3.59-26.066-10.77l-76.785-76.785c-9.792-9.814-23.346-15.427-37.207-15.427h-31.81L22.78 200.97c-30.374 30.375-30.374 79.614 0 109.988l58.095 58.074 31.81.021c13.86 0 27.416-5.635 37.208-15.426l76.784-76.764c13.925-13.947 38.208-13.924 52.133-.02l77.068 77.066c9.791 9.792 23.346 15.405 37.185 15.405h37.706l58.379-58.356c30.374-30.374 30.374-79.613 0-109.988zm-362.19 129.724c-3.763 3.786-8.942 5.917-14.273 5.917H94.302l-48.59-48.564c-17.689-17.69-17.689-46.476 0-64.143L94.3 175.296h18.385c5.331 0 10.51 2.154 14.295 5.918l74.74 74.74-74.761 74.74zm339.257-42.647l-48.848 48.87h-24.305c-5.309 0-10.508-2.155-14.251-5.92l-75.023-75.043 75.023-75.023c3.743-3.764 8.942-5.918 14.252-5.918h24.304l48.847 48.891c8.573 8.551 13.273 19.93 13.273 32.05 0 12.141-4.7 23.52-13.273 32.093z" />
              </g>
            </svg>
            <strong>Pix</strong>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body pagamento">

                <p>QRCODE</p>
                <img src="images/qrcode.png" alt="Pagamento por PIX">
                <p>ou pela chave pix:</p>
                <h3>pix-para-pizzaria-nerdola@unicid.com.br</h3>


                <a onclick="finalizado()"><button style="margin-top:20px;" type="submit" class="btn btn-success">Enviar</button></a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>





    <div class="botao-voltar-main"><a href="main.php"><button type="button" class="btn btn-warning">Voltar</button></a></div>
  </div>

</body>

</html>