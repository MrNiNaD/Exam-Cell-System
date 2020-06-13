<?php include('header.php'); ?>


<div class="container">
  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('studentsection/studentlogout') ?>">Logout</a>

  </div>

  <h3 class="lead" style="margin-top:30px;">Select the option according to your desire:</h3>

  <?php if($slist->marksheet=="on"): ?>
    <div class="form-group">
        <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
        <a class="btn btn-primary btn-block" href="<?php echo site_url('studentsection/compsem3') ?>" role="button" style="margin-top:30px;">View Marksheet</a>
    </div>
  <?php endif; ?>

  <?php if($slist->xform=="on"): ?>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('studentsection/ktexform') ?>" role="button" style="margin-top:10px;">Fill Exam Form or KT Form</a>
  </div>
  <?php endif; ?>

  <?php if($slist->rform=="on"): ?>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('studentsection/revaluation') ?>" role="button" style="margin-top:10px;">Fill Revaluation Form</a>
  </div>
  <?php endif; ?>

  <?php if($slist->ht=="on"): ?>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('studentsection/hallticket') ?>" role="button" style="margin-top:10px;">Hall Ticket</a>
  </div>
  <?php endif; ?>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-warning btn-block" href="<?php echo site_url('studentsection/payment') ?>" role="button" style="margin-top:10px;">Click here inorder to do Payment</a>
  </div>

  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-danger btn-block" href="<?php echo site_url('studentsection/changepassword') ?>" role="button" style="margin-top:10px;">Change Password</a>
  </div>


</div>


<?php include('footer.php'); ?>
