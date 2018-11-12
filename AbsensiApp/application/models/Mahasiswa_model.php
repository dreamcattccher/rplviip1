<?php

class Mahasiswa_model extends CI_Model{

    public function ambilMahasiswa(){
        $query = $this->db
                    ->get("tblmahasiswa");
        
        return $query;
    }

    public function createMahasiswa($data){
        $query = $this->db
                    ->insert("tblmahasiswa",$data);

        return $this->db->affected_rows();
    }

    public function updateMahasiswa($nim,$data){
        $query = $this->db
                    ->where("nim",$nim)
                    ->update("tblmahasiswa",$data);
        
        return $this->db->affected_rows();
    }

    public function deleteMahasiswa($nim){
        $query = $this->db
                    ->where("nim",$nim)
                    ->delete("tblmahasiswa");
        
        return $query;
    }

    public function getMahasiswa($nim){
        $query = $this->db
                    ->where("nim",$nim)
                    ->get("tblmahasiswa");
        
        return $query->row();
    }
}