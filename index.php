<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Login dengan JS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <br>
    <br>
    <center><h2>Form Login</h2></center>
    <br>
    <div class="login">
        <br>
        <form action="login.php" method="post" onSubmit="return validasi()">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" autocomplete="off">
            </div>
            <div>
                <input type="submit" name="submit" id="submit" value="Login" class="tombol">
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function validasi() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username != "" && password != "") {
                return true;
            } else {
                alert("Username dan password harus diisi!")
                return false;
            }
        }
    </script>
</body>

</html>