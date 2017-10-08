<div id="editor-wrapper" class="col-xs-12" style="display: none;">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tambah Aset</h3>
          <div class="btn-group pull-right">
                <button id="btn-cancel" class="btn btn-default btn-flat">Batal</button>
                <button onclick="submit(this);" id="btn-submit" class="btn btn-primary btn-flat">Tambah</button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label for="editor-title">Article Title</label>
                <input id="editor-title" class="form-control" type="text" name="editor-title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="editor-body">Article Body</label>
                <textarea id="editor-body" name="editor-body" data-link=""></textarea>
            </div>
        </div>
    </div>
</div>


<div id="table-wrapper" class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Table Article</h3>
          <button id="btn-add" class="btn btn-primary btn-flat pull-right"><i class="fa fa-plus"></i> New Article</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table class="table table1 table-bordered table-striped">
                <thead>
                    <tr style="background:  #3998ad; color: white">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Manufaktur</th>
                        <th>Nomor Seri</th>
                        <th>Tipe</th>
                        <th>Model</th>
                        <th>Lokasi</th>
                        <th>Trakhir diperbaiki</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
               
                    <tr>
                        <td>1</td>
                        <td>sdasd</td>
                        <td>sdasd</td>
                        <td>sdasdcf sfsdd</td>
                        <td>sdas sdfsdf sd</td>
                        <td>sdassdf ssd</td>
                        <td>sd afa afasd</td>
                        <td>sdasfasf asd</td>
                        <td>sdaaf a sd</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-success btn-flat" data-toggle="tooltip" title="Edit" onclick="editArticle(;"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deleteArticle(<);"><i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>sdasd</td>
                        <td>sdasd</td>
                        <td>sdafdsfsdfsfsfsdsdcf sfsdd</td>
                        <td>sdas sdfsdf sd</td>
                        <td>sdassdf ssd</td>
                        <td>sd afa afasd</td>
                        <td>sdasfasf asd</td>
                        <td>sdaaf a sd</td>
                        <td>
                            <div class="btn-group">
                                <div class="btn-group">
                                <button class="btn btn-success btn-flat" data-toggle="tooltip" title="Edit" onclick="editArticle(;"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deleteArticle(<);"><i class="fa fa-trash"></i></button>
                            </div>
                            </div>
                        </td>
                    </tr>
                  
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Manufaktur</th>
                        <th>Nomor Seri</th>
                        <th>Tipe</th>
                        <th>Model</th>
                        <th>Lokasi</th>
                        <th>Trakhir diperbaiki</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    <!-- /.box-body -->
     </div>
    <!-- /.box -->
</div><!-- .col -->

<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Delete Article</h4>
         </div>
         <div class="modal-body">
            Are you sure want to delete this article?
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
               <button id="btn-delete" type="button" class="btn btn-danger btn-flat">Yes</button>
            </div>
         </div>
      </div>
   </div>
</div>

<div id="modal-message" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Input Invalid</h4>
         </div>
         <div class="modal-body">
            <!--Text here-->
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" class="btn btn-flat btn-primary" data-dismiss="modal">OK</button>
            </div>
         </div>
      </div>
   </div>
</div>


<script type="text/javascript">
    // Replace Textarea with CKEDITOR
    CKEDITOR.replace('editor-body'); 

    // Adding data table (paging, searching and so on ...)
    dataTable();
   
    $(document).on('change', '#table-wrapper .article-option', function(event) {
        id=$(this).attr('data-link');
        value=$(this).val();

        $('#modal-preloader').modal({
            backdrop: 'static',
            keyboard: false
        });
        $.get(base_url+"Admin/Article/addToMenu/"+id+"/"+value, function(data) {
            var txt=data=="NULL"?'':data;
            $('#menu-hidden-info-'+id).text(txt);
            $('#modal-preloader').modal('hide');
        },'json');

    });

    function deleteArticle(id) {
        $('#modal-delete').modal();
        $(document).one('click','#btn-delete', function(event) {
            $('#modal-delete').modal('hide').on('hidden.bs.modal', function() {
                $('#main-content').html('');
                $('#preloader').css('display','block');
                $.get(base_url+"Admin/Article/delete/"+id, function(data) {
                    $('#preloader').css('display','none');
                    $('#main-content').html(data);
                });
            });
        });
    }

    $(document).on('click', '#btn-add', function(event) {
        event.preventDefault();
        if($('#editor-wrapper').css('display')=='none'){
            $('#editor-wrapper').css('display', 'block');
            $(this).addClass('disabled');
            $('#btn-submit').html('Publish');
        }
    });

    var submit= function(ctx) {
        event.preventDefault();
        //$(ctx).addClass('disabled');

        if($('#editor-title').val()=='' || CKEDITOR.instances['editor-body'].getData()==''){
            $('#modal-message .modal-body').text('Please fill the article title and article body');
            $('#modal-message').modal();
            return;
        } 

        if($('#btn-submit').html()=='Publish'){ 
            $('#editor-wrapper').css('display', 'none');
            $('#preloader').css('display','block');
            var title=$('#editor-title').val();
            var body=CKEDITOR.instances['editor-body'].getData()
            $.post(base_url+"Admin/Article/insert", {title: title, body: body}, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#main-content').html(data);
            }); 
        }
        else if($('#btn-submit').html()=='Update'){
            $('#editor-wrapper').css('display', 'none');
            $('#preloader').css('display','block');
            var id=$('#editor-body').attr('data-link');
            var title=$('#editor-title').val();
            var body=CKEDITOR.instances['editor-body'].getData();
            $.post(base_url+"Admin/Article/update", {id: id, title: title, body: body}, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#main-content').html(data);
            }); 
        }
    };

    $(document).on('click', '#btn-cancel', function(event) {
        event.preventDefault();
        $('#btn-add').removeClass('disabled');  
        $('#editor-wrapper').css('display', 'none');
        CKEDITOR.instances['editor-body'].setData('');
    });

    function editArticle(id) {
        if($('#editor-wrapper').css('display')=='block'){
            $('#editor-wrapper').css('display', 'none');    
        }

        $('#preloader').css('display','block');
        $.get(base_url+"Admin/Article/select/"+id, function(article) { 
            $('#preloader').css('display','none');
            $('#editor-wrapper').css('display', 'block');   
            $('#btn-add').addClass('disabled'); 
            $('#btn-submit').html('Update');
            $('#editor-body').attr('data-link', article.id);
            $('#editor-title').val(article.title);
            CKEDITOR.instances['editor-body'].setData(article.body);
        }, 'json');
    }
</script>