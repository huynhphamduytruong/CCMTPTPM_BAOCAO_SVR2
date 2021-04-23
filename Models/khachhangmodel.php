
<?php 

class khachhangmodel extends DModel{

    public function __construct(){
        parent::__construct();
    }
    public function insertcustomer($table_KH,$data){
        return $this->db->them($table_KH,$data);
    }
    public function login($table_KH,$email,$matkhau){
        $sql = "SELECT * FROM $table_KH WHERE Email = :email"; // AND MatKhau =? ";
        $result = $this->db->select($sql, [':email' => $email]);
        $hash = $result[0]['password'];
        return password_verify($matkhau, $hash);
    }	
    public function getLogin($table_KH,$email,$matkhau){
        $sql = "SELECT * FROM $table_KH WHERE Email= ? AND MatKhau =? ";
        return $this->db->selectUser($sql,$email,$matkhau);
    }

}



?>

