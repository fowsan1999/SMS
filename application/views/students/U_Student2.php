
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
    <a class="nav-link "  href="<?= base_url('Student') ?>" >Add Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "  href="<?= base_url('Student_Delete') ?>" >Delete Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active"  href="<?= base_url('Student_Update') ?>" >Update Student</a>
  </li>
</ul>
      
      <br><h1>Student</h1>
<hr>
    
    <h3>Update the Student Details</h3> <br><br>

<table class="table table-bordered ">
  <thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Course</th>
    <th scope="col">Batch</th>
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
            <td><?php echo $row->flname; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->course; ?></td>
            <td><?php echo $row->batch; ?></td>
            <td class="d"><a href="Student_Update_Data/?id=<?php echo $row->id; ?>"><i class="fas fa-edit"></i>Edit</a></td>
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
