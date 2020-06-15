<main id="main">
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo base_url('homePage')?>">Home</a></li>
          <li>Profile</li>
        </ol>
        <h2><h2><?php echo ucwords($this->session->userdata("username")); ?> | Edit Profile</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row ">

          <div class="col-md-12">
	<?php
		if($this->session->tempdata("success"))
		{
			echo "<div class= 'alert alert-success'>".$this->session->tempdata("success")."</div>";
		}
		if($this->session->tempdata("error"))
		{
			echo "<div class= 'alert alert-danger'>".$this->session->tempdata("error")."</div>";
		}
		?>
	<?php
	echo form_open();
	?>
		<table class="table">
        <tr>
				<td>User Name :</td>
				<td><input class="form-control" type="text" name="uname"  value="<?php echo $data->username;?>">
				<small class="text-danger text-right"><?php echo form_error("uname");?></small>
				</td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input class="form-control" type="email" name="email" value="<?php echo $data->email;?>">
				<small class="text-danger text-right"><?php echo form_error("email"); ?></small>
				</td>
			</tr>
			<tr>
				<td>Mobile :</td>
				<td><input class="form-control" type="number" name="mobile"  value="<?php echo $data->mobile;?>">
				<small class="text-danger text-right"><?php echo form_error("mobile"); ?></small>
				</td>	
			</tr>
			<tr>
			<td>Gender</td>
					<td>
						<input <?php if($data->gender == "Male") echo "checked";?> type='radio' name="gender" value="Male">Male
						<input <?php if($data->gender == "Female") echo "checked";?> type='radio' name="gender" value="Female">Female
						<small class="text-danger text-right"><?php echo form_error("gender");?></small>
					</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Update" class="btn btn-primary">
				</td>
			</tr>
		</table>
		<?php
		echo form_close();
		?>
		  </div>
		</div>
	  </div>
	</section>
	</main>