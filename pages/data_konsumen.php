<?php
    include '../config/config.php';
    $query="select * from tb_konsumen";
    $hasil=$koneksi->query($query);
?>
<script>
    function ConfirmDelete()
    {
    var del = confirm("Are you sure you want to delete?");
    if (del)
        return true;
    else
        return false;
    }
</script>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 style="text-align: center;">Data Konsumen</h3>
                <p style="text-align:right;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Konsumen</button>
                </p>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Konsumen</th>
                                <th>Jenis Kelamin</th>
                                <th>Pekerjaan</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead> 
                         <tbody>
                           
                            <?php
                                    $i=1;
                                    $no=1;
                                    while ($row = mysqli_fetch_array($hasil))
                                    {
                                    echo "<tr class='odd gradeX'>";
                                    echo "<td>$no</td>";
                                    echo "<td>$row[nama_konsumen]</td>";
                                    echo "<td>$row[jenis_kelamin]</td>";
                                    echo "<td>$row[pekerjaan]</td>";
                                    echo "<td>$row[email]</td>";
                                    echo "<td>$row[telepon]</td>";
                                    echo "<td>$row[alamat]</td>";
                                    echo "<td>$row[username]</td>";
                                    echo "<td>$row[password]</td>";
                                    echo "<td style='text-align: center;'>
                                        <a href='home.php?home=del_konsumen&id=$row[id_konsumen]'
                                        Onclick='return ConfirmDelete();'>
                                        <img src='images/delete.png'></a>&nbsp;&nbsp;
                                        <a href='home.php?home=edit_konsumen&id=$row[id_konsumen]'>
                                        <img src='images/edit.png'></a></td>";
                                    echo "</tr>";
                                    $i++;
                                    $no++;
                                    }
                                ?>

                        </tbody>
                    </table>
               </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">                                       
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Konsumen</h4>
                </div>
                <form action="tmb_konsumen.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="text" name="nama_konsumen" class="form-control" placeholder="Nama Konsumen"><br>
                        <select name="jenis_kelamin" class="form-control">
                            <option>Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki
                            <option value="Perempuan">Perempuan
                        </select><br>
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan"><br>
                        <input type="text" name="email" class="form-control" placeholder="Email"><br>
                        <input type="text" name="telepon" class="form-control" placeholder="Telepon"><br>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat"><br>
                        <input type="text" name="username" class="form-control" placeholder="Username"><br>
                        <input type="text" name="password" class="form-control" placeholder="Password"><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
