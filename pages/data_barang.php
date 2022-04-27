<?php
    include '../config/config.php';
    $query='select * from tb_barang';
    $hasil=$koneksi->query($query);

    function rp($number) {
    $rt = 'Rp. '.number_format($number);
    return $rt;
    }
?>
</script>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang</h3>
                <p style="text-align:right;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Barang</button>
                </p>
            </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Nama Kategori</th>
                                <th>Harga</th>
                                <th class='text-center'>foto</th>
                                <th class='text-center'>Action</th>
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
                                echo "<td>$row[namabarang]</td>";
                                echo "<td>$row[kategoribarang]</td>";
                                echo "<td>".rp($row["harga"])."</td>";
    echo "<td class='text-center'><a href='../foto/$row[foto]' target='_blank'/><img src='../foto/$row[foto]'width='30'></a></td>";
                                echo "<td style='text-align: center;'>
                                    <a href='home.php?home=del_barang&id=$row[kodebarang]'
                                    Onclick='return ConfrimDelete();'>
                                    <img src='images/delete.png'></a>&nbsp;&nbsp;
                                    <a href ='home.php?home=edit_barang&id=$row[kodebarang]'>
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Barang</h4>
                </div>
                <form action="tmb_barang.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="text" name="namabarang" class="form-control" placeholder="Nama Barang"><br>
                        <select name="kategori" class="form-control">
                            <option>Pilih Kategori Barang</option>
                                <?php
                                    $query2="select * from tb_kategori";
                                    $hasil2=$koneksi->query($query2);
                                    while($row2 = mysqli_fetch_array($hasil2))
                                    {
                                    echo "<option value='".$row2['namakat']."'>".$row2['namakat']."</option>";
                                    }
                            ?>
                       </select><br>
                       <input type="number" name="harga" class="form-control" placeholder="Harga Barang"><br>
                       <input type="file" name="myfile">
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
