<!DOCTYPE html>
<html lang="PT-BR">
<?php
session_start();
?>

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

    <header style="background-color: #262626;" class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="#" class="logo">POO<em> Parking</em></a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#entrada">Início</a></li>
                            <li class="scroll-to-section"><a href="#entrada_veiculos">Entrada</a></li>
                            <li class="scroll-to-section"><a href="#saida_veiculos">Saída</a></li>
                            <li class="scroll-to-section"><a href="#listar_veiculos">Listar</a></li>
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
                        <p>Você está na página de controle da POO Parking, abaixo estão os horários de funcionamento do estabelecimento, e algumas ações possíveis dentro de nosso sistema.</p>
                    </div>
                </div>

                <div class="col-12">
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
                </div>
            </div>
        </div>
        </div>
    </section><br><br>

    <div class="container" id="formularios">
        <div class="row">
            <div class="col-6" id="entrada_veiculos">
                <center>
                    <h2>Entrada de veículo</em></h2>
                    <img src="assets/images/line-dec.png" alt="waves">
                </center>

                <!-- Formulário de registro da entrada de veículos -->
                <form id="form_entrada" method="POST" action="Source/database/inserirAgenda.class.php">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="text" name="nome_cli" required="required" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui o nome do cliente...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefone</label>
                        <input type="text" name="tel_cli" maxlength="11" required="required" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui o telefone do cliente...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Veículo</label>
                        <input type="text" name="veiculo_cli" required="required" class="form-control" id="exampleFormControlInput1" placeholder="(Marca/Modelo/Cor)">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Placa do veículo</label>
                        <input type="text" name="placa_veiculo_cli" required="required" class="form-control" maxlength="7" id="exampleFormControlInput1" placeholder="Digite aqui a placa do veículo do cliente...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Data da entrada</label>
                        <input type="date" name="data_entrada_cli" required="required" class="form-control" maxlength="7" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Hora da entrada</label>
                        <input type="time" name="hora_entrada_cli" required="required" min="08:00" max="19:00" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <center><button class="btn btn-primary" type="submit" style="background-color: orangered;">Registrar</button><br><br></center>
                </form>
                <?PHP
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                if (isset($_SESSION['msg_erro'])) {
                    echo $_SESSION['msg_erro'];
                    unset($_SESSION['msg_erro']);
                }
                ?>
            </div>
            <!-- Fim do formulário de registro da entrada de veículos -->

            <!-- Formulário de registro da saída de veículos -->

            <div class="col-6" id="saida_veiculos">
                <center>
                    <h2>Saída de veículo</em></h2>
                    <img src="assets/images/line-dec.png" alt="waves">
                </center>
                <form id="form_saida" method="POST" action="Source/database/deletarAgenda.class.php">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Placa do veículo</label>
                        <input type="text" required="required" maxlength="7" name="placa_saida" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui a placa do veículo do cliente...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Código do cliente</label>
                        <input type="text" required="required" name="cod_cli" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui o código do cliente...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Hora da saída</label>
                        <input type="time" name="hora_saida_cli" required="required" min="08:00" max="19:00" class="form-control" id="exampleFormControlInput1">
                  </div>
                    <center><button class="btn btn-primary" type="submit" style="background-color: orangered;">Registrar</button><br><br></center>
                </form>
                <?PHP
                if (isset($_SESSION['msg1'])) {
                    echo $_SESSION['msg1'];
                    unset($_SESSION['msg1']);
                }
                if (isset($_SESSION['retornoPagamento'])) {
                    echo $_SESSION['retornoPagamento'];
                    unset($_SESSION['retornoPagamento']);
                }
                ?>
            </div>

            <!-- Fim do formulário de saída de veículos -->

            <!-- Formulário de listamento dos agendamentos de vagas -->
            <div class="col-6" id="listar_veiculos">
                <div class="section-heading">
                    <h2>Listar agendamentos</em></h2>
                    <img src="assets/images/line-dec.png" alt="waves">
                    <form id="form_listar" action="Source/database/listarAgenda.class.php">
                        <center><button class="btn btn-primary" type="submit" style="background-color: orangered;">Listar</button><br><br></center>
                    </form>
                </div>
            </div>
            <!-- Fim do formulário de listamento dos agendamentos de vagas -->
            
             <!-- Formulário de listamento dos agendamentos de vagas com filtro -->
            <div class="col-6" id="listar_veiculos_filtro">
                <div class="section-heading">
                    <h2>Listar agendamentos com filtro</em></h2>
                    <img src="assets/images/line-dec.png" alt="waves">
                    <form id="form_listar_filtro" action="Source/database/listarAgenda_filtro.class.php">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Placa do veículo</label>
                        <input type="text" required="required" maxlength="7" name="placa_filtro" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui a placa do veículo do cliente...">
                    </div>    
                    <center><button class="btn btn-primary" type="submit" style="background-color: orangered;">Listar</button><br><br></center>
                    </form>
                </div>
            </div>
            <!-- Fim do formulário de listamento dos agendamentos de vagas com filtro -->

        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        .img_footer {
            width: 50px;
            height: 50px;
            transition: 0.5s;
        }

        .img_footer:hover {
            transform: scale(1.1);
        }

        .img_LogoFooter {
            width: 250px;
            height: 250px;
        }

        #myFooter {
            background-color: orangered;
            color: white;
            padding-top: 30px;
        }

        #myFooter .footer-copyright {
            background-color: #ff6329;
            padding-top: 3px;
            padding-bottom: 3px;
            text-align: center;
        }

        #myFooter .row {
            margin-bottom: 60px;
        }

        #myFooter .navbar-brand {
            margin-top: 45px;
            height: 65px;
        }

        #myFooter .footer-copyright p {
            margin: 10px;
            color: #ccc;
        }

        #myFooter ul {
            list-style-type: none;
            padding-left: 0;
            line-height: 1.7;
        }

        #myFooter h5 {
            font-size: 18px;
            color: white;
            font-weight: bold;
            margin-top: 30px;
        }

        #myFooter h2 a {
            font-size: 50px;
            text-align: center;
            color: #fff;
        }

        #myFooter a {
            color: #d2d1d1;
            text-decoration: none;
        }

        #myFooter a:hover,
        #myFooter a:focus {
            text-decoration: none;
            color: white;
        }

        #myFooter .btn {
            color: white;
            background-color: #d84b6b;
            border-radius: 20px;
            border: none;
            width: 150px;
            display: block;
            margin: 0 auto;
            margin-top: 10px;
            line-height: 25px;
        }


        @media screen and (max-width: 767px) {
            #myFooter {
                text-align: center;
            }
        }
    </style>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Início</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 Copyright - TRL Sites</p>
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