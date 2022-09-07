<?php 
class Todo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("TodoModel");
    }

    public function index()
    {
     $items=$this->TodoModel->getAll();
        $viewData=array(
            "todo"=>$items
        );
       $this->load->view("TodoList",$viewData);
    }

    public function insert()
    {
       $todoTitle=$this->input->post("title");
      $insert= $this->TodoModel->insert(
        array(
                "title"=>$todoTitle,
                "status"=>0,
                "createDate"=>date("Y-m-d H:i:s")
        )
       );
       if($insert)
       {
        redirect(base_url());
       }
    }

    public function delete($id)
    {
        $delete=$this->TodoModel->delete($id);
        redirect(base_url());
    }

    public function statusSetter($id)
    {
        $completed=($this->input->post("completed")==true)? 1 : 0 ;
        $this->TodoModel->update($id, array(
    
    "status"=>$completed));
    
    }

    
}

?>