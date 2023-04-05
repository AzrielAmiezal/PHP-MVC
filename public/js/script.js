
$(function () {

  //create event when button add was clicked
  $('.buttonTambahData').on('click', function () {

    $('#formModalLabel').html('Tambah Data Student');
    // css selector
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('.modal-body form').attr('action', 'http://localhost/PHP-MVC/public/students/tambah');

    $('#id').val('');
    $('#std_name').val('');
    $('#std_id').val('');
    $('#std_email').val('');
    $('#std_course').val('');
  });
  
  //create event when button edit was clicked
  $('.showModalEdit').on('click', function () {

    $('#formModalLabel').html('Edit Data Student');
    // css selector
    $('.modal-footer button[type=submit]').html('Edit Data');
    $('.modal-body form').attr('action', 'http://localhost/PHP-MVC/public/students/update');

    const id = $(this).data('id');
    
    $.ajax({
      url: 'http://localhost/PHP-MVC/public/students/getupdate',
      data: {id: id},
      method: 'post',
      dataType: 'json',
      success: function (data) {
        //console.log(data);
        $('#id').val(data.id);
        $('#std_name').val(data.std_name);
        $('#std_id').val(data.std_id);
        $('#std_email').val(data.std_email);
        $('#std_course').val(data.std_course);
      }
    });

  });

});
