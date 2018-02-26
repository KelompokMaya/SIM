
<div id="edit-dokumen" class=" col-xs-12" style="display: none;">
    <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Tambah Dokumen</h3>
          <div class="btn-group pull-right">
                <button id="btn-cancel" class="btn btn-default btn-flat">Batal</button>
                <button onclick="submit(this);" id="btn-submit" class="btn btn-primary btn-flat">Tambah</button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label >Judul Dokumen Perbaikan</label>
                <input id="editor-judul" class="form-control" type="text" name="editor-judul" placeholder="judul dokumen">
            </div>
            <div class="form-group">
                <label >Deskripsi Dokumen Perbaikan</label>
                <textarea id="editor-deskripsi" class="form-control" name="editor-deskripsi" data-link=""></textarea>
            </div>
            <div class="form-group">
                <label >Langkah Perbaikan</label>
                <textarea id="editor-langkah" name="editor-langkah" data-link=""></textarea>
            </div>
        </div>
    </div>
</div>

<div  class="col-xs-12">
  <div id="alert" class="alert alert-danger" style="display: none;">
                    <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Dokumen</h3>
            <button onclick="Cari();" class="btn btn-danger btn-flat pull-right" type="button"><span> Kembali</span></button>
            <button onclick="addDokumen();" class="btn btn-success btn-flat pull-right" type="button"><span> Tambah Dokumen</span></button>
            
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive" id="list-table-menu">
            <table id="" class="table table1 table-bordered table-hover">
                <thead>
                    <tr style="background:  #551E1E; color: white; text-align: center;">
                        <th style="width: 5% ">No</th>
                        <th>Judul</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Disunting</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($dokumen->result() as $row): ?>
                    <tr >
                        <td style="text-align: center"><?php echo $i;  ?></td>
                        <td><?php echo $row->judul;  ?></td>
                        <td><?php echo $row->tgl_buat;  ?></td>
                        <td><?php echo $row->tgl_edit;  ?></td>                      
                        <td style="text-align: center;">
                          <div class="btn-group">
                            <button class="btn btn-success btn-flat" data-toggle="tooltip" title="Edit" onclick="editDokumen(<?php echo $row->id_dokumen; ?>);"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deleteDokumen(<?php echo $row->id_dokumen; ?>);"><i class="fa fa-trash"></i></button>
                          </div>
                        </td>
                    </tr>  
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Disunting</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>

<!-- modal invalid inputan -->
<div id="modal-message" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Peringatan !!!</h4>
         </div>
         <div class="modal-body">
            <!--Text here-->
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" class="btn btn-flat btn-primary" data-dismiss="modal">OK</button>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- modal hapus -->
<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Peringatan !!</h4>
         </div>
         <div class="modal-body">
            Apakah Anda Yakun Menghapus Dokumen ini?
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
               <button id="btn-delete" type="button" class="btn btn-danger btn-flat">Yes</button>
            </div>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript">

     // Replace Textarea with CKEDITOR
    CKEDITOR.replace('editor-langkah'); 


     //fungsi menampilkan form dokumen
    function addDokumen() {
        if($('#edit-dokumen').css('display')=='none'){
            $("#edit-dokumen").show('slow');
            $(this).addClass('disabled');
            $('#btn-submit').html('Tambah');
            //$('#editor-wrapper').css('display', 'block');
            
        }
        if($('#bagian-cari').css('display')=='block'){
          $('#bagian-cari').hide('slow');
            
        }
        
        
        }
     //tambah dan edit dokumen
        var submit= function(ctx) {
        event.preventDefault();
        //$(ctx).addClass('disabled');

        if($('#editor-judul').val()=='' || CKEDITOR.instances['editor-langkah'].getData()=='' || $('#editor-deskripsi').val()==''){
            $('#modal-message .modal-body').text('Silakan Lengkapi Inputan');
            $('#modal-message').modal();
            return;

        } 

        if($('#btn-submit').html()=='Tambah'){ 
            $('#editor-wrapper').css('display', 'none');
            $('#preloader').css('display','block');
            var judul=$('#editor-judul').val();
            var deskripsi=$('#editor-deskripsi').val();
            var langkah=CKEDITOR.instances['editor-langkah'].getData()
            $.post(base_url+"Admin/Dokumen/insert", {judul: judul, deskripsi: deskripsi, langkah: langkah}, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#main-content').html(data);
            }); 
        }
        else if($('#btn-submit').html()=='Edit'){
            $('#editor-wrapper').css('display', 'none');
            $('#preloader').css('display','block');
            var id=$('#editor-langkah').attr('data-link');
            var judul=$('#editor-judul').val();
            var deskripsi=$('#editor-deskripsi').val();
            var langkah=CKEDITOR.instances['editor-langkah'].getData();
            $.post(base_url+"Admin/Dokumen/update", {id: id, judul: judul, deskripsi:deskripsi, langkah: langkah}, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#main-content').html(data);

            }); 
        }
    };

    //edit dokumen
    function editDokumen(id) {
        if($('#edit-dokumen').css('display')=='block'){
            $("#edit-dokumen").hide('slow');    
        }

        //$('#preloader').css('display','block');
        $.get(base_url+"Admin/Dokumen/select/"+id, function(dokumen) { 
            //$('#preloader').css('display','none');
            $('#edit-dokumen').show('slow');   
            $('#btn-add').addClass('disabled'); 
            $('#btn-submit').html('Edit');
            $('#editor-langkah').attr('data-link', dokumen.id_dokumen);
            $('#editor-judul').val(dokumen.judul);
            $('#editor-deskripsi').val(dokumen.deskripsi);
            CKEDITOR.instances['editor-langkah'].setData(dokumen.langkah);
        }, 'json');
    }
   
    //hapus dokumen
    function deleteDokumen(id) {
        $('#modal-delete').modal();
        $(document).one('click','#btn-delete', function(event) {
            $('#modal-delete').modal('hide').on('hidden.bs.modal', function() {
                $('#main-content').html('');
                $('#preloader').css('display','block');
                $.get(base_url+"Admin/Dokumen/delete/"+id, function(data) {
                    $('#preloader').css('display','none');
                    $('#main-content').html(data);
                });
            });
        });
    }

    //button batal
    $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $('#edit-dokumen').hide('slow');
        $('#editor-judul').val('');
        $('#editor-deskripsi').val('');
        CKEDITOR.instances['editor-langkah'].setData('');
        
    });

    //ke page pencrian
    function Cari(){
      //$('#preloader').css('display','block');
      $.get(base_url+"Admin/Pendok", function(data) {
        //$('#preloader').css('display','none');
        $('#main-content').html(data);  
    });
      }

    //data tabel
    dataTable(); 
</script>




 
 