<?php include('header.php'); ?>
<div class="container">
  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>

  </div>
  <div class="text-center">
    <h4 class="lead" style="margin-top:30px;">Add Marks Students according his K.T. Performance:</h4>
  </div>

  <hr class="my-4">

  <?php if($error=$this->session->flashdata('Login_failed')): ?>
    <div class="form-group">
      <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php echo form_open("adminsectionkt/insertcomp3studkt/{$studdata->id}"); ?>
  <div class="col-6">
  <label class="lead" for="inputDefault" >Enter the Hallticket no. of Student:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'HallTicket No.','name'=>'hall_ticket','value'=>set_value("hallticket")]); ?>
  <?php echo form_error('hall_ticket','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the FirstName of Student:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'FirstName','name'=>'fname','value'=>set_value("fname",$studdata->fname)]); ?>
  <?php echo form_error('fname','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the MiddleName of Student:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'MiddleName','name'=>'mname','value'=>set_value("mname",$studdata->mname)]); ?>
  <?php echo form_error('mname','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the LastName of Student:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'LastName','name'=>'lname','value'=>set_value("lname",$studdata->lname)]); ?>
  <?php echo form_error('lname','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Duration when Exam is Held In:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'Here Input should be like : for eg. May2018','name'=>'heldin','value'=>set_value("heldin",$studdata->heldin)]); ?>
  <?php echo form_error('heldin','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Branch of Student:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'Here Input should be like : for eg. COMP,CIVIL etc.','name'=>'branch','value'=>set_value("branch",$studdata->branch)]); ?>
  <?php echo form_error('branch','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Sem in which Student is appeared for:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'Value must be in Integer','name'=>'sem','value'=>set_value("sem",$studdata->sem)]); ?>
  <?php echo form_error('sem','<div class="text-danger">','</div>'); ?>
  </div>

  <hr class="my-4">
  <div class="text-center">
  <h4 class="lead" style="margin-top:10px;">Enter the details of Theory and UT papers:</h4>
  </div>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 1:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s1','value'=>set_value("s1",$studdata->s1)]); ?>
  <?php echo form_error('s1','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 1 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s1th','value'=>set_value("s1th",$studdata->s1th)]); ?>
    <?php echo form_error('s1th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 1 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s1tht','value'=>set_value("s1tht",$studdata->s1tht)]); ?>
    <?php echo form_error('s1tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 1 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s1ut','value'=>set_value("s1ut",$studdata->s1ut)]); ?>
    <?php echo form_error('s1ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 1 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s1utt','value'=>set_value("s1utt",$studdata->s1utt)]); ?>
    <?php echo form_error('s1utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 1 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s1c','value'=>set_value("s1c",$studdata->s1c)]); ?>
    <?php echo form_error('s1c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 2:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s2','value'=>set_value("s2",$studdata->s2)]); ?>
  <?php echo form_error('s2','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 2 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s2th','value'=>set_value("s2th",$studdata->s2th)]); ?>
    <?php echo form_error('s2th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 2 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s2tht','value'=>set_value("s2tht",$studdata->s2tht)]); ?>
    <?php echo form_error('s2tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 2 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s2ut','value'=>set_value("s2ut",$studdata->s2ut)]); ?>
    <?php echo form_error('s2ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 2 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s2utt','value'=>set_value("s2utt",$studdata->s2utt)]); ?>
    <?php echo form_error('s2utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 2 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s2c','value'=>set_value("s2c",$studdata->s2c)]); ?>
    <?php echo form_error('s2c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 3:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s3','value'=>set_value("s3",$studdata->s3)]); ?>
  <?php echo form_error('s3','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 3 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s3th','value'=>set_value("s3th",$studdata->s3th)]); ?>
    <?php echo form_error('s3th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 3 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s3tht','value'=>set_value("s3tht",$studdata->s3tht)]); ?>
    <?php echo form_error('s3tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 3 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s3ut','value'=>set_value("s3ut",$studdata->s3ut)]); ?>
    <?php echo form_error('s3ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 3 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s3utt','value'=>set_value("s3utt",$studdata->s3utt)]); ?>
    <?php echo form_error('s3utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 3 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s3c','value'=>set_value("s3c",$studdata->s3c)]); ?>
    <?php echo form_error('s3c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 4:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s4','value'=>set_value("s4",$studdata->s4)]); ?>
  <?php echo form_error('s4','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 4 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s4th','value'=>set_value("s4th",$studdata->s4th)]); ?>
    <?php echo form_error('s4th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 4 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s4tht','value'=>set_value("s4tht",$studdata->s4tht)]); ?>
    <?php echo form_error('s4tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 4 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s4ut','value'=>set_value("s4ut",$studdata->s4ut)]); ?>
    <?php echo form_error('s4ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 4 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s4utt','value'=>set_value("s4utt",$studdata->s4utt)]); ?>
    <?php echo form_error('s4utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 4 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s4c','value'=>set_value("s4c",$studdata->s4c)]); ?>
    <?php echo form_error('s4c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 5:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s5','value'=>set_value("s5",$studdata->s5)]); ?>
  <?php echo form_error('s5','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 5 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s5th','value'=>set_value("s5th",$studdata->s5th)]); ?>
    <?php echo form_error('s5th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 5 in Theory:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s5tht','value'=>set_value("s5tht",$studdata->s5tht)]); ?>
    <?php echo form_error('s5tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 5 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s5ut','value'=>set_value("s5ut",$studdata->s5ut)]); ?>
    <?php echo form_error('s5ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 5 in UT:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s5utt','value'=>set_value("s5utt",$studdata->s5utt)]); ?>
    <?php echo form_error('s5utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 5 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s5c','value'=>set_value("s5c",$studdata->s5c)]); ?>
    <?php echo form_error('s5c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <hr class="my-4">
  <div class="text-center">
  <h4 class="lead" style="margin-top:10px;">Enter the details of TermWork and ORAL/PRACTICAL:</h4>
  </div>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 6:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s6','value'=>set_value("s6",$studdata->s6)]); ?>
  <?php echo form_error('s6','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 6 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s6th','value'=>set_value("s6th",$studdata->s6th)]); ?>
    <?php echo form_error('s6th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 6 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','name'=>'s6tht','value'=>set_value("s6tht",$studdata->s6tht)]); ?>
    <?php echo form_error('s6tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 6 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s6ut','value'=>set_value("s6ut",$studdata->s6ut)]); ?>
    <?php echo form_error('s6ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 6 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s6utt','value'=>set_value("s6utt",$studdata->s6utt)]); ?>
    <?php echo form_error('s6utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 6 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s6c','value'=>set_value("s6c",$studdata->s6c)]); ?>
    <?php echo form_error('s6c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 7:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s7','value'=>set_value("s7",$studdata->s7)]); ?>
  <?php echo form_error('s7','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 7 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s7th','value'=>set_value("s7th",$studdata->s7th)]); ?>
    <?php echo form_error('s7th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 7 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','name'=>'s7tht','value'=>set_value("s7tht",$studdata->s7tht)]); ?>
    <?php echo form_error('s7tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 7 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s7ut','value'=>set_value("s7ut",$studdata->s7ut)]); ?>
    <?php echo form_error('s7ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 7 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s7utt','value'=>set_value("s7utt",$studdata->s7utt)]); ?>
    <?php echo form_error('s7utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 7 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s7c','value'=>set_value("s7c",$studdata->s7c)]); ?>
    <?php echo form_error('s7c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 8:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s8','value'=>set_value("s8",$studdata->s8)]); ?>
  <?php echo form_error('s6','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 8 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s8th','value'=>set_value("s8th",$studdata->s8th)]); ?>
    <?php echo form_error('s8th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 8 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','name'=>'s8tht','value'=>set_value("s8tht",$studdata->s8tht)]); ?>
    <?php echo form_error('s8tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 8 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s8ut','value'=>set_value("s8ut",$studdata->s8ut)]); ?>
    <?php echo form_error('s8ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 8 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s8utt','value'=>set_value("s8utt",$studdata->s8utt)]); ?>
    <?php echo form_error('s8utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 7 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s8c','value'=>set_value("s8c",$studdata->s8c)]); ?>
    <?php echo form_error('s8c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 9:</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s9','value'=>set_value("s9",$studdata->s9)]); ?>
  <?php echo form_error('s9','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 9 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s9th','value'=>set_value("s9th",$studdata->s9th)]); ?>
    <?php echo form_error('s9th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 9 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','name'=>'s9tht','value'=>set_value("s9tht",$studdata->s9tht)]); ?>
    <?php echo form_error('s9tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 9 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s9ut','value'=>set_value("s9ut",$studdata->s9ut)]); ?>
    <?php echo form_error('s9ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 9 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s9utt','value'=>set_value("s9utt",$studdata->s9utt)]); ?>
    <?php echo form_error('s9utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 9 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s9c','value'=>set_value("s9c",$studdata->s9c)]); ?>
    <?php echo form_error('s9c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <?php if($studdata->s10!==""){?>
  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 10:</label>
  <label class="" for="inputDefault">Note:If you dont have 10th subject then keep this Subject as it is</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10','value'=>set_value("s10",$studdata->s10)]); ?>
  <?php echo form_error('s10','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">

    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 10 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10th','value'=>set_value("s10th",$studdata->s10th)]); ?>
    <?php echo form_error('s10th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 10 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','name'=>'s10tht','value'=>set_value("s10tht",$studdata->s10tht)]); ?>
    <?php echo form_error('s10tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 10 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10ut','value'=>set_value("s10ut",$studdata->s10ut)]); ?>
    <?php echo form_error('s10ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 10 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10utt','value'=>set_value("s10utt",$studdata->s10utt)]); ?>
    <?php echo form_error('s10utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 10 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10c','value'=>set_value("s10c",$studdata->s10c)]); ?>
    <?php echo form_error('s10c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

<?php }else{ ?>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 10:</label>
  <label class="" for="inputDefault"><b>Note:</b>If you dont have 10th subject then dont fill this Subject data. Keep it blank.</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10','value'=>set_value("s10")]); ?>
  <?php echo form_error('s10','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">

    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 10 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10th','value'=>set_value("s10th")]); ?>
    <?php echo form_error('s10th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 10 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','name'=>'s10tht','value'=>set_value("s10tht")]); ?>
    <?php echo form_error('s10tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 10 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10ut','value'=>set_value("s10ut")]); ?>
    <?php echo form_error('s10ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 10 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10utt','value'=>set_value("s10utt")]); ?>
    <?php echo form_error('s10utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 10 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s10c','value'=>set_value("s10c")]); ?>
    <?php echo form_error('s10c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>
  <?php } ?>

  <?php if($studdata->s11!==""){?>
  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 11:</label>
  <label class="" for="inputDefault">Note:If you dont have 11th subject then keep this Subject as it is</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11','value'=>set_value("s11",$studdata->s11)]); ?>
  <?php echo form_error('s11','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">

    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 11 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11th','value'=>set_value("s11th",$studdata->s11th)]); ?>
    <?php echo form_error('s11th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 11 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','name'=>'s11tht','value'=>set_value("s11tht",$studdata->s11tht)]); ?>
    <?php echo form_error('s11tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 11 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11ut','value'=>set_value("s11ut",$studdata->s11ut)]); ?>
    <?php echo form_error('s11ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 11 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11utt','value'=>set_value("s11utt",$studdata->s11utt)]); ?>
    <?php echo form_error('s11utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 11 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11c','value'=>set_value("s11c",$studdata->s11c)]); ?>
    <?php echo form_error('s11c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

<?php }else{ ?>

  <hr class="my-4">

  <div class="col-6">
  <label class="lead" for="inputDefault" style="margin-top:20px;">Enter the Name of Subject 11:</label>
  <label class="" for="inputDefault"><b>Note:</b>If you dont have 11th subject then dont fill this Subject data. Keep it blank.</label>
  <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11','value'=>set_value("s11")]); ?>
  <?php echo form_error('s11','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="row">
    <div class="col-3">

    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 11 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11th','value'=>set_value("s11th")]); ?>
    <?php echo form_error('s11th','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 11 in Termwork:</label>
    <?php echo form_input(['class'=>'form-control','name'=>'s11tht','value'=>set_value("s11tht")]); ?>
    <?php echo form_error('s11tht','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Marks acquired in Subject 11 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11ut','value'=>set_value("s11ut")]); ?>
    <?php echo form_error('s11ut','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Out of marks of Subject 11 in Oral/Practical:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11utt','value'=>set_value("s11utt")]); ?>
    <?php echo form_error('s11utt','<div class="text-danger">','</div>'); ?>
    </div>
    <div class="col-3">
    <label class="" for="inputDefault" style="margin-top:20px;">Subject 11 Credit:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'','name'=>'s11c','value'=>set_value("s11c")]); ?>
    <?php echo form_error('s11c','<div class="text-danger">','</div>'); ?>
    </div>
  </div>
<?php } ?>


  <div class="col-6" style="margin-top:20px;">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Add Marks']); ?>
  </div>

</div>

<?php include('footer.php'); ?>
