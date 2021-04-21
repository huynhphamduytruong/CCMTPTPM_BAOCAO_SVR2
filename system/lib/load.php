<?php

class load{

    
    public function __construct(){
        
    }
    public function view($filename , $data = false){
        if($data == true){
            extract($data);
        }
        include 'Views/'.$filename.'.php';

    }
    public function model ($filename){
        include 'Models/'.$filename.'.php';
        return new $filename();

    }

    }

?>