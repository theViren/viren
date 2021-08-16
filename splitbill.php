<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<script>
function calculate () {
 var a1 = document.getElementById("fquant").value;
 var a2 = document.getElementById("fprice").value;
 var b1 = document.getElementById("squant").value;
 var b2 = document.getElementById("sprice").value;
 var c1 = document.getElementById("tquant").value;
 var c2 = document.getElementById("tprice").value; 
 var d1 = document.getElementById("cquant").value;
 var d2 = document.getElementById("cprice").value;
 var mtotal=a1*a2+b1*b2+c1*c2+d1*d2;
 document.getElementById("ftotal").innerHTML = a1 * a2;
 document.getElementById("stotal").innerHTML = b1* b2;
 document.getElementById("ttotal").innerHTML = c1*c2;
 document.getElementById("ctotal").innerHTML = d1*d2;
 document.getElementById("mtotal").innerHTML = mtotal;
 // for second table
var fquant1=document.getElementById("fquant1").value;
var fquant2=document.getElementById("fquant2").value;
var fquant3=document.getElementById("fquant3").value;
var fquant4=document.getElementById("fquant4").value;
// var ftotal1=fquant1*a2+fquant2*b2+fquant3*c2+fquant4*d2;
 document.getElementById("ftotal1").innerHTML = fquant1*a2+fquant2*b2+fquant3*c2+fquant4*d2;

 var fquant5=document.getElementById("fquant5").value;
var fquant6=document.getElementById("fquant6").value;
var fquant7=document.getElementById("fquant7").value;
var fquant8=document.getElementById("fquant8").value;
 document.getElementById("ftotal2").innerHTML = fquant5*a2+fquant6*b2+fquant7*c2+fquant8*d2;

 var fquant9=document.getElementById("fquant9").value;
var fquant10=document.getElementById("fquant10").value;
var fquant11=document.getElementById("fquant11").value;
var fquant12=document.getElementById("fquant12").value;
 document.getElementById("ftotal3").innerHTML = fquant9*a2+fquant10*b2+fquant11*c2+fquant12*d2;
var fquant13=document.getElementById("fquant13").value;
var fquant14=document.getElementById("fquant14").value;
var fquant15=document.getElementById("fquant15").value;
var fquant16=document.getElementById("fquant16").value;
document.getElementById("ftotal4").innerHTML = fquant13*a2+fquant14*b2+fquant15*c2+fquant16*d2;
var mtotal1=fquant1*a2+fquant2*b2+fquant3*c2+fquant4*d2+fquant5*a2+fquant6*b2+fquant7*c2+fquant8*d2+fquant9*a2+fquant10*b2+fquant11*c2+fquant12*d2+fquant13*a2+fquant14*b2+fquant15*c2+fquant16*d2;
console.log(typeof mtotal1);
document.getElementById("mtotal1").innerHTML = mtotal1;


}

</script>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Per Price</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Sandwich</td>
      <td><input id="fquant" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fprice" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><span id="ftotal"></span> </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Pizza</td>
      <td><input id="squant"  type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="sprice" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><span id="stotal"></span></td>
    </tr>
   <tr>
      <th scope="row">3</th>
      <td>Burger</td>
      <td><input id="tquant"  type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="tprice" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><span id="ttotal"></span></td>
    </tr>
       <tr>
      <th scope="row">4</th>
      <td>pasta</td>
      <td><input id="cquant"  type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="cprice" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><span id="ctotal"></span></td>
    </tr>  
  </tbody>
</table>
   <center> <p style="font-size: 20px; border:2px double tomato; margin: 10px;">Total:&nbsp<span id="mtotal" onkeyup="calculate()"></span></p></center>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Person Name</th>
      <th scope="col">Sandwich</th>
      <th scope="col">Pizza</th>
      <th scope="col">Burger</th>
      <th scope="col">Pasta</th>
      <th scope="col">per person price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Virendra</td>
      <td><input id="fquant1" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fquant2" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fquant3" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fquant4" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><span id="ftotal1"></span> </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Vijendra</td>
      <td><input id="fquant5" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fquant6" type="text" name="fname" onkeyup="calculate()"/></td>
       <td><input id="fquant7" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fquant8" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><span id="ftotal2"></span> </td>
    </tr>
   <tr>
      <th scope="row">3</th>
      <td>Vijay</td>
      <td><input id="fquant9" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fquant10" type="text" name="fname" onkeyup="calculate()"/></td>
       <td><input id="fquant11" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fquant12" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><span id="ftotal3"></span> </td>
    </tr>
       <tr>
      <th scope="row">4</th>
      <td>Shubham</td>
      <td><input id="fquant13" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fquant14" type="text" name="fname" onkeyup="calculate()"/></td>
       <td><input id="fquant15" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><input id="fquant16" type="text" name="fname" onkeyup="calculate()"/></td>
      <td><span id="ftotal4"></span> </td>
    </tr>  
  </tbody>
</table>
<center> <p style="font-size: 20px; border:2px double tomato; margin: 10px;">Total:&nbsp<span id="mtotal1" 
	onkeyup="calculate()"></span></p></center>
</body>
</html>
