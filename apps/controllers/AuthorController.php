<?php
class AuthorController extends Controller{
    public function index(){
        $this->model('author');//author is modelname here and obj is author by convention in controller file;
        // echo "yes";
        $allauthors = $this->author->showAll();//here author is the object name;
        dd($allauthors);
        $this->load->view("author.index",['data'=>$allauthors]);
        // $this->load->view("product.index",compact('allproducts'));
        
        //$this->load is an obj of View class with a method names view;
    }
    public function create(){
        // echo "product create";
        $this->load->view('author.create',[]);
    }
    public function edit(){
        echo "product edit";
    }
    public function show(){
        echo "product show";
    }
    public function store(){
        echo "product store";
    }
    public function update(){
        echo "product update";
    }
    public function destroy(){
        echo "product destroy";
    }
}