<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi (AJAX + Password)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi (AJAX + Password)</h1>

    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color:red"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color:red"></span>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color:red"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil" style="margin-top:15px; color:green;"></div>

    <script>
    $(document).ready(function () {
        $("#myForm").submit(function (event) {
            event.preventDefault(); // menghentikan form dari reload
            var nama = $("#nama").val().trim();
            var email = $("#email").val().trim();
            var password = $("#password").val().trim();
            var valid = true;

            // Reset pesan error
            $("#nama-error").text("");
            $("#email-error").text("");
            $("#password-error").text("");

            // Validasi nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            }

            // Validasi email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            }

            // password
            if (password === "") {
                $("#password-error").text("Password harus diisi.");
                valid = false;
            } else if (password.length < 8) {
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            }

            if (!valid) return;

            $.ajax({
                url: "proses_validasi.php",
                type: "POST",
                data: { nama: nama, email: email, password: password },
                success: function (response) {
                    $("#hasil").html(response);
                },
                error: function () {
                    $("#hasil").html("<span style='color:red;'>Terjadi kesalahan pada server.</span>");
                }
            });
        });
    });
    </script>
</body>
</html>
