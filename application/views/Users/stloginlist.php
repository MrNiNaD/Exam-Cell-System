<?php include('header.php'); ?>

  <div class="container">

  <div align="right" style="margin-top:20px;">

      <a class="btn btn-danger" href="<?php echo base_url('adminsection/adminlogout') ?>">Logout</a>

  </div>

  <div class="form-inline my-2 my-lg-0">
    <?php echo form_open('adminsection/searchstlogin'); ?>
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

  <h1 class="lead" style="margin-top:30px;">Student Login Details:</h1>

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
          <th width="50px">Username</th>
          <th width="50px">Firstname</th>
          <th width="50px">Lastname</th>
          <th width="50px">Edit</th>
          <th width="50px">Delete</th>
        </tr>
      </thead>

      <tbody id="myTable">
        <?php if(count($slist)): ?>
        <?php foreach($slist as $sl): ?>
        <tr>
          <td><?php echo $sl->username; ?></td>
          <td><?php echo $sl->firstname; ?></td>
          <td><?php echo $sl->lastname; ?></td>
          <td>
            <?=  anchor("adminsection/editstlogin/{$sl->stid}",'Edit',['class'=>'btn btn-primary']);  ?>
          </td>
          <td>
            <?=  anchor("adminsection/delstlogin/{$sl->stid}",'Delete',['class'=>'btn btn-danger']);  ?>
            <td>
        </tr>
      <?php endforeach;?>
    <?php else:?>
        <tr>
        <td colspan="5">No Data Available</td>
        </tr>
      <?php endif; ?>


      </tbody>
      <tr>

      </tr>
    </table>

  </div>
</div>

<?php include('footer.php'); ?>
