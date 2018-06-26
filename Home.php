<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACCELERATE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 <style type="text/CSS">
   body{
	   background-color:gray;
	   padding-left:2%;
	   padding-top:1%;
	   padding-right:2%;
	   font-family:times-new-roman;
   }
   
   nav #navbar1{
	   background-color:#a1b1c2;
   }
   
   div #v1{
	  font-size:4vw;
	  color:pink;
	  text-align:center;
	  padding-top:1vw;
	  text-shadow: 3px 2px red;
	  }
	  
	div #v2{
	 font-size:25px;
	  font-color:pink;
	  text-align:center;
	  }  
	  
	  div #v3{
	  background-color:yellow;
	  font-color:blue;
	  text-align:left;
	  font-size:100%;
	  list-style-type:disc;
	  
	  border-radius:6px;
	  }
	  a:hover{
		  
		  text-decoration:none;
	  }
     
	  nav a:active {
    color: hotpink;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:5px;
}

.topnav .search-container button {
  float: right;
 <!-- padding: 6px 10px;-->
  margin-top: 8px;
  margin-right: 1px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@keyframes example {
    0%   {font-color:red; left:0%; top:0%;}
    
    100% {font-color:green; left:100%; top:100%;}
}

<!--Animation-->
   .blink{
	  -webkit-animation:blink 1.5s linear infinite;
	  -moz-animation:blink 1.5s linear infinite;
	  animation:blink 1.5s linear infinite;
    }
	
	@-webkit-keyframes blink{
		0%{opacity:1}
		50%{opacity:0}
		100%{opacity:1}
	}
	@-moz-keyframes blink{
		0%{opacity:1}
		50%{opacity:0}
		100%{opacity:1}
	}
	@keyframes blink{
		0%{opacity:1}
		50%{opacity:0}
		100%{opacity:1}
	}
<!-- Circle-->
.hello{
	  border-size:5px; 
	  border-style:solid; 
	  border-radius:50%; 
	  height:80px; 
	  width:80px; 
	  text-align:center; 
	  font-size:18px; 
	  padding-top:20px;
	  border-color:pink;
  }
  .hey:hover{
	  background-color:yellow;
	  text-decoration:none;
  }

</style>
</head>


<body >
   <!-- Header start here"-->
   <nav class="navbar navbar-default" style="background-color:skyblue;">      
	    <div class="container-fluid">
		  
            <div class="navbar header" id="v1">
			    <div class="row">
		          <div class="col-sm-4">
			        <a href="#Home"> <img class="img-circle"  src="logo.jpg" alt="Image" width="33%"> </a>
			      </div>
				  <div class="col-sm-6">
                  <a href="#Home" style="width:66%;">Accelerate Educations,</br> Jagdalpur (C.G)</a>
	              </div>
			   </div>
			</div> 
	    </div>
   </nav>
   <!-- End ofr Header-->
   
   
<!-- Menu bar start here-->
  <nav class="navbar navbar-inverse" >
      <div class="container-fluid">
	        <div class="navbar header" id="v2">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>                      
            </button>
			
			<div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                     <li class="active"><a href="#Home" >Home</a></li>
					 
                          <li><a class="dropdown-toggle" data-toggle="dropdown" > The institute<span class="caret"> </span></a>
		                       <ul class="dropdown-menu" id="v3">
							     <ul style="list-style-type:disc">
		                            <li><a href="#about">About Us</a></li>
                                    <li><a href="#vision">Our Vision</a></li>
								  </ul>
		                       </ul>
		                   </li>
			  
                          <li><a class="dropdown-toggle" data-toggle="dropdown" >Courses<span class="caret"> </span></a>
		                       <ul class="dropdown-menu" id="v3">
							   <ul style="list-style-type:disc">
		                           <li><a href="#C1">C1</a></li>
                                   <li><a href="#C2">C2</a></li>
								</ul>
		                       </ul>
		                   </li>
		    
		 
	                    <li><a class="dropdown-toggle" data-toggle="dropdown" >Facilities<span class="caret"> </span></a>
		                  <ul class="dropdown-menu" id="v3">
						   <ul style="list-style-type:disc">
		                     <li><a href="#F1">F1</a></li>
                             <li><a href="#F2">F2</a></li>
                             <li><a href="#F3">F3</a></li>
				             </ul>
							 </ul>
		                </li>
		 
		               <li><a class="dropdown-toggle" data-toggle="dropdown">Examinations<span class="caret"> </span></a>
		                  <ul class="dropdown-menu" id="v3">
						  <ul style="list-style-type:disc">
		                     <li><a href="#E1">E1</a></li>
                             <li><a href="#E2">E2</a></li>
                             <li><a href="#E3">E3</a></li>
		                  </ul>
						  </ul>
		                </li>		 
	            </ul>
				
				<div class="search-container" style="padding-left:0px;">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Search.." style="width:20vw; margin-top:7px;" name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
				</div>
				
			</div>
	  </div>
  </nav>
<!-- Menu bar end-->


   <div class="row" style="margin-left:1%;margin-right:1%;">
       <div class="col-sm-3" style="height:25vw; background-color:brown;">
       <h2 class="hello hey" ><a href="" target="blank"><i class="fa fa-facebook"></i></a></br><a href="#">Vinay</a></h2>
        <h2 class="hello hey" ><a href="" target="blank"><i class="fa fa-facebook"></i></a></br><a href="#">Vinay</a></h2>
         <h2 class="hello hey" ><a href="" target="blank"><i class="fa fa-facebook"></i></a></br><a href="#">Vinay</a></h2>
       <h2 class="hello hey" ><a href="" target="blank"><i class="fa fa-facebook"></i></a></br><a href="#">Vinay</a></h2>
       </div>
	   
	   
	    <!-- Carousel -->
	   <div class="col-sm-6" style="height:25vw; background-color:green;">
         
		  <div  id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="logo1.jpg" alt="Farewell" style="width:100%;">
      </div>

      <div class="item">
        <img src="logo1.jpg" alt="Toppers" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="logo1.jpg" alt="Group picture" style="width:100%;">
      </div>
	
	<div class="item">
        <img src="logo1.jpg" alt="Boys" style="width:100%;">
      </div>
	
	<div class="item">
        <img src="logo1.jpg" alt="masti" style="width:100%;">
    </div>
	</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>  
       </div>
	   
	   <div class="col-sm-3" style="height:25vw; background-color:pink;">
             <marquee direction="up" height="100%" width="40%" hspace="10%" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" style="font-size:20px;">
              <a href="#" >Link 1</a></br>
			  <a href="#" > Link 2</a></br>
			  <a href="#" > Link 3</a></br>
			  <a href="#" > Link 4</a></br>
			  <a href="#" > Link 5</a>
             </marquee>
       </div>
	   
   </div>
 
    <div style="background-color:skyblue; font-size:30px; border-radius:5px; margin:1%" >
	     <marquee direction="left" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">
		  <a href="www.nitrr.ac.in" target="blank"> <span class="blink"> Admission open</span></a>
		 </marquee>
	</div>
 </br>
 
 
 <!--Footer start here-->
  <div id="googleMap" style="width:100%;height:400px;">
  </div>

  <script>
   function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
   };
   var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
   </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
 <!--Footer end-->
 
 </br>
 
 <div class="row" style="background-color:skyblue;  border-radius:5px; margin:1%; height:40%;">
      <div class="col-md-3" style="font-size:20px;" >
	   
        <p style="font-size:30px;" ><b>Contact Information</b></p>
		<address><a><i class="fa fa-address-card"></i><b>Address:</b> Geedam road, Behind Krishna petrol pump, near labour court, Jagdalpur 494001 (Chhattisgarh)</a></br></address>
		<a><i class="fa fa-envelope"></i><b> Email:</b>eccelerateeducations@gmail.com</a></br>
		<a><i class="glyphicon glyphicon-earphone"></i><b> Phone:</b>+91@@@@@@@184</br>+91@@@@@@@385</a>
	  </div>
	 <div class=" col-md-3" style="font-size:50px">
        <h4 style="font-size:30px;" ><b>Follow us:</b></h4>
		<a href="www.facebook.com/accelerateeducations" target="blank"><i class="fa fa-facebook"></i></a>
		<a href="www.instagram.com/accelerateeducations" target="blank"><i class="fa fa-instagram"></i></a>
		<a href="www.twitter.com/accelerateeducations" target="blank"><i class="fa fa-twitter"></i></a>
		<a href="www.linkedin.com/accelerateeducations" target="blank"><i class="fa fa-linkedin"></i></a>
	 </div>
	  
	 <div class="col-md-6">
	 
	    
	 </div>
 
 </div>
 
 </br>
 </br>
 <h3>Contact Information</h3>
 
</body>
</html>


