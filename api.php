<?php
header( 'content-type: text/html; charset=utf-8' );

include './lib/cfg.php';
include './lib/mail.php';

$name=nettoyervar($_POST['name']);
$firstname=nettoyervar($_POST['firstname']);
$email=nettoyervar($_POST['email']);
$subject=nettoyervar($_POST['subject']);
$message=nettoyervar($_POST['message']);

// on efface les anciens messages d'erreur. Réf: function PostData() dans main.js
echo '';

// on vérifie la syntax du mail et du tel
if(!valide_mail($mail)) {
    echo 'Votre email comporte une erreur';
    exit;
}

// on envoie une alerte mail
envoie_mail($mail,$subject,$name,$firstname,$message);


?>