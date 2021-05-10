<?php
    function envoie_mail($envoie_mail,$envoie_subject,$envoie_name,$envoie_firstname,$envoie_message) {
        $sujet = 'Site Portfolio : '.$envoie_subject;
        $message = "Bonjour,<br /><br />
        Ceci est un message envoy&eacute; via le site Portfolio<br /><br />
        Coordonn&eacute;es du contact :<br />
        name : ".$envoie_name."<br />
        firstname : ".$envoie_firstname."<br />
        email : <a href='mailto:".$envoie_mail."'><strong>".$envoie_mail."</strong></a><br />
        t&eacute;l&eacute;phone : <strong>".$envoie_tel."</strong><br /><br />
        message :<br />".envoie_message."<br /><br />";
        $destinataire = 'mikael.david@gmail.com;';
        $headers = "From: \"expediteur moi\"<mikael.david@gmail.com>\n";
        $headers .= "Reply-To: mikael.david@gmail.com\n";
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
        if(!mail($destinataire,$sujet,$message,$headers)){
            echo "Une erreur c'est produite lors de l'envois de l'email. Vous pouvez toujours envoyer manuellement à <a href='mailto:mikael.david@gmail.com'>mikael.david@gmail.com</a>.";
            exit;
        }
    }
?>
