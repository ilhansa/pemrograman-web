$(document).ready(function(){
    function loadFileList() {
        $.ajax({
            url: 'list_files.php',
            method: 'GET',
            success: function(data) {
                $('#file-list').html(data);
            }
        });
    }

    // tampilkan daftar file
    loadFileList();
$('#file').change(function(){
    let fileList = $(this)[0].files;
    let list = $('#file-names');
    list.empty(); // kosongkan dulu

    if (fileList.length > 0) {
        // tampilkan nama file yang dipilih
        for (let i = 0; i < fileList.length; i++) {
            list.append('<li>' + fileList[i].name + '</li>');
        }

        // aktifkan tombol unggah
        $('#upload-button').prop('disabled', false).css('opacity', '1');
    } else {
        // kalau tidak ada file
        list.html('<li>Tidak ada file dipilih</li>');
        $('#upload-button').prop('disabled', true).css('opacity', '0.5');
    }
});

    $('#upload-form').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);
        $('#status').html('mengunggah');

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response);
                $('#upload-form')[0].reset();
                $('#upload-button').prop('disabled', true);
                loadFileList();

            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});