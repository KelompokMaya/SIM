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
                        <span class="info-box-icon bg-yellow"><i class="fa  fa-text-width"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"><b>Total</b></span>
                          <span class="info-box-text">Term</span>
                          <span class="info-box-number">1</span>
                        </div>

                      </div>
                    </div>   
          
                  <button class="btn btn-success btn-flat pull-right" data-toggle="tooltip" onclick="Dokumen();"></i> Kelola Dokumen </button>
                  <!-- <a href="#" class="btn btn-warning btn-flat pull-right sidebar-pencarian" data-toggle="tooltip" ></i> Lihat Dokumen</a> -->
        
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
                      <button type="button" class="btn btn-info btn-flat" style="height: 40px; width: 80px; font-size: 17px">Cari </button>
                    </span>
              </div>
            
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
    </div>
</div>


<script type="text/javascript">
   // Replace Textarea with CKEDITOR
    CKEDITOR.replace('langkah'); 


    //button batal
    $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $("#bagian-cari").show('slow');
        $('#editor-dokumen').hide('slow');
        $('#ubah-lokasi').trigger("reset");
        
    });

    function Dokumen(){
      //$('#preloader').css('display','block');
      $.get(base_url+"Admin/Dokumen", function(data) {
        //$('#preloader').css('display','none');
        $('#main-content').html(data);
        dataTable();    
    });
      }

</script>

 
 