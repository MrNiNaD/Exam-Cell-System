<?php include('header.php'); ?>

<div class="container" style="margin-top:30px;">
  <div class="login-form">

      <!-- <form action="/examples/actions/confirmation.php" method="post"> -->
          <?php echo form_open('Welcome/alogin'); ?>
          <h2 class="text-center">Admin Log in</h2>
          <?php if($error=$this->session->flashdata('Login_failed')): ?>
            <div class="form-group">
              <div class="alert alert-danger">
                <?php echo $error; ?>

              </div>
            </div>
          <?php endif; ?>
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
