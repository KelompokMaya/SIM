  <?php
      foreach ($aset->result() as $option): ?>
                    

 <div class="form-group">
    <label >Nama Aset</label>
       <input  type="text" class="form-control" value="<?php echo $option->nama; ?>"  readonly>
 </div>
 <div class="form-group">
    <label >Tipe</label>
       <input  type="text" class="form-control" value="<?php echo $option->tipe; ?>"  readonly>
 </div>
 <div class="form-group">
    <label >Lokasi</label>
    <?php
    if ($option->jurusan==NULL) {
     	$jurusan='';
     }
     else{
     	$jurusan=$option->jurusan;
     }
     if ($option->lokasi==NULL) {
     	$lokasi='';
     } 
     else{
     	$lokasi = $option->lokasi;
     } ?>
        <input  type="text" class="form-control" value="<?php echo $option->kampus.' / '.$option->fakultas.' / '.$jurusan.' / '.$lokasi; ?>"  readonly>
 </div>
   
 <?php endforeach; ?>