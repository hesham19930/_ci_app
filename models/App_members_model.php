<?php
class App_members_model extends CI_Model{
     public $table= 'members';



 public function add($data)
    {
        if($this->db->insert($this->table, $data)){
            return $this->db->insert_id();
        }
        return false;
    }
public function get_by($where=null,$not=null,$sort=null,$limit=null){
    if(!empty($where))
        $this->db->where($where);
    if(!empty($not))
        $this->db->where_not_in($not);
    if(!empty($sort))
        $this->db->order_by($sort[0],$sort[1]);
    if(!empty($limit))
        $this->db->limit($limit);
         $q=$this->db->get($this->table);
         return $q->result();
    }
public function update($where =NULL, $data = NULL)
    {
        if(empty($where) || empty($data))
            return False;

        $this->db->where($where);
        return $this->db->update($this->table, $data);

    }
public function delete($where = NULL)
    {
        if (empty($where))
            return FALSE;
        $this->db->where($where);
        return $this->db->delete($this->table);
    }
}


