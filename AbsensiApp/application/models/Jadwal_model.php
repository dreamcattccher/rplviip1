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

    public function ambilMatakuliah(){
        $query = $this->db
                    ->get("tblmatakuliah");

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

    public function ambilMatakuliahKelas($idkelas){
        $query = $this->db
                    ->select("a.idkelas,a.idmatakuliah,b.nama")
                    ->from("tblkelasmatakuliah a")
                    ->join("tblmatakuliah b","a.idmatakuliah=b.idmatakuliah")
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

    public function hapusMatakuliahKelas($idkelas,$idmatakuliah){
        return $this->db
                ->where("idkelas",$idkelas)
                ->where("idmatakuliah",$idmatakuliah)
                ->delete("tblkelasmatakuliah");
    }

    public function simpanMahasiswaKelas($data){
        $this->db->insert("tblkelasmahasiswa",$data);

        return $this->db->affected_rows();
    }

    public function simpanMatakuliahKelas($data){
        $this->db->insert("tblkelasmatakuliah",$data);

        return $this->db->affected_rows();
    }
}