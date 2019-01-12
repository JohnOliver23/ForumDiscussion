@include('includes.menu')
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
<style>
 .formulario{
	margin-left:20% !important;
}
</style>
<!--https://quilljs.com/docs/configuration/-->
<style>
#editor{
    height:300px;
    width:100%;
}
.waves-effect{
	margin-top: 20;
}
.ql-toolbar.ql-snow{
    width: 100%;
}
</style>
<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
<!-- Formulario de Cadastro -->

<div class="row container">
    <p>&nbsp;</p>
    <form action="{{ action('UserRegister@store')}}" method="post" class="col s12">
    {{csrf_field()}}
        <fieldset class="formulario">
			<h1 class="center"> Create Post</h1>

			<!--Campo nome -->
	 		<div class="input-field hoverable col s12">
        		<i class="material-icons prefix">title</i>
        		<input type="text" name="title" class ="validate" id="title" value="{{old('title')}}" maxlength="40" required autofocus>
       		 	<label for="nome">Title</label>
    		</div>   
			<!-- Create the editor container -->
			<label for="post">Create your post</label>
			<div class="input-field col s12">
				<div id="editor">
  					<p>Digite your <strong>post</strong></p>
  					<p><br></p>
				</div>
			</div>
			<div class="row center">
			  	<button class="btn waves-effect waves-light" id="saveData" type="submit" name="action">Submit
    				<i class="material-icons right">send</i>
  			  	</button>
			</div>

		</fieldset>
    </form>
</div>

<div class="section"></div>

 <!--  Scripts-->
 <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	  
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


<!-- Initialize Quill editor -->
<script>
    var toolbarOptions = [
        ['bold','italic','underline','strike'],
        ['blockquote','code-block'],
        [{'header':1},{ 'header':2}],
        [{'list':'ordered'},{'list':'bullet'}],
        [{'script':'sub'},{'script': 'super'}],
        [{'indent':'-1'},{'indent':'+1'}],
        [{'direction':'rt1'}],
        [{'size':['small',false,'large','huge']}],
        ['link','image','video','formula'],
        [{'color':[] },{'background':[] } ],
        [{'font':[]}],
        [{'align':[]}]
    ];
  var quill = new Quill('#editor', {
      modules:{
          toolbar: toolbarOptions
      },
    theme: 'snow'
  });
 var button = document.querySelector('#saveData');
 var section = document.querySelector('.section');
 button.addEventListener('click',()=>{
    section.innerHTML = quill.container.innerHTML
    
 })




</script>