<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	  
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>




<!-- Initialize Quill editor -->
<script >
$('select').material_select();
$('#modal').modal();
function openModal(){
    $('#modal').modal('open'); 
}

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
 button.addEventListener('click',(e)=>{
    section.value = quill.root.innerHTML
 })
</script>