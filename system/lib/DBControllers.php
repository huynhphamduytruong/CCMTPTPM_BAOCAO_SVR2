<?php
class DBControllers{

    protected $load = array(); // 1 mảnh chứa dữ liệu
    public function __construct(){
        $this->load = new load();
    }

    }

?>