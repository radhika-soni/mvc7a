<?php
array_map(
    // function($filename){require_once $filename;}
    fn($filename)=>include $filename,glob("helper/*.php")
);

//is called when the class is not found;
spl_autoload_register(function ($classname){
    $path = "apps/libs/$classname.php";
    if(file_exists($path)){
        require_once "$path";//include the file with the name of class that is being searched;
    }else{
        require_once "404.php";
    }
});

$obj = new Autoload();
// kuch bhi