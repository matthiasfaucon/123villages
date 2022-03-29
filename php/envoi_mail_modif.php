<?php

    include('verif_script.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

?>

<link rel='stylesheet' href='../style/style.css'>
<?php


    $auteur = $_SESSION['nom'].' '.$_SESSION['prenom'];
    $bodytext    = $auteur."<br>".$_SESSION['email']."<br>".$_GET['lien'].'<br><br>'.$_GET['contenu'];


    $email = new PHPMailer();
    $email->SMTPDebug = SMTP::DEBUG_SERVER;
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com';
    $email->SMTPAuth = true;
    $email->Username = 'villages.normands@gmail.com';
    $email->Password = 'kSpByFAekk2dxGw';
    $email->SMTPSecure = "ssl" /*PHPMailer::ENCRYPTION_SMTPS*/;
    $email->Port = 465;
    $email->isHTML(true);
    $email->SetFrom('villages.normands@gmail.com', $auteur);
    $email->Subject = $_GET['subject'];
    $email->Body = $bodytext;


    $email->AddAddress('villages.normands@gmail.com'); //email de destinataire

        if ($email->Send()){
            echo '</p> - Envoyé !</p>';
            $email->clearAllRecipients();
            header('location:modification_text.php');
        }
        else{
            echo "</p> - Erreur lors de l'envoi !</p>";
        }
    


?>