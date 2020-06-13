<?php include('header.php'); ?>
<div class="container">
  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('studentsection/studentlogout') ?>">Logout</a>

  </div>
  <div class="text-center">
    <h4 class="lead" style="margin-top:30px;">Fill the Details:</h4>
  </div>

  <hr class="my-4">

  <?php if($status=$this->session->flashdata('msg')): ?>
    <?php  $msg_class=$this->session->flashdata('msg_class');?>
    <div class="form-group">
      <div class="alert <?= $msg_class ?>">
        <?php echo $status; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if($error=$this->session->flashdata('Login_failed')): ?>
    <div class="form-group">
      <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php echo form_open('studentsection/schangepass'); ?>

  <div class="col-6">
  <label class="lead" for="inputDefault" >Enter OLD Password:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'opass','value'=>set_value("opass")]); ?>
  <?php echo form_error('opass','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6">
  <label class="lead" for="inputDefault" >Enter NEW Password:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'npass','value'=>set_value("npass")]); ?>
  <?php echo form_error('npass','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6">
  <label class="lead" for="inputDefault" >Re-Enter NEW Password:</label>
  <?php echo form_input(['class'=>'form-control','name'=>'renpass','value'=>set_value("renpass")]); ?>
  <?php echo form_error('renpass','<div class="text-danger">','</div>'); ?>
  </div>

  <div class="col-6" style="margin-top:20px;">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Submit']); ?>
  </div>

</div>

<?php include('footer.php'); ?>
