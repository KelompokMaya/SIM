<link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.11/plugins/datepicker/datepicker3.css"); ?>">
  <!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.11/plugins/select2/select2.min.css"); ?>">
<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
</style>

<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Lokasi</h3>
            <button onclick="hapusLokasi();" class="btn btn-danger btn-flat pull-right" type="button">
                <i class="fa fa-trash"></i>
                  <span> Hapus Lokasi</span>
            </button>
            <button onclick="addLokasi();" class="btn btn-success btn-flat pull-right" type="button">
                <i class="fa fa-plus"></i>
                  <span> Tambah Lokasi</span>
            </button>
            <button onclick="cariLokasi();" class="btn btn-primary btn-flat pull-right" type="button">
                <i class="fa fa-search"></i>
                  <span>Cari Aset</span>
            </button>
            
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive" id="list-table-menu">
            <table id="" class="table table2 table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Lokasi</th>
                        <th>Aktif</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>qweqwq</td>
                        <td>qweqwq</td>
                        <td>qweqwq</td>
                        <td>qweqwq</td>
                        <td>qweqwq</td>
                        <td>qweqwq</td>
                        <td>qweqwq</td>
                        
                         
                        <td>
                          <div class="btn-group">
                            <button onclick="editUser();" class="btn btn-success btn-flat" type="button" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button onclick="deleteUser();" class="btn btn-danger btn-flat" type="button" data-toggle="tooltip" title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                          </div>
                        </td>
                    </tr>
              
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Lokasi</th>
                        <th>Aktif</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            

        </div>
    </div>
</div>



<!-- modal add lokasi!-->
<div class="modal fade" id="modalAdd-lokasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Lokasi</h4>
          </div>
          <div class="modal-body">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Fakultas</a></li>
              <li><a href="#tab_2" data-toggle="tab">Jurusan</a></li>
              <li><a href="#tab_3" data-toggle="tab">Lokasi</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <form role="form" method="post" action="" id="form-create-fakultas">
                      <div class="form-group">
                        <label>Fakultas</label>
                        <input name="fakultas_id" id="fakultas_id" type="text" class="form-control" required="required" placeholder="Enter ...">
                      </div>
                      <div class="modal-footer">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary" data-loading-text="Loading..." id="btn-add-fakultas">Simpan</button>
                        </div>
                      </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form role="form" method="post" action="" id="form-create-jurusan">
                      <div class="form-group">
                        <label>Fakultas</label>
                        <select name="fakultas_id" id="fakultas_id" class="form-control article-option" >
                                    <option value="0"> ----- Pilih Fakultas -------</option>  
                                    <?php foreach ($fakultas->result() as $option): ?>
                                    <option value="<?php echo $option->id; ?>" > <?php echo $option->nama_fakultas; ?></option>    
                                    <?php endforeach; ?>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label>Jurusan</label>
                        <input name="jurusan_id" id="jurusan_id1" type="text" class="form-control" required="required" placeholder="Enter ...">
                      </div>
                      <div class="modal-footer">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary" data-loading-text="Loading..." id="btn-add-jurusan">Simpan</button>
                        </div>
                      </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <form role="form" method="post" action="" id="form-create-lokasi">
                      <div class="form-group">
                        <label>Fakultas</label>
                        <select name="fakultas_id" id="fakultas_id1" class="form-control article-option" onChange="tampilJurusan()">
                                    <option value="0"> ----- Pilih Fakultas -------</option>  
                                    <?php foreach ($fakultas->result() as $option): ?>
                                    <option value="<?php echo $option->id; ?>" > <?php echo $option->nama_fakultas; ?></option>    
                                    <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Jurusan</label>
                        <select name="jurusan_id" id="jurusan_id" class="form-control article-option" >
                                <option value="0"> ----- Pilih Jurusan -------</option>     
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Lokasi</label>
                        <input name="lokasi_id" id="lokasi_id" type="text" class="form-control"  placeholder="Enter ...">
                      </div>
                      <div class="modal-footer">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary" data-loading-text="Loading..." id="btn-add-lokasi">Simpan</button>
                        </div>
                      </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
</div>



<!--modal delete menu!-->
<div id="modalDelete-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
         </div>
         <div class="modal-body">
            Apakah anda ingin menghapus user ini?
         </div>
         <div class="modal-footer">
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tidak</button>
            <button id="btn-delete-user" type="button" class="btn btn-danger btn-flat">Ya</button>
          </div>
        </div>
      </div>
   </div>
