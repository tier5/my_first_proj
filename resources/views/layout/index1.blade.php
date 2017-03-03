<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">Services</a></li>
  <li><a href="#contact"></a></li>
  <li><a href="#contact">Process</a></li>
<li><a href="#contact">Products</a></li>
<li><a href="#contact">Work</a></li>
<li><a href="#contact">Testimonials</a></li>
<li><a href="{{ URL::to('/reg') }}">sign up</a></li>
<li><a href="{{ URL::to('/log')}}">login</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
 
   
       
   

</body>
</html>
 
