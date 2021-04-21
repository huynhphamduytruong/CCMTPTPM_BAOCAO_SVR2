<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Ban Giày</title>
</head>
<body>
    
   
    <h2>
        <?php
            spl_autoload_register(function($class){
                include_once 'system/lib/'.$class.'.php';
            });
            include_once 'URL/URL.php';
            
            // include_once 'Helper/lib/DBControllers.php';
            // include_once 'Helper/lib/database.php';
            // include_once 'Helper/lib/DModel.php';
            // include_once 'Helper/lib/load.php';
            
            // include_once 'Controllers/postController.php';
            // $main = new Main();
            // $sp = new sanphamController();
            // $p = new postController();
            $url = isset($_GET['url']) ? $_GET['url'] : NULL;
            
            if ($url != NULL) {
                $url = rtrim($url,'/');
                $url = explode('/',filter_var($url, FILTER_SANITIZE_URL));
                # code...
            }
            else {
                unset($url);
                
            }
            if(isset($url[0])){
                
                include_once 'Controllers/'.$url[0].'.php';
                $a= new $url[0]();
                if (isset($url[2])) {
                    $a->{$url[1]}($url[2]);
                    # code...
                }else {
                    if (isset($url[1])) {
                        $a->{$url[1]}();
                        # code...
                    }else {
                        # code...
                    }
                    # code...
                }
            }else {
                include_once 'Controllers/index.php';
                $index = new index();
                $index->homepage();
            }          
        ?>
    </h2>
    
</body>
</html>