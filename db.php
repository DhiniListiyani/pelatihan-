<?php
class db{
    private $koneksi;
    function __construct()
    {
        $this->koneksi= new mysqli("localhost","root","","db_pelatihan_dhini");
    }
    function get_user($username,$password){
        $data=$this->koneksi->query("select * from tbl_user where username='$username' and password='$password'");
        return $data;
    }

    // ==================== GENERIC HELPER ====================
    function query($sql){
        return $this->koneksi->query($sql);
    }
    function insert($sql){
        return $this->koneksi->query($sql);
    }
    function update($sql){
        return $this->koneksi->query($sql);
    }
    function delete($sql){
        return $this->koneksi->query($sql);
    }
    function getKoneksi(){
        return $this->koneksi;
    }
}
?>