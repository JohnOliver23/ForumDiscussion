
<style>
.i-circle {
    background: #ff0000;
    color: #fff;
    padding: 6px 20px;
    border-radius: 50%;
    font-size: 30px;
    margin-left: 90px;
}
</style>

<ul id="slide-out" class="side-nav  fixed ">
@if (Auth::check())
<li><div class="user-view">
      <div class="background blue">
        <!--<img src="images/office.jpg">-->
      </div>
      <span class="i-circle white blue-text center "style="font-weight:900">{{strtoupper(str_limit(auth()->user()->name,1,''))}}</span>
      <a href="#!name"><div class="white-text name center"style="font-weight:900">{{auth()->user()->name}}</div></a>
      <a href="#!email"><div class="white-text email center">{{auth()->user()->email}}</div></a>
</div></li>
@endif
    <li><a  href="{{url('/')}}"><i class="material-icons left  ">home</i>Home</a></li>
    
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header ">Posts<i class="material-icons left "style="margin-left:15px">arrow_drop_down</i></a> 
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{url('/posts')}}">search<i class="material-icons left">find_in_page</i></a></li>
                        <li><a href="{{action('PostController@create')}}">create<i class="material-icons left">add_circle</i></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">Thems<i class="material-icons left"style="margin-left:15px">arrow_drop_down</i></a> 
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#!">search<i class="material-icons left">find_in_page</i></a></li>
                        <li><a href="#!">create<i class="material-icons left">add_circle</i></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    
    @if (Auth::check())
        <li><a  href="{{ action('SessionController@destroy')}}"><i class="material-icons left ">power_settings_new</i>Logout</a></li>
        
    @else
        <li><a  href="{{ action('UserController@create')}}"><i class="material-icons left">account_circle</i>Login</a></li>
        
    @endif
 
</ul>
<a  data-activates="slide-out" class="btn"><i class="material-icons">menu</i></a>