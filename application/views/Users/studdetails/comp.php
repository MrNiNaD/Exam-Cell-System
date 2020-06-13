<?php include('header.php'); ?>
<div class="container">

  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>
    
  </div>

  <h3 class="lead" style="margin-top:30px;">Select the option according to your desire:</h3>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('adminsection/studentdetails') ?>" role="button" style="margin-top:30px;">SEM III</a>

  </div>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('') ?>" role="button" style="margin-top:10px;">SEM IV</a>
  </div>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('') ?>" role="button" style="margin-top:10px;">SEM V</a>
  </div>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('') ?>" role="button" style="margin-top:10px;">SEM VI</a>
  </div>
</div>


<?php include('footer.php'); ?>
