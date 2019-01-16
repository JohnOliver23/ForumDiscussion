<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style>
body{
  background-color: #1cbb9b;
}
.login-box{
  position:relative;
  margin: 10px auto;
  width: 370px;
  height: 500px;
  margin-top: 7%;
  background-color: #fff;
  padding: 10px;
  border-radius: 3px;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
}
.modal {
  width:25% !important;
  height: 32% !important ;
};

.lb-header{
  position:relative;
  color: #00415d;
  margin: 5px 5px 10px 5px;
  padding-bottom:10px;
  border-bottom: 1px solid #eee;
  text-align:center;
  height:28px;
}
.lb-header a{
  margin: 0 25px;
  padding: 0 20px;
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.lb-header .active{
  color: #029f5b;
  font-size: 18px;
}
.social-login{
  position:relative;
  float: left;
  display: flex;
  justify-content: space-around;
  width: 100%;
  height:auto;
  border-bottom: 1px solid #eee;
}
.social-login a{
  position:relative;
  float: left;
  width:calc(40% - 8px);
  text-decoration: none;
  color: #fff;
  border: 1px solid rgba(0,0,0,0.05);
  padding: 12px;
  border-radius: 2px;
  font-size: 12px;
  text-transform: uppercase;
  margin: 0 3%;
  text-align:center;
}
.social-login a i{
  position: relative;
  float: left;
  width: 20px;
  top: 2px;
}
.social-login a:first-child{
  background-color: #49639F;
}
.social-login a:last-child{
  background-color: #26a69a;
}
.email-login,.email-signup{
  position:relative;
  float: left;
  width: 100%;
  height:auto;
  margin-top: 20px;
  text-align:center;
}
.u-form-group{
  width:100%;
  margin-bottom: 10px;
}
.u-form-group input[type="email"],
.u-form-group input[type="password"]{
  width: calc(50% - 22px);
  height:45px;
  outline: none;
  border: 1px solid #ddd;
  padding: 0 10px;
  border-radius: 2px;
  color: #333;
  font-size:0.8rem;
  -webkit-transition:all 0.1s linear;
  -moz-transition:all 0.1s linear;
  transition:all 0.1s linear;
}
.u-form-group input:focus{
  border-color: #358efb;
}
.u-form-group button{
  width:50%;
  background-color: #1CB94E;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  padding: 14px 0;
  border-radius: 2px;
  text-transform: uppercase;
}
.forgot-password{
  width:50%;
  text-align: left;
  text-decoration: underline;
  color: #888;
  font-size: 0.75rem;
}


/*=========================
  Icons
 ================= */

/* footer social icons */
ul.social-network {
	list-style: none;
	display: inline;
	margin-left:0 !important;
	padding: 0;
}
ul.social-network li {
	display: inline;
	margin: 0 5px;
}


/* footer social icons */
.social-network a.icoRss:hover {
	background-color: #F56505;
}
.social-network a.icoFacebook:hover {
	background-color:#1e88e5;
}
.social-network a.icoTwitter:hover {
	background-color:#1e88e5;
}
.social-network a.icoGoogle:hover {
	background-color:#1e88e5;
}
.social-network a.icoVimeo:hover {
	background-color:#0590B8;
}
.social-network a.icoLinkedin:hover {
	background-color:#007bb7;
}
.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
	color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
	color:#44BCDD;
}

.social-circle li a {
	display:inline-block;
	position:relative;
	margin:0 auto 0 auto;
	-moz-border-radius:50%;
	-webkit-border-radius:50%;
	border-radius:50%;
	text-align:center;
	width: 50px;
	height: 50px;
	font-size:20px;
  margin-left: 30;
}
.social-circle li i {
	margin:0;
	line-height:50px;
	text-align: center;
  margin-top:-13px;
}
.social-network a.icoFacebook {
	background-color:#3B5998;
}

.social-network a.icoTwitter {
	background-color:#33ccff;
}
.social-network a.icoGoogle {
	background-color:#BD3518;
}

.social-circle li a:hover i, .triggeredHover {
	-moz-transform: rotate(360deg);
	-webkit-transform: rotate(360deg);
	-ms--transform: rotate(360deg);
	transform: rotate(360deg);
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-ms-transition: all 0.2s;
	transition: all 0.2s;
}
.social-circle i {
	color: #fff;
	-webkit-transition: all 0.8s;
	-moz-transition: all 0.8s;
	-o-transition: all 0.8s;
	-ms-transition: all 0.8s;
	transition: all 0.8s;
}

.error{
  margin-top:15;
}

a {
 background-color: #D3D3D3;   
}

    /* label focus color */
  .input-field input[type=text]:focus + label {
    color: blue !important;
  }
 /* label underline focus color */
  .input-field input:focus {
   border-bottom: 1px solid blue !important;
   box-shadow: 0 1px 0 0 blue !important
 }

/* label focus color */
.input-field .prefix.active {
     color: blue !important;
}

.input-field input[type=text]:focus + label, .materialize-textarea:focus:not([readonly]) + label {
 color: blue !important;
}
.input-field input[type=email]:focus + label, .materialize-textarea:focus:not([readonly]) + label {
 color: blue !important;
}
.input-field input[type=password]:focus + label, .materialize-textarea:focus:not([readonly]) + label {
 color: blue !important;
}
</style>