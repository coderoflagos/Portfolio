 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Opemipo Disu's blog. </title>

      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="bootstrap-4.4.1\dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <!-- Custom stylesheet - for your changes-->
      <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--> 

  </head>
  
  <body>
    <style type="text/css">
    .dark-mode {
  background-color: black;
  color: white;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
}
nav{
  background: maroon;
  height: 80px;
  width: 100%;
}
label.logo{
  color: #f2f2f2;
  font-size: 33px;
  line-height: 80px;
  padding: 0 140px;
  font-weight: 600;
  font-family: 'Poppins', sans-serif;
}
nav ul{
  float: right;
  margin-right: 60px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 2px;
}
nav ul li a{
  color: #f2f2f2;
  font-weight: 500;
  font-size: 20px;
  padding: 7px 13px;
  border-radius: 3px;
  /* text-transform: uppercase; */
  font-family: 'Poppins', sans-serif;
}
a.active,a:hover{

  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 27px;
    padding-left: 25px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
    margin-right: 40px;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #000;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
section{
  background: #000;
  background-size: cover;
  height: calc(100vh - 80px);
}
</style>
              <nav class=""> 
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">AfrikTV</label>
      <ul>
<li><a class="active" href="javascript:void(0)">Home</a></li>
<li><a href="javascript:void(0)">About</a></li>
<li><a href="javascript:void(0)">Services</a></li>
<li><a href="javascript:void(0)">Contact</a></li>
<li><a href="javascript:void(0)"></a></li>
</ul>
</nav>


  <section class="bg-light" style="background-image: url(img/bg.jpg); background-size: cover; background-attachment: fixed; color:#fff;">
    <div class="container">
      <div class="row">
        <div class="hero_section">
          <h1 style="padding-top: 200px; font-family: Poppins;">Welcome to AfrikTV</h1>
          <p class="lead">Africa's first movie subscription website, AfrikTV where <br>you can get all the excusives of African movies. </p>
          <p><a href="#" class="btn btn-primary shadow mr-2 outline-light" style="border-radius:0px; background: maroon; border-color: maroon;">Explore</a><a href="#" class="btn btn-outline-primary" style="border-radius: 0px; background: maroon; border-color: maroon; color: #fff;">Some another action</a></p>
        </div>
  </div>
    </div>
  </section>
