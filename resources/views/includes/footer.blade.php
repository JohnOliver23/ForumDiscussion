

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <!-- Compiled and minified JavaScript -->
 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
   $('#modal').modal();
   $('#modal').modal('open'); 
   $(".email-signup").hide();
  $("#signup-box-link").click(function(){
    $(".email-login").fadeOut(100);
    $(".email-signup").delay(100).fadeIn(100);
    $("#login-box-link").removeClass("active");
    $("#signup-box-link").addClass("active");
  });
  $("#login-box-link").click(function(){
    $(".email-login").delay(100).fadeIn(100);;
    $(".email-signup").fadeOut(100);
    $("#login-box-link").addClass("active");
    $("#signup-box-link").removeClass("active");
  });
});
var password = document.getElementById("password")

function validatePassword(){
  if(password.value == "") {
    password.setCustomValidity("Passwords Don't Match");
  } else {
    password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
password.onkeydown = validatePassword;
</script>

