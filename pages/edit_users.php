<?php
  include '../config/config.php';
  $id = $_GET["id"];
  $query="SELECT * FROM tb_users where id_user='$id'";
  $hasil=$koneksi->query($query);
  $baris=mysqli_fetch_row($hasil);
  $username = $baris[1];
  $password = $baris[2];

  if(isset($_POST['submit'])){
    $username1 = $_POST["username"];
    $password1 = $_POST["password"];
  
  $hasil = $koneksi->query("update tb_users set username='$username1', password='$password1' where id_user=$id");
  if ($hasil) {
      ?>
        <script language="Javascript">
          alert("Data Berhasil Diupdate ");
          document.location="home.php?home=data_users";
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
              <h3 class="box-title"><strong>EDIT DATA USER</strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
            <div class="col-sm-3">
              <div class="form-group">
                  <label for="username">User Name</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" name="password" value="<?php echo $password;?>">
              </div>
            </div>
          </div>
              <div class="box-footer">
                <a href="home.php?home=data_users" class="btn btn-danger">Cancel</a>
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