<?php

class Laporan_model extends CI_Model{
    public function getKelas(){
        $query = $this->db
                    ->get("tblkelas");

        return $query;
    }

    public function getMahasiswaKelas($idkelas){
        $query = $this->db
                    ->select("b.nim,b.nama,b.alamat,b.telepon")
                    ->from("tblkelasmahasiswa a")
                    ->join("tblmahasiswa b","a.nim=b.nim")
                    ->where("a.idkelas",$idkelas)
                    ->get();

        return $query;
    }

    public function getDosen(){
        $query = $this->db
                    ->get("tbldosen");

        return $query;
    }

    public function getMatakuliah(){
        $query = $this->db
                    ->get("tblmatakuliah");

        return $query;
    }

    public function getMahasiswa(){
        $query = $this->db
                    ->get("tblmahasiswa");

        return $query;
    }

    public function getAbsensi($nim,$idmatakuliah){
        $query = $this->db
                    ->select("a.nim,b.nama,a.status,a.pertemuan,c.nama as matakuliah")
                    ->from("tblabsensi a")
                    ->join("tblmahasiswa b","a.nim=b.nim")
                    ->join("tblmatakuliah c","a.idmatakuliah=c.idmatakuliah")
                    ->where("a.nim",$nim)
                    ->where("a.idmatakuliah",$idmatakuliah)
                    ->order_by("a.pertemuan")
                    ->get();

        return $query;
    }
}