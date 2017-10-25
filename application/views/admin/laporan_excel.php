<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

				<thead>

					<tr style="font-weight: bold; font-size: 16px">

  						<th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Manufaktur</th>
                        <th>No Seri</th>
                        <th>Tipe</th>
                        <th>Model</th>
                        <th>No Inventory</th>
                        <th>Pemasangan</th>
                        <th>Trakhir diperbaiki</th>
                        <th>Lokasi</th>

 					</tr>

				</thead>

		<tbody>

		<?php $i=1; foreach($aset as $aset) { ?>

		<tr align="left">
		 <td align="center"><?php echo $i ?></td>
		 <td><?php echo $aset->nama ?></td>
		 <td><?php echo $aset->status ?></td>
		 <td><?php echo $aset->manufaktur ?></td>
		 <td><?php echo $aset->noseri ?></td>
		 <td><?php echo $aset->tipe ?></td>
		 <td><?php echo $aset->model ?></td>
		 <td><?php echo $aset->noinventory ?></td>
		 <td><?php echo $aset->tgldipasang ?></td>
		 <td><?php echo $aset->trakhir_diperbaiki ?></td>
		 <td><?php echo $aset->kampus ?> / <?php echo $aset->fakultas ?> / <?php echo $aset->jurusan ?> / <?php echo $aset->lokasi ?></td>

		 </tr>

		<?php $i++; } ?>

		</tbody>

</table>