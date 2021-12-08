<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap');

      @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');

      @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');
    </style>
    <title>Développeur Web - Bryan Legrain</title>
  </head>
  <body class="background">
    <header>
      <!-- banner -->

      <section class="banner">
        <div class="main">
          <img
            width="200px"
            class="picture"
            src="./images/Me.JPG"
            alt="Photo de Bryan LEGRAIN"
          />
          <h1 class="title">
            Bienvenue sur mon site, je suis<span class="spanTitle"
              >Bryan LEGRAIN</span
            >
          </h1>
          <p class="subtitle">Développeur Web/Web mobile</p>
        </div>

        <div class="buttons">
          <a class="btn-banner btnBe" href="#aboutMe">A propos de moi</a>
          <a class="btn-banner btn" href="#projects">Mes projets</a>
          <a class="btn-banner btnDo" href="#contact">Contact</a>
        </div>
      </section>
      <!-- end banner -->
    </header>

    <!-- about me -->

    <section class="about" id="aboutMe">
      <article class="aboutBe">
        <h1 class="title-aboutBe">Qui suis-je</h1>
        <h3>
          <span>Etudiant</span> développeur web passionné
          <span>actuellement en formation</span>,
        </h3>
        <p>
          vivant en France, passionné d'informatique, motivé et prêt à tout
          mettre en oeuvre pour percer dans cette voie, tout en prenant du
          plaisir.
        </p>
        <br />
        <h3>
          Ma
          <span>motivation</span>, ma <span>rigueur</span> et ma
          <span>curiosité</span> compensent mon manque d'expérience actuel;
        </h3>
        <p>
          Les connaissances qui me seront acquises durant ma formation et mon
          stage en entreprise viendront compléter mon parcours.
        </p>
      </article>
      <article class="aboutDo">
        <h1 class="title-aboutDo">Ce que je fais</h1>
        <h3><span>Développer</span> des sites web</h3>
        <p>
          Le processus de développement web comprend, entre autres, la
          conception de sites web, le développement de contenu web,
          l’élaboration de scripts côté client ou côté serveur.
        </p>
        <h3><span>Responsive</span> design</h3>
        <p>
          Consiste à rendre un site web accessible et adaptable à tous les
          devices : tablettes, smartphones, etc.
        </p>
        <h3>Langage<span>s</span></h3>
        <p>HTML, CSS, JS, PHP, SQL.</p>
      </article>
    </section>
    <!-- end about me -->

    <!-- projects -->

    <section class="projects" id="projects">
      <h1 class="titleProjects">Mes projets</h1>
      <article class="images">
        <div><img height="350px" width="450px" src="./images/WiP.png" alt="image travail en cours"></div>
        <div><img height="350px" width="450px" src="./images/WiP.png" alt="image travail en cours"></div>
        <div><img height="350px" width="450px" src="./images/WiP.png" alt="image travail en cours"></div>
        <div><img height="350px" width="450px" src="./images/WiP.png" alt="image travail en cours"></div>
      </article>
    </section>

    <!-- end projects -->

    <!-- contact -->

    <section class="contact" id="contact">
      <h1 class="titleContact">Me contacter</h1>
      <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Entrez votre nom"
        required>
        <br>
        <input type="email" name="email" placeholder="Entrez votre email" required>
        <br>
        <textarea name="message" cols="50" rows="10" placeholder="Entrez votre message"
        required></textarea>
        <br>
        <button class="btn-contact" type="submit" name="submit">Envoyer</button>
      </form>

      <?php
        if(isset($_POST['submit'])) {
            if(isset($_POST['message'])) {
                $retour = mail('brylegrain@gmail.com', 'Envoi depuis la page Contact de mon Portfolio', $_POST['message'] 'De :' . $_POST['name'], $_POST['email']);
                if ($retour) {
                    echo '<p>Votre message a bien été envoyé.</p>';
                }
            } else {
                echo '<p>Veuillez écrire un message</p>'
            }
        };
    
      ?>
    </section>
    <!-- end contact -->

    <!-- footer -->

    <footer>
      <div>
        <a class="email" href="mailto:Brylegrain@gmail.com"
          >Brylegrain@gmail.com</a
        >
      </div>
      <div>
        <a
          target="_blank"
          href="https://www.linkedin.com/in/bryan-legrain-937001226/"
          ><span class="social"><i class="fab fa-linkedin"></i></span
        ></a>
        <a target="_blank" href="https://github.com/BryanLeg"
          ><span class="social"> <i class="fab fa-github"></i></span
        ></a>
        <a target="_blank" href="./page2.html"
          ><span class="social">CV</span></a
        >
      </div>
      <button
        onclick="topFunction()"
        class="goTop"
        id="goTop"
        title="Go to top"
      >
        <span class="arrow"><i class="fas fa-angle-up"></i></span>
      </button>
    </footer>

    <script>
      var mybutton = document.getElementById("goTop");

      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 200 ||
          document.documentElement.scrollTop > 200
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    </footer>

    <!-- end footer -->
  </body>
</html>