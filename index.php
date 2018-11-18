<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<a href="user.php">User</a>
<div class=" container">
    <div class="row">
        <div class="col-lg-6">
            <form action="db.php" method="post">
                <div class="form-group">
                    <label for=""><h1>LOGIN</h1></label><br>
                    <label >User Name</label>
                    <input type="text" name="name" value="Name" class="form-control">
                    <label for="">Password</label>
                    <input type="text" name="password" class=" form-control">
                </div>
                <input type="submit" name="login" value="Login">

            </form>
        </div>
        <div class="col-lg-6">
            <form action="db.php" method="post">
                <div class="form-group">
                    <label for=""><h1>SIGN-UP</h1></label><br>
                <label for="">User</label>
                <input type="text" class="form-control" name="name" value="Name">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Palaceholder">

                </div>
                <input type="submit" name="signup" value="signup">
            </form>

<!-- <form action="index.php" method="post">
    name<br>
<input type="text"  name="name" value="Name">
pass<br>
<input type="text"  name="password" value="password">
<br>
<input type="submit" name="submit" value="submit">
</form>            -->

        </div>
    </div>
</div>


</body>
</html>