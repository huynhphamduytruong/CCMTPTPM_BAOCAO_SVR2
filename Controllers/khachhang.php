<?php
class khachhang extends DBControllers{
    
        
        public function __construct(){
            $data = array();
            
            parent::__construct();
    
        }
        public function index(){
			

			$this->khachhang();
		}
        public function khachhang(){
            
            // $table = 'theloai';
            // $table_sanpham = 'sanpham';
            // $categorymodel = $this->load->model('categorymodel');
            // $data['theloai'] = $categorymodel->category_home($table);
            // $data['sanpham_index'] = $categorymodel->list_product_index($table_sanpham);
            // $this->load->view('header',$data);
            // $this->load->view('slider');
            // $this->load->view('home',$data);
            // $this->load->view('footer');
        }
        public function dangxuat(){
		
            Session::init();
            Session::unset('khachhang');
            $message['msg'] = "Đăng xuất tài khoản thành công";
            header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));	
        
        
        
    }

        public function kh_login(){
            $ten = $_POST['Email'];
			$matkhau = md5($_POST['MatKhau']);

			$table_KH = 'khachhang';
			$khachhangmodel = $this->load->model('khachhangmodel');

			$count = $khachhangmodel->login($table_KH,$ten,$matkhau);

			if($count==0){
				$message['msg'] = "User hoặc mật khẩu sai,xin kiểm tra lại";
				header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
			}else{

				$result = $khachhangmodel->getLogin($table_KH,$ten,$matkhau);
				Session::init();
				Session::set('khachhang',true);
				Session::set('TenKH',$result[0]['TenKH']);
				Session::set('IDKH',$result[0]['IDKH']);
                $message['msg'] = "Đăng nhập tài khoản thành công";
				header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
			}
        }
     
        public function dangnhap(){
            
            $table = 'theloai';
            $table_sanpham = 'sanpham';
            $categorymodel = $this->load->model('categorymodel');
            $data['theloai'] = $categorymodel->category_home($table);
            Session::init();
            $this->load->view('header',$data);
            $this->load->view('Kh_dangnhap');
            $this->load->view('footer');
        }
    
        public function insert_dangky(){
            $name = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
            $phone = $_POST['txtDienThoai'];
			$address = $_POST['txtDiaChi'];
			$password = $_POST['txtPassword'];

			
			$table_KH = "khachhang";

			$data = array(
				'Ten' =>  $name,
				'Email' => $email,
                'DiaChi' => $address,         
				'SDT' => $phone,
				'MatKhau' => md5($password),
				
			);

			$khachhangmodel = $this->load->model('khachhangmodel');
			$result = $khachhangmodel->insertcustomer($table_KH,$data);

			if($result==1){
				
				$message['msg'] = "Đăng ký thành công";
				header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
			}else{
				$message['msg'] = "Thêm sản phẩm thất bại";
				header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
			}
		}
        

        
    
}

?>