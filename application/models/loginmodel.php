<?php

class loginmodel extends CI_Model
{

  public function isvalidate($username,$password) {
    //Ha comp chya student login cha login karnya sathi database mahde search karat aahe..
    $q=$this->db->where(['username'=>$username,'password'=>$password])
                ->get('slogin');

    if($q->num_rows()) {
      return $q->row()->id;
    }
    else {
      return false;
    }
  }

  public function iavalidate($username,$password) {
    //Ha admin login cha login karnya sathi database mahde search karat aahe..
    $q=$this->db->where(['username'=>$username,'password'=>$password])
                ->get('alogin');

    if($q->num_rows()) {
      return $q->row()->id;
    }
    else {
      return false;
    }
  }

  public function studentlist(){
    //student chi list anun denar 'home>adminlogin>studentdetails' <- ethe..
    $q=$this->db->select()->order_by('hall_ticket','desc')->get('studentdetails');
    return $q->result();
  }

  public function istvalidate($username,$password) {
    //Ha staff login cha login karnya sathi database mahde search karat aahe..
    $q=$this->db->where(['username'=>$username,'password'=>$password])
                ->get('stlogin');

    if($q->num_rows()) {
      return $q->row()->stid;
    }
    else {
      return false;
    }
  }

  public function addslogin($array){
    return $this->db->insert('slogin',$array);
  }

  public function addstlogin($array){
    return $this->db->insert('stlogin',$array);
  }

  public function addalogin($array){
    return $this->db->insert('alogin',$array);
  }

  public function updatestatus($array){
    return $this->db->update('status',$array);
  }

  public function fetchstatus(){
    $q=$this->db->select()->get('status');
    return $q->row();
  }

  public function delcomp3stud($id){
    return $this->db->delete('studentdetails',['id'=>$id]);
  }

  public function editcomp3stud($id){
    $q=$this->db->select()->where('id',$id)->get('studentdetails');
    return $q->row();
  }

  public function updatecomp3stud($did,Array $data){
    return $this->db->where('id',$did)->update('studentdetails',$data);
  }

  public function fetchstudentktex($branch,$Sem,$year,$ktorr,$f){
    $q=$this->db->select()->like('branch',$branch)->like('Sem',$Sem)->like('year',$year)->like('ktorr',$ktorr)->like('fs',$f)->order_by('sname','asc')->get('ktexdetails');
    return $q->result();
  }

  public function delktexdetail($id){
    return $this->db->delete('ktexdetails',['id'=>$id]);
  }

  public function slogindel($id){
    return $this->db->delete('slogin',['id'=>$id]);
  }

  public function alogindel($id){
    return $this->db->delete('alogin',['id'=>$id]);
  }

  public function stlogindel($id){
    return $this->db->delete('stlogin',['stid'=>$id]);
  }

  public function delrevaluation($id){
    return $this->db->delete('revaldetails',['id'=>$id]);
  }

  public function upktexf($id){
    $q=$this->db->select()->where('id',$id)->get('ktexdetails');
    return $q->row();
  }

  public function upktexdetail($did,$data){
    return $this->db->where('id',$did)->update('ktexdetails',$data);
  }

  public function searchcompsem3($search){
    $q=$this->db->select()->like('hall_ticket',$search)->or_like('fname',$search)->or_like('mname',$search)->or_like('lname',$search)->or_like('heldin',$search)->or_like('cgpa',$search)->or_like('branch',$search)->or_like('sem',$search)->order_by('hall_ticket','asc')->get('studentdetails');
    return $q->result();
  }

  public function vstudent($id){
    $q=$this->db->select()->where('id',$id)->get('ktexdetails');
    return $q->row();
  }

  public function vreval($id){
    $q=$this->db->select()->where('id',$id)->get('revaldetails');
    return $q->row();
  }

  public function ht($did,$ht){
    return $this->db->where('id',$did)->update('ktexdetails',$ht);
  }

  public function done($id,$post){
    return $this->db->where('id',$id)->update('revaldetails',$post);
  }

  public function halltickets(){
    $q=$this->db->select()->get('hallticketsub');
    return $q->result();
  }

  public function sloginl(){
    $q=$this->db->select()->get('slogin');
    return $q->result();
  }

  public function aloginl(){
    $q=$this->db->select()->get('alogin');
    return $q->result();
  }

  public function stloginl(){
    $q=$this->db->select()->get('stlogin');
    return $q->result();
  }

  public function sloginedit($id){
    $q=$this->db->select()->where('id',$id)->get('slogin');
    return $q->row();
  }

  public function aloginedit($id){
    $q=$this->db->select()->where('id',$id)->get('alogin');
    return $q->row();
  }

  public function stloginedit($id){
    $q=$this->db->select()->where('stid',$id)->get('stlogin');
    return $q->row();
  }

  public function htsubedit($id){
    $q=$this->db->select()->where('id',$id)->get('hallticketsub');
    return $q->row();
  }

  public function uphtsub1($id,$post){
    return $this->db->where('id',$id)->update('hallticketsub',$post);
  }

  public function sloginupdate($id,$post){
    return $this->db->where('id',$id)->update('slogin',$post);
  }

  public function aloginupdate($id,$post){
    return $this->db->where('id',$id)->update('alogin',$post);
  }

  public function stloginupdate($id,$post){
    return $this->db->where('stid',$id)->update('stlogin',$post);
  }

  public function revaluationlist(){
    $q=$this->db->select()->order_by('hall_ticket','desc')->get('revaldetails');
    return $q->result();
  }

  public function searchr($s){
    $q=$this->db->select()->like('hall_ticket',$s)->or_like('fname',$s)->or_like('mname',$s)->or_like('sname',$s)->or_like('hall_ticket',$s)->or_like('branch',$s)->or_like('Sem',$s)->order_by('hall_ticket','asc')->get('revaldetails');
    return $q->result();
  }

  public function sloginsearch($s){
    $q=$this->db->select()->like('username',$s)->or_like('firstname',$s)->or_like('lastname',$s)->get('slogin');
    return $q->result();
  }

  public function aloginsearch($s){
    $q=$this->db->select()->like('username',$s)->or_like('firstname',$s)->or_like('lastname',$s)->get('alogin');
    return $q->result();
  }

  public function stloginsearch($s){
    $q=$this->db->select()->like('username',$s)->or_like('firstname',$s)->or_like('lastname',$s)->get('stlogin');
    return $q->result();
  }


}

 ?>
