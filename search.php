<?php
    if(isset($_COOKIE["login"])){
		include_once("db.php");
		$email=$_COOKIE["login"];
	    $rs=mysqli_query($conn,"select * from details where email='$email'");
        if($r=mysqli_fetch_array($rs)){
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Search :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php
    include("navbar.php");
?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="profile.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Regular Search</li>
     </ul>
   </div>
   <!--<script type="text/javascript">
    $(function () {
     $('#btnRadio').click(function () {
          var checkedradio = $('[name="gr"]:radio:checked').val();
          $("#sel").html("Selected Value: " + checkedradio);
      });
    });
   </script>-->
<div class="col-md-9 search_left">
  <form method="post" action="search_record.php">	
   <div class="form_but1">
	<label class="col-sm-2 control-lable1" for="sex">Gender : </label>
	<div class="col-sm-5 form_radios">
		<input type="radio" class="radio_1" name="gender" value="Male" /> Male &nbsp;&nbsp;
		<input type="radio" class="radio_1" name="gender" value="Female" /> Female
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
  
  <div class="form_but1">
    <label class="col-sm-2 control-lable1" for="sex">Caste : </label>
    <div class="col-sm-5 form_radios">
      <div class="select-block1">
        			<select name="caste"class="form-control" required>
		                                
			                             <option value="Sharma">Sharma</option>
			                             <option value="Rawal">Rawal</option>
			                             <option value="Bhati">Bhati</option>
			                             <option value="Sodha">Sodha</option>
			                             <option value="Patel">Patel</option>
			                             <option value="Mali">Mali</option>		
			                             <option value="Panchal">Panchal</option>
			                             <option value="Gupta">Gupta</option>	
			                             <option value="Ambani">Ambani</option>
			                             <option value="Adani">Adani</option>	
			                             <option value="Joshi">Joshi</option>
			                             <option value="Vyas">Vyas</option>										 
			                        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-2 control-lable1" for="sex">Religion : </label>
    <div class="col-sm-5 form_radios">
      <div class="select-block1">
       <select name="religion"class="form-control" required>
		                                
			                             <option value="Hindu">Hindu</option>
			                             <option value="Jain">Jain</option>
			                             <option value="Shikh">Shikh</option>
			                             <option value="Muslim">Muslim</option>										 
	   </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>


  <div class="form_but1">
	<div  class="col-sm-12"><input type="submit" value="submit" class="btn btn-primary"></div>
	<div class="clearfix"> </div>
  </div>
 </form>
 <div class="paid_people">
   <h1>Paid People</h1>
   <div class="row_1">
	   <div class="col-sm-6 paid_people-left">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a5.jpg" class="img-responsive" alt=""/>
		   </li>
		   <li class="profile_item-desc">
		   	  <h4>2458741</h4>
		   	  <p>29 Yrs, 5Ft 5in Christian</p>
		   	  <h5>View Full Profile</h5>
		   </li>
		   <div class="clearfix"> </div>
		  </a>
	     </ul>
	   </div>
	   <div class="col-sm-6">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a6.jpg" class="img-responsive" alt=""/>
		   </li>
		   <li class="profile_item-desc">
		   	  <h4>2458741</h4>
		   	  <p>29 Yrs, 5Ft 5in Christian</p>
		   	  <h5>View Full Profile</h5>
		   </li>
		   <div class="clearfix"> </div>
		  </a>
	     </ul>
	   </div>
	   <div class="clearfix"> </div>
   </div>
   <div class="row_1">
	   <div class="col-sm-6 paid_people-left">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a7.jpg" class="img-responsive" alt=""/>
		   </li>
		   <li class="profile_item-desc">
		   	  <h4>2458741</h4>
		   	  <p>29 Yrs, 5Ft 5in Christian</p>
		   	  <h5>View Full Profile</h5>
		   </li>
		   <div class="clearfix"> </div>
		  </a>
	     </ul>
	   </div>
	   <div class="col-sm-6">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a8.jpg" class="img-responsive" alt=""/>
		   </li>
		   <li class="profile_item-desc">
		   	  <h4>2458741</h4>
		   	  <p>29 Yrs, 5Ft 5in Christian</p>
		   	  <h5>View Full Profile</h5>
		   </li>
		   <div class="clearfix"> </div>
		  </a>
	     </ul>
	   </div>
	   <div class="clearfix"> </div>
   </div>
   <div class="row_2">
	   <div class="col-sm-6 paid_people-left">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a5.jpg" class="img-responsive" alt=""/>
		   </li>
		   <li class="profile_item-desc">
		   	  <h4>2458741</h4>
		   	  <p>29 Yrs, 5Ft 5in Christian</p>
		   	  <h5>View Full Profile</h5>
		   </li>
		   <div class="clearfix"> </div>
		  </a>
	     </ul>
	   </div>
	   <div class="col-sm-6">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a4.jpg" class="img-responsive" alt=""/>
		   </li>
		   <li class="profile_item-desc">
		   	  <h4>2458741</h4>
		   	  <p>29 Yrs, 5Ft 5in Christian</p>
		   	  <h5>View Full Profile</h5>
		   </li>
		   <div class="clearfix"> </div>
		  </a>
	     </ul>
	   </div>
	   <div class="clearfix"> </div>
    </div>
  </div>
</div>
<div class="col-md-3 match_right">
	<div class="profile_search1">
	   <form>
		  <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
		  <input type="submit" value="Go">
	   </form>
   </div>
   <section class="slider">
	 <h3>Happy Marriage</h3>
	 <div class="flexslider">
		<ul class="slides">
		  <li>
			<img src="images/s2.jpg" alt=""/>
			<h4>Lorem & Ipsum</h4>
			<p>It is a long established fact that a reader will be distracted by the readable</p>
		  </li>
		  <li>
			<img src="images/s1.jpg" alt=""/>
			<h4>Lorem & Ipsum</h4>
			<p>It is a long established fact that a reader will be distracted by the readable</p>
		  </li>
		  <li>
			<img src="images/s3.jpg" alt=""/>
			<h4>Lorem & Ipsum</h4>
			<p>It is a long established fact that a reader will be distracted by the readable</p>
		  </li>
	    </ul>
	  </div>
   </section>
   <div class="view_profile view_profile2">
        	<h3>View Similar Profiles</h3>
        	<ul class="profile_item">
        	  <a href="view_profile.html">
        	   <li class="profile_item-img">
        	   	  <img src="images/p5.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="view_profile.html">
        	   <li class="profile_item-img">
        	   	  <img src="images/p6.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="view_profile.html">
        	   <li class="profile_item-img">
        	   	  <img src="images/p7.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="view_profile.html">
        	   <li class="profile_item-img">
        	   	  <img src="images/p8.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
       </div>
     </div>
     <div class="clearfix"> </div>
  </div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.html">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
    	</div>
</div>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</body>
</html>	
<?php
	}
	else{
		header("location:logout.php");
	}
	}
	else{
		header("location:index.php");
	}	
?>