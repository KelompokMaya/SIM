<!-- echo $curr_visitor;-->
<div class=" col-xs-12">
        <div class="box box-primary">
            <div class="box-body">
              <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text"><b>Total</b></span>
                          <span class="info-box-text">Teknisi</span>
                          <span class="info-box-number">212 
                              <button class="btn btn-primary btn-flat pull-right" data-toggle="tooltip" onclick="addAset();"><i class="fa fa-plus" id="add"></i></button></small>
                              <button class="btn btn-primary btn-flat pull-right" data-toggle="tooltip" onclick="addAset();"><i class="fa fa-plus" id="add"></i></button></small>

                          </span>

                        </div>

                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-file-pdf-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"><b>Total</b></span>
                          <span class="info-box-text">Dokumen</span>
                          <span class="info-box-number">222</span>
                        </div>
                      </div>
                    </div>

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa  fa-bookmark-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"><b>Total</b></span>
                          <span class="info-box-text">Term</span>
                          <span class="info-box-number">1</span>
                        </div>

                      </div>
                    </div>   
          
                  <button class="btn btn-success btn-flat pull-right" data-toggle="tooltip" onclick="addDokumen();"></i> Tambah Dokumen</button>
                  <a href="<?php echo base_url('Admin/Excel/export_excel') ?>" class="btn btn-warning btn-flat pull-right" data-toggle="tooltip" ></i> Lihat Dokumen</a>
        
            </div>
      </div>
</div>

<div id="bagian-cari" class=" col-xs-12">
    <div class="box box-danger">
            <div class="box-header">
              <!-- <h3 style="text-align: center;">SISPENDOK</h3> -->
              <p style="text-align:center;"><img style="width: 50%" src="<?php echo base_url('assets/images/google.png') ?>" /></p>
            </div>
            <div class="box-body">
              
              <div class="input-group margin"  >
                <input type="text" class="form-control" style="height: 40px" >
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" style="height: 40px; width: 100px; font-size: 17px">Cari </button>
                    </span>
              </div>
            
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
    </div>
</div>

<div id="bagian-add-dokumen" class=" col-xs-12" style="display: none;">
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
                <input id="judul" class="form-control" type="text" name="judul" placeholder="judul dokumen">
            </div>
            <div class="form-group">
                <label >Deskripsi Dokumen Perbaikan</label>
                <textarea id="deskripsi" class="form-control" name="deskripsi" data-link=""></textarea>
            </div>
            <div class="form-group">
                <label >Langkah Perbaikan</label>
                <textarea id="langkah" name="langkah" data-link=""></textarea>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
   // Replace Textarea with CKEDITOR
    CKEDITOR.replace('langkah'); 



    //fungsi tambah dokumen
    function addDokumen() {
        if($('#bagian-add-dokumen').css('display')=='none'){
            $("#bagian-add-dokumen").show('slow');
            //$('#editor-wrapper').css('display', 'block');
            
        }
        if($('#bagian-cari').css('display')=='block'){
          $('#bagian-cari').hide('slow');
            
        }
        
        
    }


    //button batal
    $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $("#bagian-cari").show('slow');
        $('#bagian-add-dokumen').hide('slow');
        $('#ubah-lokasi').trigger("reset");
        
    });

</script>

 
 