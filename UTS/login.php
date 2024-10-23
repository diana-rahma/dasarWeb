<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: rgb(216, 210, 194);
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container-sm" style="max-width: 400px; margin-top: 100px;">
        <h3 style="text-align: center;">LOGIN</h3>
        <form id="myForm" method="POST" action="proses_login.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username : </label>
                <input type="text" class="form-control" id="usn" name="usn" placeholder="Masukkan Username">
                <span id="nama-error" style="color: red;"></span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                <span id="email-error" style="color: red;"></span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password : </label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                <span id="password-error" style="color: red;"></span>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                var usn = $("#usn").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (usn === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("")
                }  

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("")
                }

                if (password.length <= 8) {
                    $("#password-error").text("Password minimal 8 karakter!");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (!valid) {
                    event.preventDefault();
                } else {
                    $.ajax({
                        url: 'proses_login.php',
                        type: 'POST',
                        data: $("#myForm").serialize(),
                        success: function (hasil) {
                            $("#myForm")[0].reset();
                            alert(hasil);
                        }
                    })
                }
            });
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>