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
<div id="cari-Aset" class="col-xs-12" style="display: none;">
    <div class="box  box-success">
        <div class="box-header">
          <h3 class="box-title">Cari Aset</h3>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="cari-aset">
            <div class="form-group">
               <form role="form" method="post" action="" id="form-cari-aset">
                <div class="col-xs-3">
                      <div class="form-group">
                              <select name="kampus_id" id="cariKampus_id" class="form-control article-option" onChange="cariTampilFakultas()" >
                                            <option value="0"> ----- Pilih Kampus -------</option>  
                                            <option value="1"> Kampus Bukit </option> 
                                            <option value="2"> Kampus Sudirman </option>    
                              </select>
                        </div>                             
                </div>
                <div class="col-xs-3">
                      <div class="form-group">
                               <select name="fakultas_id" id="cariFakultas_id" class="form-control article-option" onChange="cariTampilJurusan()" >
                                        <option > ----- Pilih Fakultas -------</option>  
                                       
                              </select>
                        </div>
                </div>
                <div class="col-xs-3">                       
                          <div class="form-group">
                               <select  name="jurusan_id" id="cariJurusan_id" class="form-control " onChange="cariTampilLokasi()">
                                        <option > ----- Pilih Jurusan -------</option>  
                              </select>
                          </div>
                </div>
                <div class="col-xs-3"> 
                          <div class="form-group">
                               <select name="lokasi_id" id="cariLokasi_id" class="form-control" >
                                        <option > ----- Pilih Lokasi -------</option>  
                              </select>
                          </div> 
                <div class="btn-group pull-right">
                            <button id="btn-cancel" class="btn btn-default btn-flat">Batal</button>
                            <button type="button" class="btn btn-primary" data-loading-text="Loading..." id="btn-cari-aset">Cari</button>                  
                        </div>      
                </div>

              </form>
            </div>
      
        </div>
    </div>
</div>

<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Lokasi</h3>
            <button onclick="deleteLokasi();" class="btn btn-danger btn-flat pull-right" type="button">
                <i class="fa fa-trash"></i>
                  <span> Hapus Lokasi</span>
            </button>
            <button onclick="addLokasi();" class="btn btn-success btn-flat pull-right" type="button">
                <i class="fa fa-plus"></i>
                  <span> Tambah Lokasi</span>
            </button>
            <button onclick="CariAset();" class="btn btn-primary btn-flat pull-right" type="button">
                <i class="fa fa-search"></i>
                  <span>Cari Aset</span>
            </button>
            
        </div>
            <div class="box-body table-responsive" id="list-table-aset" style="display: block">
            
                 
            
            </div>
           
      </div>
    </div>
</div>


<!-- modal add lokasi!-->
<div class="modal fade" id="modalAdd-lokasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
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
                         <div class="form-group">
                            <label>Kampus</label>
                              <select name="kampus_id" id="kampus_id" class="form-control article-option" >
                                            
                                             <option value="1"> Kampus Bukit </option> 
                                             <option value="2"> Kampus Sudirman </option>    
                              </select>
                         </div>
                        <label>Fakultas</label>
                        <input name="fakultas_id" id="fakultas_id" type="text" class="form-control"  placeholder="Enter ...">
                      </div>
                      <div class="modal-footer">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary" data-loading-text="Loading..." onclick="addLokasiFakultas();">Simpan</button>
                        </div>
                      </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form role="form" method="post" action="" id="form-create-jurusan">
                      <div class="form-group">
                            <label>Kampus</label>
                              <select name="kampus_id" id="kampus_id" class="form-control article-option" onChange="tampilFakultas()" >
                                            <option value="0"> ----- Pilih Kampus -------</option>  
                                            <option value="1"> Kampus Bukit </option> 
                                            <option value="2"> Kampus Sudirman </option>    
                              </select>
                      </div>
                      <div class="form-group">
                        <label>Fakultas</label>
                        <select name="fakultas_id" id="fakultas_id1" class="form-control article-option" >
                                    <option value="0"> ----- Pilih Fakultas -------</option>  
                                   
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Jurusan</label>
                        <input name="jurusan_id" id="jurusan_id" type="text" class="form-control" required="required" placeholder="Enter ...">
                      </div>
                      <div class="modal-footer">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary" data-loading-text="Loading..." onclick="addLokasiJurusan();">Simpan</button>
                        </div>
                      </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <form role="form" method="post" action="" id="form-create-aset">
                      <div class="form-group">
                            <label>Kampus</label>
                              <select name="kampus_id" id="kampus_id" class="form-control article-option" onChange="tampilFakultas2()" >
                                            <option value="0"> ----- Pilih Kampus -------</option>  
                                            <option value="1"> Kampus Bukit </option> 
                                            <option value="2"> Kampus Sudirman </option>    
                              </select>
                      </div>
                      <div class="form-group">
                            <label>Fakultas</label>
                              <select name="fakultas_id" id="fakultas_id2" class="form-control article-option" onChange="tampilJurusan()">
                                          <option value="0"> ----- Pilih Fakultas -------</option>  
                                          <?php foreach ($fakultas->result() as $option): ?>
                                          <option value="<?php echo $option->id; ?>" > <?php echo $option->nama_fakultas; ?></option>    
                                          <?php endforeach; ?>
                              </select>
                      </div>
                      <div class="form-group">
                              <label>Jurusan</label>
                                <select name="jurusan_id" id="jurusan_id1" class="form-control article-option" >
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
                          <button type="button" class="btn btn-primary" data-loading-text="Loading..." onclick="addLokasiLokasi();">Simpan</button>
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


