 <?php 

// echo $deskripsi;
// echo '<br/> <br/>';

// echo $stemming;
// echo '<br/> <br/>';
// print_r($stopword);
// echo '<br/> <br/>';
// print_r($tf);
// echo '<br/> <br/>';
// print_r($kata_unik);
//print_r($tf);
// echo '<br/> <br/>';
// print_r($term_tersimpan_index);
// echo '<br/> <br/>';
// print_r($term_tersimpan);
// echo '<br/> <br/>';
// print_r($tf_tersimpan_index);
// echo '<br/> <br/>';
print_r($term);
 echo '<br/> <br/>';
 //echo $jum_dokumen;
?> 

  <?php
 if ($term==0) {
 	echo 'data tidak ditemukan';
 }
 else{
 	$i=0;
  foreach ($term as $row) {

  	if ($i<4) {
  		echo $row['id_dokumen'];
	    echo $row['bobot'];
	    echo '<br/> <br/>';
	    echo $row['judul'];
  	}

    
    $i++;
}
}
 ?> 