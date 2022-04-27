  <?php
    include '../config/config.php';
   
    $id = $_GET["id"];
    $query="SELECT * FROM tb_konsumen where id_konsumen='$id'";
    $hasil=$koneksi->query($query);
    $baris=mysqli_fetch_row($hasil);
    $nama_konsumen = $baris[1];
    $jenis_kelamin = $baris[2];
    $pekerjaan = $baris[3];
    $email = $baris[4];
    $telepon = $baris[5];
    $alamat = $baris[6];
    $username = $baris[7];
    $password = $baris[8];

    if (isset($_POST['submit'])){
      $nama_konsumen1 = $_POST['nama_konsumen'];
      $jenis_kelamin1 = $_POST['jenis_kelamin'];
      $pekerjaan1 = $_POST['pekerjaan'];
      $email1 = $_POST['email'];
      $telepon1 = $_POST['telepon'];
      $alamat1 = $_POST['alamat'];
      $username1 = $_POST['username'];
      $password1 = $_POST['password'];

      $hasil = $koneksi->query("update tb_konsumen set nama_konsumen='$nama_konsumen1', jenis_kelamin='$jenis_kelamin1', pekerjaan='$pekerjaan1', email='$email1', telepon='$telepon1', alamat='$alamat1', username='$username1', password='$password1' where id_konsumen=$id");

      if ($hasil){
        ?>
          <script language="JavaScript">alert("Data Berhasil Diupdate");
            window.location="home.php?home=data_konsumen";
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
              <h3 style="text-align: center;"><strong>Data Konsumen</strong></h3>
            </div>
              <div class="box-body">
                  <div class="form-group">
                    <label for="nama_konsumen">Nama Konsumen</label>
                    <input type="text" class="form-control" name="nama_konsumen" value="<?php echo $nama_konsumen;?>">
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option>Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki
                        <option value="Perempuan">Perempuan
                    </select>
                  </div>                     
                  <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" value="<?php echo $pekerjaan;?>">
                  </div>                               
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
                  </div>                              
                  <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" name="telepon" value="<?php echo $telepon;?>">
                  </div>                              
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat;?>">
                  </div>                              
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
                  </div>                              
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" value="<?php echo $password;?>">
                  </div>                
              </div>
              <div class="box-footer">
                <a href="home.php?home=data_konsumen" class="btn btn-danger">Cancel</a>
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