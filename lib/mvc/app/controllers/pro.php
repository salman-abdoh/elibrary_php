<?php
require_once 'controller.php';
class Pro extends Controller
{
   
   

  
    

    function list_all()
    { $users=$this->model("prod");
        $result=$users->select();
        $this->view('library',$result);

    }
   
}
