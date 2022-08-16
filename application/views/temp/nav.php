
<style type="text/css">
  
  .con
  {
    background-color: #154360;
    width: 200px;
    height: 100%;
    padding-top: 80px;
    position: fixed;
    top: 0;

  }
  
  ul
  {
    margin-left: 15px;
    text-align: left;
  }
  a
  {
    color: #fff;
    font-size: 20px;
  }
  i
  {
    font-size: 30px;
  }
  ul li a:hover
  {
    color: #7986CB ;
  }

</style>


  <nav class="nav con">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin') ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      </li>
      <br>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Student') ?>"><i class="fas fa-user-graduate"></i> Student</a>
      </li>
      <br>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Subject') ?>"><i class="fas fa-book-open"></i> Subject</a>
      </li>
      <br>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Result') ?>"><i class="fas fa-poll-h"></i> Marks</a>
      </li>
      <br>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Logout') ?>"> <i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
  </nav>

