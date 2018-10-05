<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->






<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form action="Validar.php" method="post" class="form-signin">
                <input type="text" name="usuario" id="InputUsuario" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" name="clave" id="InputContrasenia" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" >
                    Sign in</button>             
                </form>
            </div>
            <a href="Login.php" class="text-center new-account">Nuevo Usuario </a>
        </div>
    </div>
</div>