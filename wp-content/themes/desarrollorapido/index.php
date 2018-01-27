
<?php get_header()?>

  <!-- COROUSEL -->

<!--  FALTANTES EN EL INDEX Y EN GENERAL
    mover las opciones del nav hacia la izquierda
     los titulos en negrita
     logos redes sociales
     arreglar el menu -->

<!-- .carousel .carousel-item img{
  height: 200px;
  background: no-repeat center center; 
  background-size: cover; -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

      <!-- IMG #0 -->
      <div class="carousel-item active">
         <img class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-block img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/1.png" alt="<?php bloginfo('name'); ?>"/>
      </div>

      <!-- IMG #1 -->
      <div class="carousel-item">
        <img class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-block img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/2.png" alt="<?php bloginfo('name'); ?>"/>
      </div>

      <!-- IMG #2 -->
      <div class="carousel-item">
        <img class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-block img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/10.jpg" alt="<?php bloginfo('name'); ?>"/>    
      </div>

            <!-- IMG #3 -->
      <div class="carousel-item">
        <img class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-block img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/3.png" alt="<?php bloginfo('name'); ?>"/>    
      </div>

            <!-- IMG #4 -->
      <div class="carousel-item">
        <img class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-block img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/4.png" alt="<?php bloginfo('name'); ?>"/>    
      </div>


    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



<!-- INFORMACION DE LOS SERVICIOS -->

<h2 class="titulo-servicios">Servicios Mercedes-Benz</h2>

<!-- <div class="container"> -->
  <div class="row">
    <!-- informacion #1 -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 divs-cards">
      <div class="card">
        <div class="card-block">


          <h3>Ella es Mercedes</h3>
          <p>Conoce una plataforma que busca inspirar, motivar y empoderar a las mujeres costarricenses. Forma parte de este nuevo concepto.</p>
            <a href="https://www.youtube.com/watch?v=JBn9VDXyoiA" target="_blank" class="btn btn-primary">Ver vídeo</a>
        </div>
      </div>
    </div>

       <!-- informacion #2 -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 divs-cards">
      <div class="card">
        <div class="card-block">
        <h3>Colección Mercedes-Benz</h3>
        <p>En su trabajo o en su tiempo libre: los artículos de la Colección Mercedes-Benz le acompañan en todo momento.</p>
          <a href="https://www.youtube.com/watch?v=3I9U7Fhabvw" target="_blank" class="btn btn-primary">Ver vídeo</a>
        </div>
      </div>
    </div>

         <!-- informacion #3 -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 divs-cards">
        <div class="card">
        <div class="card-block">
        <h3>Financiamiento Mercedes-Benz</h3>
        <p>Mercedes-Benz Financial es parte de Daimler Financial Services Costa Rica, empresa dedicada a brindar servicios financieros de la más alta calidad en el mercado.</p>
          <a href="https://www.youtube.com/watch?v=1WGmG2KhLpc" target="_blank" class="btn btn-primary">Ver vídeo</a>
        </div>
      </div>
    </div>

         <!-- informacion #4 -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 divs-cards">
       <div class="card">
        <div class="card-block">
        <h3>Servicio Mercedes-Benz</h3>
        <p>Donde podrás encontrar información sobre servicios ofrecidos por Mercedes-Benz y refacciones originales. </p>
          <a href="https://www.youtube.com/watch?v=yqyttSMc7ac" target="_blank" class="btn btn-primary">Ver vídeo</a>
        </div>
      </div>
    </div>
  </div>
<!-- </div>  -->

  
  <!-- CARDS DE LOS TIPOS DE VEHICULOS -->

  <h2 class="titulo-cards">Al estilo Mercedes-Benz</h2>
<!-- <div class="container"> -->
  

    <div class="container">
      <div class="row">
      <!-- card #1 -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 card tipos-cars">
          <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/12.jpg" alt="<?php bloginfo('name'); ?>"/>
        <div class="card-block">
                <h4 class="card-title titulo-tipos">Un familiar con alma de aventurero</h4>
                <p class="card-text">Más espacio, más flexibilidad y más sensación de calidad. Así de fácil sería describir nuestro GLC 2018, disfruta de una amplísima gama de colores, acabados y accesorios para lograr una personalización completa. Un nuevo estilo, una nueva aventura.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Última actualización hace 1 mes</small>
        </div>
      </div>


      <!-- card #2 -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 card tipos-cars">
          <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/14.jpg" alt="<?php bloginfo('name'); ?>"/>
        <div class="card-block">
                <h4 class="card-title titulo-tipos">No mires el cielo, tómalo contigo.</h4>
                <p class="card-text">El rostro único trae a la memoria los mejores recuerdos. SL: pocas iniciales son capaces de provocar tanta euforia. La legendaria tradición de los deportivos se traslada a nuestros días de forma dinámica con la más avanzada tecnología del tren de rodaje: el nuevo SL.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Última actualización hace 1 mes</small>
        </div>
      </div>

            <!-- card #3 -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 card tipos-cars">
          <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/13.jpg" alt="<?php bloginfo('name'); ?>"/>
        <div class="card-block">
               <h4 class="card-title titulo-tipos">Obra maestra de inteligencia</h4>
                <p class="card-text">La Clase E Berlina encarna un estilo moderno y deportividad refinada, unidos a una ligereza asombrosa. Cada uno de sus rasgos obedece al principio de la claridad sensual.  Los mandos táctiles son inéditos en Mercedes-Benz, tienen buena sensibilidad y son fáciles de utilizar.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Última actualización hace 1 mes</small>
        </div>
      </div>

    </div> <!-- end card-group-->
  </div> <!-- end div row-->
<!-- </div> --> <!-- end div container -->















<!--https://getbootstrap.com/docs/4.0/utilities/spacing/ -->
<!-- y - for classes that set both *-top and *-bottom -->

<!-- PAGINAS Q ESTABA VIENDO -->

<!-- https://v4-alpha.getbootstrap.com/getting-started/introduction/ 
https://v4-alpha.getbootstrap.com/components/forms/-->



<!-- <div class="container py-5">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
      <div class="container">
      <h5>Ella es Mercedes</h5>
      </div>
      <p>Conoce una plataforma que busca inspirar, motivar y empoderar a las mujeres costarricenses. Forma parte de este nuevo concepto.</p>
      <a href="http://www.facebook.com"><button type="button" class="btn btn-outline-warning">Ver más</button></a>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
      <h5>Colección Mercedes-Benz</h5>
      <p>En su trabajo o en su tiempo libre: los artículos de la Colección Mercedes-Benz le acompañan en todo momento.</p>
      <a href="http://www.facebook.com"><button type="button" class="btn btn-outline-warning">Ver más</button></a>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
      <h5>Financiamiento Mercedes-Benz</h5>
      <p>Mercedes-Benz Financial es parte de Daimler Financial Services Costa Rica, empresa dedicada a brindar servicios financieros de la más alta calidad en el mercado.</p>
      <a href="http://www.facebook.com"><button type="button" class="btn btn-outline-warning">Ver más</button></a>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
      <h5>Servicio Mercedes-Benz.</h5>
      <p>Donde podrás encontrar información sobre servicios ofrecidos por Mercedes-Benz y refacciones originales. </p>
      <a href="http://www.facebook.com"><button type="button" class="btn btn-outline-warning">Ver más</button></a>
    </div>
  </div>
</div>  -->



<!-- https://v4-alpha.getbootstrap.com/components/card/  -->
<!--<div class="container "> 
  <div class="row">
     

      <div class="card-group">

        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-4">
          <img id="cardTitle" class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/12.jpg" alt="<?php bloginfo('name'); ?>"/>
          <div class="card-block">
            <h4 class="card-title">Un familiar con alma de aventurero</h4>
            <p class="card-text">Más espacio, más flexibilidad y más sensación de calidad. Así de fácil sería describir nuestro GLC 2018</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>

        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-4">
          <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/13.jpg" alt="<?php bloginfo('name'); ?>"/>
          <div class="card-block">
            <h4 class="card-title">Obra maestra de inteligencia</h4>
            <p class="card-text">La Clase E Berlina encarna un estilo moderno y deportividad refinada, unidos a una ligereza asombrosa. Cada uno de sus rasgos obedece al principio de la claridad sensual.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>

        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-4">
          <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/14.jpg" alt="<?php bloginfo('name'); ?>"/>
          <div class="card-block">
            <h4 class="card-title">No mires el cielo, tómalo contigo.</h4>
            <p class="card-text">El rostro único trae a la memoria los mejores recuerdos. SL: pocas iniciales son capaces de provocar tanta euforia. La legendaria tradición de los deportivos se traslada a nuestros días de forma dinámica con la más avanzada tecnología del tren de rodaje: el nuevo SL.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>

      </div>-->

 <!-- </div>--> <!-- end div row-->
<!--</div> --> <!-- end div container-->

<!--<img class="img-full-width" src="<?phpechowp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>"/>-->

<?php get_footer()?>

