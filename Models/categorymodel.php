
<?php 

class categorymodel extends DModel{

    public function __construct(){
        parent::__construct();
    }
    //category product
    // public function category($table){
    //     $sql = "SELECT * FROM $table ORDER BY IDLoai ASC";
    //     return $this->db->select($sql);
    // }	
    public function category_home($table){
        $sql = "SELECT * FROM $table ORDER BY IDLoai DESC";
        return $this->db->select($sql);
    }	
    public function category_by_id($table,$table_sanpham,$id){
        $sql = "SELECT * FROM $table,$table_sanpham WHERE $table.IDLoai=$table_sanpham.IDLoai AND $table_sanpham.IDLoai='$id' 
        ORDER BY $table_sanpham.IDSp DESC";
        return $this->db->select($sql);
    }

    //sanpham
    public function list_product($table_sanpham){
        $sql = "SELECT * FROM $table_sanpham ORDER BY $table_sanpham.IDSp DESC";
        return $this->db->select($sql);
    }
    public function list_product_index($table_sanpham){
        $sql = "SELECT * FROM $table_sanpham ORDER BY $table_sanpham.IDSp DESC";
        return $this->db->select($sql);
    }
    public function sanphamlienquan($table,$table_sanpham,$cond_sanphamlienquan){
        $sql = "SELECT * FROM $table,$table_sanpham WHERE $cond_sanphamlienquan";
        return $this->db->select($sql);
    }
    public function chitietsanpham($table,$table_sanpham,$cond){
        $sql = "SELECT * FROM $table_sanpham,$table WHERE $cond";
        return $this->db->select($sql);
    }
}



?>

