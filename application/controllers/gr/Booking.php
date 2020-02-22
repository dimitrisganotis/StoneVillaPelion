<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
  protected $metadata = array(
    'title' => 'Κράτηση',
    'keywords' => 'Stone Villa Pelion, κράτηση, διαθεσιμότητα, ημερολόγιο',
    'description' => 'Υποβάλετε αίτηση κράτησης στο Stone Villa Pelion και θα επικοινωνήσουμε μαζί σας όσο το δυνατόν συντομότερα.'
  );

  public function __construct() {
    parent::__construct();
    $this->load->model('dates_model');
  }

  public function index() {
    $minDates = $this->dates_model->getMinDates();
    $bookedDates = $this->dates_model->getBookedDates();

    $dates = array(
      'check-in' => $this->input->post('check-in'),
      'check-out' => $this->input->post('check-out')
    );

    $guests_and_services = array(
      'guests' => $this->input->post('guests'),
      'crib' => $this->input->post('crib'),
      'pets' => $this->input->post('pets'),
      'laundry' => $this->input->post('laundry'),
      'towels' => $this->input->post('towels')
    );

    $finalize = array(
      'salutation' => $this->input->post('salutation'),
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'email' => $this->input->post('email'),
      'phone' => $this->input->post('phone'),
      'street' => $this->input->post('street'),
      'zip' => $this->input->post('zip'),
      'city' => $this->input->post('city'),
      'country' => $this->input->post('country')
    );

    // Select Dates
    if($dates['check-in'] === NULL && $dates['check-out'] === NULL) {
      $this->form_validation->set_rules('check-in', 'Check-in', 'required|regex_match[/^([A-Za-z]+), (0[1-9]|[1-2][0-9]|3[0-1])/(0[1-9]|1[0-2])/[0-9]{4}$/]');
      $this->form_validation->set_rules('check-out', 'Check-out', 'required|regex_match[/^([A-Za-z]+), (0[1-9]|[1-2][0-9]|3[0-1])/(0[1-9]|1[0-2])/[0-9]{4}$/]');

      if ($this->form_validation->run() === FALSE) {
        $data = array(
          "metadata" => $this->metadata,
          "number" => $minDates['number'],
          "dates" => $bookedDates
        );

        $this->load->view('public/gr/booking/dates', $data);
      } else {
        $data = array(
          "metadata" => $this->metadata,
          "dates" => $dates
        );

        $this->load->view('public/gr/booking/guests_services', $data);
      }

    // Guests - Optional Services
    } else if($dates['check-in'] !== NULL && $dates['check-out'] !== NULL && $guests_and_services['guests'] === NULL) {
      $this->form_validation->set_rules('guests', 'Guests', 'required|regex_match[/^[1-6]{1}$/]');

      $data = array(
        "metadata" => $this->metadata,
        "dates" => $dates
      );

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('public/gr/booking/guests_services', $data);
      } else {
        $this->load->view('public/gr/booking/finalize', $data);
      }

    // Finalize Booking
    } else {
      $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

      // Count Total Cost
      $begin = DateTime::createFromFormat('l, d/m/Y', $dates['check-in']);
      $begin->settime(0,0);
      $end = DateTime::createFromFormat('l, d/m/Y', $dates['check-out']);
      $end->settime(0,0);

      $interval = DateInterval::createFromDateString('1 day');
      $period = new DatePeriod($begin, $interval, $end);

      $total_cost = NULL;

      foreach ($period as $dt) {
        $cost = $this->dates_model->getDayCost($dt->format('m-d'));

        if($cost == NULL) {
          $price = 250;
        } else {
          $price = $cost['price'];
        }

        $total_cost = $total_cost + $price;
      }

      $data = array(
        "metadata" => $this->metadata,
        "dates" => $dates,
        "guests_and_services" => $guests_and_services,
        "total_cost" => $total_cost
      );

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('public/gr/booking/finalize', $data);
      } else {
        $data = array(
          "dates" => $dates,
          "guests_and_services" => $guests_and_services,
          "finalize" => $finalize,
          "total_cost" => $total_cost
        );

        $this->request($data);
      }
    }
  }

  public function request($data) {
    $this->load->library('email');

    $this->email->from('#', 'Stone Villa Pelion Bookings');
    $this->email->to('#');
    $this->email->bcc('#, #');

    $this->email->subject('New Booking Request');
    $this->email->message('
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>New Booking Request</title>

        <style>
          html {
            background-color: lightgrey;
          }

          body {
            max-width: 600px;
            margin: 100px auto;
            padding: 15px 25px;
            border-radius: 15px;
            background-color: white;
            color: black;
          }

          header {
            text-align: center;
            border-bottom: lightgrey thin solid;
            padding-bottom: 5px;
          }

          main {
            padding: 15px;
          }

          p {
            font-size: 1.1em;
          }

          .button > a {
            display: block;
            padding: 15px;
            border-radius: 15px;
            background-color: lightgrey;
            color: white;
            font-weight: bold;
            text-align: center;
          }

          .link {
            max-width: 570px;
            word-wrap: break-word;
          }

          footer {
            text-align: center;
            border-top: lightgrey thin solid;
            padding-top: 10px;
          }

          small {
            font-size: 0.9em;
          }

        </style>
      </head>
      <body>
        <header>
          <h1>Stone Villa Pelion</h1>
        </header>

        <main>
          <h2>Νέο Αίτημα Κράτησης</h2>

          <p>Άφιξη: <b>'.$data['dates']['check-in'].'</b></p>
          <p>Αναχώρηση: <b>'.$data['dates']['check-out'].'</b></p>
          <p>Συνολικό Κόστος: <b>'.$data['total_cost'].' &euro;</b></p>
          <p>Φιλοξενούμενοι: <b>'.$data['guests_and_services']['guests'].'</b></p>
          <hr>
          <p>Χαιρετισμός: <b>'.$data['finalize']['salutation'].'</b></p>
          <p>Όνομα: <b>'.$data['finalize']['first_name'].'</b></p>
          <p>Επώνυμο: <b>'.$data['finalize']['last_name'].'</b></p>
          <p>E-mail: <b>'.$data['finalize']['email'].'</b></p>
          <p>Τηλέφωνο: <b>'.$data['finalize']['phone'].'</b></p>
          <p>Οδός: <b>'.$data['finalize']['street'].'</b></p>
          <p>Ταχυδρομικός Κώδικας: <b>'.$data['finalize']['zip'].'</b></p>
          <p>Πόλη: <b>'.$data['finalize']['city'].'</b></p>
          <p>Χώρα: <b>'.$data['finalize']['country'].'</b></p>
          <hr>
          <p>Κούνια: <b>'.$data['guests_and_services']['crib'].'</b></p>
          <p>Πιάτα Κατοικιδίων: <b>'.$data['guests_and_services']['pets'].'</b></p>
          <p>Υπηρεσία Πλυντηρίου/Σιδερώματος: <b>'.$data['guests_and_services']['laundry'].'</b></p>
          <p>Πετσέτες Παραλίας: <b>'.$data['guests_and_services']['towels'].'</b></p>
        </main>

        <footer>
          <small>Copyright &copy; 2019 stonevillapelion.gr. All Rights Reserved</small>
        </footer>
      </body>
      </html>
    ');

    // Έλεγχος αν έγινε η αποστολή του email
    if($this->email->send()) {
      $this->respond($data);
    } else {
      $this->load->view('public/gr/booking/message_error', $this->metadata);
    }
  }

  public function respond($data) {
    $this->load->library('email');

    $year = date('Y');

    $this->email->from('info@stonevillapelion.gr', 'Stone Villa Pelion Bookings');
    $this->email->to($data['finalize']['email']);

    $this->email->subject('Αυτομοατοποιημένο μήνυμα σχετικά με την κράτησή σας.');
    $this->email->message('
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Αυτομοατοποιημένο μήνυμα σχετικά με την κράτησή σας.</title>

        <style>
          html {
            background-color: lightgrey;
          }

          body {
            max-width: 600px;
            margin: 100px auto;
            padding: 15px 25px;
            border-radius: 15px;
            background-color: white;
            color: black;
          }

          header {
            text-align: center;
            border-bottom: lightgrey thin solid;
            padding-bottom: 5px;
          }

          main {
            padding: 15px;
          }

          p {
            font-size: 1.1em;
          }

          .button > a {
            display: block;
            padding: 15px;
            border-radius: 15px;
            background-color: lightgrey;
            color: white;
            font-weight: bold;
            text-align: center;
          }

          .link {
            max-width: 570px;
            word-wrap: break-word;
          }

          footer {
            text-align: center;
            border-top: lightgrey thin solid;
            padding-top: 10px;
          }

          small {
            font-size: 0.9em;
          }

        </style>
      </head>
      <body>
        <header>
          <h1>Αυτομοατοποιημένο μήνυμα σχετικά με την κράτησή σας</h1>
        </header>

        <main>
          <h2 style="font-weight: normal">Αγαπητέ '.$data['finalize']['salutation'].' '.$data['finalize']['last_name'].',</h2>

          <p>έχουμε λάβει το αίτημα σας και σύντομα θα σας απαντήσουμε σχετικά με την ολοκλήρωση της κράτησής σας.</p>

          <p>Με εκτίμηση,<br>Διευθύνων Σύμβουλος: #</p>

          <p>E-mail: info@stonevillapelion.gr <br> Τηλέφωνο: #</p>
        </main>

        <footer>
          <small>Copyright &copy; '.$year.' Stone Villa Pelion. All Rights Reserved</small>
        </footer>
      </body>
      </html>
    ');

    // Έλεγχος αν έγινε η αποστολή του email
    if($this->email->send()) {
      $this->load->view('public/gr/booking/message', $this->metadata);
    } else {
      $this->load->view('public/gr/booking/message_error', $this->metadata);
    }
  }
}