</div>

<script type="text/javascript">

    $('#modalDelete-user').appendTo('body');
    $('#modalAdd-user').appendTo('body');
    $('#modalEdit-user').appendTo('body');

    function addLokasi() {
      $('#modalAdd-lokasi').modal();
      $('#btn-add-fakultas').one('click',function(event) {
            var fakultas = $('#tab_1').find('#fakultas_id').val();
            
        $('#modalAdd-lokasi').modal('hide');
        $('#preloader').css('display','block');
        $('#main-content').html();
        $.post(base_url+"Admin/Lokasi/create_fakultas/", {fakultas:fakultas}, function(data) {
                $('#form-create-fakultas').trigger("reset");
          $('#preloader').css('display','none');
          $('#main-content').html(data);
          dataTable();
        });
      });
      $('#btn-add-jurusan').one('click',function(event) {
            var fakultas = $('#tab_2').find('#fakultas_id').val();
            var jurusan = $('#tab_2').find('#jurusan_id1').val();
            
        $('#modalAdd-lokasi').modal('hide');
        $('#preloader').css('display','block');
        $('#main-content').html();
        $.post(base_url+"Admin/Lokasi/create_jurusan/", {fakultas: fakultas, jurusan: jurusan}, function(data) {
                $('#form-create-jurusan').trigger("reset");
          $('#preloader').css('display','none');
          $('#main-content').html(data);
          dataTable();
        });
      });
      $('#btn-add-lokasi').one('click',function(event) {
            var fakultas = $('#tab_3').find('#fakultas_id1').val();
            var jurusan = $('#tab_3').find('#jurusan_id').val();
            var lokasi = $('#tab_3').find('#lokasi_id').val();
            
        $('#modalAdd-lokasi').modal('hide');
        $('#preloader').css('display','block');
        $('#main-content').html();
        $.post(base_url+"Admin/Lokasi/create_lokasi/", {fakultas: fakultas, jurusan: jurusan, lokasi:lokasi}, function(data) {
                $('#form-create-fakultas').trigger("reset");
          $('#preloader').css('display','none');
          $('#main-content').html(data);
          dataTable();
        });
      });
    }

    function editUser(id) {
        $.get(base_url+"Admin/Admin/select/"+id, function(user) {
            var user=jQuery.parseJSON(user+"");
            $('#modalEdit-user').modal();
            $('#edit-id').val(user.id);
            $('#edit-username').val(user.username);
            $('#edit-fullname').val(user.fullname);
            $('#edit-email').val(user.email);
            $('#edit-phone').val(user.phone);
            $('#edit-lokasi').val(user.lokasi);
            $('#edit-aktif').val(user.aktif)
            //$('#edit-password').val(admin.password);
            ;
          $('#btn-edit-user').click(function(event) {
                var username = $('#edit-username').val();
                var fullname = $('#edit-fullname').val();
                var email = $('#edit-email').val();
                //var password = $('#edit-password').val();
                var phone = $('#edit-phone').val();
                var lokasi = $('#edit-lokasi').val();
                var aktif = $('#edit-aktif').val();
                var id = $('#edit-id').val();
                $.post(base_url+"Admin/Admin/update", {id:id, username: username, fullname: fullname, email: email, /*password: password,*/ phone:phone, lokasi:lokasi, aktif:aktif}, function(data, textStatus, xhr) {
                    $('#modalEdit-user').modal('hide');
                    $('#form-edit-user').trigger("reset");
                    $('#preloader').css('display','none');
                    $('#main-content').html(data);
                    dataTable();
                });

            });
        });
    }

    function deleteUser(id) {
      $('#modalDelete-user').modal();
      $('#btn-delete-user').click(function(event) {
        $('#modalDelete-user').modal('hide');
        $('#preloader').css('display','block');
        $('#main-content').html();
        $.get(base_url+"Admin/Admin/delete/"+id, function(data) {
          $('#preloader').css('display','none');
          $('#main-content').html(data);
          dataTable();
        });
      });

    }



     //dropdown lokasi
  function tampilJurusan()
     {
       fakultas_id = document.getElementById("fakultas_id1").value;

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"",
         success: function(response){
         $("#jurusan_id").html(response);
         },
         dataType:"html"
       });

       return false;
     }
</script>
