
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
  i
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
    <a class="nav-link"  href="<?= base_url('Student_Delete') ?>" >Delete Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active"  href="<?= base_url('Student_Update') ?>" >Update Student</a>
  </li>
</ul>

      <br><h1>Student</h1>
<hr>

    <h3>Update the Student Details</h3> <br><br>

<?php
    if($fetch_data->num_rows() > 0)
    {
        foreach($fetch_data->result() as $row)
        {
          ?>
          <?= form_open() ?>
      <div class="form-group row">
        <label for="inputUserID" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>" placeholder="Enter Student ID">
        </div>
          <?= form_error('id') ?>
      </div><br>
        
        <div ng-app="">
      <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label"> First Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="fname" value="<?php echo $row->fname; ?>"  placeholder="First Name">
        </div>
        <?= form_error('fname') ?>
        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="lname" value="<?php echo $row->lname; ?>"  placeholder="Last Name">
        </div>
          <?= form_error('lname') ?>
      </div><br>

      <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="flname"  value="<?php echo $row->flname; ?>"  >
        </div>
          <?= form_error('flname') ?>
      </div><br>
      </div>

      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">E-mail ID</label>
        <div class="col-sm-10">
          <input type="E-mail" class="form-control" name="email" value="<?php echo $row->email; ?>" placeholder="E-mail ID" >
        </div>
          <?= form_error('email') ?>
      </div><br>

      <div class="form-group row">
        <label for="inputContetcNo" class="col-sm-2 col-form-label">Contact No</label>
        <div class="col-sm-10">
          <input type="Number" class="form-control" name="number" value="<?php echo $row->number; ?>" placeholder="Contact Number">
        </div>
          <?= form_error('number') ?>
        </div><br>


      <div class="form-group row">
        <label for="inputCorseName" class="col-sm-2 col-form-label">Course Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="course" value="<?php echo $row->course; ?>" placeholder="Couse Name">
        </div>
          <?= form_error('coursename') ?>
      </div><br>


      <div class="form-group row">
        <label for="inputBatchNo" class="col-sm-2 col-form-label">Batch No</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="batch" value="<?php echo $row->batch; ?>" placeholder="Batch Number" >
        </div>
          <?= form_error('batch') ?>
      </div>


        <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-user-edit"></i> Update Student</button>

    <? form_close()?>
   <?php     }
   
    }
    else
    {
     
    }
  ?>
      

    </div>

    <div class="col-lg-4"></div>
  </div>
</div>