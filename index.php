<!------ E-Courier Front-End Index-Main Part -------> 
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>Fast-Courier</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    
	    <link rel="stylesheet" type="text/css" href="css/all.min.css">
	    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">

	    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    </head>

<body>
    <!----------------- Header ------------------->
     <nav>
		<div class="logo">F-Courier</div>
		<label for="btn" class="icon">
			<span class="fa fa-bars"></span>
		</label>
		<input type="checkbox" id="btn">
		<ul>
			<li>
				<label for="btn1" class="show">Service +</label>
                <a href="#">Service<i class="fas fa-angle-down"></i></a>
				<input type="checkbox" id="btn1">
				<ul>
					<li><a href="home_delivery.php">Home Delivery</a></li>
					<li><a href="pick_drop.php">Pick and Drop</a></li>
					<li><a href="wearhousing.php">Wearhousing</a></li>
					<li><a href="packaging.php">Packaging</a></li>
				</ul>
			</li>
			<li><a href="service_area.php">Service Area</a></li>
			<li><a href="pricing.php">Pricing</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
			<li class="item-btn-register"><a href="register.php">Register</a></li>
			<li class="item-btn-login"><a href="login.php">Login</a></li>
		</ul>

		 
	</nav>
	<!---------------- End Header ---------------->

    <!------------------ Slider ------------------>
    <section class="cbox-1">
        <div class="slider">
	        <div class="row">
	    	    <div class="col">
	    		    <h1>Parcel Delivered<br>On Time With No Hassle</h1>
	    		    <p>Easily track your courier, Get courier within hours, Efficient and safe devlivery.</p>

	    		    <button id="btn3"><a href="#">Became a merchant</a></button>
	    	    </div>
	        </div>

	        <div class="row-2">
	    	    <div class="col-2"></div>
	        </div>
	    </div>


	    <div class="custom-shape-divider-bottom-1615186634">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M649.97 0L599.91 54.12 550.03 0 0 0 0 120 1200 120 1200 0 649.97 0z" class="shape-fill"></path>
            </svg>
        </div>

	</section>
	<!--------------- End Slider ---------------->

	<!----------- Tracking Search-box ----------->

   
    <!--------- End Tracking Search-box ------ -->

    <!------------- Information-box ------------->
	<section class="cbox-2">
		  <div class="div1"><i class="fa fa-car" id="icon1"></i>Daily Pick Up, No Limitations<i class="fas fa-angle-right" id="icon2"></i></div>
		  <div class="div2"><i class='fa fa-bolt'></i>Faster Payment Service<i class="fas fa-angle-right" id="icon2"></i></div>
		  <div class="div3"><i class='fa fa-clock'></i>Real-Time Tracking<i class="fas fa-angle-right" id="icon2"></i></div>
		  <div class="div4"><i class="fa fa-credit-card"></i>Cash On Delivery<i class="fas fa-angle-right" id="icon2"></i></div>
		  <div class="div5"><i class='fa fa-cloud'></i>Online Management<i class="fas fa-angle-right" id="icon2"></i></div>
		  <div class="div6"><i class='fa fa-user-circle'></i></i>Advanced Customer Service<i class="fas fa-angle-right" id="icon2"></i></div>
	</section>
    <!----------- End-Information-box ---------->
   

    <!-- ----------- Our Services -------------->
	<section class="cbox-3">
		<h3>Our Services</h3>
		    <div class="inner-cbox3">
		    	<div class="diamond" id="diamond"><a href="#"><i class="fas fa-truck"></i></a></div>
		    	<div class="diamond" id="diamond"><a href="#"><i class="fab fa-accessible-icon"></i></a></div>
		    	<div class="diamond" id="diamond"><a href="#"><i class="fas fa-warehouse"></i></a></div>
		    	<div class="diamond" id="diamond"><a href="#"><i class="fas fa-box"></i></a></div>

		    </div>
            
            <div class="inner2-cbox3">
				<div class="diamon-txt"><span id="item1">E-Commerce Delivery</span></div>
				<div class="diamon-txt"><span id="item2">Pick and Drop</span></div>
				<div class="diamon-txt"><span id="item3">Warehousing</span></div>
				<div class="diamon-txt"><span id="item4">Packaging</span></div>
			</div>
	    
	</section>
	<!----------- End Our Services ------------>


    <!------------- Service Area -------------->
	<section class="cbox-4">
		<h3>Service Area</h2>
		<h4>View Full Coverage</h4>
	</section>
	<!----------- End Service Area ------------>

    <!----------- Calculate Charge ------------>
	<section class="cbox-5">
		<h3>Calculate Charge</h3>
		 <form method="" action="">
		 	<div class="formbox5">
		 		<label for="fromid">From</label>
		 		 <select id="cal-charge" name="cal-charge">
		 		 	<option selected="selected" value="">Choose Your City</option>
		 		 	<option value="1">Dhaka City</option>
		 		 	<option value="2">Gazipur</option>
		 		 	<option value="3">Rangpur</option>
		 		 	<option value="4">Savar</option>
		 		 </select>
		 	</div>

		 	<div class="formbox5">
		 		<label for="fromid">Destination</label>
		 		 <select id="cal-charge" name="cal-charge">
		 		 	<option selected="selected" value="">Choose Your City</option>
		 		 	<option value="1">Dhaka City</option>
		 		 	<option value="2">Gazipur</option>
		 		 	<option value="3">Rangpur</option>
		 		 	<option value="4">Savar</option>
		 		 </select>
		 	</div>

		 	<div class="formbox5">
		 		<label for="fromid">Service</label>
		 		 <select id="cal-charge" name="cal-charge">
		 		 	<option value="1">Regular</option>
		 		 	<option value="2">Same Day</option>
		 		  </select>
		 	</div>

		 	<div class="formbox5-in">
		 		<label for="fromid">Weight (KG)</label>
		 		<input type="text" name="weight" placeholder="0.5 kg">
		 	</div>
		 	
		 </form>
         
         <div class="btncls-cbox5">
            <button id="btn-cbox5">60 TK</button>
            <h4>* 1% Cash Handling & Risk Management Charge will be added.</h4>
            <h4>* Price may vary due to parcel size.</h4>
            <h4>* All charges are VAT & Tax excluded.</h4>
            <h4>* Unavoidable circumstances may change in time of delivery.</h4>
         
         </div> 

	</section>
	<!----------- End Calculate Charge ------------>

	<!--------- Start Top Sr ------------>
	<!-- <div class="tap-top">
        <div>
        	<i class="fa fa-angle-double-up">Sr</i>
        </div>
    </div> -->
	<!---------- End Top Sr ------------>

	 
    <!----------------- Footer -------------------->
	<section class="footer">

            <div class="footer-sec1">
            	<div>
            		<h3>SERVICES</h3>
            		<h4>Home Delivery</h4>
            		<h4>Warehousing</h4>
            		<h4>Pick and Drop</h4>
            	</div>

            	<div>
            		<h3>EARN</h3>
            		<h4>Become Marchent</h4>
            		<h4>Become Rider</h4>
            		<h4>Become Delivery Man</h4>
            	</div>

            	<div>
            		<h3>COMPANY</h3>
            		<h4>About Us</h4>
            		<h4>Contact Us</h4>
            		<h4>Our Goal</h4>
            	</div>

            	<div>
            		<h3>NEWSLETTER</h3>
            		<h4>Don’t miss any updates of our Offer</h4>
            		<input type="email" name="email" placeholder="E-mail: Address" required>
            		 
            	</div>
  
            </div>

            <div class="hr-cbox">
            	<hr width="100%">
            </div>

             <div class="footer-sec2">
             	<div class="contact-us">
            		<h3>Contact Us:</h3>
            		<p>Mirpur, Dhaka-1216, Bangladesh<br>E-mail: srsaddamkhan@gmail.com<br>Hotline: 01842-824782/01744-882708</p>
            	</div>

            	<div id="footer-copyright">
            		<h4>Design Developed & Maintained by (S.R)</h4>
            	</div>

            	<div id="footer-icon">
            		<a href="https://www.facebook.com/srsaddamkhanbd"><i class="fab fa-facebook-square"></i></a>
            		<a href="https://www.instagram.com/srsaddamkhanbd/"><i class="fab fa-instagram"></i></a>
            		<a href="https://twitter.com/srsaddamkhan"><i class="fab fa-twitter-square"></i></a>
            	</div>
             </div>
  
            <div class="custom-shape-divider-top-1615012086">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                   <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
                </svg>
            </div>

	</section>
	<!----------------- End Footer --------------->
   
   </body>
</html>