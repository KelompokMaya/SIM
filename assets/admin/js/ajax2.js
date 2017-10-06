//----Menu-----

/*function create_menu(){
  $('#form-create-menu').on('submit',(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    var $btn = $('#btn-tambah-menu').button('loading')

    $.ajax({
      type:'POST',
      url: '<?php echo base_url() ?>Admin/Menu/create',
      data:formData,
      cache:false,
      contentType: false,
      processData: false,
      success:function(data){
        var data = jQuery.parseJSON(data);
        if (data.status == 'success') {
          $('#form-create-menu').trigger("reset");
          $('#modalAdd-menu').modal('hide');

        } else {
          alert(data);
        }
        $btn.button('reset');
      },
      error: function(XMLHttpRequest){
        alert(XMLHttpRequest.responseText);
        $btn.button('reset');
        $('#modalAdd-menu').modal('hide')
      }
    });
  }));

}*/

// LOAD TABLE MENU

$('#sidebar-menu').click(function(event) {
	$('#main-content').html();
	$('#preloader').css('display','block');
	$.get(base_url+"Admin/Menu", function(data) {
		$('#preloader').css('display','none');
		$('#main-content').html(data);
    setCookie("sidebar", "menu", 0.5);
		dataTable();
	});
});

$('#sidebar-admin').click(function(event) {
	$('#main-content').html();
	$('#preloader').css('display','block');
	$.get(base_url+"Admin/Admin", function(data) {
		$('#preloader').css('display','none');
		$('#main-content').html(data);
    setCookie("sidebar", "admin", 0.5);
		dataTable();
	});
});
