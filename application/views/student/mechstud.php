<?php include('header.php'); ?>
<!-- ha student login cha page aahe.. fakt ha mi Users folder mahde thevlay bakki sagle(Mech,extc and civil) view chya student folder mahde aahe.. -->
<div class="container" style="margin-top:30px;">
  <div class="login-form">
      <!-- <form action="/examples/actions/confirmation.php" method="post"> -->
          <?php echo form_open('Welcome/slogin1'); ?>
          <h2 class="text-center">Mech Student Log in</h2>
          <div class="form-group">
              <!-- <input type="text" class="form-control" placeholder="Username" required="required"> -->
              <?php echo form_input(['class'=>'form-control','placeholder'=>'Username','name'=>'uname','value'=>set_value("uname")]); ?>
              <div class="container">
                <?php echo form_error('uname','<div class="text-danger">','</div>'); ?>
              </div>

          </div>
          <div class="form-group">
              <!-- <input type="password" class="form-control" placeholder="Password" required="required"> -->
              <?php echo form_password(['class'=>'form-control','placeholder'=>'Password','type'=>'password','name'=>'pass','value'=>set_value("pass")]); ?>
              <div class="container">
                <?php echo form_error('pass','<div class="text-danger">','</div>'); ?>
              </div>
          </div>
          <div class="form-group">
              <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
              <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Submit']); ?>
          </div>

  </div>
</div>


<?php include('footer.php'); ?>
