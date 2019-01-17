    
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

@include('includes.menu')
@include('includes.styleindexpost')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body style="background-color: #fafafa">


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="section">
<div id="container">
  <nav class="nav-extended white pushpin z-depth-3" style="width:90%; margin-bottom:20px;">
    <div class="nav-wrapper ">
      <a href="#" class="brand-logo black-text left truncate">Posts</a>
      
      <form action="" class="browser-default right">
        <input id="search-input" placeholder="Search" type="text" class="browser-default search-field" name="query" value="" autocomplete="off" aria-label="Search box">
        <label for="search-input"><i class="material-icons search-icon">search</i></label> 
        <i class="material-icons search-close-icon">cancel</i>
        <!--<div class="search-popup">
          <div class="search-content">
            <label class="search-heading">Most Visited</label>
            <ul class="popup-list">
              <li class=""><a class="grey-text" href="#">laravel</a></li>
              <li class=""><a class="grey-text" href="#">jeniffer</a></li><li class="">
              <a class="grey-text" href="#">java</a></li><li class="">
              
            </ul>
          </div>
        </div>-->
      </form>

    </div>
      <div class="my-grey">
      <div class="nav-content container">
        <ul class="tabs tabs-transparent">
          <li id="scale" class="nav-btn top-margin scale-transition scale-out "><a  class="waves-effect waves-light btn blue search-hide" href="#">this will hide!</a></li>
        </ul>
    </div>
    
  </div>
  
  </nav>
  
<!-- FIM -->


@if(count($posts)>0)
  @foreach($posts as $post)
  <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel white hoverable lighten-5 z-depth-1" style="width:90%;height:9em;padding-top:5px">
        <div class="row">
            <div class="col s12 m6 l3 center">
            <h4 class="numposts ">{{count($post->answers)}}<i class="material-icons  md-48 ">forum</i></h4>
              <small class="grey-text ">ANSWERS</small>
            </div>
            <div class="col s12 m4 l7">
            <h5><a href="#" class="black-text text-darken-3" style="font-weight:700"> {{ucfirst(trans($post->titulo))}} <a></h5>
                 <span class="post " style="font-weight:500; font-size:1.3em; font-family:Times, sans serif;color: #808080">{!! str_limit(strip_tags($post->post),22,'') !!}
                  ... </span> <a style="font-weight: 700" href="#">Read More</a>
                  <div><small class="grey-text">whrite on {{date('d-m-Y',strtotime($post->created_at))}} by {{ $post->user->first()->email }} 
                  <i class="material-icons">thumb_up</i>0
                  <i class="material-icons">thumb_down</i>0</small></div>
              </span>
            </div>
            <div class="col s12 m4 l2">
              <p><i class="material-icons right md-24 grey-text">create</i></p>
            </div>
        </div>
        </div>
      </div>

    <!--
                <div class="row valign-wrapper">
            <div class="col s3">
            
            </div>
            <div class="col s12">
                 
            </div>
          </div>-->
  @endforeach
  {!! (new Landish\Pagination\Materialize($posts))->render() !!}
@else
  <p> No posts found </p>
@endif

  </div>

     <!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>

</script>