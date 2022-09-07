<?php 

class TodoModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $tableName="todo";

    public function getAll()
    {
      return $this->db->get($this->tableName)->result();
   }

    public function delete($id)
    {
      return $this->db->where("id",$id)->delete($this->tableName);
    }

    public function insert($data=array())
    {
      return $this->db->insert($this->tableName,$data);
    }

    public function update($id,$data)
    {
      return $this->db->where("id",$id)->update($this->tableName,$data);
    }

    
}


?>