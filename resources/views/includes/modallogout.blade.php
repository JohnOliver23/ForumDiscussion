@if (Session::has('logout'))
<div class="modal" id="modal">
    <div class="modal-header red">
        <div class="classemuda" style=" color: white; display: flex; flex-direction: row;">
            <i class="material-icons prefix " style="font-size: 30px; margin-bottom: 10px; margin-top:10px">
            power_settings_new</i>
             <h5 style="margin-top:10px;">Logout</h5>
        </div>
    </div>
    <div class="modal-content">
        <p class="red-text text-darken-2 center">{{session('logout')}}</p>
      </div>
    <div class ="modal-footer">
      <a class="btn blue modal-close modal-action">Ok</a>
    </div>
</div>
@endif