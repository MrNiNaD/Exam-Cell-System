<!DOCTYPE html>
<html>
<body>
<p>Click the button to print the current page.
<button onclick="myFunction()">Print this page</button></p>

<script>
function myFunction() {
  window.print();
}
</script>
    <br><br>



  <div style="margin-lef:200px;">
    <table   style="width:100%" >
        <table align="center">
          <tr >
              <th colspan="4">Examination hall ticket</th>
            </tr>

            <tr style="background-color:floralwhite">
              <th align="left" >Name</th>
              <th align="left" >Branch</th>
              <th align="left" >Exam Year</th>
              <th align="left" >Hall ticket No.</th>


   </tr>

  <tr>
       <td><?php echo $post['fname']." ".$post['mname']." ".$post['sname'] ?></td>
      <td><?php echo $post['branch']; ?>(SEM-<?php echo $post['sem']; ?>)</td>
       <td><?php echo $post['year']; ?></td>
       <td><?php echo $post['hall_ticket']; ?></td>
    </tr>




    <tr style="background-color:floralwhite">
    <th>Subject Name</th>
        <th>Supervisor Sign</th>
        <th>Date</th>
        <th>Time</th>
    </tr>
     <tr>
    <td><?php echo $post['s1']; ?></td>
    <td></td>
    <td><?php echo $post['s1date']; ?></td>
    <td><?php echo $post['s1time']; ?></td>
  </tr>
  <tr>
   <td><?php echo $post['s2']; ?></td>
         <td></td>
    <td><?php echo $post['s2date']; ?></td>
    <td><?php echo $post['s2time']; ?></td>
  </tr>
  <tr>
    <td><?php echo $post['s3']; ?></td>
         <td></td>
    <td><?php echo $post['s3date']; ?></td>
    <td><?php echo $post['s3time']; ?></td>
  </tr>
     <tr>
    <td><?php echo $post['s4']; ?></td>
         <td></td>
    <td><?php echo $post['s4date']; ?></td>
    <td><?php echo $post['s4time']; ?></td>
  </tr>

  <tr>
 <td><?php echo $post['s5']; ?></td>
      <td></td>
 <td><?php echo $post['s5date']; ?></td>
 <td><?php echo $post['s5time']; ?></td>
  </tr>

    <tr>
        <td colspan="2"><b>Note:</b>
             <ol>
  <li>The hallticket is valid only if signatured by principal of institute</li>
  <li>No candiadate shall be allowded without hallticket</li>
  <li><b>Please check the date and time of the subjects</b></li>
</ol>
        </td>
       <td colspan = 2><img style="margin-left:20px" src="<?php echo $post['photo']; ?>" alt="" border=2 height=200 width=150></img></td>


            </tr>

        <tr>
           <td><br></td>
            <td><br></td>
            <td colspan="2"><br></td>
    </tr>

    <tr style="background-color:floralwhite">
    <td>Principal signature</td>
    <td>HOD signature</td>
    <td colspan="2">Candidate signature</td>
    </tr>


        </table>
    </table>
  </div>






    <style>
    table {
  border: 2px solid black;
  border-collapse: collapse;
}

         th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}

        table {
  width: 50%;
  background-color: ;
}
    </style>
</body>
</html>
