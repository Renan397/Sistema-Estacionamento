<!DOCTYPE html>
<html lang="PT-BR">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Atividade de LDI (4º bimestre)</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    </head>
    
    <body>
    
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>

    <header style="background-color: #696969;" class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="#" class="logo">POO<em> Parking</em></a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#entrada">Início</a></li>
                            <li class="scroll-to-section"><a href="#entrada_veiculos">Entrada de veículos</a></li>
                            <li class="scroll-to-section"><a href="#saida_veiculos">Saída de veículos</a></li>
                            <li class="scroll-to-section"><a href="#listar_veiculos">Listar veículos</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Horários</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div id="entrada" class="section-heading">
                        <h2>Bem <em>Vindo</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Você está na página de controle da POO Parking, abaixo estão algumas ações possíveis dentro de nosso sistema.</p>
                    </div>
                </div>

                    <div class="col-6" id="entrada_veiculos">
                    <center><h2>Entrada de veículo</em></h2>
                    <img src="assets/images/line-dec.png" alt="waves"></center>

                    <form id="form_entrada" action="">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="text" require="required" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui o nome do cliente...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefone</label>
                    <input type="text" require="required" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui o telefone do cliente...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Veículo</label>
                    <input type="text" require="required" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui o veículo do cliente...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Placa do veículo</label>
                    <input type="text" require="required" class="form-control" maxlength="7" id="exampleFormControlInput1" placeholder="Digite aqui a placa veículo do cliente...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Hora da chegada</label>
                    <input type="time" require="required" min="08:00" max="19:00" class="form-control" id="exampleFormControlInput1">
                </div>
                <center><button class="btn btn-primary" type="submit" style="background-color: orangered;">Registrar</button><br><br></center>
                    </form>  
                    </div>

                    <div class="col-6" id="saida_veiculos">
                    <center><h2>Saída de veículo</em></h2>
                    <img src="assets/images/line-dec.png" alt="waves"></center>
                    <form id="form_saida" action="">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="text" require="required" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui o nome do cliente...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefone</label>
                    <input type="text" require="required" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui o telefone do cliente...">
                </div>
                <center><button class="btn btn-primary" type="submit" style="background-color: orangered;">Registrar</button><br><br></center>
                    </form>
                    </div>

                    <div class="col-lg-6 offset-lg-3" id="listar_veiculos">
                    <div class="section-heading">
                        <h2>Listar veículos</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <form id="form_listar" action="">
                <center><button class="btn btn-primary" type="submit" style="background-color: orangered;">Listar</button><br><br></center>
                        </form>
                    </div>
                </div>
    </div>
    </div>
    </div>
    </section>

    

    <center>
    <section class="section" id="schedule" style="border-radius: 3%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Horários de funcionamento</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Abaixo estão nossos horários de funcionamento durante a semana, reserve já a vaga para o seu veículo!</p>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Segunda-Feira</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">08:00AM</td>
                                    <td class="tuesday ts-item show" data-tsmeta="tuesday"> 21:00PM</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Terça-Feira</td>
                                    <td class="friday ts-item show" data-tsmeta="friday">08:00AM</td>
                                    <td class="thursday friday ts-item show" data-tsmeta="thursday" data-tsmeta="friday">21:00PM</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Quarta-Feira</td>
                                    <td class="tuesday ts-item show" data-tsmeta="tuesday">08:00AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">21:00PM</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Quinta-Feira</td>
                                    <td class="wednesday ts-item show" data-tsmeta="wednesday">08:00AM</td>
                                    <td class="friday ts-item show" data-tsmeta="friday">21:00PM</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Sexta-Feira</td>
                                    <td class="thursday ts-item show" data-tsmeta="thursday">08:00AM</td>
                                    <td class="wednesday ts-item show" data-tsmeta="wednesday">21:00PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </center>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2021 TRL Sites
                    
                    - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a></p>
                       
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>

