<?php
class sanpham extends DBControllers{
    public function __construct(){
        $data = array();
       parent::__construct();

    }
    public function index(){
        $this->danhmuc();
    }
    public function tatca(){

        $table = 'theloai';
      
        $categorymodel = $this->load->model('categorymodel');
        $data['theloai'] = $categorymodel->category_home($table);
        $table_sanpham = 'sanpham';
        $data['list_product'] = $categorymodel->list_product($table_sanpham);
        
        $this->load->view('header',$data);
        $this->load->view('list_product',$data);
        $this->load->view('footer');
    }
    public function danhmuc($id){

        $table = 'theloai';
      
        $categorymodel = $this->load->model('categorymodel');
        $data['theloai'] = $categorymodel->category_home($table);
        $table_sanpham = 'sanpham';
        $data['category_by_id'] = $categorymodel->category_by_id($table,$table_sanpham,$id);
        
        $this->load->view('header',$data);
        $this->load->view('categoryproduct',$data);
        $this->load->view('footer');
    }
    public function chitietsanpham($id){
        $table = 'theloai';
        $table_sanpham = 'sanpham';
        $cond = "$table_sanpham.IDLoai= $table.IDLoai AND $table_sanpham.IDSp ='$id'";
        
        $categorymodel = $this->load->model('categorymodel');
        $data['theloai'] = $categorymodel->category_home($table);
        $data['chitietsanpham'] = $categorymodel->chitietsanpham($table,$table_sanpham,$cond);
        foreach($data['chitietsanpham'] as $key => $cate){
            $id_cate = $cate['IDLoai'];
        }
        $cond_sanphamlienquan ="$table_sanpham.IDLoai= $table.IDLoai AND $table.IDLoai = '$id_cate'
        AND $table_sanpham.IDSp NOT IN('$id')";
        $data['sanphamlienquan'] = $categorymodel->sanphamlienquan($table,$table_sanpham,$cond_sanphamlienquan);

        $this->load->view('header',$data);
        $this->load->view('details_product',$data);
        $this->load->view('footer');
    }
}

?>