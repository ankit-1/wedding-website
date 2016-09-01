<?php
$v="aisehi";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Esha & Navdeep</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="slide.js"  type="text/javascript"></script>
	<script type="text/javascript">
	  $(function() {
		$("#slideshow > div:gt(0)").hide();
	       setInterval(function() { 
			  $('#slideshow > div:first')
			    .fadeOut(1000)
			    .next()
			    .fadeIn(1000)
			    .end()
			    .appendTo('#slideshow');
			},  4000);
			
		});
	</script>
</head>
<body>
<audio autoplay loop preload hidden>
	<source src="sajna.mp3" type="audio/mp3">
</audio>
<div class="fix">
</div>
<div class="back">
</div>
	<header class="logo">
		<img src="images/logo.png">
	</header>

	<nav>
		Happening now: <span class="now">Countdown</span>
	</nav>

	<div class="upperclass">

	<div id="slideshow">
   		<div>
     		<img src="images/f1.jpg">
   		</div>
   		
   		<div>
     		<img src="images/f2.jpg">
   		</div>

   		<div>
     		<img src="images/f3.jpg">
   		</div>

   		<div>
     		<img src="images/f4.jpg">
   		</div>

   		<div>
     		<img src="images/f5.jpg">
   		</div>
	</div>
	</div>

	<div class="fixing">
	<img src="images/transparent.png">
	</div>

	<div class="message">

		<header>
			&hearts; A message from the couple &hearts;
		</header>

		<div class="inline rmar">
		<span class="person">
			<img src="images/esha.png">
			<div class="needmargin excerpt">
				<p class="needrightmargin name">Esha Maggo</p>
				<p class="needrightmargin">Words fall short to describe the feeling of being with him.</p>
				<p class="needrightmargin">He is just perfect.</p>
			</div>
		</span>
		</div>

		<div class="inline rmar">
		<span class="person">
			<img src="images/navdeep.png">
			<div class="needmargin excerpt">
				<p class="needrightmargin name">Navdeep Gandhi</p>
				<p class="needrightmargin">She is the one who genuinely completes me.</p>
				<p class="needrightmargin">I adore her.</p>
			</div>
		</span>
		</div>

	</div>
	
	
	<div class="countdown">
		<span id="doing">We'll be starting a new life in:</span><br>
		&hearts;<br>

		<ul class="up">
			<li id="months">12</li>
			<li id="days">24</li>
			<li id="hours">23</li>
			<li id="minutes">44</li>
			<li id="seconds">44</li>
		</ul>

		<ul class="down">
			<li>Months</li>
			<li>Days</li>
			<li>Hours</li>
			<li>Minutes</li>
			<li>Seconds</li>
		</ul>

	</div>

	<div class="details">
		<h1 class="div-head">What is happening</h1>
		<br><br>
		<strong>Sagan & Ring Ceremony ~ 7th April 2016</strong><br>
		Sagan ~ 6:00pm<br>
		Ring Ceremony ~ 7:00pm<br>
		Dinner ~ 8:00pm<br>
		<br><br>
		<strong>Sangeet & Mehandi ~ 8th April 2016</strong><br>
		Arrival ~ 8:00pm<br>
		<br><br>
		<strong>Wedding Ceremony ~ 9th April 2016</strong><br>
		Reception of Baraat ~ 8:00pm<br>
		Dinner ~ 9:00pm<br>

	</div>

	<div class="rsvp">
		<h1 class="div-head">RSVP</h1><br>
		<form action="pp.php" method="POST">
			<label for="name">Name:</label> <input id="tex" type="text" name="name"></input><br><br>
			<label for="select">Number of people attending:</label>
			<select>
  				<option value="1">1</option>
 				 <option value="2">2</option>
 				 <option value="3">3</option>
  				<option value="4">4</option>
  				<option value="5">5</option>
  				<option value="6">6</option>
  				<option value="7">7</option>
  				<option value="8">8</option>
  				<option value="more">9+</option>
			</select><br><br>
			<input type="submit" value="Submit" class="subbut" id="cool"></input><br><br><br><br>
			<div style="color: gray">Your response has been recorded.</div>
		</form>
	</div>


	<div class="map">
	<h1 class="div-head">Where it is happening:</h1>
	<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="440" src="https://maps.google.com/maps?hl=en&q=suraj vatika&ie=UTF8&t=m&z=10&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">
									embed google map
							</a></small></div><div><small><a href="http://googlemapsgenerator.com/">Google maps generator</a></small></div>
	</iframe>
	</div>




<script  type="text/javascript">

function countdown()
{

	var d = new Date();
    var t= d.getTime();
    var wedDate=1460140200000;
    var day=0;
	var h=0;
	var m=0;
	var s=0;
	var mon=0;

    var secRem=Number((Number(wedDate)-Number(t))/1000);

    if(secRem>0)
    {
	    while(secRem>=60)
	    {
	    	m=secRem/60;
	    	secRem=(secRem%60);
	    }

	    while(m>=60)
	    {
	    	h=m/60;
	    	m=(m%60);
	    }

	    while(h>=24)
	    {
	    	day=h/24;
	    	h=(h%24);
	    }

	    while(day>=30)
	    {
	    	mon=day/30;
	    	day=(day%30);
	    }
	}

	else
	{
		secRem*=(-1);
		while(secRem>=60)
	    {
	    	m=secRem/60;
	    	secRem=(secRem%60);
	    }

	    while(m>=60)
	    {
	    	h=m/60;
	    	m=(m%60);
	    }

	    while(h>=24)
	    {
	    	day=h/24;
	    	h=(h%24);
	    }

	    while(day>=30)
	    {
	    	mon=day/30;
	    	day=(day%30);
	    }

	    document.getElementById("doing").innerHTML = "We've been married for:" ;

	}



document.getElementById("seconds").innerHTML = parseInt(secRem);
document.getElementById("minutes").innerHTML = parseInt(m);
document.getElementById("hours").innerHTML = parseInt(h);
document.getElementById("days").innerHTML = parseInt(day);
document.getElementById("months").innerHTML = parseInt(mon);

var timer=setTimeout('countdown()', 1000);
}

countdown();

</script>
<script type="text/javascript">
	
	var d = new Date();
    var t= d.getTime();
    var wedDate=1460140200000;
    var day=0;
	var h=0;
	var m=0;
	var s=0;
	var mon=0;

	var secRem=Number((Number(wedDate)-Number(t))/1000);

	var play=document.getElementById("cool");
	var tex=document.getElementById("tex");
	play.disabled=true;
	play.style.background="gray";
	play.style.color="#4b4a51";
	tex.addEventListener('keyup', function(){

		if(tex.value!="")
		{
			play.disabled=false;
			play.style.background="white";
			play.style.color="#a02c5a";
		}
		else
		{
			play.disabled=true;
			play.style.background="gray";
			play.style.color="#4b4a51";
		}
	});


</script>
</body>
</html>