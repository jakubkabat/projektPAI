
  <?php include('header.php'); ?>
  <!--==========================
    Banner Section
  ============================-->
  <section id="banner">
    <div class="banner-container">
      <h1>Witamy w serwisie LearnUp</h1>
      <h2>Pomożemy Ci w szybki sposób przyswoić angielskie słownictwo</h2>
      <a href="#basic-info" class="btn-get-started">Zaczynajmy!</a>
    </div>
  </section><!-- #banner -->

  <main id="main">

    <!--==========================
      Basic info Section
    ============================-->
    <section id="basic-info">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Podstawowe informacje</h3>
          <p class="section-description">Nasz serwis jest szybko rozwijającym się programem, dzięki Wam użytkownikom.</p>
        </div>
        <div class="row counters">

  				<div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Użytkowników</p>
  				</div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Modułów</p>
  				</div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">2000</span>
            <p>Słówek w bazie</p>
  				</div>
  			</div>

      </div>
    </section>

    <!--==========================
      Modules Section
    ============================-->
    <section id="modules">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Moduły</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Informatyka</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-leaf"></i></a></div>
              <h4 class="title"><a href="">Biotechnologia</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-building"></i></a></div>
              <h4 class="title"><a href="">Architektura</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-wrench"></i></a></div>
              <h4 class="title"><a href="">Mechanika</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #modules -->

    <!--==========================
    Register
    ============================-->
    <section id="register">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="register-title">Nie masz jeszcze własnego konta?</h3>
            <p class="register-text">Jeśli jeszcze nie posiadasz konta w naszym serwisie, a jesteś zainteresowany programem to zachęcamy do bezpłatnej rejestracji.
              Dzięki nam możesz nauczyć się czegoś nowego. A może przy okazji pomóc w rozwoju programu?
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="register-btn align-middle" href="pages/register.php">Zarejestruj się</a>
          </div>
        </div>

      </div>
    </section><!-- #Register -->
    
    <section id="login">
      <div class="container">
      <div class="section-header">
            <h3 class="section-title">Zaloguj się</h3>
          </div>
        <div class="row">
          <div class="col-md-12">
            <form>
              <div class="row">
                <div class="col-lg-4"><i class="fa fa-user"></i><input type="text" name="login" placeholder="Nazwa użytkownika"></div> 
                <div class="col-lg-4"><i class="fa fa-lock"></i><input type="password" name="passwd" placeholder="Hasło"></div>
                <div class="col-lg-4"><input type="submit" value="Zaloguj się"></div>
              </div>
              
            </form>
          </div>
        </div> 
      </div>
    </section>
  </main>
  <?php include('footer.php'); ?>