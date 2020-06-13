<?php

class staffmodel extends CI_Model
{
    public function compsem3insert($data){
        return $this->db->insert("studentdetails", $data);
    }




}
