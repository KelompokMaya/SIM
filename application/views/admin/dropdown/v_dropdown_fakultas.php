<option value="0" ></option>
<?php
 foreach ($fakultas->result() as $option): ?>
     <option value="<?php echo $option->id; ?>" > <?php echo $option->nama_fakultas; ?></option>    
<?php endforeach; ?>
