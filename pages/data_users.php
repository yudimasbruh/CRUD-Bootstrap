<?php
    include '../config/config.php';
    $query="select * from tb_users";
    $hasil=$koneksi->query($query);
?>
    <script>
        function ConfirmDelete()
        {
            var del = confirm("Are you sure want to delete?");
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
                <h2 style="color: black;font-family: castellar;"><b> Data User </b> </h2>
                <p style="text-align:right;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah User</button>
                </p>
            </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
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
                                    echo "<td>$row[username]</td>";
                                    echo "<td>$row[password]</td>";
                                    echo "<td style='text-align: center;'>
                                            <a href='home.php?home=del_users&id=$row[id_user]'Onclick='return ConfirmDelete();'><img src='images/delete.png'></a>&nbsp;&nbsp;<a href='home.php?home=edit_users&id=$row[id_user]'><img src='images/edit.png'></a></td>";        
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Data User</h4>
                </div>
                <form action="tmb_users.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="modal-body">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Password" required>
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