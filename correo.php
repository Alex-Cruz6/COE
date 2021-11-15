<?php 
    if (isset($_POST['Enviar'])) {
        if (!isset($_POST['name']) && !isset($_POST['subject']) && !isset($_POST['email']) && 
        !isset($_POST['message'])) {
            $name     = $_POST['name'];
            $subject  = $_POST['subject'];
            $email    = $_POST['email'];
            $message  = $_POST['message'];

            $header = "From: noreply@example.com" . "\r\n";
            $header .= "Reply-To: noreply@example.com" . "\r\n";
            $header .= "X-Mailer: PHP/" . phpversion();

            $mail = mail($email, $subject, $message, $header);

            if ($mail) {
                echo "<h4>Correo enviado exitosamente!</h4>";
            }
        }
    }
?>