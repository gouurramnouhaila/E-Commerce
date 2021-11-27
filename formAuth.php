<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <form action="verify.php" method="post">
                    <div class="form-group">
                        <label  class="form-label mt-4">Email address</label>
                        <input type="email" class="form-control" name="login" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">

                        <?php
                        if(isset($_GET['erreur'])){
                            $err = $_GET['erreur'];
                            if($err==1 || $err==2)
                                echo "<div class='invalid-feedback'>Sorry, that username's taken. Try another?</div>";
                        }
                        ?>
                    </div>
                    <input type="submit" name="auth" value="Connecter" class="btn btn-outline-dark mt-4">
                </form>
            </div>
        </div>
    </div>
</body>
</html>