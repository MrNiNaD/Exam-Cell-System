<?php include('header.php'); ?>
<div class="container">

  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>

  </div>

  <div class="text-center">
    <h4 style="margin-top:30px;">Student Details</h4>
  </div>


  <hr class="my-4">

  <?php echo form_open("adminsectionkt/htktex/{$studdata->id}"); ?>

  <div class="form-group">
      <!-- <input type="text" class="form-control" placeholder="Username" required="required"> -->
      <div class="col-6">
        <label class="lead" for="inputDefault" >Enter Hallticket No. for this Student:</label><br>
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Hallticket No. which need to be assign','name'=>'hall_ticket','value'=>set_value("hall_ticket",$studdata->hall_ticket)]); ?>
        <div class="container">
            <?php echo form_error('hall_ticket','<div class="text-danger">','</div>'); ?>
        </div>
      </div>
  </div>

  <hr class="my-4">

  <div class="row">
    <div class="col-6">
    <h5 class="text-primary">Name:<?php echo " ".$studdata->fname." ".$studdata->mname." ".$studdata->sname; ?></h5>
    <h5 class="text-primary">Appearing for Sem:<?php echo " ".$studdata->Sem; ?></h5>
    <h5 class="text-primary">Appearing for Sem in year:<?php echo " ".$studdata->year; ?></h5>
    <h5 class="text-primary">KT Student or Regular Student:<?php echo " ".$studdata->ktorr; ?></h5>
    <h5 class="text-primary">Student's Branch:<?php echo " ".$studdata->branch; ?></h5>
    <h5 class="text-primary">Student's D.O.B.:<?php echo " ".$studdata->dob; ?></h5>
    <h5 class="text-primary">Gender:<?php echo " ".$studdata->gender; ?></h5>
    <h5 class="text-primary">Student's Contact No.:<?php echo " ".$studdata->contact; ?></h5>
    <h5 class="text-primary">Student's Address:<?php echo " ".$studdata->address; ?></h5>
    </div>
    <div class="col-6">
      <div align="right">
      <img src="<?php echo $studdata->user_photo; ?>" height="150px" width="150px" class="img-thumbnail">
      </div>
    </div>
  </div>

  <hr class="my-4">
  <h5 class="text-primary">Transaction ID:<?php echo '<div class="text-danger">'." ".$studdata->transaction_id.'</div>'; ?></h5>
  <h5 class="text-primary" style="margin-top:20px">Transaction Screenshot:</h5>
  <img src="<?php echo $studdata->transaction_ss; ?>" height="500px" width="700px" class="img-thumbnail">
  <hr class="my-4">
  <h5 class="text-primary">Subject in which student is appearing for:</h5>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th>Subject</th>
      <th>TH</th>
      <th>UT</th>
      <th>TW</th>
      <th>OP</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $studdata->s1; ?></td>
      <td><?php echo $studdata->s1th; ?></td>
      <td><?php echo $studdata->s1ut; ?></td>
      <td><?php echo $studdata->s1tw; ?></td>
      <td><?php echo $studdata->s1op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s2; ?></td>
      <td><?php echo $studdata->s2th; ?></td>
      <td><?php echo $studdata->s2ut; ?></td>
      <td><?php echo $studdata->s2tw; ?></td>
      <td><?php echo $studdata->s2op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s3; ?></td>
      <td><?php echo $studdata->s3th; ?></td>
      <td><?php echo $studdata->s3ut; ?></td>
      <td><?php echo $studdata->s3tw; ?></td>
      <td><?php echo $studdata->s3op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s4; ?></td>
      <td><?php echo $studdata->s4th; ?></td>
      <td><?php echo $studdata->s4ut; ?></td>
      <td><?php echo $studdata->s4tw; ?></td>
      <td><?php echo $studdata->s4op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s5; ?></td>
      <td><?php echo $studdata->s5th; ?></td>
      <td><?php echo $studdata->s5ut; ?></td>
      <td><?php echo $studdata->s5tw; ?></td>
      <td><?php echo $studdata->s5op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s6; ?></td>
      <td><?php echo $studdata->s6th; ?></td>
      <td><?php echo $studdata->s6ut; ?></td>
      <td><?php echo $studdata->s6tw; ?></td>
      <td><?php echo $studdata->s6op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s7; ?></td>
      <td><?php echo $studdata->s7th; ?></td>
      <td><?php echo $studdata->s7ut; ?></td>
      <td><?php echo $studdata->s7tw; ?></td>
      <td><?php echo $studdata->s7op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s8; ?></td>
      <td><?php echo $studdata->s8th; ?></td>
      <td><?php echo $studdata->s8ut; ?></td>
      <td><?php echo $studdata->s8tw; ?></td>
      <td><?php echo $studdata->s8op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s9; ?></td>
      <td><?php echo $studdata->s9th; ?></td>
      <td><?php echo $studdata->s9ut; ?></td>
      <td><?php echo $studdata->s9tw; ?></td>
      <td><?php echo $studdata->s9op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s10; ?></td>
      <td><?php echo $studdata->s10th; ?></td>
      <td><?php echo $studdata->s10ut; ?></td>
      <td><?php echo $studdata->s10tw; ?></td>
      <td><?php echo $studdata->s10op; ?></td>
    </tr>
    <tr>
      <td><?php echo $studdata->s11; ?></td>
      <td><?php echo $studdata->s11th; ?></td>
      <td><?php echo $studdata->s11ut; ?></td>
      <td><?php echo $studdata->s11tw; ?></td>
      <td><?php echo $studdata->s11op; ?></td>
    </tr>

  </tbody>
  </table>

  <hr class="my-4">

  <?php if(!is_null($studdata->sem1)){?>
    <h5 class="text-primary" style="margin-top:20px">Scanned Sem1/Diploma Sem5 Marksheet:</h5>
    <img src="<?php echo $studdata->sem1; ?>" height="500px" width="700px" class="img-thumbnail">
    <h5 class="text-primary" style="margin-top:20px">Sem1 </br>External KT:<?php  echo $studdata->es1;?>  </br>    Internal KT:<?php  echo $studdata->is1;?></h5>
  <?php } ?>

  <?php if(!is_null($studdata->sem2)){?>
    <h5 class="text-primary" style="margin-top:20px">Scanned Sem2/Diploma Sem6 Marksheet:</h5>
    <img src="<?php echo $studdata->sem2; ?>" height="500px" width="700px" class="img-thumbnail">
    <h5 class="text-primary" style="margin-top:20px">Sem2 </br>External KT:<?php  echo $studdata->es2;?>  </br>    Internal KT:<?php  echo $studdata->is2;?></h5>
  <?php } ?>

  <?php if(!is_null($studdata->sem3)){?>
    <h5 class="text-primary" style="margin-top:20px">Scanned Sem3 Marksheet:</h5>
    <img src="<?php echo $studdata->sem3; ?>" height="500px" width="700px" class="img-thumbnail">
    <h5 class="text-primary" style="margin-top:20px">Sem3 </br>External KT:<?php  echo $studdata->es3;?>  </br>    Internal KT:<?php  echo $studdata->is3;?></h5>
  <?php } ?>

  <?php if(!is_null($studdata->sem4)){?>
    <h5 class="text-primary" style="margin-top:20px">Scanned Sem4 Marksheet:</h5>
    <img src="<?php echo $studdata->sem4; ?>" height="500px" width="700px" class="img-thumbnail">
    <h5 class="text-primary" style="margin-top:20px">Sem4 </br>External KT:<?php  echo $studdata->es4;?>  </br>    Internal KT:<?php  echo $studdata->is4;?></h5>
  <?php } ?>

  <?php if(!is_null($studdata->sem5)){?>
    <h5 class="text-primary" style="margin-top:20px">Scanned Sem5 Marksheet:</h5>
    <img src="<?php echo $studdata->sem5; ?>" height="500px" width="700px" class="img-thumbnail">
    <h5 class="text-primary" style="margin-top:20px">Sem5 </br>External KT:<?php  echo $studdata->es5;?>  </br>    Internal KT:<?php  echo $studdata->is5;?></h5>
  <?php } ?>

  <!-- if(!is_null()) -->


  <div class="form-group">
      <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','style'=>'margin-left:15px;margin-top:5px;','value'=>'Submit']); ?>
  </div>

<?php include('footer.php'); ?>
