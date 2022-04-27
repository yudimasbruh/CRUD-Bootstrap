<?php
    include '../config/config.php';
    $query='select * from tb_kategori';
    $hasil=$koneksi->query($query);
?>
<script>
    function ConfrimDelete()
    {
        var del = confrim("Are you sure want to delete?");
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
              <h3 class="box-title">Data Kategori</h3>
                <p style="text-align:right;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Kategori</button>
                </p>
            </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Kategori</th>
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
                                echo "<td>$row[namakat]</td>";
                                echo "<td style='text-align: center;'>
                                    <a href='home.php?home=del_kategori&id=$row[kodekat]'
                                    Onclick='return ConfrimDelete();'>
                                    <img src='images/delete.png'></a>&nbsp;&nbsp;
                                    <a href ='home.php?home=edit_kategori&id=$row[kodekat]'>
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
                    <h4 class="modal-title" id="myModalLabel">Tambah</h4>
                </div>
                <form action="tmb_kategori.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" required><br>
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
