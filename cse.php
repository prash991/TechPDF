<html>
	<head>
	<title>Medicine And Agiculture PREVIOUS PAPERS</title>
		<style>
	body {
	
  
    background-image: url("images/bgimg11.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;

    background-repeat: no-repeat;
    background-size: 1350px 690px;
}
#ab{
	position:absolute;
	top:140px;
	left:480px;
}

#abcd{
	position:absolute;
	top:5px;
	left:380px;
}
#abc{
	position:absolute;
	top:50px;
	left:100px;
}
#abcde{
	position:absolute;
	top:260px;
	left:330px;
}
html {
  background-color: #000;
}

@keyframes spinsun {
  0% { transform: rotate(0); }
  100%   { transform: rotate(-360deg); }
}
@keyframes shadow {
  0% { background-position: 130% 0%; }
  33%{ background-position: 50% 0%; }
  55% { background-position: 0% 0%; }
  80%{ background-position: -50% 0%; }
  100%{ background-position: -50% 0%; }
}
@keyframes orbitmercury {
  0% { z-index:2; transform: rotateY(0); }
  49% { z-index:2; }
  50% { z-index:-2; }
  99% { z-index:-2; }
  100%   { z-index:2; transform: rotateY(360deg); }
}
@keyframes orbitvenus {
  0% { z-index:3; transform: rotateY(0); }
  49% { z-index:3; }
  50% { z-index:-3; }
  99% { z-index:-3; }
  100%   { z-index:3; transform: rotateY(360deg); }
}
@keyframes orbitearth {
  0% { z-index:4; transform: rotateY(0); }
  49% {z-index:4;}
  50% {z-index:-4;}
  99% {z-index:-4;}
  100%   { z-index:4; transform: rotateY(360deg);}
}
@keyframes orbitmars {
  0% { z-index:5; transform: rotateY(0); }
  49% { z-index:5; }
  50% { z-index:-5; }
  99% { z-index:-5; }
  100%   { z-index:5; transform: rotateY(360deg); }
}
@keyframes orbitjupiter {
  0% { z-index:6; transform: rotateY(270); }
  49% { z-index:6; }
  50% { z-index:-6; }
  99% { z-index:-6; }
  100%   { z-index:6; transform: rotateY(360deg); }
}
@keyframes orbitsaturn {
  0% { z-index:7; transform: rotateY(270); }
  49% { z-index:7; }
  50% { z-index:-7; }
  99% { z-index:-7; }
  100%   { z-index:7; transform: rotateY(360deg); }
}
/* Keep planet image flat */
@keyframes anti-spin {
  from { transform: rotateY(0); }
  to   { transform: rotateY(-360deg); }
}
@keyframes anti-spin-rings {
  from { transform: rotateY(0) rotateX(73deg); }
  to   { transform: rotateY(-360deg) rotateX(73deg); }
}

/* scene wrapper */
.wrapper{
  position:relative;
  margin: 0 auto;
  display:block;
  margin-top: 200px;
  perspective: 1000px;
    perspective-origin: 60% 50%;
  transform: rotate(-10deg);
  
}
.wrapper > div {
  position: relative;
  margin: 0 auto;
  transform-style: preserve-3d;
  height: 0px;
}
.sun {
  width: 250px;
  position: absolute;
  top: 0px;
  z-index: 1;
  height: 125px !important;
}
.sun .star {
  width: 250px;
  height: 250px;
  background: url(http://www.waynedunkley.com/img/solar_system/sun.png) no-repeat;
  background-size: cover;
  border-radius: 250px;
  margin: 0 auto;
  animation: spinsun 40s infinite linear;
}
.planet {
  background-size: cover;
  background-repeat: no-repeat;
  background-color: transparent;
  animation-iteration-count: infinite;
  overflow:hidden;
}
.shadow {
  position: absolute;
  left: 0px;
  right: 0px;
  top: 0px;
  bottom: 0px;
  background: transparent url(http://www.waynedunkley.com/img/solar_system/shadow.png) 0% 0% no-repeat;
  background-size: cover;
  border-radius: 100%;
}
.mercury {
  position: absolute;
  width: 400px;
  z-index:2;
  animation: orbitmercury 12s infinite linear;
  top: -7.5px; /*half of planets height to keep orbits in line*/
}
.mercury .planet {
  width:15px;
  height:15px;
  background-image: url(http://www.waynedunkley.com/img/solar_system/mercury.png);
  animation: anti-spin 12s infinite linear;
}
.mercury .shadow {
  animation: shadow 12s infinite linear;
}
.venus {
  position: absolute;
  width: 506px;
  z-index:3;
  animation: orbitvenus 15s infinite linear;
  top: -19px;
}
.venus .planet {
  width:38px;
  height:38px;
  background-image: url(http://www.waynedunkley.com/img/solar_system/venus.png);
  animation: anti-spin 15s infinite linear;
}
.venus .shadow {
  animation: shadow 15s infinite linear;
}
.earth {
  position: absolute;
  width: 610px;
  z-index:4;
  animation: orbitearth 20s infinite linear;
  top: -20px;
}
.earth .planet {
  width:60px;
  height:60px;
  background-image: url(http://www.waynedunkley.com/img/solar_system/earth.png?v=2);
  animation: anti-spin 20s infinite linear;
}
.earth .shadow {
  animation: shadow 20s infinite linear;
}
.mars {
  position: absolute;
  width: 706px;
  z-index:5;
  animation: orbitmars 30s infinite linear;
  top: -11px;
}
#123{
	position:absolute;
	top:800px;
	left:180px;
}
.mars .planet {
  width:82px;
  height:82px;
  background-image: url(http://www.waynedunkley.com/img/solar_system/mars.png);
  animation: anti-spin 30s infinite linear;
}
.mars .shadow {
  animation: shadow 30s infinite linear;
}
.jupiter {
  position: absolute;
  width: 1100px;
  z-index:6;
  animation: orbitjupiter 50s infinite linear;
  top: -74px;
}
.jupiter .planet {
  width:128px;
  height:128px;
  background-image: url(http://www.waynedunkley.com/img/solar_system/jupiter.png);
  animation: anti-spin 50s infinite linear;
}
.jupiter .shadow {
  animation: shadow 50s infinite linear;
}
</style>
</head>


<body>

	<h1 style="color:red;"><b><u><marquee>COMPUTER SCIENCE AND ENGINEERING</marquee></u></b></h1><hr>


<ul class="wrapper">
  <div class="sun">
    <div class="star"></div>
  </div>
  <div class="mercury">
    <div class="planet">
      <div class="shadow"></div>
    </div>
  </div>
  <div class="venus">
    <div class="planet">
      <div class="shadow"></div>
    </div>
  </div>
  <div class="earth">
    <div class="planet"><div class="shadow"></div></div>
  </div>
  <div class="mars">
    <div class="planet"><div class="shadow"></div></div>
  </div>
  <div class="jupiter">
    <div class="planet"><div class="shadow"></div></div>
  </div>
</ul>



<table>
<tr>
<td><div id="123">
								<a href="csenotes.php" ><img src="images/notes.png"</a>
								<h4><a href="csenotes.php" ><p style="color:aqua ;">CSE 3-2 Material</p></a>
							</h4>
							</div>
							</td>
							</tr>
							<tr>
<td>

								<a href="cseprevious.php" ><img src="images/previous.jpg"></a>
								<h4><a href="cseprevious.php" ><p style="color:white ;">CSE 3-2 Previous Question Papers</p></a>
							</h4>
							</td>
							</tr>
							</div>
			
							</body>
							</html>