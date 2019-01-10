@extends('layout')
@include('includes.modalerror')
<style>
.modal {
  width:35% !important;
  height: 34% !important ;
};

.email input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }

.name input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
</style>


<body>
<!-- Formulario de Cadastro -->
<div class="row container">
    <p>&nbsp;</p>
    <form action="{{ action('UserRegister@store')}}" method="post" class="col s12">
    {{csrf_field()}}
        <fieldset class="formulario">
            <legend><i class="material-icons prefix" style="font-size: 60px">person_add</i> </legend>
            <h5 class="light center">User Registration </h5>

            <!--Campo nome -->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="name" class ="validate" id="name" value="{{old('name')}}" maxlength="40" required autofocus>
                <label for="nome">Name</label>
            </div>
            <!--Campo Email -->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" class="validate" value="{{old('email')}}" maxlength="50" required>
                <label for="email" data-error="wrong" data-success="right">Email</label>
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
@include('includes.footer')
</body>
</html>