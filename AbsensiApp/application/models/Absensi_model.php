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

    public function ambilabsensi($idkelas,$idmatakuliah){
        $query = $this->db
                ->select("pertemuan,
                sum(case when status='h' then 1 else 0 end) as hadir,
                sum(case when status='a' then 1 else 0 end) as absen,
                sum(case when status='i' then 1 else 0 end) as izin,
                sum(case when status='s' then 1 else 0 end) as sakit,
                count(nim) as total")
                ->where("idkelas",$idkelas)
                ->where("idmatakuliah",$idmatakuliah)
                ->group_by("pertemuan")
                ->get("tblabsensi");

        return $query;
    }

    public function ambilabsensidetail($idkelas,$idmatakuliah,
                                            $pertemuan){
        $query = $this->db
                ->select("a.idabsensi,a.nim,b.nama,a.status")
                ->from("tblabsensi a")
                ->join("tblmahasiswa b","a.nim=b.nim")
                ->where("a.idkelas",$idkelas)
                ->where("a.idmatakuliah",$idmatakuliah)
                ->where("a.pertemuan",$pertemuan)
                ->get();
        
        return $query;
    }

    public function updateabsensi($idabsensi,$status){
        $this->db
            ->set("status",$status)
            ->where("idabsensi",$idabsensi)
            ->update("tblabsensi");

        return $this->db->affected_rows();
    }
}