<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminsection extends CI_Controller {

      public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('id')){
          return redirect('Welcome/alogin');
        }
      }


      public function studentdetails() {
        if(!$this->session->userdata('id')){
          return redirect('Welcome/alogin');
        }
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->studentlist();
        $this->load->view('Users/studentdetails',['slist'=>$slist]);
      }

      public function searchcompsem3(){
        $search=$this->input->post('search');
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->searchcompsem3($search);
        $this->load->view('Users/studentdetails',['slist'=>$slist]);
      }

      public function studentregister() {
        if(!$this->session->userdata('id')){
          return redirect('Welcome/alogin');
        }
        $this->load->view('Users/studentregister');
      }

      public function studentregisterv() {
        if(!$this->session->userdata('id')){
          return redirect('Welcome/alogin');
        }
        $this->load->library('form_validation');
    		$this->form_validation->set_rules('username','Username','required|alpha');
        $this->form_validation->set_rules('password','Password','required|alpha');
        $this->form_validation->set_rules('firstname','FirstName','required|alpha');
        $this->form_validation->set_rules('lastname','LastName','required|alpha');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run()){
          $register=$this->input->post();
          $this->load->model('loginmodel');
          if($this->loginmodel->addslogin($register)){
            $this->session->set_flashdata('msg','New Student ID is added Successfully');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else{
            $this->session->set_flashdata('msg','New Student ID is not added');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('adminsection/studentregisterv');
        }
        else{
          $this->load->view('Users/studentregister');
        }
      }

      public function staffregister() {
        if(!$this->session->userdata('id')){
          return redirect('Welcome/alogin');
        }
        $this->load->library('form_validation');
    		$this->form_validation->set_rules('username','Username','required|alpha');
        $this->form_validation->set_rules('password','Password','required|alpha');
        $this->form_validation->set_rules('firstname','FirstName','required|alpha');
        $this->form_validation->set_rules('lastname','LastName','required|alpha');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run()){
          $register=$this->input->post();
          $this->load->model('loginmodel');
          if($this->loginmodel->addstlogin($register)){
            $this->session->set_flashdata('msg','New Staff ID is added Successfully');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else{
            $this->session->set_flashdata('msg','New Staff ID is not added');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('adminsection/staffregister');
        }
        else{
          $this->load->view('Users/staffregister');
        }

      }

      public function adminregister() {
        if(!$this->session->userdata('id')){
          return redirect('Welcome/alogin');
        }
        $this->load->library('form_validation');
    		$this->form_validation->set_rules('username','Username','required|alpha');
        $this->form_validation->set_rules('password','Password','required|alpha');
        $this->form_validation->set_rules('firstname','FirstName','required|alpha');
        $this->form_validation->set_rules('lastname','LastName','required|alpha');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run()){
          $register=$this->input->post();
          $this->load->model('loginmodel');
          if($this->loginmodel->addalogin($register)){
            $this->session->set_flashdata('msg','New Staff ID is added Successfully');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else{
            $this->session->set_flashdata('msg','New Staff ID is not added');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('adminsection/adminregister');
        }
        else{
          $this->load->view('Users/adminregister');
        }

      }

      public function status(){
        $this->load->view('Users/status');
      }

      public function statusapply(){
        $ms=$this->input->post('marksheet');
        $xform=$this->input->post('xform');
        $rform=$this->input->post('rform');
        //$ktform=$this->input->post('ktform');
        $ht=$this->input->post('ht');
        $this->load->model('loginmodel');
        $data=array(
          "marksheet"=>$ms,
          "xform"=>$xform,
          "rform"=>$rform,
          //"ktform"=>$ktform,
          "ht"=>$ht,
        );
        if($this->loginmodel->updatestatus($data)){
          $this->session->set_flashdata('msg','Liablities updated Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Liablities not updated Successfully');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('adminsection/status');

      }

      public function adminlogout(){
        $this->session->unset_userdata('id');
        return redirect('Welcome/alogin');
      }

      public function stream(){
        if(!$this->session->userdata('id')){
          return redirect('Welcome/alogin');
        }
        $this->load->view('Users/studdetails/streama');
      }

      public function comp(){
        if(!$this->session->userdata('id')){
          return redirect('Welcome/alogin');
        }
        $this->load->view('Users/studdetails/comp');
      }

      public function delcomp3stud(){
        $hall_ticket=$this->input->post('hall_ticket');
        $this->load->model('loginmodel');
        if($this->loginmodel->delcomp3stud($hall_ticket)){
          $this->session->set_flashdata('msg','Deleted Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Failed to Delete');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('adminsection/studentdetails');
      }

      public function delslogin($id){
        $this->load->model('loginmodel');
        if($this->loginmodel->slogindel($id)){
          $this->session->set_flashdata('msg','Deleted Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Failed to Delete');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('adminsection/sloginlist');
      }

      public function delalogin($id){
        $this->load->model('loginmodel');
        if($this->loginmodel->alogindel($id)){
          $this->session->set_flashdata('msg','Deleted Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Failed to Delete');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('adminsection/aloginlist');
      }

      public function delstlogin($id){
        $this->load->model('loginmodel');
        if($this->loginmodel->stlogindel($id)){
          $this->session->set_flashdata('msg','Deleted Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Failed to Delete');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('adminsection/stloginlist');
      }

      public function editcomp3stud($id){
        $this->load->model('loginmodel');
        $studdata=$this->loginmodel->editcomp3stud($id);
        $this->load->view('Users/studdetails/compsem3',['studdata'=>$studdata]);
      }

      public function hallticketsub(){
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->halltickets();
        $this->load->view('Users/hallticketsublist',['slist'=>$slist]);
      }

      public function edithtsub($id){
        $this->load->model('loginmodel');
        $studdata=$this->loginmodel->htsubedit($id);
        $this->load->view('Users/htsubedit',['studdata'=>$studdata]);
      }

      public function uphtsub($id){
        $post=$this->input->post();
        $this->load->model('loginmodel');
        if($this->loginmodel->uphtsub1($id,$post)){
          $this->session->set_flashdata('msg','Updated Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Not Updated');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('adminsection/hallticketsub');
      }

      public function searchreval(){
        $search=$this->input->post('search');
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->searchr($search);
        $this->load->view('Users/ktandexam/revallist',['slist'=>$slist]);
      }

      public function searchslogin(){
        $search=$this->input->post('search');
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->sloginsearch($search);
        $this->load->view('Users/sloginlist',['slist'=>$slist]);
      }

      public function searchalogin(){
        $search=$this->input->post('search');
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->aloginsearch($search);
        $this->load->view('Users/aloginlist',['slist'=>$slist]);
      }

      public function searchstlogin(){
        $search=$this->input->post('search');
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->stloginsearch($search);
        $this->load->view('Users/stloginlist',['slist'=>$slist]);
      }

      public function sloginlist(){
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->sloginl();
        $this->load->view('Users/sloginlist',['slist'=>$slist]);
      }

      public function aloginlist(){
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->aloginl();
        $this->load->view('Users/aloginlist',['slist'=>$slist]);
      }

      public function stloginlist(){
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->stloginl();
        $this->load->view('Users/stloginlist',['slist'=>$slist]);
      }

      public function editslogin($id){
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->sloginedit($id);
        $this->load->view('Users/editslogin',['slist'=>$slist]);
      }

      public function editalogin($id){
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->aloginedit($id);
        $this->load->view('Users/editalogin',['slist'=>$slist]);
      }

      public function editstlogin($id){
        $this->load->model('loginmodel');
        $slist=$this->loginmodel->stloginedit($id);
        $this->load->view('Users/editstlogin',['slist'=>$slist]);
      }

      public function updateslogin($id){
        $post=$this->input->post();
        $this->load->model('loginmodel');
        if($this->loginmodel->sloginupdate($id,$post)){
          $this->session->set_flashdata('msg','Updated Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Not Updated');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('adminsection/sloginlist');

      }

      public function updatealogin($id){
        $post=$this->input->post();
        $this->load->model('loginmodel');
        if($this->loginmodel->aloginupdate($id,$post)){
          $this->session->set_flashdata('msg','Updated Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Not Updated');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('adminsection/aloginlist');

      }

      public function updatestlogin($id){
        $post=$this->input->post();
        $this->load->model('loginmodel');
        if($this->loginmodel->stloginupdate($id,$post)){
          $this->session->set_flashdata('msg','Updated Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
          $this->session->set_flashdata('msg','Not Updated');
          $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('adminsection/stloginlist');

      }

      public function updatecomp3stud($id){
        if(!$this->session->userdata('id')){
          return redirect('Welcome/alogin');
        }
        if($this->form_validation->run('verify')){
          $post=$this->input->post();
          $d=0;
          $s=0;
          if((($post['s1th']/$post['s1tht'])*100)>=40){$s++;}else{$d++;}
          if((($post['s2th']/$post['s2tht'])*100)>=40){$s++;}else{$d++;}
          if((($post['s3th']/$post['s3tht'])*100)>=40){$s++;}else{$d++;}
          if((($post['s4th']/$post['s4tht'])*100)>=40){$s++;}else{$d++;}
          if((($post['s5th']/$post['s5tht'])*100)>=40){$s++;}else{$d++;}
          if((($post['s6th']/$post['s6tht'])*100)>=40){$s++;}else{$d++;}
          if((($post['s7th']/$post['s7tht'])*100)>=40){$s++;}else{$d++;}
          if((($post['s8th']/$post['s8tht'])*100)>=40){$s++;}else{$d++;}
          if((($post['s9th']/$post['s9tht'])*100)>=40){$s++;}else{$d++;}
          //if((($post['s10th']/$post['s10tht'])*100)>=40){$s++;}else{$d++;}
          //if((($post['s11th']/$post['s11tht'])*100)>40){$s++;}else{$d++;}
          if((($post['s1ut']/$post['s1utt'])*100)>=40){$s++;}else{$d++;}
          if((($post['s2ut']/$post['s2utt'])*100)>=40){$s++;}else{$d++;}
          if((($post['s3ut']/$post['s3utt'])*100)>=40){$s++;}else{$d++;}
          if((($post['s4ut']/$post['s4utt'])*100)>=40){$s++;}else{$d++;}
          if((($post['s5ut']/$post['s5utt'])*100)>=40){$s++;}else{$d++;}
          if((($post['s6ut']/$post['s6utt'])*100)>=40){$s++;}else{$d++;}
          if((($post['s7ut']/$post['s7utt'])*100)>=40){$s++;}else{$d++;}
          if((($post['s8ut']/$post['s8utt'])*100)>=40){$s++;}else{$d++;}
          if((($post['s9ut']/$post['s9utt'])*100)>=40){$s++;}else{$d++;}
          //if((($post['s10ut']/$post['s10utt'])*100)>=40){$s++;}else{$d++;}
          //if((($post['s11ut']/$post['s11utt'])*100)>40){$s++;}else{$d++;}

          $count=$d+$s;
          if($s>=($count-1)){
            $c=0;
            if((($post['s1th']/$post['s1tht'])*100)>=30){$c++;}
            if((($post['s2th']/$post['s2tht'])*100)>=30){$c++;}
            if((($post['s3th']/$post['s3tht'])*100)>=30){$c++;}
            if((($post['s4th']/$post['s4tht'])*100)>=30){$c++;}
            if((($post['s5th']/$post['s5tht'])*100)>=30){$c++;}
            if((($post['s6th']/$post['s6tht'])*100)>=30){$c++;}
            if((($post['s7th']/$post['s7tht'])*100)>=30){$c++;}
            if((($post['s8th']/$post['s8tht'])*100)>=30){$c++;}
            if((($post['s9th']/$post['s9tht'])*100)>=30){$c++;}
            if((($post['s1ut']/$post['s1utt'])*100)>=30){$c++;}
            if((($post['s2ut']/$post['s2utt'])*100)>=30){$c++;}
            if((($post['s3ut']/$post['s3utt'])*100)>=30){$c++;}
            if((($post['s4ut']/$post['s4utt'])*100)>=30){$c++;}
            if((($post['s5ut']/$post['s5utt'])*100)>=30){$c++;}
            if((($post['s6ut']/$post['s6utt'])*100)>=30){$c++;}
            if((($post['s7ut']/$post['s7utt'])*100)>=30){$c++;}
            if((($post['s8ut']/$post['s8utt'])*100)>=30){$c++;}
            if((($post['s9ut']/$post['s9utt'])*100)>=30){$c++;}
            if($c>=($count-1)){
              $post['remark']="Pass";
            }
            else{
              $post['remark']="Fail";
            }
          }
          else{echo $post['remark']="Fail";}

          if($post['s10th']=='' && $post['s10tht']=='' && $post['s10ut']=='' && $post['s10utt']==''){
            //echo "Enter Details Properly";
          }
          elseif(!is_null($post['s10th']) && $post['s10tht']=='' && $post['s10ut']=='' && $post['s10utt']==''){
            //echo "Enter Details Properly1";
          }
          elseif(!is_null($post['s10th']) && !is_null($post['s10tht']) && $post['s10ut']=='' && $post['s10utt']==''){
            //echo "Enter Details Properly2";
          }
          elseif(!is_null($post['s10th']) && !is_null($post['s10tht']) && !is_null($post['s10ut']) && $post['s10utt']==''){
            //echo "Enter Details Properly3";
          }
          else{
            if((($post['s10th']/$post['s10tht'])*100)>=40){$s++;}else{$d++;}
            if((($post['s10ut']/$post['s10utt'])*100)>=40){$s++;}else{$d++;}
            $count=$d+$s;
            if($s>=($count-1)){
              if((($post['s10th']/$post['s10tht'])*100)>=30){$c++;}
              if((($post['s10ut']/$post['s10utt'])*100)>=30){$c++;}
              if($c>=($count-1)){
                $post['remark']="Pass";
                }
                else{
                  $post['remark']="Fail";
                }
              }
              else{
                $post['remark']="Fail";
              }
            }





          if($post['s11th']=='' && $post['s11tht']=='' && $post['s11ut']=='' && $post['s11utt']==''){
            //echo "Enter Details Properly";
          }
          elseif(!is_null($post['s11th']) && $post['s11tht']=='' && $post['s11ut']=='' && $post['s11utt']==''){
            //echo "Enter Details Properly1";
          }
          elseif(!is_null($post['s11th']) && !is_null($post['s11tht']) && $post['s11ut']=='' && $post['s11utt']==''){
            //echo "Enter Details Properly2";
          }
          elseif(!is_null($post['s11th']) && !is_null($post['s11tht']) && !is_null($post['s11ut']) && $post['s11utt']==''){
            //echo "Enter Details Properly3";
          }
          else{
            if((($post['s11th']/$post['s11tht'])*100)>=40){$s++;}else{$d++;}
            if((($post['s11ut']/$post['s11utt'])*100)>=40){$s++;}else{$d++;}
          $count=$d+$s;
          if($s>=($count-1)){
            if((($post['s11th']/$post['s11tht'])*100)>=30){$c++;}
            if((($post['s11ut']/$post['s11utt'])*100)>=30){$c++;}
            if($c>=($count-1)){

              $post['remark']="Pass";
              }
            else{
              $post['remark']="Fail";
            }
          }
          else{echo $post['remark']="Fail";}
          }
          //Subject1 Sathi

          $post['os1']=$post['s1th']+$post['s1ut'];
          $post['ts1']=$post['s1tht']+$post['s1utt'];
          if($post['os1']<((40/100)*$post['ts1'])){
            if($c>=($count-1)){
              $post['s1g']="P";
              $post['s1p']=4*$post['s1c'];
            }
            else{
              $post['s1g']="F";
              $post['s1p']=0;
            }
          }
          elseif($post['os1']>=(40/100)*$post['ts1'] && $post['os1']<(45/100)*$post['ts1']){
            $post['s1g']="P";
            $post['s1p']=4*$post['s1c'];
          }
          elseif($post['os1']>=(45/100)*$post['ts1'] && $post['os1']<(50/100)*$post['ts1']){
            $post['s1g']="E";
            $post['s1p']=5*$post['s1c'];
          }
          elseif($post['os1']>=(50/100)*$post['ts1'] && $post['os1']<(60/100)*$post['ts1']){
            $post['s1g']="D";
            $post['s1p']=6*$post['s1c'];
          }
          elseif($post['os1']>=(60/100)*$post['ts1'] && $post['os1']<(70/100)*$post['ts1']){
            $post['s1g']="C";
            $post['s1p']=7*$post['s1c'];
          }
          elseif($post['os1']>=(70/100)*$post['ts1'] && $post['os1']<(75/100)*$post['ts1']){
            $post['s1g']="B";
            $post['s1p']=8*$post['s1c'];
          }
          elseif($post['os1']>=(75/100)*$post['ts1'] && $post['os1']<(80/100)*$post['ts1']){
            $post['s1g']="A";
            $post['s1p']=9*$post['s1c'];
          }
          elseif($post['os1']>=(80/100)*$post['ts1']){
            $post['s1g']="O";
            $post['s1p']=10*$post['s1c'];
          }

          //Subject2 Sathi

          $post['os2']=$post['s2th']+$post['s2ut'];
          $post['ts2']=$post['s2tht']+$post['s2utt'];
          if($post['os2']<((40/100)*$post['ts2'])){
            if($c>=($count-1)){
              $post['s2g']="P";
              $post['s2p']=4*$post['s2c'];
            }
            else{
              $post['s2g']="F";
              $post['s2p']=0;
            }
          }
          elseif($post['os2']>=(40/100)*$post['ts2'] && $post['os2']<(45/100)*$post['ts2']){
            $post['s2g']="P";
            $post['s2p']=4*$post['s2c'];
          }
          elseif($post['os2']>=(45/100)*$post['ts2'] && $post['os2']<(50/100)*$post['ts2']){
            $post['s2g']="E";
            $post['s2p']=5*$post['s2c'];
          }
          elseif($post['os2']>=(50/100)*$post['ts2'] && $post['os2']<(60/100)*$post['ts2']){
            $post['s2g']="D";
            $post['s2p']=6*$post['s2c'];
          }
          elseif($post['os2']>=(60/100)*$post['ts2'] && $post['os2']<(70/100)*$post['ts2']){
            $post['s2g']="C";
            $post['s2p']=7*$post['s2c'];
          }
          elseif($post['os2']>=(70/100)*$post['ts2'] && $post['os2']<(75/100)*$post['ts2']){
            $post['s2g']="B";
            $post['s2p']=8*$post['s2c'];
          }
          elseif($post['os2']>=(75/100)*$post['ts2'] && $post['os2']<(80/100)*$post['ts2']){
            $post['s2g']="A";
            $post['s2p']=9*$post['s2c'];
          }
          elseif($post['os2']>=(80/100)*$post['ts2']){
            $post['s2g']="O";
            $post['s2p']=10*$post['s2c'];
          }

          //Subject3 sathi

          $post['os3']=$post['s3th']+$post['s3ut'];
          $post['ts3']=$post['s3tht']+$post['s3utt'];
          if($post['os3']<((40/100)*$post['ts3'])){
            if($c>=($count-1)){
              $post['s3g']="P";
              $post['s3p']=4*$post['s3c'];
            }
            else{
              $post['s3g']="F";
              $post['s3p']=0;
            }
          }
          elseif($post['os3']>=(40/100)*$post['ts3'] && $post['os3']<(45/100)*$post['ts3']){
            $post['s3g']="P";
            $post['s3p']=4*$post['s3c'];
          }
          elseif($post['os3']>=(45/100)*$post['ts3'] && $post['os3']<(50/100)*$post['ts3']){
            $post['s3g']="E";
            $post['s3p']=5*$post['s3c'];
          }
          elseif($post['os3']>=(50/100)*$post['ts3'] && $post['os3']<(60/100)*$post['ts3']){
            $post['s3g']="D";
            $post['s3p']=6*$post['s3c'];
          }
          elseif($post['os3']>=(60/100)*$post['ts3'] && $post['os3']<(70/100)*$post['ts3']){
            $post['s3g']="C";
            $post['s3p']=7*$post['s3c'];
          }
          elseif($post['os3']>=(70/100)*$post['ts3'] && $post['os3']<(75/100)*$post['ts3']){
            $post['s3g']="B";
            $post['s3p']=8*$post['s3c'];
          }
          elseif($post['os3']>=(75/100)*$post['ts3'] && $post['os3']<(80/100)*$post['ts3']){
            $post['s3g']="A";
            $post['s3p']=9*$post['s3c'];
          }
          elseif($post['os3']>=(80/100)*$post['ts3']){
            $post['s3g']="O";
            $post['s3p']=10*$post['s3c'];
          }

          //Subject4 sathi

          $post['os4']=$post['s4th']+$post['s4ut'];
          $post['ts4']=$post['s4tht']+$post['s4utt'];
          if($post['os4']<((40/100)*$post['ts4'])){
            if($c>=($count-1)){
              $post['s4g']="P";
              $post['s4p']=4*$post['s4c'];
            }
            else{
              $post['s4g']="F";
              $post['s4p']=0;
            }
          }
          elseif($post['os4']>=(40/100)*$post['ts4'] && $post['os4']<(45/100)*$post['ts4']){
            $post['s4g']="P";
            $post['s4p']=4*$post['s4c'];
          }
          elseif($post['os4']>=(45/100)*$post['ts4'] && $post['os4']<(50/100)*$post['ts4']){
            $post['s4g']="E";
            $post['s4p']=5*$post['s4c'];
          }
          elseif($post['os4']>=(50/100)*$post['ts4'] && $post['os4']<(60/100)*$post['ts4']){
            $post['s4g']="D";
            $post['s4p']=6*$post['s4c'];
          }
          elseif($post['os4']>=(60/100)*$post['ts4'] && $post['os4']<(70/100)*$post['ts4']){
            $post['s4g']="C";
            $post['s4p']=7*$post['s4c'];
          }
          elseif($post['os4']>=(70/100)*$post['ts4'] && $post['os4']<(75/100)*$post['ts4']){
            $post['s4g']="B";
            $post['s4p']=8*$post['s4c'];
          }
          elseif($post['os4']>=(75/100)*$post['ts4'] && $post['os4']<(80/100)*$post['ts4']){
            $post['s4g']="A";
            $post['s4p']=9*$post['s4c'];
          }
          elseif($post['os4']>=(80/100)*$post['ts4']){
            $post['s4g']="O";
            $post['s4p']=10*$post['s4c'];
          }

          //Subject5 sathi

          $post['os5']=$post['s5th']+$post['s5ut'];
          $post['ts5']=$post['s5tht']+$post['s5utt'];
          if($post['os5']<((40/100)*$post['ts5'])){
            if($c>=($count-1)){
              $post['s5g']="P";
              $post['s5p']=4*$post['s5c'];
            }
            else{
              $post['s5g']="F";
              $post['s5p']=0;
            }
          }
          elseif($post['os5']>=(40/100)*$post['ts5'] && $post['os5']<(45/100)*$post['ts5']){
            $post['s5g']="P";
            $post['s5p']=4*$post['s5c'];
          }
          elseif($post['os5']>=(45/100)*$post['ts5'] && $post['os5']<(50/100)*$post['ts5']){
            $post['s5g']="E";
            $post['s5p']=5*$post['s5c'];
          }
          elseif($post['os5']>=(50/100)*$post['ts5'] && $post['os5']<(60/100)*$post['ts5']){
            $post['s5g']="D";
            $post['s5p']=6*$post['s5c'];
          }
          elseif($post['os5']>=(60/100)*$post['ts5'] && $post['os5']<(70/100)*$post['ts5']){
            $post['s5g']="C";
            $post['s5p']=7*$post['s5c'];
          }
          elseif($post['os5']>=(70/100)*$post['ts5'] && $post['os5']<(75/100)*$post['ts5']){
            $post['s5g']="B";
            $post['s5p']=8*$post['s5c'];
          }
          elseif($post['os5']>=(75/100)*$post['ts5'] && $post['os5']<(80/100)*$post['ts5']){
            $post['s5g']="A";
            $post['s5p']=9*$post['s5c'];
          }
          elseif($post['os5']>=(80/100)*$post['ts5']){
            $post['s5g']="O";
            $post['s5p']=10*$post['s5c'];
          }

          //Subject6 sathi

          $post['os6']=$post['s6th']+$post['s6ut'];
          $post['ts6']=$post['s6tht']+$post['s6utt'];
          if($post['os6']<((40/100)*$post['ts6'])){
            if($c>=($count-1)){
              $post['s6g']="P";
              $post['s6p']=4*$post['s6c'];
            }
            else{
              $post['s6g']="F";
              $post['s6p']=0;
            }
          }
          elseif($post['os6']>=(40/100)*$post['ts6'] && $post['os6']<(45/100)*$post['ts6']){
            $post['s6g']="P";
            $post['s6p']=4*$post['s6c'];
          }
          elseif($post['os6']>=(45/100)*$post['ts6'] && $post['os6']<(50/100)*$post['ts6']){
            $post['s6g']="E";
            $post['s6p']=5*$post['s6c'];
          }
          elseif($post['os6']>=(50/100)*$post['ts6'] && $post['os6']<(60/100)*$post['ts6']){
            $post['s6g']="D";
            $post['s6p']=6*$post['s6c'];
          }
          elseif($post['os6']>=(60/100)*$post['ts6'] && $post['os6']<(70/100)*$post['ts6']){
            $post['s6g']="C";
            $post['s6p']=7*$post['s6c'];
          }
          elseif($post['os6']>=(70/100)*$post['ts6'] && $post['os6']<(75/100)*$post['ts6']){
            $post['s6g']="B";
            $post['s6p']=8*$post['s6c'];
          }
          elseif($post['os6']>=(75/100)*$post['ts6'] && $post['os6']<(80/100)*$post['ts6']){
            $post['s6g']="A";
            $post['s6p']=9*$post['s6c'];
          }
          elseif($post['os6']>=(80/100)*$post['ts6']){
            $post['s6g']="O";
            $post['s6p']=10*$post['s6c'];
          }

          //Subject7 sathi

          $post['os7']=$post['s7th']+$post['s7ut'];
          $post['ts7']=$post['s7tht']+$post['s7utt'];
          if($post['os7']<((40/100)*$post['ts7'])){
            if($c>=($count-1)){
              $post['s7g']="P";
              $post['s7p']=4*$post['s7c'];
            }
            else{
              $post['s7g']="F";
              $post['s7p']=0;
            }
          }
          elseif($post['os7']>=(40/100)*$post['ts7'] && $post['os7']<(45/100)*$post['ts7']){
            $post['s7g']="P";
            $post['s7p']=4*$post['s7c'];
          }
          elseif($post['os7']>=(45/100)*$post['ts7'] && $post['os7']<(50/100)*$post['ts7']){
            $post['s7g']="E";
            $post['s7p']=5*$post['s7c'];
          }
          elseif($post['os7']>=(50/100)*$post['ts7'] && $post['os7']<(60/100)*$post['ts7']){
            $post['s7g']="D";
            $post['s7p']=6*$post['s7c'];
          }
          elseif($post['os7']>=(60/100)*$post['ts7'] && $post['os7']<(70/100)*$post['ts7']){
            $post['s7g']="C";
            $post['s7p']=7*$post['s7c'];
          }
          elseif($post['os7']>=(70/100)*$post['ts7'] && $post['os7']<(75/100)*$post['ts7']){
            $post['s7g']="B";
            $post['s7p']=8*$post['s7c'];
          }
          elseif($post['os7']>=(75/100)*$post['ts7'] && $post['os7']<(80/100)*$post['ts7']){
            $post['s7g']="A";
            $post['s7p']=9*$post['s7c'];
          }
          elseif($post['os7']>=(80/100)*$post['ts7']){
            $post['s7g']="O";
            $post['s7p']=10*$post['s7c'];
          }

          //Subject8 sathi

          $post['os8']=$post['s8th']+$post['s8ut'];
          $post['ts8']=$post['s8tht']+$post['s8utt'];
          if($post['os8']<((40/100)*$post['ts8'])){
            if($c>=($count-1)){
              $post['s8g']="P";
              $post['s8p']=4*$post['s8c'];
            }
            else{
              $post['s8g']="F";
              $post['s8p']=0;
            }
          }
          elseif($post['os8']>=(40/100)*$post['ts8'] && $post['os8']<(45/100)*$post['ts8']){
            $post['s8g']="P";
            $post['s8p']=4*$post['s8c'];
          }
          elseif($post['os8']>=(45/100)*$post['ts8'] && $post['os8']<(50/100)*$post['ts8']){
            $post['s8g']="E";
            $post['s8p']=5*$post['s8c'];
          }
          elseif($post['os8']>=(50/100)*$post['ts8'] && $post['os8']<(60/100)*$post['ts8']){
            $post['s8g']="D";
            $post['s8p']=6*$post['s8c'];
          }
          elseif($post['os8']>=(60/100)*$post['ts8'] && $post['os8']<(70/100)*$post['ts8']){
            $post['s8g']="C";
            $post['s8p']=7*$post['s8c'];
          }
          elseif($post['os8']>=(70/100)*$post['ts8'] && $post['os8']<(75/100)*$post['ts8']){
            $post['s8g']="B";
            $post['s8p']=8*$post['s8c'];
          }
          elseif($post['os8']>=(75/100)*$post['ts8'] && $post['os8']<(80/100)*$post['ts8']){
            $post['s8g']="A";
            $post['s8p']=9*$post['s8c'];
          }
          elseif($post['os8']>=(80/100)*$post['ts8']){
            $post['s8g']="O";
            $post['s8p']=10*$post['s8c'];
          }

          //Subject9 sathi

          $post['os9']=$post['s9th']+$post['s9ut'];
          $post['ts9']=$post['s9tht']+$post['s9utt'];
          if($post['os9']<((40/100)*$post['ts9'])){
            if($c>=($count-1)){
              $post['s9g']="P";
              $post['s9p']=4*$post['s9c'];
            }
            else{
              $post['s9g']="F";
              $post['s9p']=0;
            }
          }
          elseif($post['os9']>=(40/100)*$post['ts9'] && $post['os9']<(45/100)*$post['ts9']){
            $post['s9g']="P";
            $post['s9p']=4*$post['s9c'];
          }
          elseif($post['os9']>=(45/100)*$post['ts9'] && $post['os9']<(50/100)*$post['ts9']){
            $post['s9g']="E";
            $post['s9p']=5*$post['s9c'];
          }
          elseif($post['os9']>=(50/100)*$post['ts9'] && $post['os9']<(60/100)*$post['ts9']){
            $post['s9g']="D";
            $post['s9p']=6*$post['s9c'];
          }
          elseif($post['os9']>=(60/100)*$post['ts9'] && $post['os9']<(70/100)*$post['ts9']){
            $post['s9g']="C";
            $post['s9p']=7*$post['s9c'];
          }
          elseif($post['os9']>=(70/100)*$post['ts9'] && $post['os9']<(75/100)*$post['ts9']){
            $post['s9g']="B";
            $post['s9p']=8*$post['s9c'];
          }
          elseif($post['os9']>=(75/100)*$post['ts9'] && $post['os9']<(80/100)*$post['ts9']){
            $post['s9g']="A";
            $post['s9p']=9*$post['s9c'];
          }
          elseif($post['os9']>=(80/100)*$post['ts9']){
            $post['s9g']="O";
            $post['s9p']=10*$post['s9c'];
          }


          if($post['remark']=="Pass"){
            $totalcredit=$post['s1c']+$post['s2c']+$post['s3c']+$post['s4c']+$post['s5c']+$post['s6c']+$post['s7c']+$post['s8c']+$post['s9c'];
            $post['cgpa']=($post['s1p']+$post['s2p']+$post['s3p']+$post['s4p']+$post['s5p']+$post['s6p']+$post['s7p']+$post['s8p']+$post['s9p'])/$totalcredit;
          }
          else{
            $post['cgpa']=0;
          }

          //Subject10 sathi
          if($post['s10th']=='' && $post['s10tht']=='' && $post['s10ut']=='' && $post['s10utt']==''){
            //echo "Enter Details Properly";
          }
          elseif(!is_null($post['s10th']) && $post['s10tht']=='' && $post['s10ut']=='' && $post['s10utt']==''){
            //echo "Enter Details Properly1";
          }
          elseif(!is_null($post['s10th']) && !is_null($post['s10tht']) && $post['s10ut']=='' && $post['s10utt']==''){
            //echo "Enter Details Properly2";
          }
          elseif(!is_null($post['s10th']) && !is_null($post['s10tht']) && !is_null($post['s10ut']) && $post['s10utt']==''){
            //echo "Enter Details Properly3";
          }
          else{

            $post['os10']=$post['s10th']+$post['s10ut'];
            $post['ts10']=$post['s10tht']+$post['s10utt'];
            if($post['os10']<((40/100)*$post['ts10'])){
              if($c>=($count-1)){
                $post['s10g']="P";
                $post['s10p']=4*$post['s10c'];
              }
              else{
                $post['s10g']="F";
                $post['s10p']=0;
              }
            }
            elseif($post['os10']>=(40/100)*$post['ts10'] && $post['os10']<(45/100)*$post['ts10']){
              $post['s10g']="P";
              $post['s10p']=4*$post['s10c'];
            }
            elseif($post['os10']>=(45/100)*$post['ts10'] && $post['os10']<(50/100)*$post['ts10']){
              $post['s10g']="E";
              $post['s10p']=5*$post['s10c'];
            }
            elseif($post['os10']>=(50/100)*$post['ts10'] && $post['os10']<(60/100)*$post['ts10']){
              $post['s10g']="D";
              $post['s10p']=6*$post['s10c'];
            }
            elseif($post['os10']>=(60/100)*$post['ts10'] && $post['os10']<(70/100)*$post['ts10']){
              $post['s10g']="C";
              $post['s10p']=7*$post['s10c'];
            }
            elseif($post['os10']>=(70/100)*$post['ts10'] && $post['os10']<(75/100)*$post['ts10']){
              $post['s10g']="B";
              $post['s10p']=8*$post['s10c'];
            }
            elseif($post['os10']>=(75/100)*$post['ts10'] && $post['os10']<(80/100)*$post['ts10']){
              $post['s10g']="A";
              $post['s10p']=9*$post['s10c'];
            }
            elseif($post['os10']>=(80/100)*$post['ts10']){
              $post['s10g']="O";
              $post['s10p']=10*$post['s10c'];
            }

            if($post['remark']=="Pass"){
              $totalcredit=$post['s1c']+$post['s2c']+$post['s3c']+$post['s4c']+$post['s5c']+$post['s6c']+$post['s7c']+$post['s8c']+$post['s9c']+$post['s10c'];
              $post['cgpa']=($post['s1p']+$post['s2p']+$post['s3p']+$post['s4p']+$post['s5p']+$post['s6p']+$post['s7p']+$post['s8p']+$post['s9p']+$post['s10p'])/$totalcredit;
            }
            else{
              $post['cgpa']=0;
            }
          }




          //Subject11 Sathi

          if($post['s11th']=='' && $post['s11tht']=='' && $post['s11ut']=='' && $post['s11utt']==''){
            //echo "Enter Details Properly";
          }
          elseif(!is_null($post['s11th']) && $post['s11tht']=='' && $post['s11ut']=='' && $post['s11utt']==''){
            //echo "Enter Details Properly1";
          }
          elseif(!is_null($post['s11th']) && !is_null($post['s11tht']) && $post['s11ut']=='' && $post['s11utt']==''){
            //echo "Enter Details Properly2";
          }
          elseif(!is_null($post['s11th']) && !is_null($post['s11tht']) && !is_null($post['s11ut']) && $post['s11utt']==''){
            //echo "Enter Details Properly3";
          }
          else{
            //Subject11 sathi

            $post['os11']=$post['s11th']+$post['s11ut'];
            $post['ts11']=$post['s11tht']+$post['s11utt'];
            if($post['os11']<((40/100)*$post['ts11'])){
              if($c>=($count-1)){
                $post['s11g']="P";
                $post['s11p']=4*$post['s11c'];
              }
              else{
                $post['s11g']="F";
                $post['s11p']=0;
              }
            }
            elseif($post['os11']>=(40/100)*$post['ts11'] && $post['os11']<(45/100)*$post['ts11']){
              $post['s11g']="P";
              $post['s11p']=4*$post['s11c'];
            }
            elseif($post['os11']>=(45/100)*$post['ts11'] && $post['os11']<(50/100)*$post['ts11']){
              $post['s11g']="E";
              $post['s11p']=5*$post['s11c'];
            }
            elseif($post['os11']>=(50/100)*$post['ts11'] && $post['os11']<(60/100)*$post['ts11']){
              $post['s11g']="D";
              $post['s11p']=6*$post['s11c'];
            }
            elseif($post['os11']>=(60/100)*$post['ts11'] && $post['os11']<(70/100)*$post['ts11']){
              $post['s11g']="C";
              $post['s11p']=7*$post['s11c'];
            }
            elseif($post['os11']>=(70/100)*$post['ts11'] && $post['os11']<(75/100)*$post['ts11']){
              $post['s11g']="B";
              $post['s11p']=8*$post['s11c'];
            }
            elseif($post['os11']>=(75/100)*$post['ts11'] && $post['os11']<(80/100)*$post['ts11']){
              $post['s11g']="A";
              $post['s11p']=9*$post['s11c'];
            }
            elseif($post['os11']>=(80/100)*$post['ts11']){
              $post['s11g']="O";
              $post['s11p']=10*$post['s11c'];
            }


              if($post['s10th']=='' && $post['s10tht']=='' && $post['s10ut']=='' && $post['s10utt']==''){
                $post['s10p']=0;
                $post['s10c']=0;
              }
              elseif(!is_null($post['s10th']) && $post['s10tht']=='' && $post['s10ut']=='' && $post['s10utt']==''){
                $post['s10p']=0;
                $post['s10c']=0;
              }
              elseif(!is_null($post['s10th']) && !is_null($post['s10tht']) && $post['s10ut']=='' && $post['s10utt']==''){
                $post['s10p']=0;
                $post['s10c']=0;
              }
              elseif(!is_null($post['s10th']) && !is_null($post['s10tht']) && !is_null($post['s10ut']) && $post['s10utt']==''){
                $post['s10p']=0;
                $post['s10c']=0;
              }

            if($post['remark']=="Pass"){
              $totalcredit=$post['s1c']+$post['s2c']+$post['s3c']+$post['s4c']+$post['s5c']+$post['s6c']+$post['s7c']+$post['s8c']+$post['s9c']+$post['s10c']+$post['s11c'];
              $post['cgpa']=($post['s1p']+$post['s2p']+$post['s3p']+$post['s4p']+$post['s5p']+$post['s6p']+$post['s7p']+$post['s8p']+$post['s9p']+$post['s10p']+$post['s11p'])/$totalcredit;
            }
            else{
              $post['cgpa']=0;
            }
          }
          $this->load->model("loginmodel");
          if($this->loginmodel->updatecomp3stud($id,$post)){
            $this->session->set_flashdata('msg','Marks Successfully Updated');
            $this->session->set_flashdata('msg_class','alert-success');
          }
          else{
            $this->session->set_flashdata('msg','Marks is Not Updated');
            $this->session->set_flashdata('msg_class','alert-danger');
          }
          return redirect('adminsection/studentdetails');

        }
        else {
          //$this->session->set_flashdata('Login_failed','Enter the Details Properly.');
          return redirect("adminsection/editcomp3stud/{$id}");
          //$this->load->view('Users/studdetails/compsem3');
        }
      }








  }
  ?>
