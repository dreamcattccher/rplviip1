<?php

class Absensi_model extends CI_Model{
    public function ambilKelas(){
        $query = $this->db
                ->get("tblkelas");

        return $query;
    }

    public function ambilMatakuliah($idkelas){
        $query = $this->db
                ->select("a.idmatakuliah,a.idkelas,b.nama")
                ->from("tblkelasmatakuliah a")
                ->join("tblmatakuliah b","a.idmatakuliah=b.idmatakuliah")
                ->where("a.idkelas",$idkelas)
                ->get();

        return $query;
    }
}