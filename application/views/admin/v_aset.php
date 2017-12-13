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
                              <option value="backup" >Backup</option>
                              <option value="Rusak" >Rusak</option>
                          </select>  
                        </div>
                        <div class="form-group">
                          <label>lokasi </label>
                          <div class="form-group">
                            
                              <select name="kampus_id" id="kampus_id" class="form-control article-option" onChange="tampilFakultas()" >
                                            <option value="0"> ----- Pilih Kampus -------</option>  
                                            <option value="1"> Kampus Bukit </option> 
                                            <option value="2"> Kampus Sudirman </option>    
                              </select>
                          </div>
                          <div class="form-group">
                           <select name="fakultas_id" id="fakultas_id" class="form-control article-option" onChange="tampilJurusan()" >
                                    <option > ----- Pilih Fakultas -------</option>  
                                   
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
                          <label>No Inventory</label>
                          <input name="noinventory" id="noinventory" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Tanggal dipasang</label>
                          <input name="tgldipasang" id="tgldipasang" type="date" class="form-control"  placeholder="Enter ...">
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

<div id="editor-wrapper2" class="col-xs-12" style="display: none;">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Aset</h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="edit-aset">
            <div class="form-group">
               <form role="form" method="post" action="" id="form-create-aset">
                <div class="col-xs-6">

                        <div class="form-group">
                          <label>Nama</label>
                          <input name="nama" id="edit-nama" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Manufaktur</label>
                          <input name="manufaktur" id="edit-manufaktur" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <select name="status" id="edit-status" class="form-control " >
                              <option value="aktif" >Aktif</option>
                              <option value="tidak aktif" >Tidak Aktif</option>
                              <option value="backup" >Backup</option>
                              <option value="Rusak" >Rusak</option>
                          </select>  
                        </div>
                         <div class="form-group">
                          <label>No Inventory</label>
                          <input name="noinventory" id="edit-noinventory" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Tanggal dipasang</label>
                          <input name="tgldipasang" id="edit-tgldipasang" type="date" class="form-control"  placeholder="Enter ...">
                        </div>
                        
                </div>
                <div class="col-xs-6">

                        <div class="form-group">
                          <label>No Seri</label>
                          <input name="noseri" id="edit-noseri" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Tipe</label>
                          <input name="tipe" id="edit-tipe" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Model</label>
                          <input name="model" id="edit-model" type="text" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                          <label>Trakhir diperbaiki</label>
                          <input name="trakhirdiperbaiki" id="edit-trakhirdiperbaiki" type="date" class="form-control"  placeholder="Enter ...">
                        </div>
                        <div class="btn-group pull-right">
                            <button id="btn-cancel" class="btn btn-default btn-flat">Batal</button>
                            <button type="button" class="btn btn-warning btn-flat" data-loading-text="Loading..." id="btn-edit-aset">Edit</button>                  
                        </div>
                        <input hidden="hidden" name="id" id="edit-id"></input>
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
          <a href="<?php echo base_url('Admin/Excel/export_excel') ?>" class="btn btn-warning btn-flat pull-right" data-toggle="tooltip" ><i class="fa fa-download " ></i> Export Data</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table class="table table1 table-bordered table-striped">
                <thead>
                    <tr style="background:  #3998ad; color: white; text-align: center;">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Manufaktur</th>
                        <th>No Seri</th>
                        <th>Tipe</th>
                        <th>Model</th>
                        <!-- <th>No Inventory</th> -->
                        <th>Pemasangan</th>
                        <th>Perbaikan</th>
                        <th>lokasi</th>
                        <th style="width: 100px">Aksi</th>
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
                         <!-- <td><?php echo $row->noinventory; ?></td> -->
                          <td><?php echo $row->tgldipasang; ?></td>
                        <td><?php echo $row->trakhir_diperbaiki; ?></td>
                        <td style="text-align: center;">
                                <button onclick="lokasiAset(<?php echo $row->id_aset; ?>);" class="btn btn-primary btn-flat" type="button" data-toggle="tooltip">
                                <i class="fa fa-search"></i></button>
                        </td>
                        <td style=" width: 100px;text-align: center;">
                            <div class="btn-group">
                                 <button onclick="editAset(<?php echo $row->id_aset; ?>);" class="btn btn-success btn-flat" type="button" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i></button>
                                <button onclick="deleteAset(<?php echo $row->id_aset; ?>);" class="btn btn-danger btn-flat" type="button" data-toggle="tooltip" title="Hapus">
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
                        <th>No Seri</th>
                        <th>Tipe</th>
                        <th>Model</th>
                        <!--  <th>No Inventory</th> -->
                        <th>Pemasangan</th>
                        <th>Perbaikan</th>
                        <th>lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    <!-- /.box-body -->
     </div>
    <!-- /.box -->
