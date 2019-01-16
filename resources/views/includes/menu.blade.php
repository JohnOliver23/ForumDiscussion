
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

<ul id="slide-out" class="side-nav #1565c0 blue darken-3 fixed ">
@if (Auth::check())
<li><div class="user-view">
      <div class="background  #1976d2 blue darken-2">
        <!--<img src="images/office.jpg">-->
      </div>
      <span class="i-circle white blue-text center "style="font-weight:900">{{strtoupper(str_limit(auth()->user()->name,1,''))}}</span>
      <a href="#!name"><div class="white-text name center"style="font-weight:900">{{auth()->user()->name}}</div></a>
      <a href="#!email"><div class="white-text email center">{{auth()->user()->email}}</div></a>
</div></li>
@endif
    <li><a class="white-text" style="font-weight:900"  href="{{url('/')}}"><i class="material-icons left white-text ">home</i>Home</a></li>
    <li class="divider #1976d2 blue darken-2" style="padding-bottom:5px" ></li>
    
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header white-text" style="font-weight:900">Posts<i class="material-icons left white-text "style="margin-left:15px">arrow_drop_down</i></a> 
                <div class="collapsible-body  blue darken-3">
                    <ul>
                        <li><a class="white-text"style="margin-left:30px" href="{{url('/posts')}}">search<i class="material-icons left white-text">find_in_page</i></a></li>
                        <li><a class="white-text"style="margin-left:30px" href="{{action('PostController@create')}}">create<i class="material-icons left white-text">add_circle</i></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li class="divider #1976d2 blue darken-2" style="padding-bottom:5px" ></li>
    <li class="no-padding ">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header white-text" style="font-weight:900">Thems<i class="material-icons left white-text"style="margin-left:15px">arrow_drop_down</i></a> 
                <div class="collapsible-body #1565c0 blue darken-3">
                    <ul>
                        <li><a href="#!" class="white-text"style="margin-left:30px">search<i class="material-icons left white-text">find_in_page</i></a></li>
                        <li><a href="#!" class="white-text"style="margin-left:30px">create<i class="material-icons left white-text">add_circle</i></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li class="divider #1976d2 blue darken-2" style="padding-bottom:5px" ></li>
    @if (Auth::check())
        <li><a class="white-text" style="font-weight:900" href="{{ action('SessionController@destroy')}}"><i class="material-icons left white-text ">power_settings_new</i>Logout</a></li>
        <li class="divider #1976d2 blue darken-2" style="padding-bottom:5px" ></li>
        
    @else
        <li><a class="white-text" style="font-weight:900"  href="{{ action('UserController@create')}}"><i class="material-icons left white-text">account_circle</i>Login</a></li>
        <li class="divider #1976d2 blue darken-2" style="padding-bottom:5px" ></li>
        
    @endif
 
</ul>
<a  data-activates="slide-out" class="btn"><i class="material-icons">menu</i></a>