<?php

class Kelas_model extends CI_Model{

    public function ambilKelas(){
        $query = $this->db
                    ->get("tblkelas");
        
        return $query;
    }

    public function createKelas($data){
        $query = $this->db
                    ->insert("tblkelas",$data);

        return $this->db->affected_rows();
    }

    public function updateKelas($idkelas,$data){
        $query = $this->db
                    ->where("idkelas",$idkelas)
                    ->update("tblkelas",$data);
        
        return $this->db->affected_rows();
    }

    public function deleteKelas($idkelas){
        $query = $this->db
                    ->where("idkelas",$idkelas)
                    ->delete("tblkelas");
        
        return $query;
    }

    public function getKelas($idkelas){
        $query = $this->db
                    ->where("idkelas",$idkelas)
                    ->get("tblkelas");
        
        return $query->row();
    }
}