<?php
?>

<header class="header">
    <div class="logo">
      <img src="/logo.4af308ef.svg" class="logo__image" alt="">
      <a href="/index.html" class="logo__text">myblog
    </a></div>
    <?php 
    wp_nav_menu([
        'theme_location' => "menu_light",
        'container' => 'nav',
        'container_class' => 'menu',
        'menu_class' => 'menu__list'
    ]);
    ?>
  </header>