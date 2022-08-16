
<nav class="navbar navbar-dark bg-dark cln">
  <a class="navbar-brand" style="letter-spacing: 5px; font-size: 25px;" href="<?= base_url('admin_controller') ?>">SRMS</a>
  <div class="ave">
    <a href="<?= base_url('Setting') ?>"><img src="https://image.flaticon.com/icons/svg/236/236832.svg" width="30px"> <?= $user ?></a>
  </div>
  

</nav>

<style>
	.cln
  {
    position: fixed;
    top: 0;
    width: 100%;
  }
  .ave
  {
    float: left;
  }
  .ave a
  {
    font-size: 25px;
  }
  .ave a:hover
  {
    color: #AEB6BF;
    text-decoration: none;
  }
</style>