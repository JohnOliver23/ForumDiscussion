@include('includes.menu')
@include('includes.stylecreate')
<!-- Formulario de Cadastro -->

<div class="row container">
    <p>&nbsp;</p>
    <form action="" method="post" class="col s12">
    {{csrf_field()}}
        <fieldset class="formulario">
		<div class="input-field  col s12 ">
            	
            <a href="#" onclick="openModal()" class="modal-trigger right"><i class="material-icons prefix" style="margin-left:-15px; margin-top:-15px; color:black">
            add_to_photos</i></a>
        </div>
        <p>&nbsp;</p>
			<!--Campo nome -->
	 		<div class="input-field hoverable col s12 m6">
        		<i class="material-icons prefix">title</i>
        		<input type="text" name="title" class ="validate" id="title" value="{{old('title')}}" maxlength="40" required autofocus>
       		 	<label for="nome">Title</label>
    		</div> 
            <!--thems-->
            <div class="input-field col s12 m6">
                <select>
                    <option value="" disabled selected>Choose your option</option>
                    @foreach($themes as $theme)
                        <option value="1">{{$theme->theme}}</option>
                    @endforeach
                </select>
                <label>Choose your theme</label>
            </div>
			<!-- Create the editor container -->
			
			<div class="input-field col s12">
				<div id="editor">
  					<p>Digite your <strong>post</strong></p>
  					<p><br></p>
				</div>
			</div>

			<div class="input-field col s12 center">
			  	<button class="btn waves-effect waves-light" id="saveData" type="submit" name="action">Submit
    				<i class="material-icons right">send</i>
  			  	</button>
			</div>
            <div class="section"></div>
		</fieldset>
    </form>
</div>

<div class="modal" id="modal">
    <div class="modal-header blue">
        <div class="classemuda" style=" color: white; display: flex; flex-direction: row;">
            <i class="material-icons prefix " style="font-size: 30px; margin-bottom: 10px; margin-top:10px; margin-left:3px">
            add_circle_outline</i>
             <h5 style="margin-top:12px; margin-left:5px">Create your theme</h5>
        </div>
    </div>
    <div class="modal-content">
        <form action="{{action('ThemeController@store')}}" method="post" class="col s12">
        {{csrf_field()}}
        <!--Campo Tema -->
	 		<div class="input-field hoverable col s12 m6">
        		<i class="material-icons prefix">title</i>
        		<input type="text" name="theme" class ="validate" id="title" value="{{old('title')}}" maxlength="40" required autofocus>
       		 	<label for="theme">Theme</label>
    		</div> 
      </div>
    <div class ="modal-footer">
      <button type ="submit" id="saveData" class="btn blue modal-close modal-action">Ok</button>
    </div>
    </form>
    
</div>



 @include('includes.footercreate')