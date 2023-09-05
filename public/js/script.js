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
        $('#jenis_kelamin').val(data.jenis_kelamin)
        $('#alamat').val(data.alamat)
        $('#id').val(data.id)
      }
    })
  })
})

$(function () {
  $('.tombolTambahData').on('click', function () {
    console.log('click')
    $('#judulModal').html('Tambah Data Guru')
    $('.modal-footer button[type=submit]').html('Tambah Data')
    $('#nama').val('')
    $('#kode_guru').val('')
    $('#mapel').val('')
    $('#id').val('')
  })

  $('.tampilModalUbah').on('click', function () {
    console.log('click')
    $('#judulModal').html('Ubah Data Guru')
    $('.modal-footer button[type=submit]').html('Ubah Data')
    $('.modal-body form').attr('action', 'http://php-mvc.test/dataguru/edit')
    const id = $(this).data('id')
    $.ajax({
      url: 'http://php-mvc.test/dataguru/getedit',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        console.log(data)
        $('#nama').val(data.nama)
        $('#kode_guru').val(data.kode_guru)
        $('#mapel').val(data.mapel)
        $('#id').val(data.id)
      }
    })
  })
})

