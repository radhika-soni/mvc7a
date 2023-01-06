<?php
function request(){
    
    $robj = (object)["controller"=>"AuthorController","method"=>"index","get"=>$_GET,"para"=>null];
    //$robj is object of std class;
    
    if(isset($_GET['url'])){
        $url = explode("/",trim($_GET['url'],'/'));
        $robj->controller = ucfirst(strtolower($url[0]))."Controller";
        $robj->method = (isset($url[1]))?strtolower($url[1]):$robj->method;
        $robj->para = (isset($url[2]))?($url[2]):$robj->para;
        //above data sent at libs/Autoload(whoever calls request());
        unset($robj->get['url']);
    }
    
    return $robj;
}