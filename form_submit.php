<?php
if (isset($_POST)) {
    require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    require("PHPMailer-master/src/Exception.php");

    $message = '<html><body> <p>Contact Form Data.</p>';
    $message .= '<label>Name : </label>' . $_POST['name'] .
        '<br>';
    $message .= '<label>Phone : </label>' . $_POST['phone'] . '<br>';
    $message .= '<label>Email : </label>' . $_POST['mail'] . '<br>';

    $message .= '<label>Message : </label>' . $_POST['des'] . '<br>';

    $message .= '</body></html>';

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Debugoutput = 'html';
    $mail->Host = ""; //enter your host name
    $mail->Port = 587; // or 465
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth =
    $mail->Username = ''; //enter your smtp email
    $mail->Password = ''; //enter your smtp email password here
    $mail->SetFrom('commerciale@pgseven.com', 'Commerciale');
    $mail->Subject = "Form Data"; //your subject here
    $address = "commerciale@pgseven.com";
    $mail->AddAddress($address);
    $mail->MsgHTML($message);
    if (!$mail->send()) {
        echo 'failed';
    } else {
        echo 'success';
    }
}

?>