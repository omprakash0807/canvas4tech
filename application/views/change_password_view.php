<main id="main">
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li>Change Password</li>
        </ol>
        <h2>Change Password</h2>

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
	if($this->session->tempdata('success')){
		echo "<div class='alert alert-success'>".$this->session->tempdata('success')."</div>";
	}
	?>
	<?php echo form_open() ?>
		<table class="table">

			<tr>
				<td>Old Password</td>
				<td><input type="password" name="oldpass" class="form-control">
				<small class="text-danger text-right"> <?php echo form_error("oldpass"); ?></small>
				</td>

				
			</tr>
			<tr>
				<td>New Password</td>
				<td><input type="Password" name="newpass" class="form-control">
					<small class="text-danger text-right" ><?php echo form_error("newpass"); ?></small>
				</td>
				
            </tr>
            <td>Confirm Password</td>
				<td><input type="Password" name="confpass" class="form-control">
					<small class="text-danger text-right" ><?php echo form_error("confpass"); ?></small>
				</td>
				
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Reset" class="btn btn-primary">
				</td>
			</tr>
		</table>
	<?php echo form_close()?>
		  </div>
		</div>
	  </div>
	</section>
</main>