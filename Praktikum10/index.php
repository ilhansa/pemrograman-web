<?php
    include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo $_SESSION['csrf_token']; ?>">
    <title>Data Anggota</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbI1WlJRYlYJo7mOuStsJCCk4pQOpqbyI7RrNn7UdI9wRHkhMHPvlbHG9Sn"
        crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php" style="color: #fff;">
            CRUD Dengan Ajax
        </a>
    </nav>

    <div class="container">
        <h2 class="text-center my-4">Data Anggota</h2>

        <!-- Form Input -->
        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required>
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label><br>
                        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                    </div>
                    <p class="text-danger" id="err_jenis_kelamin"></p>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>

            <div class="form-group">
                <label>No Telepon:</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required>
                <p class="text-danger" id="err_no_telp"></p>
            </div>

            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>

        <hr>
        <div class="data"></div>
    </div>

    <div class="text-center mt-4">
        &copy; <?php echo date('Y'); ?> Copyright:
        <a href="https://google.com/" target="_blank"> Desain Dan Pemrograman Web</a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- Script Custom -->
    <script type="text/javascript">
        $(document).ready(function() {
            // Load data awal
            $('.data').load("data.php");

            // Setup CSRF Token jika digunakan
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Tombol Simpan
            $("#simpan").click(function() {
                var data = $('.form-data').serialize();
                var nama = $("#nama").val();
                var alamat = $("#alamat").val();
                var no_telp = $("#no_telp").val();
                var jenkel1 = $("#jenkel1").is(":checked");
                var jenkel2 = $("#jenkel2").is(":checked");

                // Validasi
                $("#err_nama").text(nama === "" ? "Nama Harus Diisi" : "");
                $("#err_alamat").text(alamat === "" ? "Alamat Harus Diisi" : "");
                $("#err_jenis_kelamin").text(!jenkel1 && !jenkel2 ? "Jenis Kelamin Harus Dipilih" : "");
                $("#err_no_telp").text(no_telp === "" ? "No Telepon Harus Diisi" : "");

                if (nama !== "" && alamat !== "" && (jenkel1 || jenkel2) && no_telp !== "") {
                    $.ajax({
                        type: 'POST',
                        url: "form_action.php",
                        data: data,
                        success: function() {
                            $('.data').load("data.php");
                            $("#form-data")[0].reset();
                            $("#id").val("");
                        },
                        error: function(response) {
                            console.log(response.responseText);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
