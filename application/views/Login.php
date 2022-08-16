
<style type="text/css">
	.co
	{
		padding-top: 15px;
		padding-bottom: 15px;
		margin-top: 7pc;
		background: linear-gradient(to right, rgba(255,255,255,0.50) 0%, rgba(255,255,255,0.50) 100%);
		-webkit-box-shadow: 0px 0px 12px 5px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 12px 5px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 12px 5px rgba(0,0,0,0.75);
	}
	body
	{
		background-image: url('http://4.bp.blogspot.com/-TNYCANwvQEA/ThGXHsaEpsI/AAAAAAAAANo/YFMyV-0JjUI/s1600/canary+wharf_003.png');
	}
	label
	{
		font-size:20px;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a style="letter-spacing: 5px;" class="navbar-brand" href="<?= base_url('home_controller') ?>">SRMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container">

	<div class="row">
		<div class="col-lg-4"></div>

		<div class="col-lg-4 co">

			<?= form_open() ?>
			<h1 class="form-signin-heading">Login Here</h1>

			<div class="form-group">
				<label>Enter User name</label>
				<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fa fa-at"></i> </span>
					  </div>
					  <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
			  	</div>
			  	<?= form_error('username') ?>
			</div>

			  
			<div class="form-group">
				<label>Enter User Password</label>
			  <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock"></i></span>
				  </div>
				  <input type="password" class="form-control" name="password" value="<?= set_value('password') ?>" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
			  </div>
			  <?= form_error('password') ?>
			</div>

			  <button type="submit" class="btn btn-primary btn-block">Login in</button>

		<? form_close()?>
		</div>

		<div class="col-lg-4"></div>
	</div>
</div>