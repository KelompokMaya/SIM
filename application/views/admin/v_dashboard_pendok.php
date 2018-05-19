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
                          <span class="info-box-number"><?php echo $jml_teknisi;?></span>

                        </div>

                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-file-pdf-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"><b>Total</b></span>
                          <span class="info-box-text">Dokumen</span>
                          <span class="info-box-number"><?php echo $jml_dokumen;?></span>
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
                          <span class="info-box-number"><?php echo $jml_term;?></span>
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
            <div id="logo-cari" class="box-header">
              <!-- <h3 style="text-align: center;">SISPENDOK</h3> -->
              <p style="text-align:center;"><img style="width: 50%" src="<?php echo base_url('assets/images/google.png') ?>" /></p>
            </div>
            <div class="box-body" id="pencarian">
              
              <div class="input-group margin"  >
                <input name="cari" id="cari" type="text" class="form-control" style="height: 40px" >
                    <span class="input-group-btn">
                      <button onclick="Cari();" type="button" class="btn btn-info btn-flat" style="height: 40px; width: 80px; font-size: 17px">Cari </button>
                    </span>
              </div>
            
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->

    </div>
</div>
<div id="bagian_hasil_cari" class=" col-xs-12" style="display: none;">
  <div class="box">
    <div class="box-body">
        <div  id="hasil_cari" ></div>
        <div class="overlay ovr_xx " id="pengumuman-loading" >
            <div class='load-bar' id='materialPreloader'><div class='load-bar-container'><div style='background:#159756' class='load-bar-base base1'><div style='background:#da4733' class='color red'></div><div style='background:#3b78e7' class='color blue'></div><div style='background:#fdba2c' class='color yellow'></div><div style='background:#159756' class='color green'></div></div></div> <div class='load-bar-container'><div style='background:#159756' class='load-bar-base base2'><div style='background:#da4733' class='color red'></div><div style='background:#3b78e7' class='color blue'></div><div style='background:#fdba2c' class='color yellow'></div> <div style='background:#159756' class='color green'></div> </div> </div> </div>
        </div>
    </div>
  </div>      
</div>



<script type="text/javascript">
   // // Replace Textarea with CKEDITOR
   //  CKEDITOR.replace('langkah'); 


    //button batal
    $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $("#bagian-cari").show('slow');
        $('#editor-dokumen').hide('slow');
        $('#ubah-lokasi').trigger("reset");
        
    });

    function Dokumen(){
      //$('#preloader').css('display','block');
      $.get(base_url+"Sispendok/Dokumen", function(data) {
        //$('#preloader').css('display','none');
        $('#main-content').html(data);
        dataTable();    
    });
      }

    function Cari(){
        //$("#bagian_hasil_cari").show('slow');
        $('#logo-cari').hide('slow');
        $("#bagian_hasil_cari").show('slow');
        $('#pengumuman-loading').fadeIn('slow');
        // $('#preloader').css('display','block');
        //    $('#editor-wrapper').css('display', 'none');
            //$('#pengumuman-loading').fadeIn('slow');
            var query = $('#pencarian').find('#cari').val();
            $.post(base_url+"Sispendok/Pendok/cari/", {query: query}, function(data) {
              $('#pengumuman-loading').fadeOut('slow');
                
                $('#hasil_cari').html(data);
                //$('#main-content').html(data);
                //dataTable();
                //console.log(data);
            }); 
            // if (nama=='') {
            //    $('#modalWarning-user').modal();
            // }
      }

    function Hasil(){
      //$('#preloader').css('display','block');
      $.get(base_url+"Sispendok/Hasil", function(data) {
        //$('#preloader').css('display','none'); 
      });

     }

</script>

 
 