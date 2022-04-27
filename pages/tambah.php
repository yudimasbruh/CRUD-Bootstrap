<?php include '../config/config.php'; ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">FORM TAMBAH</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="tambah_xxx_act.php" method="POST" enctype="multipart/form-data" onsubmit="return ValidationEvent()">
              <div class="box-body">
              	<div class="col-sm-3">
	                <div class="form-group">
	                  <label for="nama">Label</label>
	                  <p>Form Input</p>
	                </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->