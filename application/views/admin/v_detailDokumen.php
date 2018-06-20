<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="bg-user-panel">
                <img src="<?php echo base_url('assets/images/bg-blur.jpg') ?>" alt="User Image" />
            </div>
            <div class="image img_circle">
                <img src="<?php echo base_url('assets/images/user.jpg') ?>" alt="User Image" />
            </div>
            <div class="info">
                <p style="color: #fff;"><?php echo $currUser; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li id="sidebar-dashboard"><a href="<?php echo base_url()."Login/auth"; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>

            <li id="sidebar-pencarian"><a href="<?php echo base_url()."Login/auth"; ?>"><i class="fa  fa-search" ></i> Pencarian Dokumen</a></li>

            <li id="sidebar-aset"><a href="<?php echo base_url()."Login/auth"; ?>"><i class="fa  fa-th-list"></i> Aset</a></li>

            <li id="sidebar-lokasi"><a href="<?php echo base_url()."Login/auth"; ?>"><i class="fa fa-map"></i> Lokasi Aset</a></li>

            <li id="sidebar-user"><a href="<?php echo base_url()."Login/auth"; ?>"><i class="fa fa-user"></i> Teknisi</a></li>

            <li id="sidebar-history"><a href="<?php echo base_url()."Login/auth"; ?>"><i class="fa fa-history "></i> History Aset</a></li>

            


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<section class="content-header">
    <h1></h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Preloader -->
    <div id="preloader" style="display: none;">
        <div class="box" style="height: 80px;">
            <div class="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
        </div>
    </div>

    <div class="row"> <?php foreach ($dokumen->result() as $row): ?>
<!-- echo $curr_visitor;-->
<div class=" col-xs-12" style="overflow-y:auto; overflow-x:scroll; height: 550px;">
        <div class="box box-primary">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title" style="text-align: center;"> Detail Dokumen</h3>
              </div>
              <br>
              <br>
              <div class="col-xs-12 form-group">
                     <div class="col-sm-2 control-label" style="text-align:right;">
                       <h4><b>Judul :</b></h4>                                   
                     </div>
                     <div class="col-sm-10 control-label" style="text-align:left;">
                       <h4><?php echo $row->judul;  ?></h4>                                   
                     </div>
                     <div class="col-sm-2 control-label" style="text-align:right;">
                       <h4><b>Tanggal dibuat :</b></h4>                                   
                     </div>
                     <div class="col-sm-10 control-label" style="text-align:left;">
                       <h4><?php echo $row->tgl_buat;  ?></h4>                                   
                     </div>
                     <div class="col-sm-2 control-label" style="text-align:right;">
                       <h4><b>Tanggal diedit :</b></h4>                                   
                     </div>
                     <div class="col-sm-10 control-label" style="text-align:left;">
                       <h4><?php echo $row->tgl_edit;  ?></h4>                                   
                     </div>
                     <div class="col-sm-2 control-label" style="text-align:right;">
                       <h4><b>Deskripsi :</b></h4>                                   
                     </div>
                     <div class="col-sm-10 control-label" style="text-align: justify;">
                       <h4  ><?php echo $row->deskripsi;  ?></h4>                                   
                     </div>
                      <div class="col-sm-2 control-label" style="text-align:right;">
                        <h4><b> Solusi :</b></h4>
                    </div>
                    <div  class="col-sm-10 control-label" style="text-align: justify;">
                       <h4 style="line-height: 150%"><?php echo $row->langkah;  ?></h4>                                   
                     </div>
                     <br>
                    <div class="btn-group pull-right">
                        <a href="<?php echo base_url('Sispendok/Hasil/print/').$id_dokumen; ?>"  class="btn btn-primary btn-flat">Print</a>
                    </div>
                     
                  </div>

            </div>
           
      </div>
</div>








   
    <?php endforeach; ?>
    </div><!-- .row -->

</section><!-- /.content-->

<!-- Modals -->

<div id="modal-preloader" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="box" style="height: 80px; box-shadow: none; border-width: 0px;">
                    <div class="overlay">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
