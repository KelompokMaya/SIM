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
            <h3 class="box-title">Table Admin</h3>
            <button onclick="addAdmin();" class="btn btn-primary btn-flat pull-right" type="button">
                <i class="fa fa-plus"></i>
                  <span> Add Admin</span>
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
                        <th>Information</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                <?php foreach ($admin->result() as $row): ?>
                    <tr>
                        <td><?php echo $i; $i++; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->fullname; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->information; ?></td>
                        <td>
                          <div class="btn-group">
                            <button onclick="editAdmin(<?php echo $row->id; ?>);" class="btn btn-success btn-flat" type="button" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button onclick="deleteAdmin(<?php echo $row->id; ?>);" class="btn btn-danger btn-flat" type="button" data-toggle="tooltip" title="Delete">
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
                        <th>Information</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>

<!-- modal add menu!-->
<div class="modal fade" id="modalAdd-admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"id="myModalLabel">Add Admin</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="" id="form-create-admin">

                <div class="form-group">
                  <label>Username</label>
                  <input name="username" id="username" type="text" class="form-control" required="required" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Fullname</label>
                  <input name="fullname" id="fullname" type="text" class="form-control" required="required" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input name="email" id="email" type="email" class="form-control" required="required" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input name="password" id="password" type="email" class="form-control" required="required" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Information</label>
                  <textarea name="infromation" id="infromation" type="text" rows="5" class="form-control" required="required" placeholder="Enter ..."></textarea>
                </div>

          </div>
          <div class="modal-footer">
            <div class="btn-group">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" data-loading-text="Loading..." id="btn-add-admin">Save changes</button>
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

<!-- modal edit menu!-->
<div class="modal fade" id="modalEdit-admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"id="myModalLabel">Edit Admin</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="" id="form-edit-admin">

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
                  <label>Information</label>
                  <textarea name="infromation" id="edit-infromation" type="text" rows="5" class="form-control" required="required" placeholder="Enter ..."></textarea>
                </div>

                <input hidden="hidden" name="id" id="edit-id"></input>

          </div>
          <div class="modal-footer">
            <div class="btn-group">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success" data-loading-text="Loading..." id="btn-edit-admin">Save changes</button>
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
<div id="modalDelete-admin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Delete Admin</h4>
         </div>
         <div class="modal-body">
            Are you sure want to delete this admin?
         </div>
         <div class="modal-footer">
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
            <button id="btn-delete-admin" type="button" class="btn btn-danger btn-flat">Yes</button>
          </div>
        </div>
      </div>
   </div>
</div>

<script type="text/javascript">

    $('#modalDelete-admin').appendTo('body');
    $('#modalAdd-admin').appendTo('body');
    $('#modalEdit-admin').appendTo('body');

    function addAdmin() {
    	$('#modalAdd-admin').modal();
    	$('#btn-add-admin').one('click',function(event) {
            var username = $('#modalAdd-admin').find('#username').val();
            var fullname = $('#modalAdd-admin').find('#fullname').val();
            var email = $('#modalAdd-admin').find('#email').val();
            var password = $('#modalAdd-admin').find('#password').val();
            var infromation = $('#modalAdd-admin').find('#infromation').val();
    		$('#modalAdd-admin').modal('hide');
    		$('#preloader').css('display','block');
    		$('#main-content').html();
    		$.post(base_url+"Admin/Admin/create/", {username: username, fullname: fullname, email: email, password: password, infromation: infromation}, function(data) {
                $('#form-create-admin').trigger("reset");
    			$('#preloader').css('display','none');
    			$('#main-content').html(data);
    			dataTable();
    		});
    	});
    }

    function editAdmin(id) {
        $.get(base_url+"Admin/Admin/select/"+id, function(admin) {
            var admin=jQuery.parseJSON(admin+"");
            $('#modalEdit-admin').modal();
            $('#edit-id').val(admin.id);
            $('#edit-username').val(admin.username);
            $('#edit-fullname').val(admin.fullname);
            $('#edit-email').val(admin.email);
            //$('#edit-password').val(admin.password);
            $('#edit-infromation').val(admin.information);
        	$('#btn-edit-admin').click(function(event) {
                var username = $('#edit-username').val();
                var fullname = $('#edit-fullname').val();
                var email = $('#edit-email').val();
                var password = $('#edit-password').val();
                var infromation = $('#edit-infromation').val();
                var id = $('#edit-id').val();
                $.post(base_url+"Admin/Admin/update", {id:id, username: username, fullname: fullname, email: email, /*password: password,*/ infromation: infromation}, function(data, textStatus, xhr) {
                    $('#modalEdit-admin').modal('hide');
                    $('#form-edit-admin').trigger("reset");
                    $('#preloader').css('display','none');
                    $('#main-content').html(data);
                    dataTable();
                });

            });
        });
    }

    function deleteAdmin(id) {
    	$('#modalDelete-admin').modal();
    	$('#btn-delete-admin').click(function(event) {
    		$('#modalDelete-admin').modal('hide');
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
