
               <?php
               if ($solusi==1) {
                 
               
                   if ($term==0) {
                    ?>
                      <h5 class="box-title" style="text-align: center;">Hasil Tidak Ditemukan</h5>
                    <?php
                   }
                   else{
                    $i=0;
                    foreach ($term as $row) {

                      if ($i<$solusi) { ?>
                        


                          <div class="box-body no-padding">
                            <div class="mailbox-read-info">
                              <a target="_blank"  href="<?php echo base_url().'Sispendok/Hasil/view/'.$row['id_dokumen']; ?>"  ><h3><?php echo $row['judul']; ?></h3></a>
                                <h5 style="text-align: justify;"><?php

                                $deskripsi=implode(" ", array_slice(explode(" ", $row['deskripsi']), 0, 50));
                                echo $deskripsi.'[..]'; ?>
                                 
                                </h5>
                                <br>
                               <h5><i class="fa fa-calendar">&nbsp <?php echo $row['tgl_buat']; ?></i> &nbsp <i class="fa fa-user"></i>&nbsp <b><?php echo $row['fullname']; ?></b>

                                </h5>
                            </div>

                          </div>

                      <?php
                        
                        
                      }

                      
                      $i++;
                  }
                  }
                } else{ ?>
                   <div class="box-body no-padding">
                            <div class="mailbox-read-info">
                              <a target="_blank"  href="<?php echo base_url().'Sispendok/Hasil/view/'.$term['id_dokumen']; ?>"  ><h3><?php echo $term['judul']; ?></h3></a>
                                <h5 style="text-align: justify;"><?php

                                $deskripsi=implode(" ", array_slice(explode(" ", $term['deskripsi']), 0, 50));
                                echo $deskripsi.'[..]'; ?>
                                 
                                </h5>
                                <br>
                               <h5><i class="fa fa-calendar">&nbsp <?php echo $term['tgl_buat']; ?></i> &nbsp <i class="fa fa-user"></i>&nbsp <b><?php echo $term['fullname']; ?></b>

                                </h5>
                            </div>

                          </div>
               <?php  }
               ?>
 
                  <!-- <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                      <a href="url"><h3>MENAMBAH VIRTUAL HARDISK DENGAN MENGGUNAKAN LVM MODE</h3></a>
                       <h5><i class="fa fa-calendar">&nbsp 15 Feb. 2016</i> &nbsp <i class="fa fa-user"></i>&nbsp <b>kadek aryana</b>

                        <span class="mailbox-read-time pull-right">Bobot : 12,55</span></h5>
                    </div>

                  </div> -->
                 
                  
       
     
         
   