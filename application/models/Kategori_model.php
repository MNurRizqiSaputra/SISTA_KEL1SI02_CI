<?php 

class Kategori_model extends CI_Model
{
          public $id;
          public $nama;

          public function getAll()
          {
                    $result = $this->db->get('kategori_seminar');
                    return $result;
          }
}
?>