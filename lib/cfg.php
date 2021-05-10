/* ================= AUTRES FONCTIONS ================= */

/*
La fonction  ci dessous servira à nettoyer les variables contre toutes sortes de détournements
*/
function nettoyervar($var) {
    $var=htmlspecialchars($var,ENT_QUOTES);
    $var=strip_tags($var);
    return utf8_decode($var);
}

/* La fonction ci dessous valide les adresses email */
function valide_mail($adresse) {
    $syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
    if(preg_match($syntaxe,$adresse))
    return true;
    else
    return false;
}

/* La fonction ci dessous valide les numéro de téléphone français */
function valide_tel_fr($telfr) {
    $syntaxe='`^0[1-68][0-9]{8}$`';
    if(preg_match($syntaxe,$telfr))
    return true;
    else
    return false;
}
?>
