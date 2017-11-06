<?php $i=0;   ?>
<?php foreach ($DetailPerpindahan->result() as $row): 
if ($i=='0') { ?>
   <h4 style="text-align: center;"><?php echo $row->nama_aset; ?></h4>

<?php $i++; } ?>

<?php endforeach; ?>
<div class="box-body table-responsive" id="list-table-menu">
            <table id="" class="table table1 table-bordered table-striped" style="font-size: 13px">
                <thead>
                    <tr style="background:  #3998ad; color: white">
                       
                        <th>No</th>
                        <th>Dari </th>
                        <th>Ke</th>
                        <th style="width: 84px" >Tanggal</th>
                        
                                              
                    </tr>
                </thead>
                <tbody>
                 
                 <?php foreach ($DetailPerpindahan->result() as $row): ?>
                    <tr>
                      <td><?php echo $i; $i++; ?></td>
                      <td><?php echo $row->awal_kampus; ?> / <?php echo $row->awal_fakultas; ?> / <?php echo $row->awal_jurusan; ?> / <?php echo $row->awal_lokasi; ?></td>
                      <td><?php echo $row->sekarang_kampus; ?> / <?php echo $row->sekarang_fakultas; ?> / <?php echo $row->sekarang_jurusan; ?> / <?php echo $row->sekarang_lokasi; ?></td>
                      <td><?php echo $row->tanggal_pindah; ?></td>
                        
                      
                    </tr>
                <?php endforeach; ?>
                 </tbody>
                
            </table>

        </div>