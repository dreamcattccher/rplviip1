<?php

class Jadwal_model extends CI_Model{

    public function ambilJadwalkelas($jurusan,$sesi){
        $query = $this->db
                ->select("a.idkelas,a.semester,a.jurusan
                    ,a.sesi,count(b.nim) as jumlah")
                ->from("tblkelas a")
                ->join("tblkelasmahasiswa b","a.idkelas=b.idkelas","left")
                ->where("a.jurusan",$jurusan)
                ->where("a.sesi",$sesi)
                ->group_by("a.idkelas,a.semester,a.jurusan,a.sesi")
                ->get();

        return $query;
    }

    public function ambilMahasiswa(){
        $query = $this->db
                    ->get("tblmahasiswa");
        
        return $query;
    }

    public function ambilMahasiswaKelas($idkelas){
        $query = $this->db
                    ->select("a.idkelas,a.nim,b.nama")
                    ->from("tblkelasmahasiswa a")
                    ->join("tblmahasiswa b","a.nim=b.nim")
                    ->where("a.idkelas",$idkelas)
                    ->get();

        return $query;
    }

    public function hapusMahasiswaKelas($idkelas,$nim){
        return $this->db
                ->where("idkelas",$idkelas)
                ->where("nim",$nim)
                ->delete("tblkelasmahasiswa");
    }
}