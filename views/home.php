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
                            <li class="scroll-to-section"><a href="#top">Início</a></li>
                            <li class="scroll-to-section"><a href="#entrada_veiculos">Entrada de veículos</a></li>
                            <li class="scroll-to-section"><a href="#saida_veiculos">Saída de veículos</a></li>
 
                            <li class="main-button"><a href="#">Deletar veículo</a></li>
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
                    <div class="section-heading">
                        <h2>Bem <em>Vindo</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Você está na página de controle da POO Parking, abaixo estão algumas ações possíveis dentro de nosso sistema.</p>
                    </div>
    <div class="container" id="entrada_veiculos">
    <center><h2>Entrada de veículo</em></h2>
    <img src="assets/images/line-dec.png" alt="waves"></center>

    <form>
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
    <input type="time" min="08:00" max="19:00" class="form-control" id="exampleFormControlInput1">
  </div>
  <center><button class="btn btn-primary" type="submit" style="background-color: orangered;">Enviar</button><br><br></center>
    </form>
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
    <?php
 include_once "config/config.php";
 $img_files = array();
 $img_files[9] = $img."logo_whatsapp.png";
 $img_files[10] = $img."logo_facebook.png";
 $img_files[11] = $img."logo_instagram.png";
?>
<html>
<style>
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
        background-color: #01477a;
        color: white;
        padding-top: 30px;
    }

    #myFooter .footer-copyright {
        background-color: #0164ac;
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

    #myFooter .social-networks {
        text-align: center;
        padding-top: 30px;
        padding-bottom: 16px;
    }

    #myFooter .social-networks a {
        font-size: 32px;
        color: #f9f9f9;
        padding: 10px;
        transition: 0.2s;
    }

    #myFooter .social-networks a:hover {
        text-decoration: none;
    }

    #myFooter .facebook:hover {
        color: #0077e2;
    }

    #myFooter .instagram:hover {
        color: purple;
    }

    #myFooter .twitter:hover {
        color: #00aced;
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
            <div class="col-sm-1">
                <h5>Início</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                </ul>
            </div>
            <div class="col-sm-5"><br><br>
                <ul>
                    <li>
                        <p><b>Telefone:</b> <br>(Gerente) Luciano Nunes - (11) 96035-1235<br> (Dev. Front-end) Renan Siqueira - (11) 96726-3940<br>(Dev. Back-end) Thiago Martins - (11) 94272-1549</p>
                    </li><br>
                    <li>
                        <p><b>Endereço:</b> Av. Salgado Filho, 3501 - Centro, Guarulhos - SP</p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="social-networks">
                    <a href="https://api.whatsapp.com/send?phone=551196035-1235&text=sua%20mensagem" class="whatsapp" target="_blank"><img class='img_footer' src='<?= $img_files[9] ?>'></i></a>
                    <a href="https://www.facebook.com/TRL-Sites-104897937613126" class="facebook" target="_blank"><img class='img_footer' src='<?= $img_files[10] ?>'></i></a>
                    <a href="https://www.instagram.com/trlsites3/" class="instagram" target="_blank"><img class='img_footer' src='<?= $img_files[11] ?>'></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2021 Copyright - TRL Sites</p>
    </div>
</footer>

</html>
  </body>
</html>

