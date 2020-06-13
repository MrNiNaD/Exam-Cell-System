<?php

class studentmodel extends CI_Model
{
  public function compsem3marksheet($hall_ticket){
    $q=$this->db->select()->where('hall_ticket',$hall_ticket)->get('studentdetails');
    return $q->row();
  }

  public function ktexdetail($post){
    return $this->db->insert('ktexdetails',$post);
  }

  public function bs($branch,$sem){
    $q=$this->db->where(['branch'=>$branch,'sem'=>$sem])
                ->get('hallticketsub');
    return $q->row();
  }

  public function revaldetail($post){
    return $this->db->insert('revaldetails',$post);
  }

  public function fetchpass($id){
    $q=$this->db->select()->where('id',$id)->get('slogin');
    return $q->row()->password;
  }

  public function changepass($id,$post){
    return $this->db->where('id',$id)->update('slogin',$post);
  }

}
