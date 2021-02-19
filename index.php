<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="http://theviren.coolpage.biz/img/pro.jpg"/>
<meta property="og:description" content="See My Protofolio"/>
<link rel="icon" type="image/png" href="https://user-images.githubusercontent.com/72618659/107515187-b345d580-6bd0-11eb-8ebc-ba4cb765a36d.png"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<title>Virendra Profile</title>
<link rel="stylesheet" href="css/prostyle.css">
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About Me</a>
  <a href="contact.php">Contact Me</a>
  <a href="Converter.php">Convertor Project</a>
    <a href="Calculator.php">Calculator Project</a>	

</div>

<div class="navbar" id="mynave" >
<a><span style="cursor:pointer" onclick="openNav()">&#9776; </span></a>
  <a href="index.php"><img src="https://user-images.githubusercontent.com/72618659/107515187-b345d580-6bd0-11eb-8ebc-ba4cb765a36d.png" style="width:25px;height:25px;"></a>
  <a href="index.php">Home</a>
   <a href="resume.php">Resume</a>

</div>	
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "50%";
  document.getElementById("mynave").style.width = "0";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mynave").style.width = "100%";
}
</script>
<br><br><br>
<h1 style="font-size: 1.8em; text-align: center; color:white; background-color: tomato;">Welcome to My Profile</h1>
<img id="image" src="https://user-images.githubusercontent.com/72618659/107515182-b214a880-6bd0-11eb-9a20-8fe178c5d814.jpg" alt="Avatar" style="width:200px; "><br>
<div class="card">
  <div class="container1" style="font-size: .8em;">
    <h3><b>Name&nbsp;<i class="fa fa-vine"></i>:</b>&nbsp;<span>Virendra Singh Solanki</span></h3> 
    <h3><b>Email&nbsp;<i class="fa fa-paper-plane"></i>:</b>&nbsp;<span>Viren.353.vss@gmail.com</span></h3>
    <h3><b>Address&nbsp;<i class="fa fa-address-card"></i>:</b>&nbsp;<span>Bhilwara</span></h3>
    <h3><b>D.O.B&nbsp;<i class="fa fa-birthday-cake"></i>:</b>&nbsp;<span>10 May 1999</span></h3> 
    
  </div>
  
</div><br><br>
<div style="">
	
	<center><button class="info" onclick="window.open('https://sites.google.com/view/onlyinfo/About-Virendra-Singh-Solanki'); "><i style="float: left;" class="fa fa-info-circle"></i>&nbsp;Know About Me</button></center><br>
	<center><button class="info" onclick="window.open('https://www.linkedin.com/in/virendra-singh-solanki-9b6375187/');"><i style="float: left;" class="fa fa-linkedin"></i>&nbsp;Check My LinkedIn</button></center><br>
	<center><button class="info" onclick="window.open('https://www.instagram.com/thevirendrapal');"><i style="float: left;" class="fa fa-instagram"></i>&nbsp;Check My Instagram</button></center><br>
	<center><button class="info" onclick="window.open('https://www.facebook.com/virendra.singhsolanki.127');"><i style="float: left;" class="fa fa-facebook"></i>&nbsp;Check My Facebook</button></center><br>
	<center><button class="info" onclick="window.open('https://wa.me/+918875573277');"><i style="float: left;" class="fa fa-whatsapp"></i>&nbsp;Whatsapp Me</button></center><br>
	<center><button class="info" onclick="window.open('https://mail.google.com/mail/?view=cm&fs=1&to=viren.353.vss@gmail.com');"><i style="float: left;" class="fa fa-envelope"></i>&nbsp;Mail Me</button></center><br>
	<center><button class="info" onclick="window.open('https://drive.google.com/file/d/1_bdurHlhThemFm3OFwFV8z-DeKgGXSD_/view?usp=sharing');"><i style="float: left;" class="fa fa-eye"></i>&nbsp;See My Resume</button></center><br>

	
</div>
	<br>

<div class="container">	
<div id="instagram-feed-demo" class="instagram_feed"></div>
</div>

<script src="https://www.jqueryscript.net/demo/Instagram-Photos-Without-API-instagramFeed/jquery.instagramFeed.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
 (function($){
		$(window).on('load', function(){
			$.instagramFeed({
				'username': 'callofduty',
				'container': "#instagram-feed-demo",
				'display_profile': true,
				'display_biography': true,
				'display_gallery': true,
				'get_raw_json': false,
				'callback': null,
				'styling': true,
				'items': 36,
				'items_per_row': 6,
				'margin': 0.3
			});
		});
	})(jQuery);
  </script>

<br></br>
<div class="powr-hit-counter" id="6cbce95a_1613658715"></div><script src="https://www.powr.io/powr.js?platform=html"></script>
<a href="whatsapp://send?text=&#128071See My Resume%20&#128071%20https://theviren.herokuapp.com/" data-action="share/whatsapp/share" class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i>
</a>

</body>
</html>
