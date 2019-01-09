@extends('layout')
@if ($errors->any())
<div class="modal" id="modal">
    <div class="modal-content">
        @foreach ($errors->all() as $error)
          <div class="form-field center-align">
              <p class="red">{{$error}}</p> 
          </div>
        @endforeach
      </div>
    <div class ="modal-footer">
      <a class="btn blue modal-close modal-action">Ok</a>
    </div>
</div>
@endif



<body>
<!-- Formulario de Cadastro -->
<div class="row container">
    <p>&nbsp;</p>
    <form action="{{ action('UserRegister@store')}}" method="post" class="col s12">
    {{csrf_field()}}
        <fieldset class="formulario">
            <legend><img src="imagens/avatar1.png" alt="[imagem]" width="100"> </legend>
            <h5 class="light center">User Registration </h5>

            <!--Campo nome -->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="name" id="nome" maxlength="40" required autofocus>
                <label for="nome">Name</label>
            </div>

            <!--Campo Email -->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" maxlength="50" required>
                <label for="email">Email address</label>
            </div>


            <!--Senha -->
            <div class="input-field col s12">
                  <i class="material-icons prefix">lock</i>
                  <input id="password" type="password" name="password" class="validate">
                  <label for="password">Password</label>
            </div>

            <!--Botões-->
            <div class="input-field col s12">
                <input type="submit" value="cadastrar" class="btn blue">
                <input type="reset" value="limpar" class="btn red">
            </div>
        </fieldset>
    </form>
</div>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

 <!--  Scripts-->
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('#modal').modal();
    $('#modal').modal('open'); 
 });
</script>
</body>
</html>