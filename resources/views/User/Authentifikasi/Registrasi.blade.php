<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
          <h1>Register</h1>
            <form method="POST" action="../index.php">

                <input type="hidden" name="tujuan" value="Registrasi">

                <label>Username</label>
                <br>
                <input name="username" type="text" required>
                <br>
                <label>Email</label>
                <br>
                <input name="email" type="text" required>
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" required>
                <br>
                <label>Retype Password</label>
                <br>
                <input name="retypepassword" type="password" required>
                <br>

                <button>Daftar</button>
                <p> Sudah punya akun?
                  <a href="Login.blade.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>