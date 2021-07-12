<?php 

class Peserta_model extends CI_Model
{
          public $id;
          public $nama_mahasiswa;
          public $nim;
          public $seminar_id;
          public $kehadiran;

          public function getAll()
          {
                    $result = $this->db->get('peserta_seminar');
                    return $result;
          }

         

          public function findById($id){
                    //select * from pasien where id = $id
                    $query = $this->db->get_where('peserta_seminar', array('id'=>$id));
                    return $query;
          }

          public function save($data){
                    //$this->db->insert('nama_tabel',data)
                    $this->db->insert('peserta_seminar',$data);
          }

          public function delete($where,$table){
                    // delete * from pasien where id = 1
                    $this->db->where($where);
                    $this->db->delete($table);
                }
}
?>