<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="https://user-images.githubusercontent.com/72618659/107515187-b345d580-6bd0-11eb-8ebc-ba4cb765a36d.png"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
</script><br><br><br>
<h3 style="text-align:center; background-color: tomato; color:white; padding: 10px;">Contact Me</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="india">India</option>
      <option value="usa">USA</option>
      <option value="others">Others</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>
