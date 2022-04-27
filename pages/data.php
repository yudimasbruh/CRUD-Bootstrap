    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data</h3>
                <p style="text-align:right;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                </p>
            </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Header Table 1</th>
                                <th>Header Table 2</th>
                                <th>Header Table 3</th>
                                <th>Header Table 4</th>
                            </tr>
                        </thead> 
                        
                        <tbody>
                            <tr>
                                <td>Tabel Isi 1</td>
                                <td>Tabel Isi 2</td>
                                <td>Tabel Isi 3</td>
                                <td>Tabel Isi 4</td>
                            </tr>
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
                <form action="tmb_user.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <p>Letak Form</p>
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
