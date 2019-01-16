  
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@include('includes.menu')
@include('includes.styleindex')
<body style="background-color: #fafafa">

<div class="section">
<div id="container">
  <nav class="nav-extended white pushpin z-depth-3" style="width:90%; margin-bottom:20px;">
    <div class="nav-wrapper ">
      <a href="#" class="brand-logo black-text left truncate">Themes</a>
      
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


@if(count($themes)>0)
  @foreach($themes as $theme)
  <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel white hoverable lighten-5 z-depth-1" style="width:90%;height:9em;padding-top:5px">
          <div class="row valign-wrapper">
            <div class="col s3">
            <span class="i-circle center blue "style="font-weight:900">{{strtoupper(str_limit($theme->theme,1,''))}}</span>
            </div>
            <div class="col s12">
              <span class="black-text">
                <h4><a href="posts/theme/{{$theme->id}}" class="black-text text-darken-3" style="font-weight:700"> {{ucfirst(trans($theme->theme))}} <a></h4>
                <small class="grey-text">created on {{date('d-m-Y',strtotime($theme->created_at))}}</small>
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

  </div>

@include('includes.footerindex')
</body>
</html>
