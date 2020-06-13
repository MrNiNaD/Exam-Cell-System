<?php include('header.php'); ?>
<div class="container">
    <div align="right" style="margin-top:20px;">
        <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>
    </div>


  <h3 class="lead" style="margin-top:30px;">Select the option of your desire:</h3>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <!-- adminsection/studentdetails -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/studentdetails') ?>" role="button" style="margin-top:30px;">Student Marks Details</a>
  </div>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <!-- adminsection/studentdetails -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsectionkt/compsem3') ?>" role="button" style="margin-top:10px;">Add Marks of Student who appeared for ATKT Exam</a>
  </div>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <!-- adminsection/studentdetails -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsectionkt/revallist') ?>" role="button" style="margin-top:10px;">Click here in order to Manage Student who apply for REVALUATION</a>
  </div>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <!-- adminsection/studentdetails -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsectionkt/ktandexam') ?>" role="button" style="margin-top:10px;">Click here Inorder to Manipulate Student ATKT and Exam Data</a>
  </div>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <!-- adminsection/studentdetails -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/hallticketsub') ?>" role="button" style="margin-top:10px;">Click here Inorder to Manipulate Exam Date and Time</a>
  </div>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <!-- adminsection/studentdetails -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/status') ?>" role="button" style="margin-top:10px;">Enable and Disable liablities of Student Section</a>
  </div>

  <hr class="my-4">

  <div class="row">
    <div class="col-6">
      <div class="form-group">
          <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
          <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/studentregister') ?>" role="button">Student Register</a>
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
          <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
          <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/sloginlist') ?>" role="button">Manage Student Login</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="form-group">
          <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
          <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/adminregister') ?>" role="button" >Admin Register</a>
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
          <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
          <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/aloginlist') ?>" role="button">Manage Admin Login</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="form-group">
          <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
          <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/staffregister') ?>" role="button" >Staff Register</a>
      </div>
    </div>
    <div class="col-6">
      <div class="form-group">
          <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
          <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/stloginlist') ?>" role="button">Manage Staff Login</a>
      </div>
    </div>
  </div>


<?php include('footer.php'); ?>
