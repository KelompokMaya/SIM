<!-- echo $curr_visitor;-->
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total</span>
        <span class="info-box-text">User</span>
        <span class="info-box-number"></small><?php echo $jml_user;?></span>
      </div>

    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-cubes"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total</span>
        <span class="info-box-text">Aset</span>
        <span class="info-box-number"><?php echo $jml_aset;?></span>
      </div>

    </div>
  </div>

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-calendar-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total</span>
        <span class="info-box-text">Tiket</span>
        <span class="info-box-number">1</span>
      </div>

    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-calendar-check-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total</span>
        <span class="info-box-text">Tiket Selesai</span>
        <span class="info-box-number"></span>
      </div>
    </div>
  </div>
  <!-- <?php
        foreach($grafik as $data){
            $fakultas_id[] = $data->fakultas_id;
            // $jumAset[] = (float) $data->jumAset;
        }
    ?>
 <?php echo json_encode($fakultas_id);?> -->
<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="box box-success">
     <div class="box-header with-border">
    <h3 align="center" style="color: white; background-color: lightblue;">Jumlah Aset Berdasarkan Lokasi</h3>
        <canvas id="jml_aset" style="width: 100%; height: 300px;"></canvas>  
  </div>
</div>
</div>







     <script>
            var ctx = document.getElementById("jml_aset");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                    datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>



