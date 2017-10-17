<div class="box-body table-responsive">
            <table class="table table1 table-bordered table-striped">
                <thead>
                    <tr style="background:  #3998ad; color: white">
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
                        <th style="width: 60px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                 <?php $i=1; ?>
                 <?php foreach ($cari->result() as $row): ?>
                    <tr>
                       <td><?php echo $i; $i++; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><?php echo $row->manufaktur; ?></td>
                        <td><?php echo  $row->noseri; ?></td>
                        <td><?php echo $row->tipe; ?></td>
                        <td><?php echo $row->model; ?></td>
                         <td><?php echo $row->noinventory; ?></td>
                          <td><?php echo $row->tgldipasang; ?></td>
                        <td><?php echo $row->trakhir_diperbaiki; ?></td>
                        <td>
                            <div class="btn-group">
                                 <button onclick="editAset(<?php echo $row->id; ?>);" class="btn btn-success btn-flat" type="button" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i></button>
                                <button onclick="deleteAset(<?php echo $row->id; ?>);" class="btn btn-danger btn-flat" type="button" data-toggle="tooltip" title="Hapus">
                                <i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
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
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
            