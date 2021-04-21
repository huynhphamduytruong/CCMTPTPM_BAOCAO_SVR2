<?php
class giohang extends DBControllers{
    
        
        public function __construct(){
            $data = array();
            
            parent::__construct();
    
        }
        public function index(){
            
            $this->giohang();
        }
        public function giohang(){
            Session::init();
            $table = 'theloai';
            $categorymodel = $this->load->model('categorymodel');
            $data['theloai'] = $categorymodel->category_home($table);
            $this->load->view('header',$data);
            $this->load->view('cart');
            $this->load->view('footer');
       
         }
         public function themgiohang(){
			Session::init();
			//Session::destroy();
			if(isset($_SESSION["shopping_cart"])){
				$avaiable = 0;
				foreach($_SESSION["shopping_cart"] as $key => $value){
					if($_SESSION["shopping_cart"][$key]['IDSp'] == $_POST['IDSp']){
						$avaiable++;
						$_SESSION["shopping_cart"][$key]['SoLuong'] = $_SESSION["shopping_cart"][$key]['SoLuong'] + $_POST['SoLuong'];
					}
				}
				if($avaiable == 0){
					$item = array(
						'IDSp' => $_POST["IDSp"],
						'TenSP' => $_POST["TenSP"],
						'Gia' => $_POST["Gia"],
						'HinhAnh' => $_POST["HinhAnh"],
						'SoLuong' => $_POST["SoLuong"]
					);
					$_SESSION["shopping_cart"][] = $item;
				}
			}else{
				$item = array(
					'IDSp' => $_POST["IDSp"],
					'TenSP' => $_POST["TenSP"],
					'Gia' => $_POST["Gia"],
					'HinhAnh' => $_POST["HinhAnh"],
					'SoLuong' => $_POST["SoLuong"]
				);
				$_SESSION["shopping_cart"][] = $item;
			}
			header("Location:".BASE_URL.'/giohang/giohang');
		}
		public function updategiohang(){
			Session::init();
			if(isset($_POST['delete_cart'])){
				if(isset($_SESSION["shopping_cart"])){
				foreach($_SESSION["shopping_cart"] as $key => $values){

					if($_SESSION["shopping_cart"][$key]['IDSp'] == $_POST['delete_cart']){
						unset($_SESSION["shopping_cart"][$key]);
					}	
				}
				header('Location:'.BASE_URL.'/giohang/giohang');
				}else{
				header('Location:'.BASE_URL);
				}
			}else{
				foreach($_POST['qty'] as $key => $qty){
					foreach($_SESSION["shopping_cart"] as $session => $values){
						if($values['IDSp'] == $key && $qty >= 1){
							$_SESSION["shopping_cart"][$session]['SoLuong'] = $qty;
						}elseif($values['IDSp'] == $key && $qty <= 0){
							unset($_SESSION["shopping_cart"][$session]);
						}
					}
				}
				header('Location:'.BASE_URL.'/giohang/giohang');
				
			}
			
			
		}
}
    


?>