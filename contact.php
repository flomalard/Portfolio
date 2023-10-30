<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $objet = $_POST["objet"];
  $message = $_POST["message"];

  $destinataire = "florent.malard@hotmail.fr"; // Remplacez par votre adresse e-mail
  $sujet = "Nouveau message de $nom : $objet";
  $contenu = "Nom : $nom\n";
  $contenu .= "E-mail : $email\n";
  $contenu .= "Message :\n$message";

  // En-têtes pour l'e-mail
  $entetes = "From: $email\r\nReply-To: $email\r\n";

  // Envoi de l'e-mail
  mail($destinataire, $sujet, $contenu, $entetes);

  // Redirection vers une page de confirmation
  header("Location: index.html"); // Créez une page de confirmation
}
?>