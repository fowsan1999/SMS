
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>


<style type="text/css">
    
  .cl
  {
    margin-top: 80px;
    margin-bottom: 40px;
  }

  button
  {
    float: right;
    margin-right: 15px;
  }
  .na a
  {
    color: #000;
  }
  h3
  {
    text-align: center;
  }
  .d a
  {
    color: #1976D2;
  }
 .d a i
  {
    font-size: 20px;
  }
</style>

<div class="container cl">

  <div class="row">
    <div class="col-lg-2"></div>

    <div class="col-lg-10 co">

<ul class="nav nav-tabs na" >
  <li class="nav-item">
    <a class="nav-link"  href="<?= base_url('Result') ?>" >Add Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="<?= base_url('Result_Delete') ?>" >Delete Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active"  href="<?= base_url('Result_Update') ?>" >Update Result</a>
  </li>
</ul>
      
      <br><h1>Result</h1>
<hr>
    
    <h3>Update the Result Details</h3> <br><br>

<table class="table table-bordered ">
  <thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Student ID</th>
    <th scope="col">Subject Name</th>
    <th scope="col">Marks</th>
    <th scope="col">Update</th>
  </tr>
</thead>

<tbody class="h">
  <?php
    if($fetch_data->num_rows() > 0)
    {
        foreach($fetch_data->result() as $row)
        {
    ?>
          <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->student_id; ?></td>
            <td><?php echo $row->subject_name; ?></td>
            <td><?php echo $row->marks; ?></td>
            <td class="d"><a href="Result_Update_Data/?id=<?php echo $row->id; ?>"><i class="fas fa-edit"></i>Edit</a></td>
          </tr>
    <?php      
        }
    }
    else
    {
      ?>
        <tr>
          <td>Hello</td>
        </tr>
      <?php

    }

  ?>
</tbody>
</table>



    </div>

    <div class="col-lg-4"></div>
  </div>
</div>
