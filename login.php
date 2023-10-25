<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">

    <title>Project Web</title>
</head>
<body>
    <section>
        <div class="bg">
            <div class="container">
                <div class="login">
                    <a href="index.php">
                    <h1><span>F</span>LO<span>RA</span>L</h1>
                    </a>
                    <div class="tengah">
                        <h3>MASUK</h3>
                        <a href="register.php">Daftar</a></span>
                    </div> 
                    
                    <form method="post" action="">
                        <label for="email">Email</label><br>
                        <input class="form-control" type="email" name="email" id="email"><br>
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password"><br>
                        <a href="./admin/tampil.php">
                            <button class="btn-login" type="button">Login</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>