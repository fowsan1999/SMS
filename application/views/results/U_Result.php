
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

<?php
    if($fetch_data->num_rows() > 0)
    {
        foreach($fetch_data->result() as $row)
        {
          ?>
          <?= form_open() ?>

          <div class="form-group row">
        <label for="inputUserID" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>" placeholder="Enter ID">
        </div>
          <?= form_error('id') ?>
      </div>

      <div class="form-group row">
        <label for="inputUserID" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="student_id" value="<?php echo $row->student_id; ?>" placeholder="Enter Student ID">
        </div>
          <?= form_error('id') ?>
      </div>
        
        <div ng-app="">
      <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Subject</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="subject_name" value="<?php echo $row->subject_name; ?>"  placeholder="Subject">
        </div>
        <?= form_error('fname') ?>
        <label for="inputName" class="col-sm-2 col-form-label">Marks</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="marks" value="<?php echo $row->marks; ?>"  placeholder="Marks">
        </div>
          <?= form_error('lname') ?>
      </div><br>

        <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-user-edit"></i> Update Result</button>

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