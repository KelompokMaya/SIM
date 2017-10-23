<option value="0" ></option>
<?php
 foreach ($jurusan->result() as $option): ?>
     <option value="<?php echo $option->id_jurusan; ?>" > <?php echo $option->nama_jurusan; ?></option>    
<?php endforeach; ?>
