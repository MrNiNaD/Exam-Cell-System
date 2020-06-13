<?php include('header.php'); ?>
<div class="container">
  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('studentsection/studentlogout') ?>">Logout</a>

  </div>
  <div class="text-center">
    <h4 class="lead" style="margin-top:30px;">Enter your Details</h4>
  </div>

    <?php if($status=$this->session->flashdata('msg')): ?>
      <?php  $msg_class=$this->session->flashdata('msg_class');?>
      <div class="form-group">
        <div class="alert <?= $msg_class ?>">
          <?php echo $status; ?>
        </div>
      </div>
    <?php endif; ?>

  <hr class="my-4">

  <div class="card">

    <div class="text-center" >
      <h4 class="card-header bg-primary text-white">Note:</h4>
    </div>
        <div class="card-body">

        <div class="text-justify">
          <p><b>Recheck everything before submiting or else you will responsible for consequences.Check Images specially before uploading.</b></p>
        </div>

        </div>


    <hr class="my-4">


  <?php echo form_open_multipart('studentsection/srevaluation'); ?>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >Select your Own Photo:</label><br>
  <?php echo form_upload(['name'=>'user_photo']); ?>
  <?php echo form_error('user_photo','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >FirstName:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'fname','value'=>set_value("fname")]); ?>
  <?php echo form_error('fname','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >MiddleName:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'mname','value'=>set_value("mname")]); ?>
  <?php echo form_error('mname','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >SurName:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'sname','value'=>set_value("sname")]); ?>
  <?php echo form_error('sname','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >Your Hallticket No.:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'hall_ticket','value'=>set_value("hall_ticket")]); ?>
  <?php echo form_error('hall_ticket','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
    <label class="lead" for="inputDefault" >Gender:</label><br>
    <label class="radio-inline">
    <input type="radio" name="gender" value="male" checked>Male
    </label>
    <label class="radio-inline">
    <input type="radio" name="gender" value="female">Female
    </label>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >Year in which you are appeared for Exam:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'e.g. 2018','name'=>'year','value'=>set_value("year")]); ?>
  <?php echo form_error('year','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >Sem in which you are appeared for Exam:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'e.g. 3','name'=>'Sem','value'=>set_value("Sem")]); ?>
  <?php echo form_error('Sem','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
    <label class="lead" for="inputDefault" >Appeared for ATKT or Regular:</label><br>
    <label class="radio-inline">
    <input type="radio" name="ktorr" value="Regular" checked>Regular
    </label>
    <label class="radio-inline">
    <input type="radio" name="ktorr" value="ATKT">ATKT
    </label>
  </div>

  <div class="col-6" style="margin-top:10px">
    <label class="lead" for="inputDefault" >Appeared for exam in 1st Half/2nd Half:</label><br>
    <label class="radio-inline">
    <input type="radio" name="fs" value="1sthalf" checked>1stHalf
    </label>
    <label class="radio-inline">
    <input type="radio" name="fs" value="2ndhalf">2ndHalf
    </label>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >Branch:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'branch','value'=>set_value("branch")]); ?>
  <?php echo form_error('branch','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >D.O.B.:</label>
  <?php echo form_input(['class'=>'form-control','type'=>'date','placeholder'=>'should be in 28-07-1999 format','name'=>'dob','value'=>set_value("dob")]); ?>
  <?php echo form_error('dob','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >Contact Number:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'contact','value'=>set_value("contact")]); ?>
  <?php echo form_error('contact','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >Address:</label>
  <?php echo form_textarea(['class'=>'form-control','name'=>'address','value'=>set_value("address")]); ?>
  <?php echo form_error('address','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >Transaction ID:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'transaction_id','value'=>set_value("transaction_id")]); ?>
  <?php echo form_error('transaction_id','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:10px">
  <label class="lead" for="inputDefault" >Select your Transaction Screenshot:</label><br>
  <?php echo form_upload(['name'=>'transaction_ss']); ?>
  <?php echo form_error('transaction_ss','<div class="text-danger">','</div>'); ?>
  </div>

  <hr class="my-4">

  <div class="text-center">
    <h4 class="lead" style="margin-top:30px;">Enter the Subject which you want Revaluate:</h4>
  </div>

  <hr class="my-4">

  <div class="row">
    <div class="col-3" style="margin-top:10px">
      <div class="text-center">
        <label for="inputDefault" >Subject Name:</label>
      </div>
      <?php echo form_input(['class'=>'form-control','name'=>'s1','value'=>set_value("s1")]); ?>
    </div>

    <div class="col-2" style="margin-top:10px">
      <div class="text-center">
        <label for="inputDefault" >TH:</label>
      </div>
      <?php echo form_input(['class'=>'form-control','name'=>'s1th','placeholder'=>'Type Y/N','value'=>set_value("s1th")]); ?>
    </div>

    <div class="col-2" style="margin-top:10px">
      <div class="text-center">
        <label for="inputDefault" >UT:</label>
      </div>
      <?php echo form_input(['class'=>'form-control','name'=>'s1ut','placeholder'=>'Type Y/N','value'=>set_value("s1ut")]); ?>
    </div>

    <div class="col-2" style="margin-top:10px">
      <div class="text-center">
        <label for="inputDefault" >TW:</label>
      </div>
      <?php echo form_input(['class'=>'form-control','name'=>'s1tw','placeholder'=>'Type Y/N','value'=>set_value("s1tw")]); ?>
    </div>

    <div class="col-2" style="margin-top:10px">
      <div class="text-center">
        <label for="inputDefault" >Oral/Practical:</label>
      </div>
      <?php echo form_input(['class'=>'form-control','name'=>'s1op','placeholder'=>'Type Y/N','value'=>set_value("s1op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s2','value'=>set_value("s2")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s2th','placeholder'=>'Type Y/N','value'=>set_value("s2th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s2ut','placeholder'=>'Type Y/N','value'=>set_value("s2ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s2tw','placeholder'=>'Type Y/N','value'=>set_value("s2tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s2op','placeholder'=>'Type Y/N','value'=>set_value("s2op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s3','value'=>set_value("s3")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s3th','placeholder'=>'Type Y/N','value'=>set_value("s3th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s3ut','placeholder'=>'Type Y/N','value'=>set_value("s3ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s3tw','placeholder'=>'Type Y/N','value'=>set_value("s3tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s3op','placeholder'=>'Type Y/N','value'=>set_value("s3op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s4','value'=>set_value("s4")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s4th','placeholder'=>'Type Y/N','value'=>set_value("s4th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s4ut','placeholder'=>'Type Y/N','value'=>set_value("s4ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s4tw','placeholder'=>'Type Y/N','value'=>set_value("s4tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s4op','placeholder'=>'Type Y/N','value'=>set_value("s4op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s5','value'=>set_value("s5")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s5th','placeholder'=>'Type Y/N','value'=>set_value("s5th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s5ut','placeholder'=>'Type Y/N','value'=>set_value("s5ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s5tw','placeholder'=>'Type Y/N','value'=>set_value("s5tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s5op','placeholder'=>'Type Y/N','value'=>set_value("s5op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s6','value'=>set_value("s6")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s6th','placeholder'=>'Type Y/N','value'=>set_value("s6th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s6ut','placeholder'=>'Type Y/N','value'=>set_value("s6ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s6tw','placeholder'=>'Type Y/N','value'=>set_value("s6tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s6op','placeholder'=>'Type Y/N','value'=>set_value("s6op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s7','value'=>set_value("s7")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s7th','placeholder'=>'Type Y/N','value'=>set_value("s7th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s7ut','placeholder'=>'Type Y/N','value'=>set_value("s7ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s7tw','placeholder'=>'Type Y/N','value'=>set_value("s7tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s7op','placeholder'=>'Type Y/N','value'=>set_value("s7op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s8','value'=>set_value("s8")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s8th','placeholder'=>'Type Y/N','value'=>set_value("s8th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s8ut','placeholder'=>'Type Y/N','value'=>set_value("s8ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s8tw','placeholder'=>'Type Y/N','value'=>set_value("s8tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s8op','placeholder'=>'Type Y/N','value'=>set_value("s8op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s9','value'=>set_value("s9")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s9th','placeholder'=>'Type Y/N','value'=>set_value("s9th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s9ut','placeholder'=>'Type Y/N','value'=>set_value("s9ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s9tw','placeholder'=>'Type Y/N','value'=>set_value("s9tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s9op','placeholder'=>'Type Y/N','value'=>set_value("s9op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s10','value'=>set_value("s10")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s10th','placeholder'=>'Type Y/N','value'=>set_value("s10th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s10ut','placeholder'=>'Type Y/N','value'=>set_value("s10ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s10tw','placeholder'=>'Type Y/N','value'=>set_value("s10tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s10op','placeholder'=>'Type Y/N','value'=>set_value("s10op")]); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-3">
      <?php echo form_input(['class'=>'form-control','name'=>'s11','value'=>set_value("s11")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s11th','placeholder'=>'Type Y/N','value'=>set_value("s11th")]); ?>
    </div>

    <div class="col-2">
      <?php echo form_input(['class'=>'form-control','name'=>'s11ut','placeholder'=>'Type Y/N','value'=>set_value("s11ut")]); ?>
    </div>

    <div class="col-2" >
      <?php echo form_input(['class'=>'form-control','name'=>'s11tw','placeholder'=>'Type Y/N','value'=>set_value("s11tw")]); ?>
    </div>

    <div class="col-2">

      <?php echo form_input(['class'=>'form-control','name'=>'s11op','placeholder'=>'Type Y/N','value'=>set_value("s11op")]); ?>
    </div>

  </div>

  <div class="col-6" style="margin-top:20px;">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Submit']); ?>
  </div>

</div>
<?php include('footer.php'); ?>
