<?php include('header.php'); ?>

<div class="container" style="margin-top:30px;">
  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>

  </div>

  <div class="login-form">
      <!-- <form action="/examples/actions/confirmation.php" method="post"> -->
          <?php echo form_open("adminsection/updateslogin/{$slist->id}"); ?>
          <h2 class="text-center">Student Register Form:</h2>
          <?php if($status=$this->session->flashdata('msg')): ?>
            <?php  $msg_class=$this->session->flashdata('msg_class');?>
            <div class="form-group">
              <div class="alert <?= $msg_class ?>">
                <?php echo $status; ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="form-group">
              <!-- <input type="text" class="form-control" placeholder="Username" required="required"> -->
              <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value("username",$slist->username)]); ?>
              <div class="container">
                <?php echo form_error('username','<div class="text-danger">','</div>'); ?>
              </div>
          </div>

          <div class="form-group">
              <!-- <input type="text" class="form-control" placeholder="Username" required="required"> -->
              <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'password','value'=>set_value("password",$slist->password)]); ?>
              <div class="container">
                <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
              </div>
          </div>

          <div class="form-group">
              <!-- <input type="text" class="form-control" placeholder="Username" required="required"> -->
              <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter FirstName','name'=>'firstname','value'=>set_value("firstname",$slist->firstname)]); ?>
              <div class="container">
                <?php echo form_error('firstname','<div class="text-danger">','</div>'); ?>
              </div>
          </div>

          <div class="form-group">
              <!-- <input type="text" class="form-control" placeholder="Username" required="required"> -->
              <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter LastName','name'=>'lastname','value'=>set_value("lastname",$slist->lastname)]); ?>
              <div class="container">
                <?php echo form_error('lastname','<div class="text-danger">','</div>'); ?>
              </div>
          </div>

          <div class="form-group">
              <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
              <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Submit']); ?>
          </div>

  </div>
</div>

<?php include('footer.php'); ?>
