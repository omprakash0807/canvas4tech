<main id="main">
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li>Login</li>
        </ol>
		<?php
	if ($this->session->userdata('username')) {
		echo "<h2>".ucwords('welcome '.$this->session->userdata('username'))."</h2>";
	}
	?>
	  </div>
    </section><!-- End Breadcrumbs -->

	<!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row ">

          <div class="col-md-12">
		  <?php
		if($this->session->tempdata('success')){
			echo "<div class= 'alert alert-success'>".$this->session->tempdata('success')."</div>";
			}
			if($this->session->tempdata('error')){
				echo "<div class= 'alert alert-danger'>".$this->session->tempdata('error')."</div>";
				}
	?>
	<table class="table">
		<?php if(!empty($data->profile))
		{
		?>
	<tr>
			<td><img src="<?php echo base_url()?>assets/profile/<?php echo $data->profile?>" height="180" width="150" class="img-thumbnail"><br><a class="btn btn-link" href="Home/uploadAvtar">Change Image</a></td>
			<td></td>
		</tr>
		<?php
		}else{
			?>
			<td><img src="<?php echo base_url()?>assets/profile/default.jpg" height="180" width="150" class="img-thumbnail"><br><a class="btn btn-link" href="Home/uploadAvtar">Change Image</a></td>
			<td></td>	

		<?php		
		}
		?>
		<tr>
			<td>Username: </td>
			<td><?php echo ucwords($data->username); ?></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><?php echo $data->email; ?></td>
		</tr>
		<tr>
			<td>Mobile: </td>
			<td><?php echo $data->mobile; ?></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td><?php echo $data->gender; ?></td>
		</tr>
		<tr>
			<td>Date of joining: </td>
			<td><?php echo $data->doj; ?></td>
		</tr>

	</table>
		  </div>
		</div>
	  </div>
	</section>
</main>