<?php
//model data lene or dene ka kaam karega;
//pdo(php data object);
//mysqli is an inbuilt library of php;
class Model extends mysqli{
    protected $table,$key="id";
    public function __construct($table){
        parent::__construct(HOSTNAME,USERNAME,PASSWORD,DB);
        if(!isset($this->table)){
            $this->table=$table;
        }
    }
    public function save(){
        echo "this will work to store data in database";
    }
    public function update(){
        echo "updates data in database";
    }
    public function showAll($cols="*"){
        // echo "showAll";
        $cols = (is_array($cols))?implode(',',$cols):$cols;
        $sql = "select $cols from $this->table order by $this->key desc";
        return $this->query($sql)->fetch_all(MYSQLI_ASSOC);
        // $this->query($sql)?->fetch_all() if this query does not return something it will not call fetch_all
    }
    public function show(){
        echo "shows single records";
    }
    public function delete(){
        echo "deletes single record from database";
    }
}   