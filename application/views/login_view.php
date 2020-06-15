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

	<?php echo form_open() ?>
		<table class="table table-borderless">

			<tr>
				<td>Email</td>
				<td><input type="text" name="email" class="form-control">
				<small class="text-danger text-right"> <?php echo form_error("email"); ?></small>
				</td>

				
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password" class="form-control">
					<small class="text-danger text-right" ><?php echo form_error("password"); ?></small>
				</td>
				
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login" class="btn btn-primary">
					<a href="<?php echo base_url('Auth/forgotpassword');?>">Forgot Password</a>
				</td>
			</tr>
		</table>
	<?php echo form_close()?>
		  </div>
		</div>
	  </div>
	</section>
</main>
