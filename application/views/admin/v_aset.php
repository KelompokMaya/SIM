<div id="editor-wrapper" class="col-xs-12" style="display: none;">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tambah Aset</h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="add-aset">
            <div class="form-group">
               <form role="form" method="post" action="" id="form-create-aset">
                <div class="col-xs-6">

                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" id="nama" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Manufaktur</label>
                          <input name="manufaktur" id="manufaktur" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <select name="status" id="status" class="form-control " r">
                              <option value="aktif" >Aktif</option>
                              <option value="tidak aktif" >Tidak Aktif</option>
                          </select>  
                        </div>
                        <div class="form-group">
                          <label>lokasi </label>
                          <div class="form-group">
                           <select name="fakultas_id" id="fakultas_id" class="form-control article-option" onChange="tampilJurusan()" >
                                    <option > ----- Pilih Fakultas -------</option>  
                                    <?php foreach ($fakultas->result() as $option): ?>
                                    <option value="<?php echo $option->id; ?>" > <?php echo $option->nama_fakultas; ?></option>    
                                    <?php endforeach; ?>
                          </select>
                          </div>
                          <div class="form-group">
                           <select  name="jurusan_id" id="jurusan_id" class="form-control " onChange="tampilLokasi()">
                                    <option > ----- Pilih Jurusan -------</option>  
                          </select>
                          </div>
                          <div class="form-group">
                           <select name="lokasi_id" id="lokasi_id" class="form-control" >
                                    <option > ----- Pilih Lokasi -------</option>  
                          </select>
                          </div>  
                        </div>
                </div>
                <div class="col-xs-6">

                        <div class="form-group">
                          <label>No Seri</label>
                          <input name="noseri" id="noseri" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Tipe</label>
                          <input name="tipe" id="tipe" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Model</label>
                          <input name="model" id="model" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Trakhir diperbaiki</label>
                          <input name="trakhirdiperbaiki" id="trakhirdiperbaiki" type="date" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="btn-group pull-right">
                            <button id="btn-cancel" class="btn btn-default btn-flat">Batal</button>
                            <button type="button" class="btn btn-primary" data-loading-text="Loading..." id="btn-add-aset">Tambah</button>                  
                        </div>
                </div>
                
              </form>
            </div>
           
        </div>
    </div>
</div>


<div id="table-wrapper" class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Table Article</h3>
          <button class="btn btn-primary btn-flat pull-right" data-toggle="tooltip" onclick="addAset();"><i class="fa fa-plus" id="add"></i> Tambah Aset</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table class="table table1 table-bordered table-striped">
                <thead>
                    <tr style="background:  #3998ad; color: white">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Manufaktur</th>
                        <th>Nomor Seri</th>
                        <th>Tipe</th>
                        <th>Model</th>
                        <th>lokasi</th>
                        <th>Trakhir diperbaiki</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                 <?php $i=1; ?>
                 <?php foreach ($aset->result() as $row): ?>
                    <tr>
                       <td><?php echo $i; $i++; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><?php echo $row->manufaktur; ?></td>
                        <td><?php echo  $row->noseri; ?></td>
                        <td><?php echo $row->tipe; ?></td>
                        <td><?php echo $row->model; ?></td>
                        <td style="text-align: center;">
                                <button class="btn btn-primary btn-flat" data-toggle="tooltip"  onclick="editArticle();"><i class="fa fa-search"></i></button>
                        </td>
                        <td><?php echo $row->trakhir_diperbaiki; ?></td>
                        <td>
                            <div class="btn-group">
                                 <button onclick="editAset(<?php echo $row->id; ?>);" class="btn btn-success btn-flat" type="button" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i></button>
                                <button onclick="deleteAset(<?php echo $row->id; ?>);" class="btn btn-danger btn-flat" type="button" data-toggle="tooltip" title="Hapus">
                                <i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Manufaktur</th>
                        <th>Nomor Seri</th>
                        <th>Tipe</th>
                        <th>Model</th>
                        <th>lokasi</th>
                        <th>Trakhir diperbaiki</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    <!-- /.box-body -->
     </div>
    <!-- /.box -->
</div><!-- .col -->

<div id="modalDelete-aset" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Aset</h4>
         </div>
         <div class="modal-body">
             Apakah anda ingin menghapus Aset ini?
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tidak</button>
               <button id="btn-delete-aset" type="button" class="btn btn-danger btn-flat">Ya</button>
            </div>
         </div>
      </div>
   </div>
</div>




<script type="text/javascript">

  
    
    function addAset() {
        if($('#editor-wrapper').css('display')=='none'){
            $('#editor-wrapper').css('display', 'block');
            
        }
        
        $('#btn-add-aset').one('click',function(event) {
           $('#editor-wrapper').css('display', 'none');
            $('#preloader').css('display','block');
            var nama = $('#add-aset').find('#nama').val();
            var manufaktur = $('#add-aset').find('#manufaktur').val();
            var status = $('#add-aset').find('#status').val();
            var fakultas_id = $('#add-aset').find('#fakultas_id').val();
            var jurusan_id = $('#add-aset').find('#jurusan_id').val();
            var lokasi_id = $('#add-aset').find('#lokasi_id').val();
            var noseri = $('#add-aset').find('#noseri').val();
            var tipe = $('#add-aset').find('#tipe').val();
            var model = $('#add-aset').find('#model').val();
            var trakhirdiperbaiki = $('#add-aset').find('#trakhirdiperbaiki').val();
           
            $.post(base_url+"Admin/Aset/create/", {nama: nama, manufaktur: manufaktur, status: status, fakultas_id: fakultas_id, jurusan_id: jurusan_id, lokasi_id: lokasi_id, noseri: noseri, tipe: tipe, model: model,trakhirdiperbaiki:trakhirdiperbaiki }, function(data) {
                $('#form-create-aset').trigger("reset");
                $('#preloader').css('display','none');
                $('#main-content').html(data);
                dataTable();
                console.log(data);
            }); 
        });
    }

    

     function deleteAset(id) {
      $('#modalDelete-aset').modal();
      $('#btn-delete-aset').click(function(event) {
        $('#modalDelete-aset').modal('hide');
        $('#preloader').css('display','block');
        $('#main-content').html();
        $.get(base_url+"Admin/Aset/delete/"+id, function(data) {
          $('#preloader').css('display','none');
          $('#main-content').html(data);
          dataTable();
        });
      });

    }


    function editAset(id) {
      $('#editor-wrapper').css('display', 'block');
        
    }
   


   $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $('#btn-add').removeClass('disabled');  
        $('#editor-wrapper').css('display', 'none');
        CKEDITOR.instances['editor-body'].setData('');
    });





    //dropdown lokasi
  function tampilJurusan()
     {
       fakultas_id = document.getElementById("fakultas_id").value;

      
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"",
         success: function(response){
         $("#jurusan_id").html(response);
         $("#lokasi_id").html('');
         },
         dataType:"html"
       });

       return false;
     }
     function tampilLokasi()
     {
       jurusan_id = document.getElementById("jurusan_id").value;

       //alert("<?php echo base_url();?>Admin/Lokasi/select_lokasi/"+jurusan_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_lokasi/"+jurusan_id+"",
         success: function(response){
         $("#lokasi_id").html(response);
         },
         dataType:"html"
       });

       return false;
     }
</script>