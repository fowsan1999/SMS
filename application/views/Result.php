
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
    <a class="nav-link active"  href="<?= base_url('Result') ?>" >Add Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="<?= base_url('Result_Delete') ?>" >Delete Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="<?= base_url('Result_Update') ?>" >Update Result</a>
  </li>
</ul>
      <br><h1>Result</h1>
<hr>
    <h3>Add Result Details</h3> <br><br>

      <?= form_open() ?>
      <div class="form-group row">
        <label for="inputTitel" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="student_id" placeholder="Enter Student ID" >
        </div>
          <?= form_error('titel') ?>
      </div><br>

      <div class="form-group row">
        <label for="inputDepartment" class="col-sm-2 col-form-label">Subject</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="subject_name" placeholder="Enter Subject">
        </div>
          <?= form_error('department') ?>
        </div><br>

        <div class="form-group row">
        <label for="inputDepartment" class="col-sm-2 col-form-label">Marks</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="marks" placeholder="Enter Marks">
        </div>
          <?= form_error('department') ?>
        </div><br>


        <button type="submit" class="btn btn-outline-success"><i class="fas fa-book-medical"></i> Add Result</button>
        <button type="Reset" class="btn btn-outline-secondary"><i class="fas fa-eraser"></i> Clear</button>

    <? form_close()?>
    </div>

    <div class="col-lg-4"></div>
  </div>
</div>