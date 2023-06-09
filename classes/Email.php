<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($nombre, $email, $token) {   

        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;
   }

    public function enviarConfirmacion() {

        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;
        $mail->Username = '80ec4750c4279b';
        $mail->Password = 'd6239baee2b101';        

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace </p>";
        $contenido .= "<p>Has Click aqui: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje.</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();

   }

   public function enviarInstrucciones() {
       // Crear el objeto de email
       $mail = new PHPMailer();
       $mail->isSMTP();
       $mail->Host = 'sandbox.smtp.mailtrap.io';
       $mail->SMTPAuth = true;
       $mail->SMTPSecure = 'tls';
       $mail->Port = 2525;
       $mail->Username = '80ec4750c4279b';
       $mail->Password = 'd6239baee2b101';        

       $mail->setFrom('cuentas@appsalon.com');
       $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
       $mail->Subject = 'Reestablece tu Password';

       // Set HTML
       $mail->isHTML(TRUE);
       $mail->CharSet = 'UTF-8';

       $contenido = "<html>";
       $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo. </p>";
       $contenido .= "<p>Has Click aqui: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer Password</a> </p>";
       $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje.</p>";
       $contenido .= "</html>";
       $mail->Body = $contenido;

       //Enviar el mail
       $mail->send();

   }
}