<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Banner</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-12">
        <?php echo form_open_multipart(); ?>
		   <div class="form-group">
			<label>Banner Title</label>
			<input type="text" name="btitle" class="form-control" value="<?php echo set_value("btitle")?>">
			<small class=" text-danger text-right"> <?php echo form_error("btitle");?> </small>
           </div>
           <div class="form-group">
			<label>Banner Description</label>
			<textarea name="bdesc" class="form-control"><?php echo set_value("bdesc");?></textarea>
			<small class="text-right text-danger"> <?php echo form_error("bdesc");?></small>
           </div>
           <div class="form-group">
               <label>Button Title</label>
               <input type="text" name="btntitle" class="form-control">
               <small class="text-danger text-right"><?php echo form_error('btntitle'); ?> </small>
           </div>
          <div class="form-group">
              <label>Button Link</label>
              <input class="form-control" type="text" name="blink">
              <small class="text-danger text-right"><?php echo form_error('blink'); ?></small> 
          </div>
          <div class="form-group">
              <label>Banner Image</label>
              <input class="form-control" type="file" name="bfile"> 
          </div>

          <div class="form-group">
			<input type="submit" name="submit" class="btn btn-primary" value="Add Banner">
		   </div>
              <?php echo form_close()?>
          </div>
        </div>
      </div>
    </section>
</div>