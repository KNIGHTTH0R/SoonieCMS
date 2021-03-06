<?php
header('content-type: text/css');
ob_start('ob_gzhandler');
header('Cache-Control: max-age=31536000, must-revalidate');
// etc.
include '../connect/connect.php';
include '../includes/colors.php';
$req = $bdd->query('SELECT * FROM soonie_appearance');
$data = $req->fetch();
$color1=$data['gradient_color1'];
$color2=$data['gradient_color2'];
?>
/*   Home page   */

body{

  background:  linear-gradient(120deg, rgba(<?php echo hex2RGB($color1,true); ?>, 0.<?php echo $data['gradient_opacity'] ?>), rgba(<?php echo hex2RGB($color2,true); ?>, 0.<?php echo $data['gradient_opacity'] ?>) )   , url('<?php echo $data['bg_img']?>')   ;
  background-size: cover;
  font-family: 'Ubuntu', sans-serif;
  min-height: 710px;

}
.logo{
	margin-top: 50px;

}
.logo img{


	height: 40px;
}
.content{
	color: white;
	text-shadow: -3px 17px 32px -2px rgba(0,0,0,0.1);
}
.content h1{
	margin-top: 180px;
	font-weight: bold;
	font-size: 60px;
	text-shadow: -3px 17px 32px -2px rgba(0,0,0,0.1);

}
.mail{
	padding-top: 40px;
	box-shadow: -3px 17px 32px -2px rgba(0,0,0,0.1);/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
	display: inline-block;
}
.mail_text{
  border-radius: 10px 0px 0px 10px;
  padding: 15px;

  border: solid;
  border-right: none;
  font-family: 'Ubuntu', sans-serif;
  background-color:  rgba(255, 255, 255, 0.1);
  color: white;
}

::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    white;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    color: white;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:     white;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:     white;
}
::-ms-input-placeholder { /* Microsoft Edge */
   color:    white;
}
.mail_submit{
	margin-left: -5px;
	border-radius: 0px 7px 7px 0px;
    padding: 15px;
  border: solid;
  border-color: white;
  font-family: 'Ubuntu', sans-serif;
  background-color: rgba(255, 255, 255, 1);
  color: rgba(102, 126, 234, 0.80);
  cursor:pointer;
}
.footer{
	padding-top: 210px;
	color: white;
	font-size: 15px;
	text-shadow: -3px 17px 32px -2px rgba(0,0,0,0.1);

}
.social{
	font-size: 20px;
letter-spacing: 7px;
float: right;
}
.social a{
color:white;
}
.social a:hover{
color:white;
text-decoration:none;
}


/* Login page */

.adm_image{
	text-align: center;

}
.adm_image img{
   width: 20px;
}
