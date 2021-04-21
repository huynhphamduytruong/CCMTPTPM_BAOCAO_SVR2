<?php
class index extends DBControllers{
    
        
        public function __construct(){
            $data = array();
            
            parent::__construct();
    
        }
        // public function index(){
			

		// 	$this->homepage();
		// }
        public function homepage(){
            
            $table = 'theloai';
            $table_sanpham = 'sanpham';
            $categorymodel = $this->load->model('categorymodel');
            $data['theloai'] = $categorymodel->category_home($table);
            $data['sanpham_index'] = $categorymodel->list_product_index($table_sanpham);
            $this->load->view('header',$data);
            $this->load->view('slider');
            $this->load->view('home',$data);
            $this->load->view('footer');
        }
        // public function danhmuc(){
        //     $this->load->view('header');
        //     $this->load->view('categoryproduct');
        //     $this->load->view('footer');
        // }
        // public function chitietsanpham(){
            
        //     $this->load->view('header');
        //     $this->load->view('details_product');
        //     $this->load->view('footer');
        // }
        public function lienhe(){
            $table = 'theloai';
            $categorymodel = $this->load->model('categorymodel');
            $data['theloai'] = $categorymodel->category_home($table);
            $this->load->view('header',$data);
            
            $this->load->view('contact');
            $this->load->view('footer');
        }

        
    
}

?>