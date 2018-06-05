
<html>
<body onload="myFunction()">
<head>


	<title >Print dokumen</title>

  <style type="text/css">
th {
    text-align: center;
}
td {
    padding-left: 2px;
}
  </style>

</head>
<body style="font-family: Times">

<?php foreach ($data->result() as $row): ?> 
<div style="margin-top:15px; text-align: center ; font-size: 18px;"><?php echo $row->judul; ?></div>
<br>
    <div style="margin-left: 20px;margin-right: 20px; font-size: 15px;">
        <h4>Deskripsi :</h4>
        <p  style="text-align: justify; line-height:1.5;">
            <?php echo $row->deskripsi;  ?>                                   
        </p>
        <h4>Langkah-Langkah :</h4>
        <div  style="text-align: justify;line-height:1.5;">

            <?php
            if ($cek=='0') {
                echo $row->langkah;
            }elseif ($cek=='1') {
                foreach ($solusi->result() as $row2) :
                    echo $row2->langkah;
                endforeach;
                
            }

            ?>                                   
        </div>
    </div>
    

<?php endforeach; ?>


</body>
</html>
<script type="text/javascript">
    function myFunction() {
    window.print();
}
</script>

