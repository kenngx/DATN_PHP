<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        
/* start editing from here */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
/*--login form start here--*/ 
body {
   background:url(../images/5.jpg)no-repeat;
   background-size: cover;
   font-family: 'Open Sans', sans-serif;
   font-size: 100%;
}
.search {
  text-align: center;
  margin: 0em 0em 0em 0em;
  position: relative;
}
.s-bar {
  width: 34%;
  margin: 0 auto;
  padding: 0.5em 0em 0.5em 0em;
}
.s-bar input[type="text"] {
  font-size: 1em;
  font-weight: 600;
  color: #fff;
  padding: 1.3em 1em 1.3em 1.5em;
  width: 70%;
 text-shadow: rgba(80, 80, 80, 0.08) 1px 1px, 
               rgba(80, 80, 80, 0.07) 2px 2px, 
               rgba(80, 80, 80, 0.09) 3px 3px, 
               rgba(80, 80, 80, 0.04) 4px 4px, 
               rgba(80, 80, 80, 0.06) 5px 5px; 
  border-radius: 5px 0px 0px 5px;
 -webkit-border-radius: 5px 0px 0px 5px;
  -moz-border-radius: 5px 0px 0px 5px;
  -o-border-radius: 5px 0px 0px 5px;
  background: rgba(255, 255, 255, 0.5);
  border: none;
  outline: none;
  -webkit-appearance: none;
}
.s-bar input[type="submit"]{
  font-size: 1em;
  font-weight: 600;
  color: #fff;
  padding: 1.3em 0.5em;
  width: 22%;
  text-align: center;
  text-shadow: rgba(80, 80, 80, 0.08) 1px 1px, 
               rgba(80, 80, 80, 0.07) 2px 2px, 
               rgba(80, 80, 80, 0.09) 3px 3px, 
               rgba(80, 80, 80, 0.04) 4px 4px, 
               rgba(80, 80, 80, 0.06) 5px 5px;
  border-radius: 0px 5px 5px 0px;
  -webkit-border-radius:0px 5px 5px 0px;
  -moz-border-radius:0px 5px 5px 0px;
  -o-border-radius:0px 5px 5px 0px;
  margin: 0px 0px 0px -4px;
  background:#7ac209;
  cursor:pointer;
  border: none;
  outline: none;
  -webkit-appearance: none;
  background: #7ac209;
  background: -moz-linear-gradient(top, #7ac209 0%, #7ac209 37%, #7ac209 66%, #7ac209 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#7ac209), color-stop(37%,#7ac209), color-stop(66%,#7ac209), color-stop(100%,#7ac209));
  background: -webkit-linear-gradient(top, #7ac209 0%,#7ac209 37%,#7ac209 66%,#7ac209 100%);
  background: -o-linear-gradient(top, #7ac209 0%,#7ac209 37%,#7ac209 66%,#7ac209 100%);
  background: -ms-linear-gradient(top, #7ac209 0%,#7ac209 37%,#7ac209 66%,#7ac209 100%);
  background: linear-gradient(to bottom, #8EDB15 0%,#8EDB15 37%,#8EDB15 66%,#8EDB15 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7ac209', endColorstr='#7ac209',GradientType=0 );
}
.s-bar input[type="submit"]:hover{
	opacity: 0.8;
      filter: alpha(opacity=100); 
      transition: all 0.3s ease; 
     -webkit-transition: all 0.3s ease;
     -moz-transition: all 0.3s ease;
     -o-transition: all 0.3s ease;
}
.search i {
  background: url(../images/search.png)no-repeat;
  width: 31px;
  height: 31px;
  display: block;
  position: absolute;
  top: 18%;
  left: 32.3%;
  cursor: pointer;
}
.search p {
  font-size: 0.9em;
  font-weight: 400;
  color: #fff;
  margin: 1em 0em 0em 0em;
}
.search p a {
  font-size: 0.9em;
  font-weight: 400;
  color: #fff;
  text-decoration: underline;
}
.search p a:hover {
	text-decoration:none;
}
.copyright {
  margin: 45em 0em 0em 0em;
  text-align: center;
}
.copyright p {
  font-size: 0.875em;
  font-weight: 400;
  color: #fff;
}
.copyright p a{
  font-size: 1em;
  font-weight: 400;
  color:#8EDB15;
}
.copyright p a:hover{
	color: #fff;
	 transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}
/*--meadia quiries start here--*/
@media(max-width:1440px){
.search i {
  left: 29.2%;
}
.s-bar {
  width: 40%;
}
}
@media(max-width:1366px){

}
@media(max-width:1280px){
.copyright {
  margin: 13em 0em 4em 0em;
}
.s-bar input[type="text"] {
  width: 63%;
}
.search i {
  left: 30.2%;
}
}
@media(max-width:1024px){
.s-bar {
  width: 50%;
}
.search i {
  left: 25.2%;
}
.copyright {
  margin: 13em 0em 4.1em 0em;
}
}
@media(max-width:768px){
.copyright {
  margin: 21em 0em 7.2em 0em;
}
.search {
  margin: 22em 0em 0em 0em;
}
.s-bar {
  width: 58%;
}
.search i {
  left: 19.5%;
}
.s-bar input[type="text"] {
  width: 67%;
}
.copyright p {
  font-size: 0.9em;
}
}
@media(max-width:667px){
.search i {
  left: 18.5%;
}	
}
@media(max-width:640px){
.s-bar {
  width: 65%;
}
.search i {
  left: 15.5%;
}	
}
@media(max-width:600px){
.search i {
  left: 14.5%;
}	
}
@media(max-width:568px){
.s-bar input[type="text"] {
  width: 64%;
}	
}
@media(max-width:480px){
.s-bar input[type="text"] {
  width: 55%;
  font-size: 0.8em;	
}
.s-bar input[type="submit"] {
  width: 30%;
  font-size: 0.8em;
}
.search i {
  top: 17%;
}
}
@media(max-width:414px){
.search i {
  top: 16%;
  left: 13.5%;
}	
}
@media(max-width:320px){
.copyright {
  margin: 10.45em 0em 3em 0em;
}
.copyright p {
  font-size: 0.8em;
}
.copyright p {
  font-size: 0.8em;
}
.search {
  margin: 11.25em 0em 0em 0em;
}
.s-bar {
  width: 100%;
}
.search i {
  left: 43%;
  top: -36%;
}
.search p {
  font-size: 0.72em;
}
.s-bar input[type="submit"] {
  text-shadow: rgba(80, 80, 80, 0.08) 1px 1px, 
               rgba(80, 80, 80, 0.07) 2px 2px, 
               rgba(80, 80, 80, 0.09) 3px 3px, 
               rgba(80, 80, 80, 0.04) 4px 4px, 
               rgba(80, 80, 80, 0.06) 5px 5px;              
}
}
/*--meadia quiries end here--*/
.table container-fluid border{
    color: while;
}
.btn-login{
    width: 34%;
  margin: 0 auto;
  padding: 0.5em 0em 0.5em 0em;
}
    </style>
</head>
<body>

<a href="./login/login.php">
        <button class = "btn btn-primary" style = "position: fixed; top:10px; left:92vw; opacity:0.8;">Đăng Nhâp</button>
     </a>
    <!--search start here-->
<div class="search">
	<i> </i>
	<div class="s-bar">
	   <form style = "opacity:0.8">
		<input type="text" value="Nhập Mã Số Thuế" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Template';}">
		<input type="submit"  value="Tìm Kiếm"/>
    <?php require_once 'result_search.php';?>
	  </form>
	</div>
	<table class="table table-dark table-hover" >
            <thead>
              <tr>
                <th scope="col">Mã số thuế</th>
                <th scope="col">Tên doanh nghiệp</th>
                <th scope="col">Nhà cung cấp</th>
                <th scope="col">
                  <p class="text-dark">Thời gian</p>
                </th>
                <th scope="col">Trạng thái</th>
              </tr>
            </thead>
            <tbody id="tab_tap_upload">

            </tbody>
          </table>
</div>
<!--search end here-->	
<div class="copyright">
	 <p>Tập đoàn công nghiệp - Viễn thông quân đội<a href="#" target="_blank">  VIETTEL </a></p>
</div>




<script >

function login() {
    window.location.href("login/login.php");
}
</script>
    
</body>
</html>