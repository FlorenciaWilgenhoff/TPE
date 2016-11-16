<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form method="POST"  class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="txtUser" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" name="txtPass"id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recuerdame
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>  <!--VER SI ESO ESTA BIEN , que cuando haga click en registrarme me mande al formulario-->
                 <a href="index.php?action=registrarse" class="registrarme">Registrarme</a>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvido su contraseña?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->