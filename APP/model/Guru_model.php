<?php
 class Guru_model
 {
    private $table ='guru';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    } 
    public function getAllGuru(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getGuruById($id){
        $this->db->query("SELECT * FROM guru" .$this->table . 'WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahDataGuru($data){
        $query="INSERT INTO guru VALUES
        ('', :nama, :kode_guru, :guru_mapel)";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('kode_guru',$data['kode_guru']);
        $this->db->bind('guru_mapel',$data['guru_mapel']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataGuru($id){
        $query="DELETE FROM guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getubah($data) { 
        $query = "UPDATE guru SET
        nama = :nama, 
        kode_guru = :kode_guru, 
        guru_mapel = :guru_mapel 
        WHERE id = :id";

        $this->db->query($query); 
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kode_guru', $data['kode_guru']); 
        $this->db->bind('guru_mapel', $data['guru_mapel']); 
        $this->db->bind('id', $data['id']); 

        $this->db->execute();

         return $this->db->rowCount(); 
}

public function cariDataGuru()
 {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM guru WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
 }


}