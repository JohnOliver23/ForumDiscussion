@extends('layout')
@include('includes.modalsucess')
@include('includes.modalerror')
<style>
.modal {
  width:35% !important;
  height: 34% !important ;
};
</style>
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
                 <form action="{{ action('SessionController@store')}}" method="post">
                 {{ csrf_field() }}
                <div class="card-content">

                 <!--Campo Email -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" value="{{old('email')}}" maxlength="50" required>
                    <label for="email">Email address</label>
                </div>

                    
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" name="password" value="{{old('password')}}" class="validate">
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
@include('includes.footer')
</body>
</html>