<?php include('header.php'); ?>
<div class="container">
  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('studentsection/studentlogout') ?>">Logout</a>

  </div>
  <div class="text-center">
    <h4 class="lead" style="margin-top:30px;">Please again select your Branch and Sem:</h4>
  </div>
  <hr class="my-4">

  <?php echo form_open("studentsection/htfilter1/{$id}"); ?>
  <div class="row">

    <div class="col-2" style="margin-top:10px" width="200px">
      <label class="lead" for="inputDefault" >Branch:</label><br>
      <label class="radio-inline">
      <input type="radio" name="branch" value="comp" checked>Comp
      </label>
      <label class="radio-inline">
      <input type="radio" name="branch" value="mech">Mech
      </label>
      <label class="radio-inline">
      <input type="radio" name="branch" value="civil">Civil
      </label>
      <label class="radio-inline">
      <input type="radio" name="branch" value="extc">EXTC
      </label>
    </div>

    <div class="col-3" style="margin-top:10px;margin-left:50px">
      <label class="lead" for="inputDefault" >Sem:</label><br>
      <label class="radio-inline">
      <input type="radio" name="sem" value="3" checked>3
      </label>
      <label class="radio-inline">
      <input type="radio" name="sem" value="4">4
      </label>
      <label class="radio-inline">
      <input type="radio" name="sem" value="5">5
      </label>
      <label class="radio-inline">
      <input type="radio" name="sem" value="6">6
      </label>
    </div>
  </div>


  <div class="col-6" style="margin-top:20px;">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Submit']); ?>
  </div>



</div>
<?php include('footer.php'); ?>
