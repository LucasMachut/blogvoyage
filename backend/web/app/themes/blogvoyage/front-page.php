<?php
get_header();
// Création d'une custom query pour recuperer les trois derniers posts
// publiés
$the_query = new WP_Query([
  "posts_per_page" => 3,
  "post_type" => 'post',
  "post_status" => 'publish',
  "orderby" => 'date',
  "order" => 'ASC'
]);
?>

<body>
<?php get_template_part('template_parts/header_menu') ?>
  <div class="header-container" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?= get_template_directory_uri() . '/assets/img/banner.jpg' ?>) fixed 50% 50%;">
    <div class="header-infos">
      <h1>
        Lucas Machut
      </h1>
      <div id="line"></div>
      <h2>Blog de voyage</h2>
      </div>
    </div>
  </div>

  <main>
    <div class="present-container">
      <div class="present-container-text">
        <h2>En quête d'aventures</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quae excepturi, eos autem expedita odit velit quo molestias, nobis, libero ipsum earum culpa quaerat praesentium? Voluptates, nemo asperiores? Soluta, dolore?</p>
      </div>
      <div class="present-container-img">
        <img src="<?= get_template_directory_uri() . '/assets/img/photoProfile.jpeg' ?>" alt="photo de profile Lucas Machut">
      </div>
    </div>

    <div class="last-articles-container">
      <h2 id="title-last-article">Derniers articles</h2>
      <div class="post-gallery">
      <?php if($the_query->have_posts()) : ?>
        <?php while($the_query->have_posts()) : ?>
          <?php $the_query->the_post() ?>
          <article class="post">
            <img class="post-image" src="<?= has_post_thumbnail() ? the_post_thumbnail_url() : "https://picsum.photos/1000/900?random=1" ?>">
            <h3 class="post-title"><?php the_title() ?></h3>
            <p class="post-excerpt"><?= get_the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>" class="post__link">Lire la suite</a>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>

      <a href="#" id="all-articles-button">
          <h3>Voir tous les articles</h3>
      </a>
      
    </div>

    <?php get_template_part('template_parts/banner_insta') ?>

   
  </main>

<footer>

</footer>

<?php
get_footer();
?>