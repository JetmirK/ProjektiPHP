
<html>
<head>
<title> Contacts </title>
<meta charset="utf-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide(1000);
    });
	
	$("#show").click(function(){
    $("p").show(1000);
        
});
});
    

 
    
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getHint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

</head>
<link rel="stylesheet" href="contact.css">

<body> 
   <header>

           <nav> 
		   <div id="nav">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="ItalianFood.php">Italian Food</a></li>
                    <li><a href="chinese.php">Chinese Food</a></li>
					<li><a href="contacts.php">Contacts</a></li>
					<li><a href="login.php">Log In</a></li>
                </ul>
				</div>
           </nav>
        </header>


<hr>
<script type="text/javascript">

function multipleparameters (first, second) {
   document.write("Here are our "+ first + " if you want to contact " + second + ".");
}

multipleparameters("E-mails", "us");

</script>
<b><p>If you want to read more click here: <a href="#aboutus">About Us</a></p></b>


<table style="width:50%; height: 10%">

  <tr>
    <th> Name of admins </th>
    <th> E-mail </th>
  </tr>

  <tr>
    <td> Xhyla Bajraktari </td>
    <td><address> <a href="mailto:xhyla.bajraktari@student.uni-pr.edu">xhylabajraktari@gmail.com </a></address> </td>
  </tr>

  <tr>
    <td> Klodian Krasniqi </td>
	<td><address> <a href="mailto:klodian.krasniqi@student.uni-pr.edu">klodian.krasniqi@student.uni-pr.edu</a></address> </td>
  </tr>

  <tr>
    <td> Jetmir Kabashi </td>
	<td><address> <a href="mailto: jetmir.kabashi@student.uni-pr.edu">jetmir.kabashi@student.uni-pr.edu </a></address> </td> 
  </tr>

  <tr>
    <td> Granit Orllati </td>
    <td><address> <a href="mailto:granit.orllati@student.uni-pr.edu">granit.orllati@student.uni-pr.edu</a></address> </td>
  </tr>
  
  
</table>


<hr>


<figure>
<div class="map">
<img src="map.png" title="map" alt="map photo" width=300 height=300>
<figcaption>
<pre><strong> Note:</strong>This is our location.</pre>
</figcaption>
<figure>

<div class="info">
<hr>
<h3 id="aboutus">About Us</h3>

<!--Associative Arrays-->
<p> 
  <?php
$members = array("FIEK"=>"4", "FIM"=>"7", "FNA"=>"10");
echo "We are " .$members['FIEK'] . " students of computer engineering and we worked together on building this website. All of the food lovers are welcomed in our website.";
?>
</p>

<mark> Thank You </mark>
<br>
<button id="hide">Hide</button>

<button id="show">Show</button>
</div>
    </figure></div></figure>
	
	
    <p><b>Start typing a name:</b> </p>
<form>
    
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
    <p>Suggestions: <span id="txtHint"></span></p>
    

</body>
    
</html>