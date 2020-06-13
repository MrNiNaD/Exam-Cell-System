<?php include('header.php'); ?>
<div class="container">
    <div align="right" style="margin-top:20px;">

        <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>

    </div>


  <h3 class="lead" style="margin-top:30px;">Select your desire liablities and then Apply:</h3>
  <?php if($status=$this->session->flashdata('msg')): ?>
    <?php  $msg_class=$this->session->flashdata('msg_class');?>
    <div class="form-group">
      <div class="alert <?= $msg_class ?>">
        <?php echo $status; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php echo form_open('adminsection/statusapply'); ?>
  <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="marksheet" value="on">To Enable Marksheet
    </label>
  </div>

  <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="xform" value="on">To Enable Exam Form and ATKT Form
    </label>
  </div>

  <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="rform" value="on">To Enable Revaluation Form
    </label>
  </div>

  <!-- <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="ktform" value="on">To Enable ATKT Form
    </label>
  </div> -->

  <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="ht" value="on">To Enable Provision of HallTicket
    </label>
  </div>

  <!-- <div class="form-group" style="margin-top:10px;">
  <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" name="marksheet" id="customSwitch1" checked="">
    <label class="custom-control-label" for="customSwitch1">Toggle this switch element to Enable Marksheet</label>
  </div>

  <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input toggle-off" name="xform" id="customSwitch1" checked="">
    <label class="custom-control-label" for="customSwitch1">Toggle this switch element to Enable Exam Form</label>
  </div>


  <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" name="rform" id="customSwitch1" checked="">
    <label class="custom-control-label" for="customSwitch1">Toggle this switch element to Enable Revaluation Form</label>
  </div>

  <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" name="ktform" id="customSwitch1" checked="">
    <label class="custom-control-label" for="customSwitch1">Toggle this switch element to Enable ATKT Form</label>
  </div>

  <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" name="ht" id="customSwitch" checked="">
    <label class="custom-control-label" for="customSwitch1">Toggle this switch element to Enable HallTicket Provision</label>
  </div> -->

  <div class="form-group" style="margin-top:10px;">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Apply']); ?>
  </div>
</div>




<?php include('footer.php'); ?>
