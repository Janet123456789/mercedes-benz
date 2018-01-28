<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>"<?php bloginfo('name'); ?>"</title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <!-- https://bootswatch.com/lux/ -->

    <header>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!--           <a class="navbar-brand" href="#">Navbar</a> -->
        <a class="navbar-brand logo" href="#"><img class="d-block img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/mb.png" alt="<?php bloginfo('name'); ?>"/></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse menu-mercedes navbar-collapse" id="navbarColor02">
<!--             <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Vehículos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ofertas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Eventos</a>
              </li>
            </ul> -->
        <!--     <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form> -->
          </div>



          		 <?php
          		wp_nav_menu( array(
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
              ) );
          		 ?>
        </nav>
    </header>


 <!--    </div> -->



    <!-- <h1>algun texto</h1> -->
