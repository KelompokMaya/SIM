<option value="0" ></option>
<?php
 foreach ($jurusan->result() as $option): ?>
     <option value="<?php echo $option->id; ?>" > <?php echo $option->nama_jurusan; ?></option>    
<?php endforeach; ?>
