 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
 .formulario{
	margin-left:20% !important;
}
</style>

@include('includes.menu')

<!-- Formulario de Cadastro -->
<div class="row container">
    <p>&nbsp;</p>
    <form action="{{ action('UserRegister@store')}}" method="post" class="col s12">
    {{csrf_field()}}
        <fieldset class="formulario">
			<h1 class="center"> Create Post</h1>

			<!--Campo nome -->
	 		<div class="input-field col s12">
        		<i class="material-icons prefix">title</i>
        		<input type="text" name="title" class ="validate" id="title" value="{{old('title')}}" maxlength="40" required autofocus>
       		 	<label for="nome">Title</label>
    		</div>   

			<!--Text area -->
        	<div class="row">
          		<div class="input-field col s12">
				<i class="material-icons prefix">create</i>
            	<textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            	<label for="textarea2">Your post</label>
          	</div>

			<div class="row center">
			  	<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    				<i class="material-icons right">send</i>
  			  	</button>
			</div>

		</fieldset>
    </form>
</div>

 <!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		
