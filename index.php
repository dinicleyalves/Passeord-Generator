<?php

include_once("./passGenerator.php");

$senha = 'Undefined';

if (isset($_POST['qtdUsuarioDefined'])){
$gerando = generate($_POST['qtdUsuarioDefined']);
$senha = $gerando;
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <section class="Material-contact-section section-padding section-dark mt-4">
      <div class="container">
          <div class="row">
              <div class="col-md-12 wow animated fadeInLeft mt-4" data-wow-delay=".2s">
                  <h1 class="section-title mt-4"> Password Generator</h1>
              </div>
          </div>
          <div class="row mt-4"> 
            <p><img src="img/cadeado.png" alt="cadeado" height="50px"></p>
          </div>
          <div class="row mt-4">
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>Para gerar uma senha insira uma quantidade de caracteres e clique em gerar senha!</p>

              </div>
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      
                  <div class="form-group label-floating mt-4">
                        <label class="control-label" for="name">Quantidade de Caracteres</label>
                        <input class="form-control" id="name" type="number" name="qtdUsuarioDefined" data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      
                      <div class="form-group label-floating mt-4">
                        <input class="form-control" id="name" type="text" value="<?php echo $senha ?>" required data-error="Please enter your name" disabled>
                        <div class="help-block with-errors"></div>
                      </div>
                      
                  <div class="form-submit mt-5">
                          <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i>Gerar Senha</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </section>