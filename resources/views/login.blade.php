@extends('layout')

<body>

    <!--css-->
    <style>
        body{
            background: #f7f7f7;
        }

    </style>
    <!--login form-->
    <div class="valign-wrapper row login-box">
        <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
            <div class="card"></div>

                <div class="card-action s10 pull-s1 m6 pull-m3 l4 pull-l4 teal lighten-2 white-text">
                    <h3 class="center">Forum Discussion</h3>
                </div>
                 <form action="\login" method="post">
                 {{ csrf_field() }}
                <div class="card-content">

                 <!--Campo Email -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" maxlength="50" required>
                    <label for="email">Email address</label>
                </div>

                    
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" name="password" class="validate">
                        <label for="password">Password</label>
                    </div>

                    <div class="input-field col s12">
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>Remember me</span>
                            </label>
                        </p>
                    </div>

                    <div class="form-field center-align">
                        <button class="btn-large ">Login</button>
                     </div><br>
                </div>
                <div class="form-field center-align">
                    <a href="{{ url('/register') }}" class="register">Register</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>


</html>
<!--
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
<body>
    <h1>vsdv</h1>
    <div class="login">
        <div class="image">
            <i class="zmdi zmdi-account-circle  zmdi-hc-5x"></i>
        </div>
        <form action="autenticar.php" method="POST">
            <div class="form-icon">
                <label for="Usuario">Username</label>
                <input type="text" placeholder="username" name="username">
                <span class="zmdi zmdi-account"></span>
            </div>
            <div class="form-icon">
                <label for="contraseña">Password</label>
                <input type="password" placeholder="password" name="password">
                <span class="zmdi zmdi-lock"></span>
            </div>
           <button><input type="submit" name="logar" value="Login"></button> 
        </form>
        <li><a href="{{ url('/register') }}" class="register">Register</a></li>
    </div>
</body>

</html>