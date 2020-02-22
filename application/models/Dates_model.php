<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dates_model extends CI_Model {

  // Μαζί με το model φορτώνουμε την database
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getDayCost($date) {
    $this->db->where('date', $date);
    $query = $this->db->get('costs');
    return $query->row_array();
  }

  public function addBooking($date) {
    $this->db->insert('dates', $date);
  }

  public function getBookedDates() {
    $query = $this->db->get('dates');
    return $query->result_array();
  }

  public function getMinDates() {
    $query = $this->db->get('minDates');

    return $query->row_array();
  }

  public function updateMinDates($data) {
    $this->db->where('id', '1');
    $this->db->update('minDates', $data);
  }

  /*
  // Έυρεση
  public function search($dates) {
    $where = "date BETWEEN '".$dates['arrival']."' AND '".$dates['departure']."'";
    $this->db->where($where);
    $query = $this->db->get('dates');
    $result = $query->result_array();

    $available_dates = array();
    $i = 0;
    $total = $query->num_rows();

    foreach($result as $row) {
      $i++;

      if($i == 1) {
        if($row['status'] == 1) {
          if($row['date_type'] == 'booked') {
            continue;
          } else if($row['date_type'] == 'arrival and departure') {
            continue;
          } else if($row['date_type'] == 'arrival') {
            continue;
          } else if($row['date_type'] == 'departure') {
            array_push($available_dates, $row['date']);
          }
        } else if($row['status'] == 0) {
          array_push($available_dates, $row['date']);
        }
      } else if($i > 1 && $i < $total) {
        if($row['status'] == 1) {
          if($row['date_type'] == 'booked') {
            continue;
          } else if($row['date_type'] == 'arrival and departure') {
            continue;
          } else if($row['date_type'] == 'arrival') {
            continue;
          } else if($row['date_type'] == 'departure') {
            array_push($available_dates, $row['date']);
          }
        } else if($row['status'] == 0) {
          array_push($available_dates, $row['date']);
        }
      } else if($i == $total) {
        if($row['status'] == 1) {
          if($row['date_type'] == 'booked') {
            continue;
          } else if($row['date_type'] == 'arrival and departure') {
            continue;
          } else if($row['date_type'] == 'arrival') {
            array_push($available_dates, $row['date']);
          } else if($row['date_type'] == 'departure') {
            continue;
          }
        } else if($row['status'] == 0) {
          array_push($available_dates, $row['date']);
        }
      }

      echo $i.' -> ';
      print_r($available_dates);
      echo '<br>';
    }

    var_dump($available_dates);
    die();

    $return = array(
      'dates' => $available_dates,
      'total' => $total
    );

    return $return;
  }*/

}

