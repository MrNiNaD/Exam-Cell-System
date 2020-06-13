<?php include('header.php'); ?> 
<div class="container">
<div align="right" style="margin-top:20px;">
    <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>
</div>
<div class="text-center">
  <h4 class="lead" style="margin-top:30px;">Enter your Date,Time and Subject Name of Theory Papers</h4>
</div>
<hr class="my-4">
<?php echo form_open("adminsection/uphtsub/{$studdata->id}"); ?>
<div class="row">
  <div class="col-3" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Subject 1 Name:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s1','value'=>set_value("s1",$studdata->s1)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Date:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s1date','placeholder'=>'','value'=>set_value("s1date",$studdata->s1date)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Time:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s1time','placeholder'=>'','value'=>set_value("s1time",$studdata->s1time)]); ?>
  </div>

</div>
<div class="row">
  <div class="col-3" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Subject 2 Name:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s2','value'=>set_value("s2",$studdata->s2)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Date:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s2date','placeholder'=>'','value'=>set_value("s2date",$studdata->s2date)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Time:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s2time','placeholder'=>'','value'=>set_value("s2time",$studdata->s2time)]); ?>
  </div>

</div>
<div class="row">
  <div class="col-3" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Subject 3 Name:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s3','value'=>set_value("s3",$studdata->s3)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Date:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s3date','placeholder'=>'','value'=>set_value("s3date",$studdata->s3date)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Time:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s3time','placeholder'=>'','value'=>set_value("s3time",$studdata->s3time)]); ?>
  </div>

</div>
<div class="row">
  <div class="col-3" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Subject 4 Name:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s4','value'=>set_value("s4",$studdata->s4)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Date:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s4date','placeholder'=>'','value'=>set_value("s4date",$studdata->s4date)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Time:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s4time','placeholder'=>'','value'=>set_value("s4time",$studdata->s4time)]); ?>
  </div>

</div>
<div class="row">
  <div class="col-3" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Subject 5 Name:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s5','value'=>set_value("s5",$studdata->s5)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Date:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s5date','placeholder'=>'','value'=>set_value("s5date",$studdata->s5date)]); ?>
  </div>

  <div class="col-2" style="margin-top:10px">
    <div class="text-center">
      <label for="inputDefault" >Time:</label>
    </div>
    <?php echo form_input(['class'=>'form-control','name'=>'s5time','placeholder'=>'','value'=>set_value("s5time",$studdata->s5time)]); ?>
  </div>

</div>
    <div class="col-6" style="margin-top:20px;">
        <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
        <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
    </div>
</div>

<?php include('footer.php'); ?>
