<main id="main">
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo base_url('homePage')?>">Home</a></li>
          <li>Register</li>
        </ol>
        <h2>Register</h2>

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
			echo "<h4>".$this->session->tempdata("success")."</h4>";
		}
		if($this->session->tempdata("error"))
		{
			echo "<h4>".$this->session->tempdata("error")."</h4>";
		}
		?>
	<?php
	echo form_open();
	?>
		<table class="table table-borderless">
			<tr>
				<td>User Name :</td>
				<td><input class="form-control" type="text" name="uname"  value="<?php echo set_value("uname");?>">
				<small class="text-danger text-right"><?php echo form_error("uname");?></small>
				</td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input class="form-control" type="email" name="email" value="<?php echo set_value("email");?>">
				<small class="text-danger text-right"><?php echo form_error("email"); ?></small>
				</td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input class="form-control" type="Password" name="pwd"  value="<?php echo set_value("pwd");?>">
				<small class="text-danger text-right"><?php echo form_error("pwd"); ?></small>
				</td>
			</tr>
			<tr>
				<td>Confirm password :</td>
				<td><input class="form-control" type="Password" name="cpwd"  value="<?php echo set_value("cpwd");?>">
				<small class="text-danger text-right"><?php echo form_error("cpwd"); ?></small>
				</td>
				
			</tr>
			<tr>
				<td>Mobile :</td>
				<td><input class="form-control" type="number" name="mobile"  value="<?php echo set_value("mobile");?>">
				<small class="text-danger text-right"><?php echo form_error("mobile"); ?></small>
				</td>	
			</tr>
			<tr>
				<td>Gender :</td>
				<td><input <?php if(set_value("gender")=="Male") echo "checked" ;?> type="radio" name="gender"  value="Male">Male
				<input <?php if(set_value("gender")=="Female") echo "checked";?> type="radio" name="gender"  value="Female">Female
				<small class="text-danger text-right"><?php echo form_error("gender"); ?></small>
			</td>
			</tr>
			<tr>
				<td></td>
				<td><input <?php if(set_value("terms")=="1") echo "checked";?> type="checkbox" name="terms" value="1">Please accept terms and conditions.
				<small class="text-danger text-right"><?php echo form_error("terms"); ?></small>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Signup" class="btn btn-primary">
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