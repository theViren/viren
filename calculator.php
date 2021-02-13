<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="http://theviren.coolpage.biz/img/pro.jpg"/>
<meta property="og:description" content="See My Calculator Project"/>
<link rel="icon" type="image/png" href="img/v-icon.png"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<title>Calculator Project</title>
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
  <a href="index.php"><img src="img/v-icon.png" style="width:25px;height:25px;"></a>
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
<h1 style="font-size: 1.8em; text-align: center; color:white; background-color: tomato;">Calculator Project</h1>
<div style="text-align: center;">
        <p><input id="noone" type="text" placeholder="enter number" style="padding: 20px; width:50%;"></p>
        <p><input id="notwo" type="text" placeholder="enter number" style="padding: 20px; width:50%;"></p>
                <p id="result" style="color:white; font-size: 20px;"></p>
        <button class="info" style="padding: 20px;" type="button" onclick="calculater('+')" >plus</button><br><br>
        <button class="info" style="padding: 20px;" type="button" onclick="calculater('-')" >minus</button><br><br>
        <button class="info" style="padding: 20px;" type="button" onclick="calculater('*')" >multiply</button><br><br>
        <button class="info" style="padding: 20px;" type="button" onclick="calculater('/')" >divide</button><br><br>


</div>
        <script>
function calculater(a) {
  var noone = document.getElementById("noone").value;
  var notwo = document.getElementById("notwo").value;
  if(a=='+'){
    var plus = (parseFloat(noone) + parseFloat(notwo));
    document.getElementById("result").innerHTML = plus;
  }
  else if(a=='-'){
    var minus = (noone-notwo);
    document.getElementById("result").innerHTML = minus;
  }
  else if(a=='*'){
    var cross = (parseFloat(noone) * parseFloat(notwo));
    document.getElementById("result").innerHTML = cross;
  }
  else if(a=='/'){
    var slash = (parseFloat(noone) / parseFloat(notwo));
    document.getElementById("result").innerHTML = slash;
  }
};

        </script>
    </body>
</html>
