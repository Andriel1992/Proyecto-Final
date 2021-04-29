<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Enviar
{

    public $mail;

    

    public function enviarEmail($destinatario, $tema, $cuerpo)
    {
          $this->mail = new PHPMailer(true);
        try {
            $this->mail->SMTPDebug = 2;
            $this->mail->isSMTP();
            $this->mail->Host = "smtp.gmail.com";
            $this->mail->SMTPAuth = true;
            $this->mail->Username = "socialnectworkproyectofinal@gmail.com";
            $this->mail->Password = "Itla-Proyecto_Final";
            $this->mail->SMTPSecure = "tls";
            $this->mail->Port = "587";
            

            $this->mail->setFrom('socialnectworkproyectofinal@gmail.com', 'soporte Social Network');

            $this->mail->addAddress($destinatario);

            $this->mail->isHTML(true);
            $this->mail->Subject = $tema;
            $this->mail->Body = $cuerpo;
            $this->mail->send();
        } catch (Exception $e) {
            echo "No se pudo mandar el mensaje" + $this->mail->ErrorInfo;
        }
    }
}
