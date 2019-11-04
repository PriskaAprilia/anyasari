<?php
class Database
{
    public $host = "localhost", $user = "root", $pass = 123, $db = "Xirpl2";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
             echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}
include 'siswa.php';

$db = new Database();