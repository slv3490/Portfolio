<?php 

namespace Controllers;

use Model\Email;
use MVC\Router;
use PHPMailer\PHPMailer\PHPMailer;

class IndexController {
    public static function index(Router $router) {

        $alertas = [];
        $email = new Email();

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = new Email($_POST);

            if(empty($alertas)) {
                $mail = new PHPMailer();

                $mail->isSMTP();
                $mail->Host = $_ENV["EMAIL_HOST"];
                $mail->SMTPAuth = true;
                $mail->Username = $_ENV["EMAIL_USER"];
                $mail->Password = $_ENV["EMAIL_PASS"];
                $mail->Port = $_ENV["EMAIL_PORT"];

                //Recipients
                $mail->setFrom($email->email, $email->nombre);
                $mail->addAddress('leonelsilvera9@gmail.com', 'Leonel Silvera'); 
                $mail->CharSet = "UTF-8";    

                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Here is the subject';


                $contenido = '<html>';
                $contenido .= '<p>Nombre Completo: ' . $email->nombre . '</p>';
                $contenido .= '<p>Correo: ' . $email->email . '</p>';
                $contenido .= '<p>Asunto: ' . $email->asunto . '</p>';
                $contenido .= '<p>Mensaje: ' . $email->mensaje . '</p>';
                $contenido .= '</html>';

                $mail->AltBody = 'Me interesaria que me prestaras tus servicios como desarrollador';

                $mail->Body = $contenido;

                $mail->send();

                $alertas = $email::setAlerta("exito", "Mensaje Enviado Correctamente.");
            } 
        }

        $alertas = $email::getAlertas();

        $router->render("index/main", [
            "datosForm" => $email,
            "alerta" => $alertas
        ]);
    }
}