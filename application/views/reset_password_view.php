<main id="main">
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li>Reset Password</li>
        </ol>
        <h2>Reset Password</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row ">

          <div class="col-md-12">
<body>
	<?php
	if ($this->session->tempdata('success')) {
		echo "<p>".$this->session->tempdata('success')."</p>";
	}
	?>

	<?php echo form_open(); ?>
	<table class="table">
		<tr>
			<td>New Password</td>
			<td><input type="password" name="pwd" class="form-control">
				<?php echo form_error('pwd'); ?>
			</td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="cpwd" class="form-control">
				<?php echo form_error('cpwd'); ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Reset" class="btn btn-success"></td>
		</tr>
	</table>
	<?php echo form_open();?>
</body>
		  </div>
		</div>
	  </div>
	</section>
</main>