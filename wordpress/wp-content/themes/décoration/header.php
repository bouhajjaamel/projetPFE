<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    
</head>

    <body> 

    <img src="<?php echo get_bloginfo('template_directory') ?>/imag/flash-sale-gif.gif" style="width:100%"  alt="">

    <!-- Header -->
  
    
    <!-- Fin du header -->

 

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <!-- Just an image -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <a href="http://localhost/fin-merkado/wordpress/"><img src="<?php echo get_bloginfo('template_directory') ?>/imag/logodoré.jpeg" alt="" width="500px" ></a>
    </a>
</nav>
<select id="cars">
  <option value="volvo">Toutes les catégories</option>
  <option value="saab">Mode</option>
  <option value="opel">--Mode Homme</option>
  <option value="audi">--Mode Femme</option>
  <option value="saab">--Lunettes </option>
  <option value="opel">--Chaussures</option>
  <option value="audi">--Mode Enfant</option>
  <option value="volvo">--Sacs& Valises</option>
  <option value="saab">--Bijoux & Accessoires</option>
  <option value="opel">Hight tech</option>
  <option value="audi">-- Téléphone</option>
  <option value="saab">--Informatiques </option>
  <option value="opel">--Gaming</option>
  <option value="audi">--Télévisions</option>

  <option value="volvo">--Récepteures</option>
  <option value="saab">--Audio Photos & Vidéos</option>
  <option value="opel">Parfums & Maquillages</option>
  <option value="audi">--Parfums</option>
  <option value="saab">--Maquillages </option>
  <option value="opel">--Accessoires</option>
  <option value="audi">--Nettoyants</option>
  <option value="volvo">Parapharmacie & Soins </option>
  <option value="saab">--Soin de Visages</option>
  <option value="opel">--Soin de du Corps</option>
  <option value="audi">-- Capillaire</option>
  <option value="saab">--Appareils de Coiffures </option>
  <option value="opel">--Soins pour Hommes</option>
  <option value="audi">--Bien-etre  & Hygiéne</option>


  <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Rechercher Un produits.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<div class="d-md-flex bd-highlight">    

         <a href="#"><div class="text-light"></div></a>
        <div class="p-2 flex-fill bd-highlight"><a href="#"><svg xmlns="http://www.w3.org/2000/svg " style="color:rgb(43, 30, 30);" width="30" height="30" fill="currentColor" class="bi bi-cart-x" viewBox="0 0 16 16">
          <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"/>
          <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
         </svg> </a><div class="text-light"></div></div>

         <div class="p-2 flex-fill bd-highlight"> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(43, 30, 30);" width="30" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg></a><div class="text-light"></div></div>
        <div class="p-2 flex-fill bd-highlight"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(43, 30, 30);"style="margin:30px" width="30" height="30" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
          <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
         <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
         </svg> 
           
  </div></div>
</nav>
  

  

  <nav class="navbar navbar-expand-md navbar-light" role="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'header_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'header-menu',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
            ?>
        </div>
    </nav>
  

