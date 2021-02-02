<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebar One</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body id="body">
<h1 id="title">Rebar One</h1>
    <div id="imagebox"></div>
    <div class="detitle">
    <h2>Our Services</h2>    
    </div>
    <div class="detitle"><h2>How we work</h2></div>    
    <div class="detitle"><h2>Rules</h2></div>
    
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=0">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/lang.js"></script>
<script type="text/javascript" src="js/calc.js"></script>
<script src="js/jquery.table2excel.js"></script>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script src="js/export.js"></script>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script>
    var jQuery = "js/jquery.min.js";
</script>
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
#body{
  height: 100%;
  margin: 0px;
  font-family: Arial;
  background-image: url("css/images/rebar5.jpg");
background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
  
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 80px 20px;
  height: 100%;
}

</style>
</head>
<title>RebarOne</title> 
<body id="body">
<div id="topper">
<h1 id="title">Rebar One</h1>
<button class="tablink" onclick="openPage('Home', this, 'black')" id="defaultOpen"><script> document.write(lang["home"]);</script></button>
<button class="tablink" onclick="openPage('HWW', this, 'black')" ><script> document.write(lang["hww"]);</script></button>
<button class="tablink" onclick="openPage('Calc', this, 'black')"><script> document.write(lang["wpc"]);</script></button>
<button class="tablink" onclick="openPage('Contact', this, 'black')"><script> document.write(lang["contact"]);</script></button>


</div>
<div id="Home" class="tabcontent">
   
  <div class="intro"><div id="introText"><p>
      <h3>Welcome!</h3> 
  Rebar One is an agency that provides a dealership service to reinforcement bar suppliers, 
      construction companies, institutions and individual customers. <br><br>
      As we all know imported reinforcement bars are expensive and difficult to get due to the 
      excess of dealers involved in the process. <br><br>
      Rebar One is here to solve that problem.
      We accept your orders and deliver the product. 
      Not only that, we also provide the lowest price on the market.
  </p></div></div>
  <div class="spacer"></div>
  <div class="intro"><div id="introText"><p>
  <h3>Why us?</h3> 
  We are licensed and approved by all of the major importers.
  <br><br>
  We will save your time and money.<br><br>
  We save you from scammers and dealers with false promises.<br><br>
  We do not put a limit on your needs.<br><br>
  We will send it to you wherever you want.
  </p></div></div>
</div>

<div id="HWW" class="tabcontent" class="boxes">
<div class="intro" class="w-25 p-3"><div id="introText">
  <h3>How we work</h3> 
  We accept orders from our customers. <br><br>
  We gather orders till the minimum order quantity set by an importer is satisfied and 
  As soon as the pre-conditions are satisfied we make the purchase.<br><br>
  Then we distribute it.<br><br>
  We will send it to you wherever you want.<br><br>
  In doing so, what happens is that we cut the extra transportation, labor, storage and security costs.
  And cut the profit imposed by agents and distributors.
  </div></div>
 <div class="spacer"></div>
  <div class="intro" class="w-25 p-3"><div id="introText">
  <h3>Why us?</h3> 
  We are approved by all of the major importers. <br>
  We are licensed.<br>
  We save you from scammers and dealers with false promises.<br>
  We do not put a limit on your needs.<br>
  We will send it to you wherever you want.<br>
  We will help you save upto 50 birr per peice(berga).
  </div></div>
</div>

<div id="Calc" class="tabcontent" class="boxes">
  <!-- <h3 id="WC">Weight Calculator</h3> -->
  <!-- <div>
</div> -->
<div class="intro" class="w-25 p-3" class=".container" id="tableout"><div id="introText">
  <h3>Total</h3> 
  Kilograms <br><div id="kgs" class="weight"></div><br>
  Tons <br><div id="tons" class="weight"></div><br>
  <button onclicked="exportcsv()" class="button">Export</button>
  </div></div>

          <table class="tg" id="table" class=".container" class="rounded" >
    <thead>
  <tr>
    <th class="tg-ul38">Diameter</th>
    <th class="tg-ul38">Quantity</th>
    <th class="tg-ul38">Weight in Kgs</th>
    <th class="tg-ul38">Weight in tons</th>
  </tr>
    </thead>
    <tbody>
  <tr>
    <td class="tg-0lax">6mm</td>
    <td class="tg-0lax"><input id="6mm" class = "inputField" type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label  class="wout" id="tw6"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">8mm</td>
    <td class="tg-0lax"><input id="8mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw8"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">10mm</td>
    <td class="tg-0lax"><input id="10mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw10"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">12mm</td>
    <td class="tg-0lax"><input id="12mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw12"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">14mm</td>
    <td class="tg-0lax"><input id="14mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw14"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">16mm</td>
    <td class="tg-0lax"><input id="16mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw16"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">20mm</td>
    <td class="tg-0lax"><input id="20mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw20"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">24mm</td>
    <td class="tg-0lax"><input id="24mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw24"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">28mm</td>
    <td class="tg-0lax"><input id="28mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw28"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">30mm</td>
    <td class="tg-0lax"><input id="30mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw30"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">32mm</td>
    <td class="tg-0lax"><input id="32mm" class = "inputField"  type="number" onchange="calculator()"></td>
    <td class="tg-0lax"><label class="wout" id="tw32"></label></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"><label id="kgst"></label></td>
    <td class="tg-0lax"><label id="tonst"></label></td>
  </tr>
</tbody>
</table>
</div>


<div id="Contact" class="tabcontent" class="boxes">
  <h3><script src="js/lang.js"> document.write(lang["contact"]) ;</script></h3>
  <p>Email: rebarone@gmail.com</p>
  <p>Mobile: 0911969696</p>
  <p>Telegram: t.me/rebarone</p>
  <p>Address: </p>  
</div>
<div class="modal">
    <div class="modal-content">
    <span class="close-button">X</span>
    <h2>options</h2>
</div>
</div>
<div id="footer">
    <div class="footerbar" id="footername"> <div id="footerbrand">Rebar One</div> Steel bar dealership</div>
    <div class="footerbar" id="footeraddress">Address : Room No.2, 6F, DH GEDA TOWER building, Wereda 02, Bole sub-city, Addis Ababa, Ethiopia <br>
Tel : +251-11-618-9758 / 011-618-9758 <br> Fax : +251-11-662-5387 <br> Email : sales.rebarone@gmail.com <br>
Sales Office : DH Geda Tower 6F, Bole, Addis Ababa</div>
</div>
<script>
function openPage(pageName,elmnt,color) {
  
    var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
   elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>   
</body>

</html> 




