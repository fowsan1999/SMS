
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
    <a class="nav-link active"  href="<?= base_url('Student') ?>" >Add Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="<?= base_url('Student_Delete') ?>" >Delete Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="<?= base_url('Student_Update') ?>" >Update Student</a>
  </li>
</ul>
      <br><h1>Student</h1>
<hr>
    <h3>Add Student Details</h3> <br><br>

      <?= form_open() ?>
      <div class="form-group row">
        <label for="inputUserID" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="id"  placeholder="Enter Student ID">
        </div>
          <?= form_error('id') ?>
      </div><br>
        
        <div ng-app="">
      <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label"> First Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="fname" ng-model="firstname" placeholder="First Name">
        </div>
        <?= form_error('fname') ?>
        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="lname" ng-model="lastname" placeholder="Last Name">
        </div>
          <?= form_error('lname') ?>
      </div><br>

      <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="flname"  value="{{firstname}} {{lastname}}" >
        </div>
          <?= form_error('flname') ?>
      </div><br>
      </div>

      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">E-mail ID</label>
        <div class="col-sm-10">
          <input type="E-mail" class="form-control" name="email" placeholder="E-mail ID" >
        </div>
          <?= form_error('email') ?>
      </div><br>

      <div class="form-group row">
        <label for="inputContetcNo" class="col-sm-2 col-form-label">Contact No</label>
        <div class="col-sm-10">
          <input type="Number" class="form-control" name="number" placeholder="Contact Number">
        </div>
          <?= form_error('number') ?>
        </div><br>


      <div class="form-group row">
        <label for="inputCorseName" class="col-sm-2 col-form-label">Course Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="course" placeholder="Couse Name">
        </div>
          <?= form_error('coursename') ?>
      </div><br>


      <div class="form-group row">
        <label for="inputBatchNo" class="col-sm-2 col-form-label">Batch No</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="batch" placeholder="Batch Number" >
        </div>
          <?= form_error('batch') ?>
      </div>


        <button type="submit" class="btn btn-outline-success"><i class="fas fa-user-plus"></i> Add Student</button>
        <button type="Reset" class="btn btn-outline-secondary"><i class="fas fa-eraser"></i> Clear</button>

    <? form_close()?>
    </div>

    <div class="col-lg-4"></div>
  </div>
</div>