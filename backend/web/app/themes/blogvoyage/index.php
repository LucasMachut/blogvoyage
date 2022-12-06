<?php
get_header()
?>
<body>
  <header>
    <div class="container-fluid header">
      <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">Lucas Machut</a>
            </li>
            <li class="nav-item">
              <a href="#for" class="nav-link">Articles</a>
            </li>
            <li class="nav-item">
              <a href="#experiences" class="nav-link">Parcours/journal de bord</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Portraits</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="banner-infos">
        <h1>
          Lucas Machut
        </h1>
        <div id="line"></div>
        <h2>Blog de voyage</h2>
        </div>
      </div>
    </div>
  </header>
    
    <main>
      <div class="container-line">

        <div class="container-line__text">
          <h2>En quête d'aventures</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corporis dolorem aliquid possimus neque nobis nam laudantium accusantium cum error tenetur explicabo quae aspernatur, voluptatum natus quis dolorum nihil animi tempora est eos facilis quisquam aliquam. Sapiente consectetur iure doloribus sed, ad quis quasi officiis cumque aperiam sequi quam dolor quod odit veniam et nisi suscipit voluptatibus at dolorem autem eos molestias dicta alias! Nostrum eveniet temporibus placeat totam eum, voluptas, obcaecati culpa ducimus qui quod velit atque sit facere adipisci aspernatur. Eaque alias commodi fuga ullam, possimus, quas quisquam unde perferendis minima, consequatur accusamus itaque natus incidunt. Dolorum, consectetur.
          </p>
        </div>
        <div class="container-line__img">
          <img src="<?= get_template_directory_uri() . '/assets/img/photoProfile.jpeg' ?>" alt="photo de profile Lucas Machut">
        </div>
      </div>

      <div class="last-articles-container">
        <h3>Derniers articles</h3>
        <div class="last-articles-container__items-container">
          <div class="last-article-container__item">
            <img src="./assets/img/colibri.jpg" alt="">
            <h4>Le titre</h4>
            <p class="summary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis impedit a at id rerum quidem, voluptatum mollitia saepe blanditiis hic?</p>
          </div>
          <div class="last-article-container__item">
            <img src="./assets/img/colibri.jpg" alt="">
            <h4>Le titre</h4>
            <p class="summary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis impedit a at id rerum quidem, voluptatum mollitia saepe blanditiis hic?</p>
          </div>
          <div class="last-article-container__item">
            <img src="./assets/img/colibri.jpg" alt="">
            <h4>Le titre</h4>
            <p class="summary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis impedit a at id rerum quidem, voluptatum mollitia saepe blanditiis hic?</p>
          </div>
        </div>
        <div class="all-articles-button">
          <a href="#">
            <h3>Voir tous les articles</h3>
          </a>
        </div>
      </div>

      <div class="banner-photos-insta">
        <div class="banner-photos-insta__container">
          <div class="banner-photos-insta__item">
            <img src="./assets/img/colibri-50x50.jpg" alt="">
          </div>
          <div class="banner-photos-insta__item">
            <img src="./assets/img/colibri-50x50.jpg" alt="">
          </div>
          <div class="banner-photos-insta__item">
            <img src="./assets/img/colibri-50x50.jpg" alt="">
          </div>
          <div class="banner-photos-insta__item">
            <img src="./assets/img/colibri-50x50.jpg" alt="">
          </div>
          <div class="banner-photos-insta__item">
            <img src="./assets/img/colibri-50x50.jpg" alt="">
          </div>
          <div class="banner-photos-insta__item">
            <img src="./assets/img/colibri-50x50.jpg" alt="">
          </div>
          <div class="banner-photos-insta__item">
            <img src="./assets/img/colibri-50x50.jpg" alt="">
          </div>
          <div class="banner-photos-insta__item">
            <img src="./assets/img/colibri-50x50.jpg" alt="">
          </div>
        </div>
        <h3>Suivez-moi sur instagram !</h3>
        <h4 id="link-insta">
          <a href="#">@Lkts_s</a>
        </h4>
      </div>
    </main>

    <footer>
      <div class="footer-container">
        <div class="footer-container-left">
          <h4>Découvrez mes autres sites et activités</h4>
          <ul>
            <li>
              <a href="#">Interprétation en Langue des Signes Française</a>
            </li>
            <li>
              <a href="#">Développeur Web</a>
            </li>
          </ul>
        </div>
        <div class="footer-container-right">
          <h4>Contact</h4>
          <ul>
            <li><a href="mailto:machut.lucas@gmail.com"></a> machut.lucas@gmail.com</li>
            <li>+33 7 77 76 68 67</li>
          </ul>
        </div>
      </div>
    </footer>    
<?php
get_footer ()
?>