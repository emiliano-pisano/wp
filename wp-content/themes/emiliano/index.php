  <?php get_header(); ?>
  <!-- form begin -->
  <div class="container-fluid" id="contatti">

    <div class="row text-center">
      <h1> Dove siamo <h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3090.9707300822975!2d9.124612715004783!3d39.22083047952208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e73472652cb289%3A0xd034f378ed63f352!2sVia+Giuseppe+Verdi%2C+19%2C+09128+Cagliari!5e0!3m2!1sit!2sit!4v1495143545414" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <h3> Inforidea Via G.Verdi, 19 09100 Cagliari <h3> 
          <h1> Contattaci <h1> 
          </div>

          <form >
            <div class="row pisano-form">
              <div class="col-lg-12">
                <div class="col-lg-6">

                  <div class="form-group">
                    <label for="exampleInputNome">Nome</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                      <input name="nome" type="text" class="form-control input-lg" placeholder="Digita qui il tuo nome" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Indirizzo email</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input name="email" type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Digita qui la tua email" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputTelefono">Telefono</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-phone-alt"></i></span>
                      <input name="telefono" type="number" class="form-control input-lg" placeholder="Digita qui il tuo numero di telefono" required>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputmessage">Messaggio</label>
                    <textarea class="form-control input-lg" placeholder="Digita qui il tuo messaggio" required></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Invia messaggio</button>
              </div>
            </div>

          </form> 
          <!-- form end -->
 <?php get_footer(); ?>