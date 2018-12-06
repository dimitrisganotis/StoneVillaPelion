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
      header('Location: ../gr/booking.php?msg=Παρακαλώ συμπληρώστε τη φόρμα');
      exit('Παρακαλώ συμπληρώστε τη φόρμα');
    } else {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
        header('Location: ../gr/booking.php?msg=Παρακαλώ χρησιμοποιήστε ένα έγκυρο email');
        exit('Παρακαλώ χρησιμοποιήστε ένα έγκυρο email');
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
        $mail->Subject = 'Nέα Αίτηση Κράτησης! - Stone Villa Pelion';
        $mail->Body    = '<strong style="font-size: 1.4em;">Nέα Αίτηση Κράτησης από www.stonevillapelion.gr</strong><br><br>Πλήρες Όνομα: <span style="font-weight: bold; font-size: 1.3em;">'.$full_name.'</span>'.'<br>Email: <span style="font-weight: bold; font-size: 1.3em;">'.$email.'</span>'.'<br>Τηλέφωνο: <span style="font-weight: bold; font-size: 1.3em;">'.$phone.'</span>'.'<br>Αριθμός Επισκεπτών: <span style="font-weight: bold; font-size: 1.3em;">'.$guests_number.'</span>'.'<br>Άφιξη: <span style="font-weight: bold; font-size: 1.3em;">'.$arrival.'</span>'.'<br>Αναχώρηση: <span style="font-weight: bold; font-size: 1.3em;">'.$departure.'</span>'.'<br>Μήνυμα: <span style="font-weight: bold; font-size: 1.3em;">'.$message.'</span>'.'<br><br>Επικοινώνησε με '.$full_name.' όσο το δυνατόν συντομότερα!!!<br><br><br><span style="text-align: center; font-size: 1.1em;">Developed by: Dimitrios Ganotis © 2018</span>';
        if(!$mail->send()) {
          echo 'Mailer Error: ' . $mail->ErrorInfo;
          header("Location: ../gr/booking.php?msg=Υπήρξε σφάλμα με την αποστολή της φόρμας. $mail->ErrorInfo;");
          exit("Υπήρξε σφάλμα με την αποστολή της φόρμας. $mail->ErrorInfo;");
        } else {
          header('Location: ../gr/booking.php?msg=Σας ευχαριστούμε για την αίτηση κράτησης! Θα επικοινωνήσουμε μαζί σας όσο το δυνατόν συντομότερα.');
          exit('Σας ευχαριστούμε για την αίτηση κράτησης! Θα επικοινωνήσουμε μαζί σας όσο το δυνατόν συντομότερα.');
        }
      }
    }
  }

?>
