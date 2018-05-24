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

            <li id="sidebar-user"><a href="<?php echo base_url()."Login/auth"; ?>"><i class="fa fa-user"></i> User</a></li>

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
<div class=" col-xs-12">
        <div class="box box-primary">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title" style="text-align: center;"> Detail Dokumen</h3>
              </div>
              <br>
              <br>
              <div class="col-xs-12 form-group">
                     <div class="col-sm-2 control-label" style="text-align:right;">
                       <h4>Judul :</h4>                                   
                     </div>
                     <div class="col-sm-10 control-label" style="text-align:left;">
                       <h4><?php echo $row->judul;  ?></h4>                                   
                     </div>
                     <div class="col-sm-2 control-label" style="text-align:right;">
                       <h4>Deskripsi :</h4>                                   
                     </div>
                     <div class="col-sm-10 control-label" style="text-align: justify;">
                       <h4><?php echo $row->deskripsi;  ?></h4>                                   
                     </div>
                     
                  </div>

            </div>
            <div class="box-body">
             <div class="col-sm-2 control-label" style="text-align:right;">
                <h4> Solusi :</h4>
            </div>
             
          <!-- Custom Tabs -->
            <div class="col-sm-10 control-label" style="text-align:left;">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab<?php echo'1';  ?>" data-toggle="tab">Solusi 1</a></li>
                  <li><a href="#tab<?php echo'2';  ?>" data-toggle="tab">Solusi 2</a></li>
                  <li><a href="#tab<?php echo'3';  ?>" data-toggle="tab">Solusi 3</a></li>
                  
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                    <h4 style="text-align: justify;"><?php echo $row->langkah;  ?></h4>
                    <br>
                    <div class="btn-group pull-right">
                        <button id="btn-submit" class="btn btn-primary btn-flat">Print</button>
                    </div>
                    <br> <br>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab2">
                    The European languages are members of the same family. Their separate existence is a myth.
                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                    in their grammar, their pronunciation and their most common words. Everyone realizes why a
                    new common language would be desirable: one could refuse to pay expensive translators. To
                    achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                    words. If several languages coalesce, the grammar of the resulting language is more simple
                    and regular than that of the individual languages.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <!-- /.tab-pane -->
                </div>
            <!-- /.tab-content -->
            </div>
          <!-- nav-tabs-custom -->
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
