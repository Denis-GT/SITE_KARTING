<?php
if(isset($_POST['email'])) {

  $destinataire = "dgatevv@gmail.com";

  $sujet = "Nouveau message depuis le formulaire de contact";

  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $contenu = "Nom: $nom\n";
  $contenu .= "Email: $email\n\n";
  $contenu .= "Message:\n$message";

  $headers = "De: $nom <$email>";

  mail($destinataire, $sujet, $contenu, $headers);

  echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint laudantium soluta dolore vero quo iste, ducimus perspiciatis amet esse quis veritatis necessitatibus dolorem voluptatibus tenetur mollitia nesciunt animi ipsa quos</p>";
  header("Location: ../index.php");
}
?>