<!-- modal Delete lokasi!-->
<div class="modal fade" id="modalDelete-lokasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-backdrop="static" data-keyboard="false">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Lokasi</h4>
          </div>
          <div class="modal-body">
              <form role="form" method="post" action="" id="form-delete-lokasi">
                      <div class="form-group">
                            <label>Kampus</label>
                              <select name="kampus_id" id="deletekampus_id" class="form-control article-option" onChange="hapusTampilFakultas()" >
                                            <option value="0"> ----- Pilih Kampus -------</option>  
                                            <option value="1"> Kampus Bukit </option> 
                                            <option value="2"> Kampus Sudirman </option>    
                              </select>
                      </div>
                      <div class="form-group">
                            <label>Fakultas</label>
                              <select name="fakultas_id" id="deletefakultas_id" class="form-control article-option" onChange="hapusTampilJurusan()">
                                          <option value="0"> ----- Pilih Fakultas -------</option>  
                                          
                              </select>
                      </div>
                      <div class="form-group">
                              <label>Jurusan</label>
                                <select name="jurusan_id" id="deletejurusan_id" class="form-control article-option" onChange="hapusTampilLokasi()" >
                                        <option value="0"> ----- Pilih Jurusan -------</option>     
                                </select>
                      </div>
                      <div class="form-group">
                              <label>Lokasi</label>
                                <select name="jurusan_id" id="deletelokasi_id" class="form-control article-option" >
                                        <option value="0"> ----- Pilih Lokasi -------</option>     
                                </select>
                      </div>
                      <div class="modal-footer">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-danger" data-loading-text="Loading..." id="btn-delete-lokasi">Hapus</button>
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

<!-- modal warning hapus -->
<div id="modalwarning" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Lokasi</h4>
         </div>
         <div class="modal-body">
             Anda tidak bisa menghapus kampus
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">ok</button>
               
            </div>
         </div>
      </div>
   </div>
</div>



