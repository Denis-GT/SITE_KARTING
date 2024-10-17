<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/img/roue.png" />
  <title>Gofast Team</title>
  <link rel="stylesheet" href="css/styles.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="assets/img/kart.png" width="200" alt="Logo du site">
      </div>
      <h1>Gofast Team</h1>
      <ul>
        <li><a href="#accueil">Bienvenue</a></li>
        <li><a href="#services">Sujet 1</a></li>
        <li><a href="#a-propos">Sujet 2</a></li>
        <li><a href="#contact">Contact</a></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </nav>
  </header>

  <section id="accueil">
    <div class="hero-image">
      <h1>Bienvenue</h1>
      <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer ut quam id orci
        fermentum venenatis. Quisque commodo hendrerit leo, vel efficitur libero ullamcorper vitae.</p>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <h2>sujet 1</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      <ul>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, hic, omnis repellat nemo corrupti.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, hic, omnis repellat nemo corrupti.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, hic, omnis repellat nemo corrupti.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, hic, omnis repellat nemo corrupti.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, hic, omnis repellat nemo corrupti.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, hic, omnis repellat nemo corrupti.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, hic, omnis repellat nemo corrupti.</li>
      </ul>
    </div>
  </section>

  <section id="a-propos">
    <div class="container">
      <h2>sujet 2</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident consequuntur aut sunt tempore corrupti quaerat asperiores inventore eius accusamus quidem. Soluta, dicta vitae officia animi quia autem molestiae vel praesentium.</p>
      <br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam id enim quisquam suscipit temporibus iure, placeat reiciendis repudiandae ea atque! Similique, voluptate vel. Perspiciatis consequatur ullam qui eveniet, quae iure?</p>
      <br>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere error est magnam illo facilis ut non quibusdam temporibus beatae labore quia dignissimos tenetur neque tempora quaerat, cum cumque veritatis veniam.</p>
      <br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil magnam magni expedita nisi nostrum laudantium repudiandae molestias dolorum autem maxime, sequi delectus optio tenetur, iure illo voluptates accusantium consequatur deleniti.</p>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h2>Contactez-nous</h2>
      <p>Pour toute demande de service ou question, veuillez remplir le formulaire ci-dessous :</p>
      <form method="post" action="actions/envoyer_mail.php">
        <fieldset>
          <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
        </fieldset>
        <fieldset>
          <input type="email" id="email" name="email" placeholder="Votre adresse e-mail" required>
        </fieldset>
        <fieldset>
          <textarea id="message" name="message" placeholder="Votre message" required></textarea>
        </fieldset>
        <fieldset>
          <button type="submit">Envoyer</button>
        </fieldset>
      </form>
    </div>
  </section>

  <footer>
    <div class="contact-infos">
      <h2>Coordonnées</h2>
      <p>Adresse : </p>
      <p>Téléphone : +33 1 02 03 04 05</p>
      <p>Email : Exemple@gmail.com</p>
    </div>
    <p class="copyright">&copy; 2024 Gofast Team. Tous droits réservés.</p>

    <div class="horaires-infos">
      <h2>Informations</h2>
      <p>Info</p>
      <p>Info</p>
    </div>

  </footer>



  <script src="js/script.js"></script>
</body>

</html>