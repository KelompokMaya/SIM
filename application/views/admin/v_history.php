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
        
        <!-- /.box-header -->
        <div class="box-body table-responsive" id="list-table-menu">
            <table id="" class="table table1 table-bordered table-striped">
                <thead>
                    <tr style="background:  #551E1E; color: white">
                        <th>No</th>
                        <th>Nama Aset</th>
                        <th>Lokasi Sekarang</th>
                        <th style="text-align: center;">Aksi</th>
                                              
                    </tr>
                </thead>
                <tbody>
                 <?php $i=1;  ?>
                 <?php foreach ($history->result() as $row): ?>
                    <tr>
                        <td><?php echo $i; $i++; ?></td>
                        <td><?php echo $row->nama_aset; ?></td>
                        <td><?php echo $row->sekarang_kampus; ?> / <?php echo $row->sekarang_fakultas; ?> / <?php echo $row->sekarang_jurusan; ?> / <?php echo $row->sekarang_lokasi; ?></td>
                        <td>
                          <div class="btn-group">
                            <button onclick="Detail(<?php echo $row->aset_id; ?>);" class="btn btn-primary btn-flat" type="button" data-toggle="tooltip" >
                                <i> Detail </i>
                            </button>
                          </div>
                          <div class="btn-group">
                             <button onclick="DetailPerpindahan(<?php echo $row->aset_id; ?>);" class="btn btn-warning btn-flat" type="button" data-toggle="tooltip" >
                                <i> Detail Perpindahan</i>
                            </button>
                          </div>
                        </td>
                        
                        
                      
                    </tr>
                <?php endforeach; ?>
            
                </tbody>
                <tfoot>
                     <tr>
                        <th>No</th>
                        <th>Nama Aset</th>
                        <th>Lokasi Sekarang</th>
                        <th>Aksi</th>
                        
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>

<!-- modal detail aset!-->
<div class="modal fade" id="modalDetail-aset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <h4 class="modal-title" id="myModalLabel">Detail Aset</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="" id="form-detail">

                <div class="form-group">
                  <label>Nama</label>
                  <input name="username" id="nama"  class="form-control" disabled >
                </div>

                <div class="form-group">
                  <label>Manufaktur</label>
                  <input  id="manufaktur"  class="form-control" disabled >
                </div>

                 <div class="form-group">
                  <label>Status</label>
                  <input  id="status"  class="form-control" disabled >
                </div>

                <div class="form-group">
                  <label>No Seri</label>
                  <input  id="noseri"  class="form-control" disabled >
                </div>
                
                <div class="form-group">
                  <label>Tipe</label>
                  <input  id="tipe"  class="form-control" disabled >
                </div>

                <div class="form-group">
                  <label>Model</label>
                  <input  id="model"  class="form-control" disabled >
                </div>

                <div class="form-group">
                  <label>No Inventory</label>
                  <input  id="noinventory"  class="form-control" disabled >
                </div>

                 <div class="form-group">
                  <label>Tanggal Pemasangan</label>
                  <input  id="tgldipasang"  class="form-control" disabled >
                </div>

                <div class="form-group">
                  <label>Trakhir Diperbaiki</label>
                  <input  id="trakhirdiperbaiki"  class="form-control" disabled >
                </div>
          
          <div class="modal-footer">
            <div class="btn-group">
                <button id="btn-ok" type="button" class="btn btn-primary btn-flat" data-dismiss="modal">OK</button>
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
</div>

<!-- modal detail perpindahan!-->
<div class="modal fade" id="modalDetail-perpindahan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <h4 class="modal-title" id="myModalLabel">Detail Perpindahan</h4>
          </div>
          <div class="modal-body">
           
              <div id="form-detail-perpindahan" class="form-group">
              </div>
                
              <div class="modal-footer">
                <div class="btn-group">
                    <button id="btn-ok" type="button" class="btn btn-primary btn-flat" data-dismiss="modal">OK</button>
                </div>
              </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
</div>
</div>



<script type="text/javascript">

    $('#modalDetail-aset').appendTo('body');
   
    function Detail(id){
     
      $.get(base_url+"Admin/Aset/select/"+id, function(aset) {
            var aset=jQuery.parseJSON(aset+"");
             $('#modalDetail-aset').modal();
            $('#nama').val(aset.nama);
            $('#manufaktur').val(aset.manufaktur);
            $('#status').val(aset.status);
            $('#noseri').val(aset.noseri);
            $('#tipe').val(aset.tipe);
            $('#model').val(aset.model);
            $('#noinventory').val(aset.noinventory);
            $('#tgldipasang').val(aset.tgldipasang);
            $('#trakhirdiperbaiki').val(aset.trakhir_diperbaiki);
    });

    }

    function DetailPerpindahan(id){
     $('#modalDetail-perpindahan').modal();
       $.ajax({
         url:"<?php echo base_url();?>Admin/history/select/"+id+"",
         success: function(response){
         $("#form-detail-perpindahan").html(response);

         },
         dataType:"html"
       });
        return false;
    }

    $(document).on('click', '#btn-ok', function(event) {
       event.preventDefault();
        $('#form-detail').trigger("reset");  
    });

    

   
</script>
