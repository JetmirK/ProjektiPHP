<!DOCTYPE html>

<html>
<head>
<title> Chinese Food </title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="chinesee.css">
<style type="text/css">

    .sorting {
    font-size:1em;
    font:bold;
    margin-top:-23em;
    float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;  
    }

    .numeric1 {
    font-size:1em;
    font:bold;
    margin-top:-7em;
    float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;    
    }

    .numeric {
    font-size:1em;
    font:bold;
    margin-top:5em;
    float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;
    }
	


</style>
<body>
<header>
            <a href="home.php"></a>
           <nav> 
		   <div id="nav">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="italian.php">Italian Food</a></li>
                    <li><a href="chinese.php">Chinese Food</a></li>
					<li><a href="contacts.php">Contacts</a></li>
					<li><a href="login.php">Log In</a></li>
                </ul>
				</div>
           </nav>
        </header>
<section>

<hr>
</section> 

<!--ANIMACIONI-->
			<div class="animacion2">
			<img src="images/chinese.png" width=300 height=200> 
			</div>

<!--Artikujt-->
<article>
<div class="chinese">
			        <h3>Noodles in soup</h3>
                    <img src="images/noodles.jpg" width=400 height=200> 
                    <p>
<!--Qasje ne Variabla me GLOBAL arrays-->
<?php
$x = 7;
$y = 6; 

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo 'Noodle soup refers to a variety of soups with noodles and other ingredients served in a light broth. Noodle soup is common dish across East and Southeast Asia. Various types of noodles are used, such as rice noodles, wheat noodles and egg noodles.While we do think of pasta as a culturally Italian food, it is likely the descendent of ancient Asian noodles. A common belief about pasta is that it was brought to Italy from China by Marco Polo during the '.$z.'th century.' ;
?>
                    </p>    
                    </div>
					
					
<div class="chinese">
			        <h3>Chinese Pancake</h3>
                    <img src="images/chinese pancake.jpg" width=400 height=200> 
                    <p>
                    
Paper wrapped cake (Chinese: 紙包蛋糕; Jyutping: zi2 baau1 daan6 gou1) is a type of Chinese pastry. It is one of the most common pastries served in Hong Kong. It can also be found in most Chinatown bakery shops. In essence, it is a chiffon cake baked in a paper cup.

In the bakeries of Chinatown, San Francisco, it is commonly referred to as "sponge cake."
 <!--Built-in math function-->
    <?php
    $number = 9.55776232;
    echo
        round($number) . "<br/>"; 
    ?> 
                    portion for hour. 
                    </p>    
                    </div>
					
<div class="chinese">
			        <h3>Rise</h3>
                    <img src="images/rise.jpg" width=400 height=200> 
                    <p> Rice, a monocot, is normally grown as an annual plant, although in tropical areas it can survive as a perennial  
<!--Exception-->
<?php
//create function with an exception
function checkNum($number) {
  if($number>10) {
    throw new Exception("  produce a ratoon crop for up to 30 years.");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(30);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 10 or below.';
}

//catch exception
catch(Exception $e) {
  echo ' and can ' .$e->getMessage();
}
?>
   
Rice cultivation is well-suited to countries and regions with low labor costs and high rainfall, as it is labor-intensive to cultivate and requires ample water. However, rice can be grown practically anywhere, even on a steep hill or mountain area with the use of water-controlling terrace systems. Although its parent species are native to Asia and certain parts of Africa, centuries of trade and exportation have made it commonplace in many cultures worldwide.

                    </p>  
                    </div>
</article>


<aside>
 
<!--Sort-->
				
<div class="sorting">
<?php

echo "<h4>&bullet; Top 5 Chinese Dishes You Cannot Miss</h4><br>";
$foods = array("– Peking Duck 北京烤鸭", "– Hot Pot 火锅", "– Hong Shao Rou 红烧肉", "– Dumplings 饺子","– Biang Biang Mian 油泼扯面");
rsort($foods); //nese kodojme vetem sort atehere behet sortimi sipas radhes alfabetike

$clength = count($foods);
for($x = 0; $x < $clength; $x++) {
    echo $foods[$x];
    echo "<br>";
}
?>
</div> 


<!--Numeric (Indexed) Arrays--> 
<span class ="numeric1">
<?php
$variabla="To try";
$foods = array("<br>- JIANBING (CHINESE CREPES)", "<br>- CHINESE TEA EGG", "<br>- CHINESE SESAME BALLS", "<br>- STINKY TOFU", "<br>- COLD RICE NOODLES-LIANGPI"); 
echo "<h4>&bullet; 5 Delicious Chinese Street Food  $variabla </h4>" . $foods[0] . ", " . $foods[1] . ", " .$foods[2] . ", " .$foods[3] . ", " . $foods[4] . ".";
?>
</span> 


 
<div class="numeric">
<?php 
    
$i = 5; 
DO { 
  print "<h4>&bullet; " . $i . " Disgusting Chinese Foods </h4><br>"; 
  $i--; 
} WHILE ($i > 8);

         $numbers[0] = "- 蚕蛹(cányǒng) Silkworm Pupa";
         $numbers[1] = "- 肥肠(féicháng) Pig’s Intestines";
         $numbers[2] = "- 凤爪(fèngzhuǎ) Chicken Feet";
         $numbers[3] = "- Snake Gallbladder";
         $numbers[4] = "- Rabbit Head";
         
         foreach( $numbers as $value ) {
            echo "$value<br />";
         }
?>
    
</div>
</aside>	
</body>
</html>