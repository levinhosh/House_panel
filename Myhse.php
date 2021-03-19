
<!DOCTYPE html><html><head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body id='mainbody'>

<div id='mySidenav' class='sidenav'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
  <ul>
  <li>
  <a href='#'>About</a>
  </li>
  <li>
  <a href='#'>Services</a>
  <ul>
    <li>
    <a href='houses.php'>View House</a>
    </li>
    <li>
    <a href='index.html'>Register House</a>
    </li>
    <li>
    <a href='#'>View Rooms</a>    
    </li>
    </ul>

  </li>
  <li>
  <a href='#'>Clients</a>
  </li>
  <li>
  <a href='#'>Contact</a>
  </li>
</ul>  
</div>

<span style='font-size:30px;cursor:pointer' onclick='openNav()'>&#9776;</span>

<div id='main'>
  
<h2>The House Panel</h2>
<p>Manage Your Rentals Anywhere you are</p>

<div class='slideshow-container'>

<div class='mySlides fade'>
  <div class='numbertext'>1 / 3</div>
  <img src='f1.jpg' style='width:100%'>
  <div class='text'>Caption Text</div>
</div>

<div class='mySlides fade'>
  <div class='numbertext'>2 / 3</div>
  <img src='f2.jpg' style='width:100%'>
  <div class='text'>Caption Two</div>
</div>

<div class='mySlides fade'>
  <div class='numbertext'>3 / 3</div>
  <img src='f4.jpg' style='width:100%'>
  <div class='text'>Caption Three</div>
</div>

</div>
<br>

<div style='text-align:center'>
  <span class='dot'></span> 
  <span class='dot'></span> 
  <span class='dot'></span> 
</div>


</div>



<script src='motions.js'></script>

</body>
</html>
