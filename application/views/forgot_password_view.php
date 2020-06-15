<main id="main">
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li>Forgot Password</li>
        </ol>
        <h2>Forgot Password</h2>

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

	<?php echo form_open(); ?>
		<table class="table">
			<tr>
				<td>Email : </td>
				<td><input type="email" name="email" class="form-control">
				<small class="text-danger text-right"><?php echo form_error('email'); ?></small>
				</td>

			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" class="btn btn-primary"></td>
			</tr>
		</table>
	<?php echo form_close(); ?>
		  </div>
		</div>
	  </div>
	</section>
</main>