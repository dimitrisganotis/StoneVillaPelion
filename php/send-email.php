<?php

  if(isset($_POST['submit'])) {

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $guests_number = $_POST['guests_number'];
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    $message = $_POST['message'];
    $svp_email = 'info@stonevillapelion.gr';
    $svp_name = 'Stone Villa Pelion';

    /* =======================
         Check for errors
    ======================== */

    if(empty($full_name) || empty($email) || empty($guests_number) || empty($arrival) || empty($departure)) {
      header('Location: ../booking.php?msg=Please fill out the form');
      exit('Please fill out the form');
    } else {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
        header('Location: ../booking.php?msg=Please use a valid email');
        exit('Please use a valid email');
      } else {

        /* =======================
             Send the email
        ======================== */

        require '../PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'stonevillapelion@gmail.com';
        $mail->Password = 'St0nevi!!a';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('stonevillapelion@gmail.com', $full_name);
        $mail->addAddress($svp_email, $svp_name);
        $mail->isHTML(true);
        $mail->Subject = 'New Booking Request! - Stone Villa Pelion';
        $mail->Body    = '<strong style="font-size: 1.4em;">New Booking Request from www.stonevillapelion.gr</strong><br><br>Full name: <span style="font-weight: bold; font-size: 1.3em;">'.$full_name.'</span>'.'<br>Email: <span style="font-weight: bold; font-size: 1.3em;">'.$email.'</span>'.'<br>Phone: <span style="font-weight: bold; font-size: 1.3em;">'.$phone.'</span>'.'<br>Number of Guests: <span style="font-weight: bold; font-size: 1.3em;">'.$guests_number.'</span>'.'<br>Arrival: <span style="font-weight: bold; font-size: 1.3em;">'.$arrival.'</span>'.'<br>Departure: <span style="font-weight: bold; font-size: 1.3em;">'.$departure.'</span>'.'<br>Message: <span style="font-weight: bold; font-size: 1.3em;">'.$message.'</span>'.'<br><br>Contact '.$full_name.' as soon as possible!!!<br><br><br><span style="text-align: center; font-size: 1.1em;">Developed by: Dimitrios Ganotis © 2018</span>';
        if(!$mail->send()) {
          echo 'Mailer Error: ' . $mail->ErrorInfo;
          header("Location: ../booking.php?msg=There was an error with the send of the form $mail->ErrorInfo;");
          exit("There was an error with the send of the form $mail->ErrorInfo;");
        } else {
          header('Location: ../booking.php?msg=Thank you for your booking request!  We will get in touch with you as soon as possible.');
          exit('Thank you for your booking request!  We will get in touch with you as soon as possible.');
        }
      }
    }
  }

?>
