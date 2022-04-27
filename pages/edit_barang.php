<?php
    include '../config/config.php';

    $id = $_GET["id"];
    $query="SELECT * FROM tb_barang where kodebarang='$id'";
    $hasil=$koneksi->query($query);
    $baris=mysqli_fetch_row($hasil);
    $namabarang = $baris[1];
    $kategori = $baris[2];
    $harga = $baris[3];
    $foto = $baris[4];

    if (isset($_POST['submit'])){
    $namakat1 = $_POST['namabarang'];
    $kategori1 = $_POST['kategori'];
    $harga1 = $_POST['harga'];
    $foto1 = $_FILES["myfile"]["name"];

    move_uploaded_file($_FILES["myfile"]["tmp_name"],"../foto/" .$_FILES["myfile"]["name"]);

    if (empty($foto1)) {
    $hasil = $koneksi->query("update tb_barang set namabarang='$namabarang',
                              kategoribarang='$kategori1', harga='$harga1' where kodebarang=$id"); 

    if ($hasil){
      ?>
        <script language="JavaScript">alert("Data Berhasil Diupdate");
        window.location="home.php?home=data_barang";
      </script>
      <?php
    }
  }else {
       $hasil = $koneksi->query("update tb_barang set namabarang='$namabarang1',
                              kategoribarang='$kategori1', harga='$harga1', foto='$foto1' where kodebarang=$id"); 

       if ($hasil) {
      ?>
        <script language="JavaScript">alert("Data Berhasil Diupdate");
        window.location="home.php?home=data_barang";
      </script>
      <?php
      }
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

              	<div class="col-sm-6">
	                <div class="form-group">
                  <label for="nama kategori">Nama Barang</label>
	                	<input type="text" class="form-control" name="namabarang" value="<?php echo $namabarang;?>">
                </div>
              </div>

              <div class="col-sm-6">
                  <div class="form-group">
                  <label for="nama kategori">Nama Kategori</label>
                  <select class="form-control show-tick" name="kategori">
                    <?php
                     $query2="select * from tb_kategori";
                     $hasil2=$koneksi->query($query2);
                     while($row2 = mysqli_fetch_array($hasil2))
                     {
                      $namakat = $row2['namakat'];
                      if($kategori == $namakat){
                          $cek = "selected";
                      }else{
                        $cek = "";
                      }
                      echo "<option value='$namakat' $cek>$namakat</option>";
                     }
                ?>
              </select>
            </div>
          </div>

              <div class="col-sm-6">
                  <div class="form-group">
                  <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" value="<?php echo $harga;?>">
                </div>
              </div>

              <div class="col-sm-6">
                  <div class="form-group">
                  <label for="foto">Foto</label>
                    <input type="file" name="myfile"><?php echo "$foto"; ?>
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