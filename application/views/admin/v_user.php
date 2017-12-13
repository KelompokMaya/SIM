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
  <div id="alert" class="alert alert-danger" style="display: none;">
                    <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data User</h3>
            <button onclick="addUser();" class="btn btn-primary btn-flat pull-right" type="button">
                <i class="fa fa-plus"></i>
                  <span> Tambah User</span>
            </button>
            
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive" id="list-table-menu">
            <table id="" class="table table1 table-bordered table-hover">
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
                <?php $i=1; ?>
                <?php foreach ($user->result() as $row): ?>
                    <tr>
                        <td><?php echo $i; $i++; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->fullname; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo  $row->phone; ?></td>
                        <td><?php echo $row->lokasi; ?></td>
                        <td><?php echo $row->aktif; ?></td>
                         
                        <td style="text-align: center;">
                          <div class="btn-group">
                            <button onclick="editUser(<?php echo $row->id; ?>);" class="btn btn-success btn-flat" type="button" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button onclick="deleteUser(<?php echo $row->id; ?>);" class="btn btn-danger btn-flat" type="button" data-toggle="tooltip" title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                          </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
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

<!-- modal add user!-->
<div class="modal fade" id="modalAdd-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
          </div>
          <div class="modal-body">
                
            <form role="form" method="post" action="" id="form-create-user">

                <div class="form-group">
                  <label>Username</label>
                  <input name="username" id="username" type="text" class="form-control"  placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Fullname</label>
                  <input name="fullname" id="fullname" type="text" class="form-control"  placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input name="email" id="email" type="email" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input name="password" id="password" type="password" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>phone</label>
                  <input name="phone" id="phone" type="text" class="form-control"  placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Lokasi</label>
                  <input name="lokasi" id="lokasi" type="text" class="form-control"  placeholder="Enter ...">
                </div>
         
          <div class="modal-footer">
            <div class="btn-group">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary" data-loading-text="Loading..." id="btn-add-user">Simpan</button>
            </div>
          </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
</div>

<!-- modal edit user!-->
<div class="modal fade" id="modalEdit-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="" id="form-edit-user">

                <div class="form-group">
                  <label>Username</label>
                  <input name="username" id="edit-username" type="text" class="form-control" required="required" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Fullname</label>
                  <input name="fullname" id="edit-fullname" type="text" class="form-control" required="required" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input name="email" id="edit-email" type="email" class="form-control" required="required" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input name="password" id="edit-password" type="email" class="form-control" disabled="true" required="required" placeholder="Cannot edit password, delete this admin if you forgot the password and create new one">
                </div>

                <div class="form-group">
                  <label>Phone</label>
                  <input name="phone" id="edit-phone" type="text" class="form-control"  placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Lokasi</label>
                  <input name="lokasi" id="edit-lokasi" type="text" class="form-control"  placeholder="Enter ...">
                </div>
                
                <div class="form-group">
                  <label>Aktif</label>
                  <select class="form-control" name="aktif" id="edit-aktif" >
                    <option value="ya">ya</option>
                    <option value="tidak">tidak</option>
                  </select>
                </div>

                <input hidden="hidden" name="id" id="edit-id"></input>

          </div>
          <div class="modal-footer">
            <div class="btn-group">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-success" data-loading-text="Loading..." id="btn-edit-user">Simpan</button>
            </div>
          </div>
          </form>
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

<!--modal warning menu!-->
<div id="modalWarning-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Gagal Menambahkan User</h4>
         </div>
         <div class="modal-body">
            Username atau Password Kosong !!!
         </div>
         <div class="modal-footer">
          <div class="btn-group">
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">tutup</button>
          </div>
        </div>
      </div>
   </div>
</div>

<script type="text/javascript">

    $('#modalWarning-user').appendTo('body');
    $('#modalDelete-user').appendTo('body');
    $('#modalAdd-user').appendTo('body');
    $('#modalEdit-user').appendTo('body');
  

    function addUser() {
    	$('#modalAdd-user').modal();
      $('#alert').css('display','none');
    	
    }
    
    $('#btn-add-user').one('click',function(event) {
            var username = $('#modalAdd-user').find('#username').val();
            var fullname = $('#modalAdd-user').find('#fullname').val();
            var email = $('#modalAdd-user').find('#email').val();
            var password = $('#modalAdd-user').find('#password').val();
            var phone = $('#modalAdd-user').find('#phone').val();
            var lokasi = $('#modalAdd-user').find('#lokasi').val();           
            
              $('#modalAdd-user').modal('hide');
              $('#preloader').css('display','block');

              $('#main-content').html();
              $.post(base_url+"Admin/Admin/create/", {username: username, fullname: fullname, email: email, password: password, phone:phone, lokasi:lokasi}, function(data) {
                $('#form-create-user').trigger("reset");
                $('#preloader').css('display','none');
                $('#main-content').html(data);
                dataTable();
              });

              if (username==''|| password=='') {
               $('#modalWarning-user').modal();
            }
      });

    function editUser(id) {
      $('#modalEdit-user').modal();
        $.get(base_url+"Admin/Admin/select/"+id, function(user) {
            var user=jQuery.parseJSON(user+"");
            
            $('#edit-id').val(user.id);
            $('#edit-username').val(user.username);
            $('#edit-fullname').val(user.fullname);
            $('#edit-email').val(user.email);
            $('#edit-phone').val(user.phone);
            $('#edit-lokasi').val(user.lokasi);
            $('#edit-aktif').val(user.aktif);
            //$('#edit-password').val(admin.password);
            
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
</script>


<!-- 

<script type="application/javascript">  
     /** After windod Load */  
     $(window).bind("load", function() {  
       window.setTimeout(function() {  
         $("#alert").fadeTo(500, 0).slideUp(500, function() {  
           $(this).remove();  
         });  
       }, 500);  
     });  
   </script> -->