<?php

class loginmodel extends CI_Model
{
  public function mechvalidate($username,$password) {
    //Ha comp chya student login cha login karnya sathi database mahde search karat aahe..
    $q=$this->db->where(['username'=>$username,'password'=>$password])
                ->get('mechstud');

    if($q->num_rows()) {
      return $q->row()->id;
    }
    else {
      return false;
    }
  }
}
?>
