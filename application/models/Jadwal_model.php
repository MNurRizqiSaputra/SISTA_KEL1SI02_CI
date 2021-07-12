<?php 

class Jadwal_model extends CI_Model
{
          public $id;
          public $nama_mahasiswa;
          public $nim;
          public $kategori_seminar_id;
          public $tanggal;
          public $jam;
          public $lokasi;
          public $semester;
          public $judul;
          public $pembimbing_id;
          public $penguji1_id;
          public $penguji2_id;
          public $nilai_pembimbing;
          public $nilai_penguji1;
          public $nilai_penguji2;
          public $nilai_akhir;

          public function getAll()
          {
                    $result = $this->db->get('seminar_ta');
                    return $result;
          }

         

          public function findById($id){
                    //select * from pasien where id = $id
                    $query = $this->db->get_where('seminar_ta', array('id'=>$id));
                    return $query;
          }

          public function save($data){
                    //$this->db->insert('nama_tabel',data)
                    $this->db->insert('seminar_ta',$data);
          }

          public function update($data,$id){
       
                    //$this->db->update('nama_tabel',data,array_id)
            
                    $this->db->update('seminar_ta', $data, array('id'=>$id));
                }
          
            public function delete($where,$table){
                // delete * from pasien where id = 1
                $this->db->where($where);
                $this->db->delete($table);
            }
}
?>