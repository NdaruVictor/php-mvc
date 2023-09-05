$(function () {
  $('.tombolTambahData').on('click', function () {
    console.log('click')
    $('#judulModal').html('Tambah Data Siswa')
    $('.modal-footer button[type=submit]').html('Tambah Data')
    $('#nama').val('')
    $('#jenis_kelamin').val('')
    $('#alamat').val('')
    $('#id').val('')
  })

  $('.tampilModalUbah').on('click', function () {
    console.log('click')
    $('#judulModal').html('Ubah Data Siswa')
    $('.modal-footer button[type=submit]').html('Ubah Data')
    $('.modal-body form').attr('action', 'http://php-mvc.test/datasiswa/edit')
    const id = $(this).data('id')
    $.ajax({
      url: 'http://php-mvc.test/datasiswa/getedit',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        console.log(data)
        $('#nama').val(data.nama)
        $('#jns_kelamin').val(data.jns_kelamin)
        $('#alamat').val(data.alamat)
        $('#id').val(data.id)
      }
    })
  })
})
