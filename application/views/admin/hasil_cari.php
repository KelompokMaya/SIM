   
              <div class="box-header with-border">
                <h3 class="box-title" style="text-align: center;">Hasil Pencarian </h3>
              </div>
               <?php
                   if ($term==0) {
                    ?>
                      <h5 class="box-title" style="text-align: center;">Hasil Tidak Ditemukan</h5>
                    <?php
                   }
                   else{
                    $i=0;
                    foreach ($term as $row) {

                      if ($i<6) { ?>

                          <div class="box-body no-padding">
                            <div class="mailbox-read-info">
                              <a href="url"><h3><?php echo $row['judul']; ?></h3></a>
                               <h5><i class="fa fa-calendar">&nbsp <?php echo $row['tgl_buat']; ?></i> &nbsp <i class="fa fa-user"></i>&nbsp <b>kadek aryana</b>

                                <span class="mailbox-read-time pull-right">Bobot : <?php echo $row['bobot']; ?></span></h5>
                            </div>

                          </div>

                      <?php

                        
                      }

                      
                      $i++;
                  }
                  }
               ?>
 
                  <!-- <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                      <a href="url"><h3>MENAMBAH VIRTUAL HARDISK DENGAN MENGGUNAKAN LVM MODE</h3></a>
                       <h5><i class="fa fa-calendar">&nbsp 15 Feb. 2016</i> &nbsp <i class="fa fa-user"></i>&nbsp <b>kadek aryana</b>

                        <span class="mailbox-read-time pull-right">Bobot : 12,55</span></h5>
                    </div>

                  </div> -->
                 
                  
       
     
         
   