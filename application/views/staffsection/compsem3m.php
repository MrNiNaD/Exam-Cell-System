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

      <a class="btn btn-danger" href="<?php echo base_url('staffsection/stafflogout') ?>">Logout</a>

  </div>

  <div class="form-inline my-2 my-lg-0">
    <?php echo form_open('staffsection/searchcompsem3'); ?>
    <div class="row">
      <div class="form-group">
          <?php echo form_input(['class'=>'form-control','placeholder'=>'Search','name'=>'search','value'=>set_value("search")]); ?>
      </div>
      <div class="form-group" style="margin-left:5px;">
          <!-- <button type="submit" class="btn btn-primary btn-block">Log in</button> -->
          <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Search']); ?>
      </div>
    </div>
  </div>


  <h1 class="lead" style="margin-top:30px;">Student Details:</h1>

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
          <th>Hall Ticket No.</th>
          <th>Firstname</th>
          <th>Middlename</th>
          <th>Lastname</th>
          <th>Exam Held in</th>
          <th>CGPA</th>
          <th>Delete</th>
        </tr>
      </thead>

      <tbody id="myTable">
        <?php if(count($slist)): ?>
        <?php foreach($slist as $sl): ?>
        <tr>
          <td><?php echo $sl->hall_ticket; ?></td>
          <td><?php echo $sl->fname; ?></td>
          <td><?php echo $sl->mname; ?></td>
          <td><?php echo $sl->lname; ?></td>
          <td><?php echo $sl->heldin; ?></td>
          <td>
          <?php  echo $sl->cgpa; ?>
          </td>
          <td><?=
          form_open('staffsection/delcomp3stud'),
          form_hidden('hall_ticket',$sl->id),
          form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
          form_close();
           ?></td>
        </tr>
      <?php endforeach;?>
    <?php else:?>
        <tr>
        <td colspan="7">No Data Available</td>
        </tr>
      <?php endif; ?>


      </tbody>
      <tr>

      </tr>
    </table>

  </div>
</div>

<?php include('footer.php'); ?>
