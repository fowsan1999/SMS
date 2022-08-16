
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

  button i
  {
    font-size: 20px;
  }
  .na a
  {
    color: #000;
  }
  h3
  {
    text-align: center;
  }
</style>

<div class="container cl">

  <div class="row">
    <div class="col-lg-2"></div>

    <div class="col-lg-8 co">

<ul class="nav nav-tabs na" >
  <li class="nav-item">
    <a class="nav-link active"  href="<?= base_url('Subject') ?>" >Add Subject</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="<?= base_url('Subject_Delete') ?>" >Delete Subject</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="<?= base_url('Subject_Update') ?>" >Update Subject</a>
  </li>
</ul>
      <br><h1>Subject</h1>
<hr>
    <h3>Add Subject Details</h3> <br><br>

      <?= form_open() ?>
      <div class="form-group row">
        <label for="inputTitel" class="col-sm-2 col-form-label">Subject Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="titel" placeholder="Enter Subject Name" >
        </div>
          <?= form_error('titel') ?>
      </div><br>

      <div class="form-group row">
        <label for="inputDepartment" class="col-sm-2 col-form-label">Department</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="department" placeholder="Enter Department">
        </div>
          <?= form_error('department') ?>
        </div><br>


        <button type="submit" class="btn btn-outline-success"><i class="fas fa-book-medical"></i> Add Subject</button>
        <button type="Reset" class="btn btn-outline-secondary"><i class="fas fa-eraser"></i> Clear</button>

    <? form_close()?>
    </div>

    <div class="col-lg-4"></div>
  </div>
</div>