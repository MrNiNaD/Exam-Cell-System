<?php include('header.php'); ?>
<div class="container">

  <h3 class="lead" style="margin-top:30px;">Select the option according to your stream:</h3>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('Welcome/slogin1') ?>" role="button" style="margin-top:30px;">If you are from COMP then click here.</a>
  </div>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="<?php echo site_url('streams/mechstud') ?>" role="button" style="margin-top:10px;">If you are from MECH then click here.</a>
  </div>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="#" role="button" style="margin-top:10px;">If you are from CIVIL then click here.</a>
  </div>
  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <a class="btn btn-primary btn-block" href="#" role="button" style="margin-top:10px;">If you are from EXTC then click here.</a>
  </div>
</div>


<?php include('footer.php'); ?>
