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
			echo "<div class='alert alert-success'>".$this->session->tempdata("success")."</div>";
		}
		if($this->session->tempdata("error"))
		{
			echo "<div class='alert alert-danger'>".$this->session->tempdata("error")."</div>";
		}
		?>
	<?php
	echo form_open();
	?>
			<div class="form-group">
				<label class="font-weight-bold"> Name </label>
				<input class="form-control" type="text" name="uname"  value="<?php echo set_value("uname");?>">
				<small class="text-danger text-right"><?php echo form_error("uname");?></small>
			</div>
			<div class="form-group">
				<label class="font-weight-bold"> Email </label>
				<td><input class="form-control" type="email" name="email" value="<?php echo set_value("email");?>">
				<small class="text-danger text-right"><?php echo form_error("email"); ?></small>
			</div>
			<div class="form-group">	
				<label class="font-weight-bold">Password</label>
				<input class="form-control" type="Password" name="pwd"  value="<?php echo set_value("pwd");?>">
				<small class="text-danger text-right"><?php echo form_error("pwd"); ?></small>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">Confirm password</label>
				<input class="form-control" type="Password" name="cpwd"  value="<?php echo set_value("cpwd");?>">
				<small class="text-danger text-right"><?php echo form_error("cpwd"); ?></small>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">Mobile</label>
				<input class="form-control" type="number" name="mobile"  value="<?php echo set_value("mobile");?>">
				<small class="text-danger text-right"><?php echo form_error("mobile"); ?></small>
			</div>
			<div class="form-group">
				<label class="font-weight-bold">Gender</label>
				
				<input <?php if(set_value("gender")=="Male") echo "checked" ;?> type="radio" name="gender"  value="Male">Male 
				<input <?php if(set_value("gender")=="Female") echo "checked";?> type="radio" name="gender"  value="Female">Female
				<small class="text-danger text-right"><?php echo form_error("gender"); ?></small>
				
			</div>
			<div class="form-group">
				<input <?php if(set_value("terms")=="1") echo "checked";?> type="checkbox" name="terms" value="1"><label> Please accept terms and conditions.</label>
				<small class="text-danger text-right"><?php echo form_error("terms"); ?></small>
			</div>
				
				<input type="submit" name="Signup" class="btn btn-primary">
        
		<?php
		echo form_close();
		?>
		  </div>
		</div>
	  </div>
	</section>
	</main>