<?php
class Controller{
    //obj of Controller in libs/Autoload
    protected $load;
    public function __construct(){
        //creating obj of View automatically when obj of Controller or its child classes is created;
        $this->load=new View();
    }
    public function model($modelname,$obj=''){
        if(!$obj){
            $obj = strtolower($modelname);
        }
        $mname = ucfirst(strtolower($modelname));
        $path = "apps/models/$mname.php";
        if(file_exists($path)){
            include $path;
            $this->$obj = new $mname($modelname);
        }

    }
}