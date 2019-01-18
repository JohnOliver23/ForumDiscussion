    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
  .section{
    margin-left:30% !important;
    
  }

  /* html { margin-left: calc(100vw - 100%); } */

nav form {
  position: relative;
  height: 100%;
  background: inherit;
}
.nav-wrapper{
  background: inherit;
  
}

.search-close-icon{
  display: none!important;
  position: absolute;
  top: 0;
  left: 100%!important;
  padding-left: 0px;
  color: rgba(0, 0, 0, 0.54);
  transition: color .2s;
  cursor: pointer;
}


.my-grey{
  background: #f7f7f7;
}

input.search-field {
  font-weight: 500;
  color: rgba(0, 0, 0, 0.54);
  border-radius: 2px;
  border: 0;
  height: 36px;
  padding: 8px 8px 8px 60px;
  width: 200px;
  background: #f7f7f7;
  transition: background 0.2s, width .2s;
}
input.search-field:hover {
  background: #ebebeb;
}
.searchbox {
  position: relative;
}
::placeholder {
  /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: rgba(0, 0, 0, 0.54);
}
input.search-field:focus {
  outline: none;
  width: 500px;
  color: #212121;
}
input.search-field:focus:hover {
  background: #f7f7f7;
}
.search-icon {
  position: absolute;
  top: 0;
  padding-left: 20px;
  color: rgba(0, 0, 0, 0.54);
}
.search-content {
  color: #303c42;
  width: 90%;
  margin: auto;
  height: auto;
  padding: 8px 10px;
}
.search-heading {
  color: #757575;
  display: block;
  font-size: 12px;
  line-height: 30px;
}
input.search-field ~ .search-popup {
  overflow: hidden;
  left: 0px;
  min-height: 50px;
  max-height: 700px;
  width: 200px;
  top: -450px; 
  position: absolute;
  z-index: 1;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14),0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
  transition: width .2s, top .2s ease-in-out;
  border-radius: 2px;
  background-color: #fff;
}
input.search-field:focus ~ .search-popup {
  width: 500px;
  top: 50px;
}
nav ul.popup-list a:hover {
  background-color: initial;
}
nav ul.popup-list li {
  float: none;
}
nav ul.popup-list li a {
  line-height: 30px;
  padding: 0;
  font-size: 12px;
  color: #212121 !important;
}
nav ul.popup-list li a:hover {
  background-color: #f7f7f7;
}

p {
  font-size: 1.3rem;
}

.top-margin {
  margin-top: 8px;
}

@media only screen and (max-width: 600px) {
  
  nav form {
/*     left: calc(90vw - 100%); */
  }
  
  ::placeholder {
    /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: transparent;
  }

  input.search-field {
    width: 1px;
    margin-right: 0px;
    padding: 8px 25px;
  }
  input.search-field ~ .search-popup {
    width: 1px;
    margin-right: 0px;
    padding: 8px 25px;
  }

  .search-icon {
    top: 0;
    padding-left: 15px;
    color: rgba(0, 0, 0, 0.54);
  }

  input.search-field:focus {
    margin-right: 0px;
    width: 100vw;
    padding: 8px 8px 8px 50px;
  }

  input.search-field:focus ~ .search-popup {
    width: 100vw;
  }

  .search-content {
    width: 100%;
    padding: 8px 8px;
  }

  nav .nav-wrapper {
    margin-right: 0px;
  }
}
nav .brand-logo {
margin-left: 20px;
}
.pagination > .active > a, .pagination > .active > span, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
      background-color: #2196F3 ;
      border-color:#2196F3;
      color: #2196F3 ;
      cursor:pointer;
      border-radius:2px;
      z-index:2;
    }
    
    .i-circle.md-userpost{
      font-weight:800;
      font-size: 1em;
      padding: 3px 11px;
      margin-left: -0%;
      margin-right: 2%;
      margin-top: 2%;
    }
    .material-icons.md-48 { font-size: 48px; color: ##e0e0e0 ;}
    .material-icons.md-24 { font-size: 24px; color: #039be5; }
    .numposts{
      font-weight:600;
      margin-left: 25%;
      color: #039be5;

    }

  </style>