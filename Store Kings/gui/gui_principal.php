<link rel = "stylesheet" href = "css/css_principal.css">
  <!-- ======= begin navbar ======= -->
    <nav class="navbar navbar-expand-lg"style="background: black;">
    <?= titulo();?>
    <button class="navbar-toggler bg-warning navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <!-- begin navbar-nav -->
      <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="principal.php">Inicio <span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#about">Acerca de nosotros</a></li>
            <li class="nav-item"><a class="nav-link" href="#features">Nuestros productos</a></li>
            <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
             <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogo de productos</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="catalogo.php">Ver catalogo</a>
                <a class="dropdown-item" href="historial.php">Historial</a>
            </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contactenos</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Otros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"><?=$_SESSION["USUARIO"]["CLIENTE"]["NOMBRE"]?></a>
                  <a class="dropdown-item" href="perfil.php">Editar perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="salir.php">Salir</a>
                </div>
            </li>
      </ul>
      <!-- end navbar-nav -->
    </div>
  </nav>  
  <!-- ======= end navbar ======= -->
  <!-- ======= begin intro ======= -->
  <section id="intro">
    <div class="intro-text">
      <h2>Bienvenido a StoreKings</h2>
      <p>Lo mejor en ropa</p>
      <a href="#about" class="btn-get-started scrollto">Empezar</a>
    </div>
    <div class="product-screens">
      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
        <img data-src="img/Tienda_Instagram.png"alt="Store Kings - Instagram">
      </div>
      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img data-src="img/Tienda_Facebook.png" alt="Store Kings - Facebook">
      </div>
      <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
        <img data-src="img/Tienda_Whatsapp.png" alt="Store Kings - WhatsApp">
      </div>
    </div>
  </section>
  <!-- ======= end intro ======= -->
  <!-- ======= begin main ======= -->
  <main id="main">  
  <!-- ======= begin about ======= -->
    <section id="about" class="section-bg">
        <h1 class="text-warning text-center">Acerca de nosotros</h1><br>
        <div class="row">
              <div class = "col-md-6">
                  <div class="col-md-9">
                    <center><img data-src="img/Storekings.png" alt="Store Kings"></center>  
                  </div>
              </div>
              <div class = "col-md-6">
                  <div class = "col-md-9">
                     <h2>Tienda de ropa virtual, nosotros hacemos que se vista como un rey</h2><br><h3>Y lo mejor de todo a excelentes precios</h3>
                     <p>Store Kings te trae todo tipo de mercader&iacute;a masculina, desde ropa hasta accesorios de vestimenta, hacemos entregas personales gratis en Coronado, Guadalupe , Ip&iacute;s , Moravia y San Jos&eacute;. Mientras que al resto del pa&iacute;s con un precio adicional sumamente comodo.</p>
                        <ul class="text-warning">
                          <li><i class="ion-ios-shirt"></i>&nbsp;Camisas</li>
                          <li><i class="ion-ios-shirt"></i>&nbsp;Short´s</li>
                          <li><i class="ion-ios-shirt"></i>&nbsp;Jogger´s</li>
                          <li><i class="ion-ios-shirt"></i>&nbsp;Gorras</li>
                        </ul>
                        <p>Y mucho m&aacute;s ...</p>
                  </div> 
             </div>
        </div>
        <!--  -->
        <div class = "row justify-content-center h-100" align = "center">
             <div class="centrado">
              <h2 class="text-warning text-center">Tres caracteristicas que conducen al &eacute;xito</h2>
                  <div class = "container-card">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Misi&oacute;n</h5>
                              <p class="card-text">Satisfacer el gusto de la clientela en cuanto a prendas de vestir, y brindar comodidad y elegancia al mismo tiempo que comprendiendo el acoplamiento del estilo personal e individual de los dise&ntilde;adores y plasm&aacute;ndolo as&iacute; en el gusto de los compradores de la tienda, llegando a suplir la demanda de gustos, abarcando la r&aacute;pida entrega y comodidad de compra virtualmente, alcanzando y atrayendo al p&uacute;blico m&aacute;s joven.</p>
                            </div>
                        </div>
                         <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Visi&oacute;n</h5>
                              <p class="card-text">Dentro de los pr&oacute;ximos 5 a&ntilde;os Store Kings se convertir&aacute;/crecer&aacute;/ser&aacute; En la distribuidora de mayor demanda proveyendo con prendas de vestir de alta calidad a tiendas de ropa, y clientes personales de gran nivel con ventas anuales de $ 350,000..</p>
                            </div>
                        </div>
                         <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Valores</h5>
                              <p class="card-text">
                                  <ul class="text-white">
                                    <li>Solidaridad</li>
                                    <li>Trabajo en equipo</li>
                                    <li>Comunicaci&oacute;n asertiva</li>
                                    <li>Sinceridad</li>
                                    <li>Integridad</li>
                                    <li>Responsabilidad</li>
                                  </ul>
                                </p>
                            </div>
                        </div>
                    </div>
             </div>
        </div>
    </section>
    <!-- ======= end about ======= -->
    <!-- ======= Nuestros productos ======= -->
    <section id="features">
      <!-- begin container -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-4">
              <h1 class="text-warning text-center">Nuestros productos</h1>
          </div>
          <div class="col-lg-4 col-md-5 features-img">
            <img class="wow fadeInLeft" data-src="img/Contactanos.png"alt="Store Kings-Contacto">
          </div>
          <div class="col-lg-8 col-md-7 ">
              <div class="row">
                <div class="col-lg-6 col-md-6 box wow fadeInRight">
                    <div class="icon"><i class="ion-ios-clock"></i></div>
                    <h4 class="title"><a href="">Tiempo de entrega</a></h4>
                    <p class="description">Excelente tiempo para la entrega de nuestra mercader&iacute;a , para todos nuestros clientes, en San Jos&eacute; o por medio de Correos Costa Rica.</p>
                </div>
                <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                    <div class="icon"><i class="ion-ios-cash"></i></div>
                    <h4 class="title"><a href="">Pago</a></h4>
                    <p class="description">Tenemos diferentes opciones de pago , Sinpe Movil , tarjeta , dep&oacute;sito bancario vos eleg&iacute;s!!.</p>
                </div>
                <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="ion-ios-cart"></i></div>
                    <h4 class="title"><a href="">Pedidos</a></h4>
                    <p class="description">Puedes realizar los pedidos enviandonos un mensaje en cualquiera de nuestras redes y responderemos lo m&aacute;s breve.</p>
                </div>
                <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon"><i class="ion-ios-shirt"></i></div>
                    <h4 class="title"><a href="">Vestimenta</a></h4>
                    <p class="description">Manejamos variedad de marcas y dise&ntilde;os para hacerte sentir como un rey con los mejores estilos.</p>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- ======= end Nuestros productos ======= -->
    <!-- ======= Nuestro equipo ======= -->
    <section id="team" class="section-bg">
      <!-- begin container -->
      <div class="container">
            <div class="section-header">
              <h1 class="text-warning text-center">Nuestro equipo</h1>
              <p class="text-white text-center">Aqu&iacute; los integrantes de nuestro equipo de trabajo para que este proyecto fuera una realidad</p>
            </div>
            <div class="row wow fadeInUp">
                  <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="pic"><img class="img-thumbnail"data-src="img/Equipo/Rodney.jpg" alt="Responsive image"></div>
                        <h4 class = "text-warning">Rodney Herrera</h4>
                        <span class = "text-danger">Gerente</span>
                        <div class="social">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="pic"><img class="img-thumbnail"data-src="img/Equipo/Gabo.jpg" alt="Responsive image"></div> 
                        <h4 class = "text-warning">Gabo Rivera</h4>
                        <span class = "text-danger">Administrador</span>
                        <div class="social">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="pic"><img class="img-thumbnail"data-src="img/Equipo/Ronald.jpg" alt="Responsive image"></div>
                        <h4 class="text-warning">Ronald de Leon</h4>
                        <span class = "text-danger">Administrador</span>
                        <div class="social">
                          <a href=""><i class="fab fa-facebook"></i></a>
                          <a href=""><i class="fab fa-instagram"></i></a>
                          <a href=""><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                  </div>
            		  <div class="col-lg-3 col-md-6">
                      <div class="member">
                        <div class="pic"><img class="img-thumbnail"data-src="img/Equipo/Fabricio.jpg" alt="Responsive image"></div>
                          <h4 class = "text-warning">Fabricio Hernandez</h4>
                          <span class = "text-danger">Desarrollador</span>
                          <div class="social">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                          </div>
                        </div>
                 </div>
            </div>
      </div>
    </section>
    <!-- ======= end Nuestro equipo ======= -->
    <!-- ======= Galería ======= -->
    <section id="gallery">
      <!-- begin container -->
      <div class="container-fluid text-center">
          <h1 class="text-warning">Galer&iacute;a</h1>
          <p class="text-white">Aqu&iacute; una colecci&oacute;n de nuestra espectacular ropa , algo nunca antes visto</p>
          <!-- begin row -->
            <div class="row no-gutters">
                  <div class="col-lg-4 col-md-6">
                    <div class="gallery-item wow fadeInUp">
                      <a href= "img/Galeria/Prenda-1.jpeg" class="venobox">
                        <img class ="img-fluid"data-src="img/Galeria/Prenda-1.jpeg" alt="Responsive image">
        			      	</a>
                    </div> 
                </div>
                  <div class= "col-lg-4 col-md-6">
                    <div class="gallery-item wow fadeInUp">
                      <a href="img/Galeria/Prenda-2.jpeg"data-gall="portfolioGallery" class="venobox">
                        <img class="img-fluid"data-src="img/Galeria/Prenda-2.jpeg"alt="Responsive image">
                      </a>
                    </div>
                  </div> 
                  <div class="col-lg-4 col-md-6">
                    <div class="gallery-item wow fadeInUp">
                      <a href="img/Galeria/Prenda-3.jpg" data-gall="portfolioGallery" class="venobox">
                        <img class ="img-fluid"data-src="img/Galeria/Prenda-3.jpg"alt="Responsive image">
                      </a>
                    </div> 
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="gallery-item wow fadeInUp">
                      <a href="img/Galeria/Prenda-4.jpeg"data-gall="portfolioGallery"class="venobox">
                        <img class="img-fluid"data-src="img/Galeria/Prenda-4.jpeg"alt="Responsive image">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="gallery-item wow fadeInUp">
                      <a href="img/Galeria/Prenda-5.jpeg" data-gall="portfolioGallery" class="venobox">
                        <img class ="img-fluid"data-src="img/Galeria/Prenda-5.jpeg"alt="Responsive image">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="gallery-item wow fadeInUp">
                      <a href="img/Galeria/Prenda-6.jpeg"data-gall="portfolioGallery" class="venobox">
                        <img class ="img-fluid"data-src="img/Galeria/Prenda-6.jpeg"alt="Responsive image">
                      </a>
                    </div>
                  </div>
            </div>
            <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- ======= end Galería ======= -->
    <!-- ======= Marcas ======= -->
    <section id="clients">
      <!-- begin container -->
      <div class="container centrado">
        <div class="row wow fadeInUp">
            <div class="col-md-2">
              <img data-src="img/Marcas/adidas-originals-logo.png" width="300" height="100" alt="">
            </div>
            <div class="col-md-2">
              <img data-src="img/Marcas/NikeLogo.png" alt="">
            </div>
            <div class="col-md-2">
              <img data-src="img/Marcas/TommyHilfiger.png" alt="">
            </div>
            <div class="col-md-2">
              <img data-src="img/Marcas/VansLogo.png" width="300" height="100" alt="">
            </div>
            <div class="col-md-2">
              <img data-src="img/Marcas/quiksilver-logo.png" width="300" height="100" alt="">
            </div>
            <div class="col-md-2">
              <img data-src="img/Marcas/ralph_lauren.png" width="300" height="100" alt="">
            </div>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- ======= end Marcas ======= -->
    <!-- ======= Contactenos ======= -->
    <section id="contact">
      <!-- begin container -->
      <div class="container">
        <!-- begin row -->
        <div class="row wow fadeInUp">
          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
                <?= titulo();?>
                <p class = "text-white">Una tienda de reyes. Un medio virtual para la venta de ropa masculina que nace del emprendimiento de un par de amigos. Nuestra mercader&iacute;a es seleccionada de acuerdo a todos los gustos; nos preocupamos por la atenci&oacute;n exclusiva y personalizada, adem&aacute;s de garantizar que nuestros clientes en cada compra tengan una experiencia &uacute;nica que los haga volver.</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/storekings01" Target= "_BLANK" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/store_kings01/?hl=es-la" Target = "_BLANK" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div><i class="ion-ios-location-outline"></i>
                <p>San Jos&eacute; , Costa Rica<br>Coronado, 11101</p>
              </div>
              <div><i class="ion-ios-email-outline"></i>
                <p>storekings01@gmail.com</p>
              </div>
              <div><i class="ion-ios-telephone-outline"></i>
                <p>7004-0300 / 8532-6146</p>
              </div>
            </div>
          </div>
            <div class="col-lg-5 col-md-8">
              <div class="form">
                  <form action = "rdn_principal"method="POST" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" value="<?= $_SESSION["USUARIO"]["CLIENTE"]["NOMBRE"]?>" data-rule="minlen:4" data-msg="Por favor ingresar al menos 4 car&aacute;cteres" >
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo el&eacute;ctronico" value="<?= $_SESSION["USUARIO"]["CLIENTE"]["CORREO"]?>" data-rule="email" data-msg="Por favor ingrese un correo el&eacute;ctronico v&aacute;lido" >
                            <div class="validate"></div>
                          </div>
                    </div>
                    <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingresar al menos 8 car&aacute;cteres en el asunto">
                            <div class="validate"></div>
                    </div>
                    <div class="form-group">
                          <textarea class="form-control" name="Message" rows="5" data-rule="required" data-msg="Por favor escribenos algo" placeholder="Mensaje"></textarea>
                          <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                          <div class="loading">Cargando</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Tu mensaje ha sido enviado. Gracias por contactarnos!</div>
                    </div>
                    <div class="float-right"><button type="submit" class = "btn-store" name = "btn_enviar" title="Enviar mensaje">Env&iacute;a un mensaje</button></div>
                  </form>
              </div>
            </div>
        </div>
        <!-- end row -->
        <!--==========================
          Mapa
        ============================-->
        	<section id = "Maps">
                <div class = "Map">
                    <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.659203221326!2d-84.02087578571823!3d9.962286076417145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e4205aabea1d%3A0x1c6c69edaf628078!2sCalle%20Rodney%20Herrera%2C%20San%20Jos%C3%A9%2C%20Ipis!5e0!3m2!1ses!2scr!4v1603742525424!5m2!1ses!2scr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </center>
                </div>
            </section><!-- Mapa-->
      </div>
      <!-- end container -->
    </section>
    <!-- ======= end Contactenos ======= -->
  </main>
  <!-- ======= end main ======= -->
  <!-- ======= Footer ======= -->
 <?php include('inc/footer.php')?>
  <!-- ======= end Footer ======= -->
  <a href="#" class="back-to-top"id="back-to-top"><i class="fa fa-chevron-up"></i></a>
