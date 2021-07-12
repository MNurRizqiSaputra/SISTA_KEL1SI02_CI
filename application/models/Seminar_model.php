<?php 

class Seminar_model extends CI_Model
{
          public function getAll()
          {
                    $result = $this->db->get('seminar_ta');
                    return $result;
          }
}
?>