<?php
    require "./phpMailer/src/Exception.php";
    require "./phpMailer/src/OAuth.php";
    require "./phpMailer/src/PHPMailer.php";
    require "./phpMailer/src/POP3.php";
    require "./phpMailer/src/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class Mensagem{
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        public function verificaInputs(){
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return true;
            } else{
                return false;
            }
        }

        // public function __construct($para, $assunto, $mensagem){
        //     $this->para = $para;
        //     $this->assunto = $assunto;
        //     $this->mensagem = $mensagem;
        // }
    }

    // $envio = new Mensagem( $_POST["para"],  $_POST["assunto"],  $_POST["mensagem"]);
    
    

    $envio = new Mensagem();
    $envio->__set("para", $_POST["para"]);
    $envio->__set("assunto", $_POST["assunto"]);
    $envio->__set("mensagem", $_POST["mensagem"]);
    
    if($envio->verificaInputs()){
        header("Location: index.php?badInput=true");
    }

    $mail = new PHPMailer(true);

    try {
        
        //Server settings
        $mail->SMTPDebug = false;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   =  true;                                   // Enable SMTP authentication
        $mail->Username   = 'phpmailer.project@gmail.com';                     // SMTP username
        $mail->Password   = 'php@mailer123';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('phpmailer.project@gmail.com', 'PHP Mailer - Teste');
        $mail->addAddress($_POST["para"], 'PHP Mailer');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('phpmailer.project@gmail.com', 'Information');
        $mail->addCC('fersants.nando.ferreira@gmail.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $_POST["assunto"];
        $mail->Body    = $_POST["mensagem"];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        //echo 'Message has been sent';

        header("Location: index.php?success=true");

    } catch (Exception $e) {
        header("Location: index.php?success=false");
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }   
?>