<?php
class theloai extends DBControllers{
    
        
        public function __construct(){
            $data = array();
            
            parent::__construct();
    
        }
        public function homepage(){
            
            $table = 'tbl_category_product';
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table);
            $this->load->view('header',$data);
            $this->load->view('slider');
            $this->load->view('home');
            $this->load->view('footer');
        }
        public function danhmuc(){
            $this->load->view('header');
            //$this->load->view('slider');
            $this->load->view('categoryproduct');
            $this->load->view('footer');
        }
        public function chitietsanpham(){
            
            $this->load->view('header');
            //$this->load->view('slider');
            $this->load->view('details_product');
            $this->load->view('footer');
        }
        public function lienhe(){
            $this->load->view('header');
            //$this->load->view('slider');
            $this->load->view('contact');
            $this->load->view('footer');
        }

        
    
}

?>