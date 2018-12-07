<?php

class Jadwal_model extends CI_Model{

    public function ambilJadwalkelas($jurusan,$sesi){
        $query = $this->db
                ->select("a.idkelas,a.semester,a.jurusan
                    ,a.sesi,count(b.nim) as jumlah")
                ->from("tblkelas a")
                ->join("tblkelasmahasiswa b","a. =b.idkelas","left")
                ->where("a.jurusan",$jurusan)
                ->where("a.sesi",$sesi)
                ->group_by("a.idkelas,a.semester,a.jurusan,a.sesi")
                ->get();

        return $query;
    }
}