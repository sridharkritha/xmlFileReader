<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300italic,700,300' rel='stylesheet' type='text/css'>
	<link href='logo/logo.css' rel='stylesheet' type='text/css'>
	
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="time/time.css">
    <script type="text/javascript" src="time/time.js"></script>
	<script type="text/javascript" src="xmlParser/xmlParser.js"></script>
	
	<!--                   -->
	<style type="text/css">

table {
   <!-- border-collapse: collapse;  -->
   border-collapse: separate;
   width: 100%;
	
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	<!-- height:40px; -->
	font-family  : Arial;
  font-size  : 50pt;
	
}

tr:hover{background-color:#f5f5f5}

</style>
	
	
	
	
	
	
  </head>
  <body>
  
  <div class="sridhar">
    <div id="logo">
      <p><a href="#">Studio Caravalt</a></p>
    </div>
	
	<!--         Time (start) -->
	<div class="container">
<div class="clock">
<div id="Date"></div>

<ul>
	<li id="hours"> </li>
    <li id="point">:</li>
    <li id="min"> </li>
    <li id="point">:</li>
    <li id="sec"> </li>
</ul>

</div>
</div>
</div>

<!--         Time  (end) -->

	
	
	
    <div class="right"></div>
    <div class="left"></div>
    <div class ="center"></div>
    <div id="footer"></div>
    <nav class="navbar">
      <p id="feed"><a href="#">Feed</a></p>
      <p id="store"><a href="#">Store</a></p>
      <p id="wiki"><a href="#">Wiki</a></p>
      <p id="forum"><a href="#">Forum</a></p>
      <p id="about"><a href="#">About</a></p>
    </nav>
	
	 <div id="dvContent"> </div>
	
	<table class="HorseTable"> </table>
    
   
  </body>
</html>