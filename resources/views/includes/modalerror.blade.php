@if ($errors->any())
<div class="modal" id="modal">
    <div class="modal-header red">
        <div class="classemuda" style=" color: white; display: flex; flex-direction: row;">
            <i class="material-icons prefix " style="font-size: 30px; margin-bottom: 10px; margin-top:10px">
            error_outline</i>
             <h5 style="margin-top:10px;">Error Validation</h5>
        </div>
    </div>
    <div class="modal-content">
        @foreach ($errors->all() as $error)
              <li class="red-text text-darken-2"style="margin-left:50px;">{{$error}}</li>
        @endforeach
      </div>
    <div class ="modal-footer">
      <a class="btn blue modal-close modal-action">Ok</a>
    </div>
</div>
@endif