<?php include('header.php'); ?>
<div class="container">
    <div align="right" style="margin-top:20px;">

        <a class="btn btn-danger" href="<?php echo base_url('staffsection/stafflogout') ?>">Logout</a>

    </div>

  <h3 class="lead" style="margin-top:30px;">Select the option of your desire:</h3>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <!-- adminsection/studentdetails -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('staffsection/compsem3') ?>" role="button" style="margin-top:30px;">Add Student Marks</a>
  </div>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('staffsection/compsem3m') ?>" role="button" style="margin-top:10px;">View Student Marks</a>
  </div>

<?php include('footer.php'); ?>
