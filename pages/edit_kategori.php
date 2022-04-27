<?php
    include '../config/config.php';

    $id = $_GET["id"];
    $query="SELECT * FROM tb_kategori where kodekat='$id'";
    $hasil=$koneksi->query($query);
    $baris=mysqli_fetch_row($hasil);
    $namakat = $baris[1];

    if (isset($_POST['submit'])){
    $namakat1 = $_POST['namakat'];

    $hasil = $koneksi->query("update tb_kategori set namakat='$namakat1' where kodekat=$id");
    if ($hasil){
      ?>
        <script language="JavaScript">alert("Data Berhasil Diupdate");
        window.location="home.php?home=data_kategori";
      </script>
      <?php
    }
  }
?>  
	<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>FORM EDIT</strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="POST" enctype="multipart/form-data" onsubmit="return ValidationEvent()">
              <div class="box-header with-border">
	            <h3 class="box-title"><strong>Data</strong></h3>
	          </div>
              <div class="box-body">
              	<div class="col-sm-3">
	                <div class="form-group">
                  <label for="mulai">Nama Kategori</label>
	                	<input type="text" class="form-control" name="namakat" value="<?php echo $namakat;?>">
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