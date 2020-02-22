<?php

// Κλάση για σύνδεση στο admin panel
class Dashboard extends CI_Controller {
  protected $metadata = array(
    'title' => null,
    'description' => 'Stone Villa Pelion Dashboard Area'
  );

  public function __construct() {
    parent::__construct();
    $this->load->model('dates_model');
  }

  // ***************************
  // Εμφάνιση Πίνακα Διαχείρησης
  // ***************************
  public function index() {
    // Έλεγχος αν ο χρήστης έχει κάνει login
    if(!$this->session->userdata('admin_id')) {
      redirect('admin/login');
    }

    $this->metadata['title'] = 'Admin Panel';

    $minDates = $this->dates_model->getMinDates();
    $bookedDates = $this->dates_model->getBookedDates();

    function sortFunction( $a, $b ) {
      return strtotime($a["date"]) - strtotime($b["date"]);
    }

    usort($bookedDates, "sortFunction");

    $data = array(
      "metadata" => $this->metadata,
      "dates" => $bookedDates,
      "number" => $minDates['number']
    );

    $this->load->view('admin/dashboard', $data);
  }

  public function login() {
    // Έλεγχος αν ο χρήστης έχει κάνει login
    if($this->session->userdata('admin_id')) {
      redirect('admin');
    }

    $this->metadata['title'] = 'Admin Panel - Login';

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    // Έλεγχος αν πέτυχε το validation των στοιχείων του χρήστη
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('admin/login', $this->metadata);
    } else {
      $admin = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
      );



      if($admin['username'] === '#' && $admin['password'] === '#') {
        $this->session->set_userdata('admin_id', $admin['username']);
      }

      redirect('admin');
    }
  }

  public function addBooking() {
    $date = array(
      'date' => $this->input->post("date")
    );

    $this->dates_model->addBooking($date);

    redirect('admin/dashboard');
  }

  public function updateMinDates() {
    $data = array(
      'number' => $this->input->post("number")
    );

    $this->dates_model->updateMinDates($data);

    redirect('admin/dashboard');
  }
}
