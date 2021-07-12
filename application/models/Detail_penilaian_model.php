<?php 

class Detail_penilaian_model extends CI_Model
{
          public $id;
          public $penilaian_id;
          public $dosen_id;
          public $seminar_id;
          public $nilai;

          public function getAll()
          {
                    $result = $this->db->get('detail_penilaian');
                    return $result;
          }
}
?>