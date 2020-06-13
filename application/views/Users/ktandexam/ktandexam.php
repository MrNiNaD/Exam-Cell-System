<?php include('header.php'); ?>
<div class="container">
  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>

  </div>
  <div class="text-center">
    <h4 class="lead" style="margin-top:30px;">Fill the option According to your Desire:</h4>
  </div>
  <hr class="my-4">

  <?php if($error=$this->session->flashdata('Login_failed')): ?>
    <div class="form-group">
      <div class="alert alert-danger">
        <?php echo $error; ?>

      </div>
    </div>
  <?php endif; ?>

  <?php if($status=$this->session->flashdata('msg')): ?>
    <?php  $msg_class=$this->session->flashdata('msg_class');?>
    <div class="form-group">
      <div class="alert <?= $msg_class ?>">
        <?php echo $status; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php echo form_open('adminsectionkt/ktexstudent'); ?>
  <div class="row">
    <div class="col-2" style="margin-top:10px">
    <label class="lead" for="inputDefault" >Branch:</label>
    <div style="margin-top:27px">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'COMP/EXTC/MECH','name'=>'branch','value'=>set_value("branch")]); ?>
    </div>

    </div>

    <div class="col-2" style="margin-top:10px">
    <label class="lead" for="inputDefault" >Sem:</label>
    <div style="margin-top:27px">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'3/4/5/6','name'=>'Sem','value'=>set_value("sem")]); ?>
    </div>

    </div>

    <div class="col-3" style="margin-top:10px">
    <label class="lead" for="inputDefault" >Year in which students is appearing for:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'e.g. 2018','name'=>'year','value'=>set_value("year")]); ?>
    </div>

    <div class="col-2" style="margin-top:10px">
      <label class="lead" for="inputDefault" >Appearing for ATKT or Regular:</label><br>
      <label class="radio-inline">
      <input type="radio" name="ktorr" value="Regular" checked>Regular
      </label>
      <label class="radio-inline">
      <input type="radio" name="ktorr" value="ATKT">ATKT
      </label>
    </div>

    <div class="col-3" style="margin-top:10px">
      <label class="lead" for="inputDefault" >Appearing for exam in 1st Half/2nd Half:</label><br>
      <label class="radio-inline">
      <input type="radio" name="f/s" value="1sthalf" checked>1stHalf
      </label>
      <label class="radio-inline">
      <input type="radio" name="f/s" value="2ndhalf">2ndHalf
      </label>
    </div>
  </div>


  <div class="col-6" style="margin-top:20px;">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Submit']); ?>
  </div>



</div>
<?php include('footer.php'); ?>
