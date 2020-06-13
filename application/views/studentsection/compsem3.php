<?php include('header.php'); ?>
<div class="container">
  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('studentsection/studentlogout') ?>">Logout</a>
    
  </div>
  <div class="text-center">
    <h4 class="lead" style="margin-top:30px;">Enter the Hall Ticket Marksheet of SEM III for COMP Students:</h4>
  </div>

  <hr class="my-4">

  <?php echo form_open('studentsection/compsem3marksheet'); ?>

  <div class="col-6">
  <label class="lead" for="inputDefault" >Enter the Hallticket Number:</label>
  <?php if($error=$this->session->flashdata('InvalidHT')): ?>
    <div class="form-group">
      <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php echo form_input(['class'=>'form-control','placeholder'=>'HallTicket No.','name'=>'hall_ticket']); ?>
  <?php echo form_error('hall_ticket','<div class="text-danger">','</div>'); ?>
  </div>


  <div class="col-6" style="margin-top:20px;">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Check Result']); ?>
  </div>

</div>

<?php include('footer.php'); ?>
