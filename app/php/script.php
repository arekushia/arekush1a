<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
 
  // (1) Code PHP pour traiter l'envoi de l'email
 
  // Récupération des variables et sécurisation des données
  $name     = htmlentities($_POST['customer_name']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
  $mail   = htmlentities($_POST['customer_email']);
	if($_POST['$customer_object'] === '_value1'){	
  		$customer_object = "To have a nice chat";
	}elseif ($_POST['$customer_object'] === '_value2') {
		$customer_object = "Talk about jobs";
	}elseif($_POST['$customer_object'] === '_value3') {
		$customer_object = "Team up for something you like / you own / you work for";
	}else {
		$customer_object = "I'm not sure yet"
	}
  $message = htmlentities($_POST['message']);
 
  // Variables concernant l'email
 
  $destinataire = 'hello@arekushia.me'; // Adresse email du webmaster (à personnaliser)
  $sujet = 'Demande de contact - '. $customer_object; // Titre de l'email
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu .= '<p>Nouveau message reçu ! <br> Voici les contacts de la personne </p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
  $contenu .= '<p>Objet : "'.$customer_object.'" </p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
 
  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
	
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
 
  // Envoyer l'email
  mail($destinataire, $sujet, $contenu, $headers);
  echo '<h2>Message envoyé!</h2>';
}
?>