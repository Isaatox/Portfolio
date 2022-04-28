<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PortFolio Veille Technologique</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>
  <header class="header">
    <a href="#" class="header__logo">Hugo JENOUVRIER</a>

    <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

    <nav class="nav" id="nav-menu">
      <div class="nav__content bd-grid">

        <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

        <div class="nav__perfil">
          <!-- <div class="nav__img">
                        <img src="assets/img/profile.jpeg" alt="">
                    </div> -->

          <div>
            <a href="index.html#" class="nav__name">Hugo JENOUVRIER</a>
            <span class="nav__profesion">Etudiant Developpeur</span>
          </div>
        </div>

        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item"><a href="index.html#" class="nav__link">Accueil</a></li>
            <!-- <li class="nav__item"><a href="#Apropos" class="nav__link">A propos</a></li> -->
            <li class="nav__item"><a href="index.html#compétences" class="nav__link">Compétences</a></li>
            <li class="nav__item"><a href="index.html#Doc" class="nav__link">Mes projets</a></li>
            <!-- <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li> -->
            <li class="nav__item"><a href="veille.php" class="nav__link active">Veille technologique</a></li>
          </ul>
        </div>

        <div class="nav__social">
          <a href="https://github.com/Isaatox" class="nav__social-icon" target="_blank">
            <ion-icon name="logo-github"></ion-icon>
          </a>
          <a href="mailto:hugo.jenouvrier@gmail.com" class="nav__social-icon">
            <ion-icon name="mail-outline"></ion-icon>
          </a>
          <a href="tel:+33782710159" class="nav__social-icon">
            <ion-icon name="call-outline"></ion-icon>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <section class="blog section">
    <div class="container">
      <div class="section-header">
        <h3 class="title">Veille technologique</h3>
        <p>
          Voici ma veille technologique qui traite actuellement deux sujets qui sont
          <br> <strong>Php</strong>, ainsi que <strong>la sécurité informatique</strong>.
          <br> <a href="#outils">Voir les outils utilisés.</a>
        </p>

        <!-- <p>
              <ul>
                <li>- Alertes Google par mail (Google Alerts)</li>
                <li>- NewsLetters par mail (Développez.com)</li>
                <li>- Flux RSS (Développez.com)</li>
                <li> - Recherche WEB</li>
              </ul>
            </p> -->
      </div>
      <div class="section-header">
        <h3 class="title" data-title="Veilles Technologique">Php</h3>
      </div>
      <div class="blog-wrapper">
        <?php
        $url = "https://php.developpez.com/index/rss";
        $rss = simplexml_load_file($url);
        $i = 280;
        foreach ($rss->channel->item as $item) {
          $datetime = date_create($item->pubDate);
          $date = date_format($datetime, 'd M Y, H\hi');
          $i++;
          echo '<div class="blog-wrap">
                  <div class="blog-card">
                    <div class="blog-image">
                      <img src="https://source.unsplash.com/random/420x' . $i . '/?php" alt="" />
                    </div>
    
                    <div class="blog-content">
                      <div class="blog-info">
                        <h5 class="blog-date">' . $date . '</h5>
                      </div>
                      <h3 class="title-sm">' . $item->title . '</h3>
                      <p class="blog-text">
                      ' .
            $desc = $item->description
            . '</p>
                      <a href="' . $item->link . '" class="btn small" target="_blank">Voir</a>
                    </div>
                  </div>
                </div>';
        }
        ?>
      </div>
    </div>
  </section>

  <section class="blog section">
    <div class="container">
      <div class="section-header">
        <h3 class="title" data-title="Veilles Technologique">la sécurité informatique</h3>
      </div>

      <div class="blog-wrapper">
        <?php
        $url = "https://securite.developpez.com/index/rss";
        $rss = simplexml_load_file($url);
        $i = 280;
        foreach ($rss->channel->item as $item) {
          $datetime = date_create($item->pubDate);
          $date = date_format($datetime, 'd M Y, H\hi');
          $i++;
          echo '<div class="blog-wrap">
                    <div class="blog-card">
                      <div class="blog-image">
                        <img src="https://source.unsplash.com/random/420x' . $i . '/?cybersecurity" alt="" />
                      </div>
      
                      <div class="blog-content">
                        <div class="blog-info">
                          <h5 class="blog-date">' . $date . '</h5>
                        </div>
                        <h3 class="title-sm">' . $item->title . '</h3>
                        <p class="blog-text">
                        ' .
            $desc = $item->description
            . '</p>
                        <a href="' . $item->link . '" class="btn small" target="_blank">Voir</a>
                      </div>
                    </div>
                  </div>';
        }
        ?>
      </div>
    </div>
  </section>

  <div class="section-header">
    <h3 class="title" id="outils">Outils utilisés</h3>
    <p>
    <ul>
      <li>- Alertes Google par mail (Google Alerts)</li>
      <li>- NewsLetters par mail (Développez.com)</li>
      <li>- Flux RSS (Développez.com)</li>
      <li> - Recherche WEB</li>
    </ul>
    </p>
  </div>

  <div class="back-btn-wrap">
    <a href="#" class="back-btn">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="grid-4">
        <div class="grid-4-col footer-about">
          <h3 class="title-sm">About</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
            officiis quo officia quia?
          </p>
        </div>

        <div class="grid-4-col footer-links">
          <h3 class="title-sm">Links</h3>
          <ul>
            <li>
              <a href="#services">Services</a>
            </li>
            <li>
              <a href="#portfolio">Portfolio</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#testimonials">Testimonials</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </div>

        <div class="grid-4-col footer-links">
          <h3 class="title-sm">Services</h3>
          <ul>
            <li>
              <a href="#">Web Design</a>
            </li>
            <li>
              <a href="#">Web Dev</a>
            </li>
            <li>
              <a href="#">App Design</a>
            </li>
            <li>
              <a href="#">Marketing</a>
            </li>
            <li>
              <a href="#">UI Design</a>
            </li>
          </ul>
        </div>

        <div class="grid-4-col footer-newstletter">
          <h3 class="title-sm">Subscribe</h3>
          <p class="text">
            Lorem ipsum dolor, sit amet ipsum dolor sit amet.
          </p>
          <div class="footer-input-wrap">
            <input type="email" class="footer-input" placeholder="Email" />
            <a href="#" class="input-arrow">
              <i class="fas fa-angle-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="bottom-footer">
        <div class="copyright">
          <p class="text">
            Copyright&copy;2020 All rights reserved | Made by
            <span>True Coder</span>
          </p>
        </div>

        <div class="followme-wrap">
          <div class="followme">
            <h3>Retrouvez moi</h3>
            <span class="footer-line"></span>
            <div class="social-media">
              <a href="https://github.com/Isaatox" class="nav__social-icon" target="_blank">
                <ion-icon name="logo-github"></ion-icon>
              </a>
              <a href="mailto:hugo.jenouvrier@gmail.com" class="nav__social-icon">
                <ion-icon name="mail-outline"></ion-icon>
              </a>
              <a href="tel:+33782710159" class="nav__social-icon">
                <ion-icon name="call-outline"></ion-icon>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>

  <!-- ===== IONICONS ===== -->
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

  <!--===== MAIN JS =====-->
  <script src="assets/js/main.js"></script>
</body>

</html>