</div><!-- .col -->


 <!-- modal konfirmasi hapus -->
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

<!-- modal lihat lokasi dan ubah lokasi -->
<div id="modalLokasi-aset" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header"  style="text-align: center;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Lokasi Aset</h4>
         </div>

         <div class="modal-body">
             <div class="form-group">
                <form role="form" method="post" action="" id="lokasi-awal">
                  <label>Kampus </label>
                    <div class="form-group">
                      <input name="curr_kampus" id="curr_kampus" type="text" class="form-control "  disabled> 
                    </div>
                  <label>Fakultas </label>
                    <div class="form-group">
                      <input name="curr_fakultas" id="curr_fakultas" type="text" class="form-control "  disabled> 
                    </div>
                  <label>Jurusan </label>
                    <div class="form-group">
                      <input name="curr_jurusan" id="curr_jurusan" type="text" class="form-control "  disabled> 
                  </div>
                  <label>Lokasi </label>
                    <div class="form-group">
                      <input name="curr_lokasi" id="curr_lokasi" type="text" class="form-control "  disabled>
                  </div>
                </form>
              </div>
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" id="btn-cancel" class="btn btn-default btn-flat" data-dismiss="modal">Tutup</button>
               <button id="btn-ubah-lokasi-aset" type="button" class="btn btn-primary btn-flat">Pindahkan Lokasi Aset</button>
            </div>
         </div>
         <div class="modal-header" >
          <div class="form-group">
              <form role="form" method="post" action="" style="display: none;" id="ubah-lokasi">
                          <label>lokasi Baru </label>
                           <div class="form-group">
                            
                              <select name="kampus_id" id="editkampus_id" class="form-control article-option" onChange="editTampilFakultas()" >
                                            <option value="0"> ----- Pilih Kampus -------</option>  
                                            <option value="1"> Kampus Bukit </option> 
                                            <option value="2"> Kampus Sudirman </option>    
                              </select>
                          </div>
                          <div class="form-group">
                               <select name="fakultas_id" id="editfakultas_id" class="form-control article-option" onChange="editTampilJurusan()" >
                                        <option > ----- Pilih Fakultas -------</option>  
                                        
                              </select>
                          </div>
                          <div class="form-group">
                               <select  name="jurusan_id" id="editjurusan_id" class="form-control " onChange="editTampilLokasi()">
                                        <option value="0" >----- Pilih Jurusan -------</option>  
                              </select>
                          </div>
                          <div class="form-group">
                               <select name="lokasi_id" id="editlokasi_id" class="form-control" >
                                        <option value="0" >----- Pilih Lokasi -------</option>  
                               </select>
                          </div> 
                          <div class="form-group">
                               <input type="date" id="tanggal_pindah" class="form-control">
                          </div> 
                               <input hidden="hidden" name="id" id="edit_id">
                          <div class="modal-footer">
                              <div class="btn-group">
                                 <button id="btn-simpan-lokasi-aset" type="button" class="btn btn-success btn-flat ">Simpan</button>
                              </div>
                        </div>
                </form>
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
            <h4 class="modal-title" id="myModalLabel">Gagal Menambahkan Data</h4>
         </div>
         <div class="modal-body">
            Nama Aset Kosong !!!
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

    function addAset() {
        if($('#editor-wrapper').css('display')=='none'){
            $('#editor-wrapper').css('display', 'block');
            
        }
        if($('#editor-wrapper2').css('display')=='block'){
            $('#editor-wrapper2').css('display', 'none');
            
        }
        
        
    }
  $('#btn-add-aset').one('click',function(event) {
           $('#preloader').css('display','block');
           $('#editor-wrapper').css('display', 'none');
            
            var nama = $('#add-aset').find('#nama').val();
            var manufaktur = $('#add-aset').find('#manufaktur').val();
            var status = $('#add-aset').find('#status').val();
            var kampus_id = $('#add-aset').find('#kampus_id').val();
            var fakultas_id = $('#add-aset').find('#fakultas_id').val();
            var jurusan_id = $('#add-aset').find('#jurusan_id').val();
            var lokasi_id = $('#add-aset').find('#lokasi_id').val();
            var noseri = $('#add-aset').find('#noseri').val();
            var tipe = $('#add-aset').find('#tipe').val();
            var model = $('#add-aset').find('#model').val();
            var noinventory = $('#add-aset').find('#noinventory').val();
            var tgldipasang = $('#add-aset').find('#tgldipasang').val();
            var trakhirdiperbaiki = $('#add-aset').find('#trakhirdiperbaiki').val();
           
            $.post(base_url+"Admin/Aset/create/", {nama: nama, manufaktur: manufaktur, status: status,kampus_id:kampus_id, fakultas_id: fakultas_id, jurusan_id: jurusan_id, lokasi_id: lokasi_id, noseri: noseri, tipe: tipe, model: model,noinventory:noinventory,tgldipasang:tgldipasang,trakhirdiperbaiki:trakhirdiperbaiki }, function(data) {
                $('#form-create-aset').trigger("reset");
                $('#preloader').css('display','none');
                $('#main-content').html(data);
                dataTable();
                //console.log(data);
            }); 
            if (nama=='') {
               $('#modalWarning-user').modal();
            }
        });

    

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
      if($('#editor-wrapper').css('display')=='block'){
            $('#editor-wrapper').css('display', 'none');
            
        }
      $('#editor-wrapper2').css('display', 'block');
      $.get(base_url+"Admin/Aset/select/"+id, function(aset) {
            var aset=jQuery.parseJSON(aset+"");
            
           $('#edit-id').val(aset.id_aset);
            $('#edit-nama').val(aset.nama);
            $('#edit-manufaktur').val(aset.manufaktur);
            $('#edit-status').val(aset.status);
            $('#edit-noseri').val(aset.noseri);
            $('#edit-tipe').val(aset.tipe);
            $('#edit-model').val(aset.model);
            $('#edit-noinventory').val(aset.noinventory);
            $('#edit-tgldipasang').val(aset.tgldipasang);
            $('#edit-trakhirdiperbaiki').val(aset.trakhir_diperbaiki);
            $('#btn-edit-aset').one('click',function(event) {
            $('#preloader').css('display','block');
            $('#editor-wrapper2').css('display', 'none');

            var id = $('#edit-aset').find('#edit-id').val();
            var nama = $('#edit-aset').find('#edit-nama').val();
            var manufaktur = $('#edit-aset').find('#edit-manufaktur').val();
            var status = $('#edit-aset').find('#edit-status').val();
            var noseri = $('#edit-aset').find('#edit-noseri').val();
            var tipe = $('#edit-aset').find('#edit-tipe').val();
            var model = $('#edit-aset').find('#edit-model').val();
            var noinventory = $('#edit-aset').find('#edit-noinventory').val();
            var tgldipasang = $('#edit-aset').find('#edit-tgldipasang').val();
            var trakhirdiperbaiki = $('#edit-aset').find('#edit-trakhirdiperbaiki').val();
             

             /* var id = $('#edit-id').val();
              var nama = $('#edit-nama').val();
              var manufaktur = $('#edit-manufaktur').val();
              var status = $('#edit-status').val();
              var fakultas_id = $('#edit-fakultas_id').val();
              var jurusan_id = $('#edit-jurusan_id').val();
              var lokasi_id = $('#edit-lokasi_id').val();
              var noseri = $('#edit-noseri').val();
              var tipe = $('#edit-tipe').val();
              var modal = $('#edit-model').val();
              var trakhirdiperbaiki= $('#edit-trakhirdiperbaiki').val();
              */

                
               $.post(base_url+"Admin/Aset/update/", {id:id, nama: nama, manufaktur: manufaktur, status: status,  noseri: noseri, tipe: tipe, model: model,noinventory:noinventory, tgldipasang:tgldipasang, trakhirdiperbaiki:trakhirdiperbaiki }, function(data, textStatus, xhr) {
                    
                    $('#form-edit-aset').trigger("reset");
                    $('#preloader').css('display','none');
                    $('#main-content').html(data);
                    dataTable();
                }); 

            }); 
        });

        
    }
     function lokasiAset(id) {
      
            $('#edit_id').val(id);
            $('#modalLokasi-aset').modal();
            $.get(base_url+"Admin/Aset/currLokasi/"+id, function(lokasi) {
            var lokasi=jQuery.parseJSON(lokasi+"");
              $('#curr_kampus').val(lokasi.nama_kampus);
              $('#curr_fakultas').val(lokasi.nama_fakultas);
              $('#curr_jurusan').val(lokasi.nama_jurusan);
              $('#curr_lokasi').val(lokasi.nama_lokasi);
                $('#btn-ubah-lokasi-aset').click(function(event) {
                        $('#ubah-lokasi').css('display','block');

                        
                        
                }); 
              
              
              //console.log(lokasi.nama);
            });


    }


    $('#btn-simpan-lokasi-aset').click(function(event) {
       var id            = $('#ubah-lokasi').find('#edit_id').val();
       $.get(base_url+"Admin/Aset/currLokasi/"+id, function(lokasi) {
            var lokasi=jQuery.parseJSON(lokasi+"");
                          $('#preloader').css('display','block');
                          $('#modalLokasi-aset').modal('hide');
                        var id            = $('#ubah-lokasi').find('#edit_id').val();
                        var nama          = lokasi.nama;
                        var curr_kampus   = lokasi.id_kampus;
                        var curr_fakultas = lokasi.id_fakultas;
                        var curr_jurusan  = lokasi.id_jurusan;
                        var curr_lokasi   = lokasi.id_lokasi;
                        var kampus_id     = $('#ubah-lokasi').find('#editkampus_id').val();
                        var fakultas_id   = $('#ubah-lokasi').find('#editfakultas_id').val();
                        var jurusan_id    = $('#ubah-lokasi').find('#editjurusan_id').val();
                        var lokasi_id     = $('#ubah-lokasi').find('#editlokasi_id').val();
                        var tanggal_pindah= $('#ubah-lokasi').find('#tanggal_pindah').val();
                          $.post(base_url+"Admin/Aset/updateLokasi/", {id:id,nama:nama,curr_kampus:curr_kampus,curr_fakultas:curr_fakultas,curr_jurusan:curr_jurusan,curr_lokasi:curr_lokasi,kampus_id:kampus_id, fakultas_id:fakultas_id,jurusan_id:jurusan_id,lokasi_id:lokasi_id,tanggal_pindah:tanggal_pindah }, function(data, textStatus, xhr) {
                          
                          $('#ubah-lokasi').trigger("reset");
                          $('#preloader').css('display','none');
                          $('#main-content').html(data);
                          dataTable();
                          });

        }); 
    }); 

    
   


   $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $('#btn-add').removeClass('disabled');  
        $('#editor-wrapper').css('display', 'none');
        $('#editor-wrapper2').css('display', 'none');
        $('#ubah-lokasi').css('display','none');
        $('#ubah-lokasi').trigger("reset");
        
    });





    //dropdown lokasi
  function tampilFakultas()
     {
       kampus_id = document.getElementById("kampus_id").value;
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_fakultas/"+kampus_id+"",
         success: function(response){
         $("#fakultas_id").html(response);
         $("#jurusan_id").html('');
         $("#lokasi_id").html('');
         },
         dataType:"html"
       });

       return false;
     }

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

  function editTampilFakultas()
     {
       kampus_id = document.getElementById("editkampus_id").value;
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_fakultas/"+kampus_id+"",
         success: function(response){
         $("#editfakultas_id").html(response);
         $("#editjurusan_id").html('');
         $("#editlokasi_id").html('');
         },
         dataType:"html"
       });

       return false;
     }

  function editTampilJurusan()
     {
       fakultas_id = document.getElementById("editfakultas_id").value;
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"",
         success: function(response){
         $("#editjurusan_id").html(response);
         $("#editlokasi_id").html('');
         },
         dataType:"html"
       });

       return false;
     }

  function editTampilLokasi()
     {
       jurusan_id = document.getElementById("editjurusan_id").value;

       //alert("<?php echo base_url();?>Admin/Lokasi/select_lokasi/"+jurusan_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_lokasi/"+jurusan_id+"",
         success: function(response){
         $("#editlokasi_id").html(response);
         },
         dataType:"html"
       });

       return false;
     }
</script>