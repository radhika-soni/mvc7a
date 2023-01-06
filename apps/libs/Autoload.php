<?php
class Autoload{
    //$obj of autoload in index.php;
    public function __construct(){
        $robj = request();
// print_r($robj);
        $controller = $robj->controller;
        $method = $robj->method;
        $para = $robj->para;
        $path="apps/controllers/$controller.php";
        if(file_exists($path)){
            require_once "$path"; //include the file searched in url with help of helper/request;
            
            $cobj=new $controller();

            if(method_exists($cobj,$method)){
                $cobj->$method();
                echo "yes";}
            else{
                if(method_exists($cobj,'index')){
                    $cobj->index();
                }else{
                    require_once "404.php";
                }
            }
        }
        else{
            require_once "404.php";
        }
    }
}