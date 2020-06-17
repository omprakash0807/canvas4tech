<main id="main">
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li>Login</li>
        </ol>
        <h2>Login</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row ">

          <div class="col-md-12">
	<?php
	if($this->session->tempdata('error')){
		echo "<div class='alert alert-danger'>".$this->session->tempdata('error')."</div>";
	}
	?>
		<?php
	if($this->session->tempdata('success')){
		echo "<div class='alert alert-success'>".$this->session->tempdata('success')."</div>";
	}
	?>
	<?php echo form_open('auth/login','class="form-signin"'); ?>

	<div class="form-group">
		<label class="font-weight-bold">Email address</label>
		<input type="text" name="email" class="form-control">
		<small class="text-danger text-right"> <?php echo form_error("email"); ?></small>
  	</div>
	<div class="form-group">
		<label class="font-weight-bold">Password</label>
		<input type="Password" name="password" class="form-control">
		<small class="text-danger text-right" ><?php echo form_error("password"); ?></small>
	</div>
		<input type="submit" name="submit" value="Login" class="btn btn-primary">
					<a href="<?php echo base_url('Auth/forgotpassword');?>">Forgot Password</a>
	<?php echo form_close()?>
		  </div>
		</div>
	  </div>
	</section>
</main>