<script type="text/javascript">


    $('#modalDelete-lokasi').appendTo('body');
    $('#modalwarning').appendTo('body');
    $('#modalDelete').appendTo('body');
    $('#modalAdd-lokasi').appendTo('body');


    function CariAset() {
      $('#cari-Aset').css('display','block');
    }

    $('#btn-cari-aset').click(function(event) {
        $('#preloader').css('display','block');
            var kampus = $('#form-cari-aset').find('#cariKampus_id').val();
            var fakultas = $('#form-cari-aset').find('#cariFakultas_id').val();
            var jurusan = $('#form-cari-aset').find('#cariJurusan_id').val();
            var lokasi = $('#form-cari-aset').find('#cariLokasi_id').val();
             $.post(base_url+"Admin/Lokasi/cariLokasi/", {kampus:kampus,fakultas: fakultas, jurusan: jurusan,lokasi:lokasi}, function(data) {
                $('#preloader').css('display','none');
                $('#list-table-aset').html(data);
                dataTable();
          
        });


            
       
      }); 

    

    function addLokasi() {
      $('#modalAdd-lokasi').modal();     
    }

    function addLokasiFakultas()  {
            var fakultas = $('#tab_1').find('#fakultas_id').val();
            var kampus = $('#tab_1').find('#kampus_id').val();
            
        $('#modalAdd-lokasi').modal('hide');
        $('#preloader').css('display','block');
        $('#main-content').html();
        $.post(base_url+"Admin/Lokasi/create_fakultas/", {fakultas:fakultas,kampus:kampus}, function(data) {
                $('#form-create-fakultas').trigger("reset");
          $('#preloader').css('display','none');
          $('#main-content').html(data);
          dataTable();
        });
      };
      function addLokasiJurusan()  {
            var kampus = $('#tab_2').find('#kampus_id').val();
            var fakultas = $('#tab_2').find('#fakultas_id1').val();
            var jurusan = $('#tab_2').find('#jurusan_id').val();
            
        $('#modalAdd-lokasi').modal('hide');
        $('#preloader').css('display','block');
        $('#main-content').html();
        $.post(base_url+"Admin/Lokasi/create_jurusan/", {kampus:kampus,fakultas: fakultas, jurusan: jurusan}, function(data) {
                $('#form-create-jurusan').trigger("reset");
          $('#preloader').css('display','none');
          $('#main-content').html(data);
          dataTable();
        });
      };
      function addLokasiLokasi()  {
            var kampus = $('#tab_3').find('#kampus_id').val();
            var fakultas = $('#tab_3').find('#fakultas_id2').val();
            var jurusan = $('#tab_3').find('#jurusan_id1').val();
            var lokasi = $('#tab_3').find('#lokasi_id').val();
            
        $('#modalAdd-lokasi').modal('hide');
        $('#preloader').css('display','block');
        $('#main-content').html();
        $.post(base_url+"Admin/Lokasi/create_lokasi/", {kampus:kampus,fakultas: fakultas, jurusan: jurusan, lokasi:lokasi}, function(data) {
          $('#form-create-lokasi').trigger("reset");
          $('#preloader').css('display','none');
          $('#main-content').html(data);
          dataTable();
        });
      };
    

    function deleteLokasi() {
      $('#modalDelete-lokasi').modal();
      $('#btn-delete-lokasi').click(function(event) {
        $('#modalDelete-lokasi').modal('hide');
        $('#preloader').css('display','block');
        $('#main-content').html();
            var fakultas = $('#form-delete-lokasi').find('#deletefakultas_id').val();
            var jurusan = $('#form-delete-lokasi').find('#deletejurusan_id').val();
            var lokasi = $('#form-delete-lokasi').find('#deletelokasi_id').val();
            if (fakultas=='0') {
              $('#modalwarning').modal();
               $('#preloader').css('display','none');
            }
            else{
               $.post(base_url+"Admin/Lokasi/deleteLokasi/", {fakultas: fakultas, jurusan: jurusan, lokasi:lokasi}, function(data) {
                $('#form-delete-lokasi').trigger("reset");
                $('#preloader').css('display','none');
                $('#main-content').html(data);
                dataTable();
              });

            }
       
      });

    }


    



     //dropdown lokasi
     function tampilFakultas()
     {
       kampus_id = $('#tab_2').find('#kampus_id').val();
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_fakultas/"+kampus_id+"",
         success: function(response){
         $("#fakultas_id1").html(response);
         },
         dataType:"html"
       });

       return false;
     }

     function tampilFakultas2()
     {
       kampus_id = $('#tab_3').find('#kampus_id').val();
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_fakultas/"+kampus_id+"",
         success: function(response){
         $("#fakultas_id2").html(response);

         },
         dataType:"html"
       });

       return false;
     }

  function tampilJurusan()
     {
        fakultas_id = $('#tab_3').find('#fakultas_id2').val();
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"",
         success: function(response){
         $("#jurusan_id1").html(response);
         },
         dataType:"html"
       });

       return false;
     }
  
  function hapusTampilFakultas()
     {
       kampus_id = document.getElementById("deletekampus_id").value;
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_fakultas/"+kampus_id+"",
         success: function(response){
         $("#deletefakultas_id").html(response);
         $("#deletejurusan_id").html('');
         $("#deletelokasi_id").html('');
         },
         dataType:"html"
       });

       return false;
     }

  function hapusTampilJurusan()
    {
      fakultas_id = document.getElementById("deletefakultas_id").value;
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"",
         success: function(response){
         $("#deletejurusan_id").html(response);
         $("#deletelokasi_id").html('');
         },
         dataType:"html"
       });

       return false;
    }

    function hapusTampilLokasi()
    {
      jurusan_id = document.getElementById("deletejurusan_id").value;
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_lokasi/"+jurusan_id+"",
         success: function(response){
         $("#deletelokasi_id").html(response);
         
         },
         dataType:"html"
       });

       return false;
    }

  function cariTampilFakultas()
     {
       kampus_id = document.getElementById("cariKampus_id").value;
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_fakultas/"+kampus_id+"",
         success: function(response){
         $("#cariFakultas_id").html(response);
         $("#cariJurusan_id").html('');
         $("#cariLokasi_id").html('');
         },
         dataType:"html"
       });

       return false;
     }

  function cariTampilJurusan()
    {
      fakultas_id = document.getElementById("cariFakultas_id").value;
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"",
         success: function(response){
         $("#cariJurusan_id").html(response);
         $("#cariLokasi_id").html('');
         },
         dataType:"html"
       });

       return false;
    }

    function cariTampilLokasi()
    {
      jurusan_id = document.getElementById("cariJurusan_id").value;
       

      //alert("<?php echo base_url();?>Admin/Lokasi/select_jurusan/"+fakultas_id+"");
       $.ajax({
         url:"<?php echo base_url();?>Admin/Lokasi/select_lokasi/"+jurusan_id+"",
         success: function(response){
         $("#cariLokasi_id").html(response);
         
         },
         dataType:"html"
       });

       return false;
    }

    $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $('#cari-Aset').css('display', 'none');
        $('#form-cari-aset').trigger("reset");
       
        
    });
</script>
