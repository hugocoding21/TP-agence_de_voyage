<?php

if (!empty($_POST)) {

    if (
        isset($_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST['agency'], $_POST["message"]) &&
        !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"]) && !empty($_POST["agency"]) && !empty($_POST["message"])
    ) {

        $nom = ucwords(strtolower(htmlspecialchars($_POST["nom"])));

        $prenom = ucwords(strtolower(htmlspecialchars($_POST["prenom"])));

        $mail = strtolower(htmlspecialchars($_POST["mail"]));

        $choix = htmlspecialchars($_POST["agency"]);

        $message = htmlspecialchars($_POST["message"]);

        require_once "../bd_sql/config.inc.php";

        $sql = "INSERT INTO `fomulaire`(`first_name`,`last_name`,`email`,`Nearest agency`,`message`) VALUE (:c_nom, :c_prenom, :c_mail, :c_choix, :c_messages)";

        $query = $db->prepare($sql);

        $query->bindValue(":c_nom", $nom, PDO::PARAM_STR);

        $query->bindValue(":c_prenom", $prenom, PDO::PARAM_STR);

        $query->bindValue(":c_mail", $mail, PDO::PARAM_STR);

        $query->bindValue(":c_choix", $choix, PDO::PARAM_STR);

        $query->bindValue(":c_messages", $message, PDO::PARAM_STR);
        
        header('location: ../contact/contact.php');

        if (!$query->execute()) {
            die("Une erreur est survenue");
        }
    } else {
        echo "echec de l'envoi";
    }
}
