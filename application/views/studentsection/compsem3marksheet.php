<?php include('header.php'); ?>
<div class="container">
  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('studentsection/studentlogout') ?>">Logout</a>

  </div>
  <div class="text-center">
    <h4 style="margin-top:30px;">Marksheet of Student:</h4>
  </div>
<hr class="my-4">

<div class="col-6">
<h5 class="text-primary">Name:<?php echo " ".$smarks->fname." ".$smarks->mname." ".$smarks->lname; ?></h5>
</div>

<div class="col-6">
<h5 class="text-primary">HallTicket No.:<?php echo " ".$smarks->hall_ticket; ?></h5>
</div>

<div class="col-6">
<h5 class="text-primary">Exam Duration:<?php echo " ".$smarks->heldin; ?></h5>
</div>

<hr class="my-4">

<div class="table">
  <table>
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Course Credit(C)</th>
        <th>TH/PR/OR</th>
        <th>IA/TW</th>
        <th>Overall</th>
        <th>Grade Point(GP)</th>
        <th>CxGP</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td><?php echo $smarks->s1; ?></td>
        <td><div class="text-center"><?php echo $smarks->s1c; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s1th; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s1ut; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->os1; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s1g; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s1p; ?></div></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><?php echo $smarks->s2; ?></td>
        <td><div class="text-center"><?php echo $smarks->s2c; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s2th; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s2ut; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->os2; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s2g; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s2p; ?></div></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><?php echo $smarks->s3; ?></td>
        <td><div class="text-center"><?php echo $smarks->s3c; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s3th; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s3ut; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->os3; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s3g; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s3p; ?></div></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><?php echo $smarks->s4; ?></td>
        <td><div class="text-center"><?php echo $smarks->s4c; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s4th; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s4ut; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->os4; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s4g; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s4p; ?></div></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><?php echo $smarks->s5; ?></td>
        <td><div class="text-center"><?php echo $smarks->s5c; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s5th; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s5ut; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->os5; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s5g; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s5p; ?></div></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><?php echo $smarks->s6; ?></td>
        <td><div class="text-center"><?php echo $smarks->s6c; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s6th; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s6ut; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->os6; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s6g; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s6p; ?></div></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><?php echo $smarks->s7; ?></td>
        <td><div class="text-center"><?php echo $smarks->s7c; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s7th; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s7ut; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->os7; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s7g; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s7p; ?></div></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><?php echo $smarks->s8; ?></td>
        <td><div class="text-center"><?php echo $smarks->s8c; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s8th; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s8ut; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->os8; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s8g; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s8p; ?></div></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><?php echo $smarks->s9; ?></td>
        <td><div class="text-center"><?php echo $smarks->s9c; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s9th; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s9ut; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->os9; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s9g; ?></div></td>
        <td><div class="text-center"><?php echo $smarks->s9p; ?></div></td>
      </tr>

    </tbody>

    <?php if($smarks->s10!==""){ ?>
      <tbody>
        <tr>
          <td><?php echo $smarks->s10; ?></td>
          <td><div class="text-center"><?php echo $smarks->s10c; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->s10th; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->s10ut; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->os10; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->s10g; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->s10p; ?></div></td>
        </tr>

      </tbody>
    <?php } ?>


    <?php if($smarks->s11!==""){ ?>
      <tbody>
        <tr>
          <td><?php echo $smarks->s11; ?></td>
          <td><div class="text-center"><?php echo $smarks->s11c; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->s11th; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->s11ut; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->os11; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->s11g; ?></div></td>
          <td><div class="text-center"><?php echo $smarks->s11p; ?></div></td>
        </tr>

      </tbody>
    <?php } ?>


  </table>

  <hr class="my-4">
      <div class="row">
        <div class="col-sm-6">
          <div class="text-left">
            <h5>Remark:<?php echo " ".$smarks->remark; ?></h5>
          </div>
        </div>
        <div class="row">
          <div class="text-right">
          <h5>CGPA:<?php echo " ".$smarks->cgpa; ?></h5>
          </div>
        </div>
      </div>

  <hr class="my-4">
  <p class="lead">Grade with Respective Points:<br></p>
  <p class="lead">O=10 || A=9 || B=8 || C=7 || D=6 || E=5 || P=4 || F=0</p>

<div>



<?php include('footer.php'); ?>
