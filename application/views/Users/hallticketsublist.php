<?php include('header.php'); ?>
<!-- home>adminlogin>studentdetails -->

<!-- <script>
$(document).ready(function(){
  $("#myInput").on("keyup",function(){
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function(){
      $(this).toggle($(this).text().toLowerCase().indexOf(value
      ) > -1)
    });
  });
});
</script> -->

  <div class="container">

  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>

  </div>


  <!-- <form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" id="myInput" type="text" placeholder="Search" >
  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
  </form> -->

  <h1 class="lead" style="margin-top:30px;">Select Subject's Respective Edit to Manipulate Date and Time:</h1>

  <!-- <form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" id="myInput" type="text" placeholder="Search">
  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
  </form> -->

  <?php if($status=$this->session->flashdata('msg')): ?>
    <?php  $msg_class=$this->session->flashdata('msg_class');?>
    <div class="form-group">
      <div class="alert <?= $msg_class ?>">
        <?php echo $status; ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="table">
    <table>
      <thead>
        <tr>
          <th>Sem</th>
          <th>Branch</th>
          <th>Edit</th>
        </tr>
      </thead>

      <tbody id="myTable">
        <?php if(count($slist)): ?>
        <?php foreach($slist as $sl): ?>
        <tr>
          <td width="350px"><?php echo $sl->sem; ?></td>
          <td width="350px"><?php echo $sl->branch; ?></td>
          <td width="350px">
            <?=  anchor("adminsection/edithtsub/{$sl->id}",'Edit',['class'=>'btn btn-primary']);  ?>
          </td>
        </tr>
      <?php endforeach;?>
    <?php else:?>
        <tr>
        <td colspan="3">No Data Available</td>
        </tr>
      <?php endif; ?>


      </tbody>
      <tr>

      </tr>
    </table>

  </div>
</div>

<?php include('footer.php'); ?>
