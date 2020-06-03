<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Κλάση για απλές σελίδες όπως η αρχική
class Pages extends CI_Controller {
  protected $metadata = array(
    'title' => NULL,
    'keywords' => NULL,
    'description' => NULL
  );

  // Home Page
  public function index() {
    if(!file_exists('application/views/public/gr/pages/index.php'))
      show_404();

    $this->metadata['title'] = 'Stone Villa Pelion';
    $this->metadata['keywords'] = 'Stone Villa Pelion, Άφυσσος, Πήλιο, Διαμέρισμα, Πολυτελής Οικία';
    $this->metadata['description'] = 'Το Stone Villa Pelion είναι ένα πολυτελές διαμέρισμα, ιδανικό για καλοκαιρινές διακοπές, με θέα την παραλία της Αφύσσου.';

    $this->load->view('public/gr/pages/index', $this->metadata);
  }

  // Covid-19 Page
  public function covid_19() {
    if(!file_exists('application/views/public/gr/pages/covid-19.php'))
      show_404();

    $this->metadata['title'] = 'Covid-19';
    $this->metadata['keywords'] = 'Stone Villa Pelion, Covid-19, γράμμα';
    $this->metadata['description'] = 'Stone Villa Pelion γράμμα για Covid-19.';

    $this->load->view('public/gr/includes/header', $this->metadata);
    $this->load->view('public/gr/pages/covid-19');
    $this->load->view('public/gr/includes/footer');
  }

  // Location Page
  public function location() {
    if(!file_exists('application/views/public/pages/location.php'))
      show_404();

    $this->metadata['title'] = 'Τοποθεσία';
    $this->metadata['keywords'] = 'Stone Villa Pelion, τοποθεσία, χάρτης, οδήγηση, κατευθύνσεις';
    $this->metadata['description'] = 'Τα πάντα για την τοποθεσία μας.';

    $this->load->view('public/gr/includes/header', $this->metadata);
    $this->load->view('public/gr/pages/location');
    $this->load->view('public/gr/includes/footer');
  }

  // Gallery Page
  public function gallery() {
    if(!file_exists('application/views/public/pages/gallery.php'))
      show_404();

    $this->metadata['title'] = 'Φωτογραφίες';
    $this->metadata['keywords'] = 'Stone Villa Pelion, φωτογραφίες, gallery';
    $this->metadata['description'] = 'Αρχείο φωτογραφιών του Stone Villa Pelion.';

    $this->load->view('public/gr/includes/header', $this->metadata);
    $this->load->view('public/gr/pages/gallery');
    $this->load->view('public/gr/includes/footer');
  }

  // Info Page
  public function info() {
    if(!file_exists('application/views/public/pages/info.php'))
      show_404();

    $this->metadata['title'] = 'Πληροφορίες';
    $this->metadata['keywords'] = 'Stone Villa Pelion, πληροφορίες, σπίτι, ανέσεις, Άφυσσος';
    $this->metadata['description'] = 'Πληροφορίες σχετικά με το σπίτι, τις ανέσεις και το χωριό της Αφύσσου.';

    $this->load->view('public/gr/includes/header', $this->metadata);
    $this->load->view('public/gr/pages/info');
    $this->load->view('public/gr/includes/footer');
  }

  // Contact Page
  public function contact() {
    if(!file_exists('application/views/public/pages/contact.php'))
      show_404();

    $this->metadata['title'] = 'Επικοινωνία';
    $this->metadata['keywords'] = 'Stone Villa Pelion, επικοινωνία, τηλέφωνο, email, facebook';
    $this->metadata['description'] = 'Τα στοιχεία επικοινωνίας μας. Μη διστάσετε να επικοινωνήσετε μαζί μας!';

    $this->load->view('public/gr/includes/header', $this->metadata);
    $this->load->view('public/gr/pages/contact');
    $this->load->view('public/gr/includes/footer');
  }
}




