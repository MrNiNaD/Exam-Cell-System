<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentsection extends CI_Controller {
  public function __construct(){
    parent::__construct();
    if(!$this->session->userdata('sid')){
      return redirect('Welcome/slogin1');
    }
  }

  public function changepassword(){
    $this->load->view('studentsection/changepassword');
  }

  public function schangepass(){
    $this->form_validation->set_rules('opass','Old Password','required');
    $this->form_validation->set_rules('npass','New Password','required');
    $this->form_validation->set_rules('renpass','Re-Enter New Password','required');
    if($this->form_validation->run()){
      $id=$this->session->userdata('sid');
      $opass=$this->input->post('opass');
      $npass=$this->input->post('npass');
      $renpass=$this->input->post('renpass');
      $this->load->model('studentmodel');
      $pass=$this->studentmodel->fetchpass($id);
      if($pass){
        if($pass==$opass){
          if($npass==$renpass){
            $post['password']=$npass;
            if($this->studentmodel->changepass($id,$post)){
              $this->session->set_flashdata('msg','Password Changed Successfully');
              $this->session->set_flashdata('msg_class','alert-success');
            }
            else{
              $this->session->set_flashdata('msg','Failed to Change Password');
              $this->session->set_flashdata('msg_class','alert-danger');
            }
            return redirect('studentsection/changepassword');
          }
          else{
            $this->session->set_flashdata('Login_failed','New Password and Re-Entered New Password did not match');
            return redirect('studentsection/changepassword');
          }
        }
        else{
          $this->session->set_flashdata('Login_failed','Invalid Old Password');
          return redirect('studentsection/changepassword');
        }
      }

    }
    else{
      $this->load->view('studentsection/changepassword');
    }
  }

  public function dashboard(){
    $this->load->model('loginmodel');
    $slist=$this->loginmodel->fetchstatus();
    $this->load->view('studentsection/dashboard',['slist'=>$slist]);
  }

  public function studentlogout(){
    $this->session->unset_userdata('sid');
    return redirect('Welcome/slogin1');
  }

  public function payment(){
    $this->load->view('product_form');
  }

  public function stream(){
    $this->load->view('studentsection/stream');
  }

  public function ktexform(){
    $this->load->model('loginmodel');
    $slist=$this->loginmodel->fetchstatus();
    if($slist->xform=="on"){
      $this->load->view('studentsection/ktexform');
    }
    else{
      return redirect('studentsection/dashboard');
    }

  }

  public function hallticket(){
    $this->load->model('loginmodel');
    $slist=$this->loginmodel->fetchstatus();
    if($slist->ht=="on"){
      $this->load->view('studentsection/filter');
    }
    else{
      return redirect('studentsection/dashboard');
    }

  }


  public function filterop(){
    $this->load->model('loginmodel');
    $slist=$this->loginmodel->fetchstatus();
    if($slist->ht=="on"){
      $branch=$this->input->post('branch');
      $Sem=$this->input->post('Sem');
      $year=$this->input->post('year');
      $ktorr=$this->input->post('ktorr');
      $f=$this->input->post('f/s');
      $this->load->model('loginmodel');
      if($slist=$this->loginmodel->fetchstudentktex($branch,$Sem,$year,$ktorr,$f)){
      $this->load->view('studentsection/filterop',['slist'=>$slist]);
    }
      else{
        $this->session->set_flashdata('Login_failed','Sorry Cannot Find Data you are searching for.');
        $this->load->view('Users/ktandexam/ktandexam');
      }
    }
    else{
      return redirect('studentsection/dashboard');
    }

  }

  public function htfilter($id){
    $this->load->view('studentsection/htfilter',['id'=>$id]);
  }

  public function htfilter1($id){
      $branch=$this->input->post('branch');
      $sem=$this->input->post('sem');
      $this->load->model('loginmodel');
      $sd=$this->loginmodel->vstudent($id);
      $this->load->model('studentmodel');
      $sd2=$this->studentmodel->bs($branch,$sem);

      $post['s1']=$sd2->s1;
      $post['s1date']=$sd2->s1date;
      $post['s1time']=$sd2->s1time;
      $post['s2']=$sd2->s2;
      $post['s2date']=$sd2->s2date;
      $post['s2time']=$sd2->s1time;
      $post['s3']=$sd2->s3;
      $post['s3date']=$sd2->s3date;
      $post['s3time']=$sd2->s3time;
      $post['s4']=$sd2->s4;
      $post['s4date']=$sd2->s4date;
      $post['s4time']=$sd2->s4time;
      $post['s5']=$sd2->s5;
      $post['s5date']=$sd2->s5date;
      $post['s5time']=$sd2->s5time;
      $post['hall_ticket']=$sd->hall_ticket;
      $post['fname']=$sd->fname;
      $post['mname']=$sd->mname;
      $post['sname']=$sd->sname;
      $post['year']=$sd->year;
      $post['branch']=$sd2->branch;
      $post['photo']=$sd->user_photo;
      $post['sem']=$sd->Sem;
        $this->load->view('studentsection/hallticket',['post'=>$post]);
  }

  public function comp(){
    $this->load->view('studentsection/comp');
  }

  public function compsem3(){
    $this->load->model('loginmodel');
    $slist=$this->loginmodel->fetchstatus();
    if($slist->marksheet=="on"){
      $this->load->view('studentsection/compsem3');
    }
    else{
      return redirect('studentsection/dashboard');
    }

  }

  public function compsem3marksheet(){
    if(!$this->session->userdata('sid')){
      return redirect('Welcome/slogin1');
    }
    $this->form_validation->set_rules('hall_ticket','Hallticket no.','required|integer');
    if($this->form_validation->run()){
    $hall_ticket=$this->input->post('hall_ticket');
    $this->load->model('studentmodel');
    $smarks=$this->studentmodel->compsem3marksheet($hall_ticket);
    if($smarks){$this->load->view('studentsection/compsem3marksheet',['smarks'=>$smarks]);}
    else{
      $this->session->set_flashdata('InvalidHT','Invalid Hallticket');
      return redirect('studentsection/compsem3');
    }
    }
    else{
      $this->load->view('studentsection/compsem3');
    }
    }

    public function revaluation(){
      $this->load->model('loginmodel');
      $slist=$this->loginmodel->fetchstatus();
      if($slist->rform=="on"){
        $this->load->view('studentsection/revaluation');
      }
      else{
        return redirect('studentsection/dashboard');
      }
    }

    public function srevaluation(){
      $this->form_validation->set_rules('fname','Firstname','required|alpha');
      $this->form_validation->set_rules('mname','Middlename','required|alpha');
      $this->form_validation->set_rules('sname','Surname','required|alpha');
      $this->form_validation->set_rules('hall_ticket','Hallticket','required');
      $this->form_validation->set_rules('year','Year','required|integer');
      $this->form_validation->set_rules('Sem','Sem','required|integer');
      $this->form_validation->set_rules('branch','Branch','required|alpha');
      $this->form_validation->set_rules('dob','D.O.B.','required');
      $this->form_validation->set_rules('contact','Contact','required|integer');
      $this->form_validation->set_rules('address','Address','required');
      $this->form_validation->set_rules('transaction_id','Transaction ID','required|is_unique[ktexdetails.transaction_id]');

      $config=[
        'upload_path'=>'./upload/',
        'allowed_types'=>'gif|jpg|png|jpeg',
      ];
      $this->load->library('upload',$config);

      if($this->form_validation->run() && !empty($_FILES['user_photo']['name']) && !empty($_FILES['transaction_ss']['name'])){
        $post=$this->input->post();
        if($this->upload->do_upload('user_photo')){
          $data1=$this->upload->data();
          $user_photo=base_url("upload/".$data1['raw_name'].$data1['file_ext']);
          $post['user_photo']=$user_photo;
        }

        if($this->upload->do_upload('transaction_ss')){
          $data2=$this->upload->data();
          $transaction_ss=base_url("upload/".$data2['raw_name'].$data2['file_ext']);
          $post['transaction_ss']=$transaction_ss;
        }
        $this->load->model('studentmodel');
        if($this->studentmodel->revaldetail($post)){
          $this->session->set_flashdata('msg','Form is Successfully Submited');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Form is failed to Submit');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('studentsection/revaluation');
      }
      else{
        $this->load->view('studentsection/revaluation');
      }
    }

    public function ktexdetails(){

      $this->form_validation->set_rules('fname','Firstname','required|alpha');
      $this->form_validation->set_rules('mname','Middlename','required|alpha');
      $this->form_validation->set_rules('sname','Surname','required|alpha');
      $this->form_validation->set_rules('year','Year','required|integer');
      $this->form_validation->set_rules('Sem','Sem','required|integer');
      $this->form_validation->set_rules('branch','Branch','required|alpha');
      $this->form_validation->set_rules('dob','D.O.B.','required');
      $this->form_validation->set_rules('contact','Contact','required|integer');
      $this->form_validation->set_rules('address','Address','required');
      $this->form_validation->set_rules('transaction_id','Transaction ID','required|is_unique[ktexdetails.transaction_id]');

      $config=[
        'upload_path'=>'./upload/',
        'allowed_types'=>'gif|jpg|png|jpeg',
      ];
      $this->load->library('upload',$config);

      if($this->form_validation->run() && !empty($_FILES['user_photo']['name']) && !empty($_FILES['transaction_ss']['name'])){
        $post=$this->input->post();
        if($this->upload->do_upload('user_photo')){
          $data1=$this->upload->data();
          $user_photo=base_url("upload/".$data1['raw_name'].$data1['file_ext']);
          $post['user_photo']=$user_photo;
        }

        if($this->upload->do_upload('transaction_ss')){
          $data2=$this->upload->data();
          $transaction_ss=base_url("upload/".$data2['raw_name'].$data2['file_ext']);
          $post['transaction_ss']=$transaction_ss;
        }

        if($this->upload->do_upload('sem1')){
          $data3=$this->upload->data();
          $sem1=base_url("upload/".$data3['raw_name'].$data3['file_ext']);
          $post['sem1']=$sem1;
        }

        if($this->upload->do_upload('sem2')){
          $data4=$this->upload->data();
          $sem2=base_url("upload/".$data4['raw_name'].$data4['file_ext']);
          $post['sem2']=$sem2;
        }

        if($this->upload->do_upload('sem3')){
          $data5=$this->upload->data();
          $sem3=base_url("upload/".$data5['raw_name'].$data5['file_ext']);
          $post['sem3']=$sem3;
        }

        if($this->upload->do_upload('sem4')){
          $data6=$this->upload->data();
          $sem4=base_url("upload/".$data6['raw_name'].$data6['file_ext']);
          $post['sem4']=$sem4;
        }


        if($this->upload->do_upload('sem5')){
          $data7=$this->upload->data();
          $sem5=base_url("upload/".$data7['raw_name'].$data7['file_ext']);
          $post['sem5']=$sem5;
        }

      $this->load->model('studentmodel');
      if($this->studentmodel->ktexdetail($post)){
        $this->session->set_flashdata('msg','Form is Successfully Submited');
        $this->session->set_flashdata('msg_class','alert-success');
      }
      else{
        $this->session->set_flashdata('msg','Form is failed to Submit');
        $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('studentsection/ktexform');
      }
      else{
        $this->load->view('studentsection/ktexform');
      }
    }









}
