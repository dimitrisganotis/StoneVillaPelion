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
    if(!file_exists('application/views/public/pages/index.php'))
      show_404();

    $this->metadata['title'] = 'Stone Villa Pelion';
    $this->metadata['keywords'] = 'Stone Villa Pelion, Afissos, Pelion, Apartment, Luxury Residence';
    $this->metadata['description'] = 'Stone Villa Pelion is a luxury apartment, ideal for summer holidays, overlooking the beach of Afissos.';

    $this->load->view('public/pages/index', $this->metadata);
  }

  // Location Page
  public function location() {
    if(!file_exists('application/views/public/pages/location.php'))
      show_404();

    $this->metadata['title'] = 'Location';
    $this->metadata['keywords'] = 'Stone Villa Pelion, location, map, driving, directions';
    $this->metadata['description'] = 'All about our location.';

    $this->load->view('public/includes/header', $this->metadata);
    $this->load->view('public/pages/location');
    $this->load->view('public/includes/footer');
  }

  // Gallery Page
  public function gallery() {
    if(!file_exists('application/views/public/pages/gallery.php'))
      show_404();

    $this->metadata['title'] = 'Gallery';
    $this->metadata['keywords'] = 'Stone Villa Pelion, photos, gallery';
    $this->metadata['description'] = 'Photo gallery of Stone Villa Pelion.';

    $this->load->view('public/includes/header', $this->metadata);
    $this->load->view('public/pages/gallery');
    $this->load->view('public/includes/footer');
  }

  // Info Page
  public function info() {
    if(!file_exists('application/views/public/pages/info.php'))
      show_404();

    $this->metadata['title'] = 'Info';
    $this->metadata['keywords'] = 'Stone Villa Pelion, information, house, amenities, Affisos';
    $this->metadata['description'] = 'Information about the house, the amenities and the Affisos village.';

    $this->load->view('public/includes/header', $this->metadata);
    $this->load->view('public/pages/info');
    $this->load->view('public/includes/footer');
  }

  // Contact Page
  public function contact() {
    if(!file_exists('application/views/public/pages/contact.php'))
      show_404();

    $this->metadata['title'] = 'Contact';
    $this->metadata['keywords'] = 'Stone Villa Pelion, contact, telephone number, email, facebook';
    $this->metadata['description'] = 'Our contact details. Feel free to contact us!';

    $this->load->view('public/includes/header', $this->metadata);
    $this->load->view('public/pages/contact');
    $this->load->view('public/includes/footer');
  }
}




