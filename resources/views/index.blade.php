  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


@include('includes.menu')

<style>
  .section{
    margin-left:30% !important;
    
  }
  </style>
<div class="section">

@if(count($themes)>0)
  @foreach($themes as $theme)
  <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
            <span class="i-circle center ">{{strtoupper(str_limit($theme->theme,1,''))}}</span>
            </div>
            <div class="col s10">
              <span class="black-text">
                <h3><a href="#"> {{$theme->theme}} <a></h3>
                <small>Written on {{$theme->created_at}}</small>
              </span>
            </div>
          </div>
        </div>
      </div>

    
  @endforeach
  {!! (new Landish\Pagination\Materialize($themes))->render() !!}
@else
  <p> No themes found </p>
@endif


<!--
<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>-->
  </div>

 <!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


