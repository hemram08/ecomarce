<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>clothing-brand</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	

<link rel="stylesheet" href="owl_corusole_css/owl.carousel.css">
<link rel="stylesheet" href="owl_corusole_css/owl.theme.green.css">
<!-- jQuery library -->

	<style>
	
	/*nav ber style css....start*/
		.navber{background: #FFFFFF;
grid-column: 1/-1;
display: flex;
flex-direction: column;

grid-row-gap: 30px;
box-shadow: 0px 10px 19px -2px rgba(0,0,0,0.21);
-webkit-box-shadow: 0px 10px 19px -2px rgba(0,0,0,0.26);
-moz-box-shadow: 0px 10px 19px -2px rgba(0,0,0,0.50);


		}

		.head1{margin-top: ;
display: flex;
flex-direction: row;

		}
		.head2{background: #EBEDEF;
			margin-top: ;
			min-height: ;
			
			

		}
		.img-fluid{height: 80px;width: 130px;}
		.title_of_web{margin: 10px auto;}
		.ul_links ul{
			display: flex;
			margin-top: 25px;
		}
		.ul_links ul li{
			list-style: none;
			width: 80px;text-align: center;margin: 5px;
		}
		.ul_links ul li a{
			text-decoration: none;margin: 5px;padding: 8px 15px 8px 15px;background: #F0F0F4;color: #0E5298;border-radius: 20px;font-family: arial;font-size: 1rem;
		}
		.ul_links ul li:hover a{
			background: linear-gradient(45deg, red, blue);color: white;
		}
		.cloth_links ul{
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			margin-top: 8px;

		}
		.cloth_links ul li{
			list-style: none;margin-top: 5px;background: #C7CBD1;color: #0E5298;
			text-align: center;border-radius: 20px;padding: 5px 0 5px 0;
		}
		.owl-theme .owl-nav {
    margin-top: -35px;
    position: absolute;
    width: 95%;
}
button.owl-next {
   position: absolute;
   top:-1px;
   right: -12px;
  
    outline: none;
    width: 15px;

}
button.owl-prev {
    float: left;
     margin-left: -45px;
     outline: none;
     width: 15px;

}
.owl-theme .owl-dots {
	position: absolute;
	bottom: 1%;
	left: 50%;
}

/*nav ber style css....end*/


		.slider{background: ;
			grid-column: 1/4;

			


		}
		.slider.sub {
    margin-top: 45px;
}
.slide-image img{
	
	object-position: center;
}
		.contants{background: ;
			grid-row: 3/4;
			grid-column: 3/4;


		}
		.contants1{background: ;
grid-column: 1/3;
		}
		.contants1 p{
				margin: 10px;padding: 5px;font-family:justify;font-style: justify;
				font-size: 1.1em;
			}
		.contants2{background: ;
grid-column: 1/span 3;
		}
		.contants3{
grid-column: 1/span 3;
		}
		.contants4{
			background: yellowgreen;
		}
		.contants5{
			background: tomato;
			

		}
		.footer{background: gray;
grid-column: 1/span 3;
		}
		.container-fluid{
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-template-rows: 100px repeat(4, minmax(200px,min-content))100px;
			grid-gap: 20px;
			
			
		}
		.sub{

box-shadow: 0px 10px 19px -2px rgba(0,0,0,0.21);
-webkit-box-shadow: 0px 10px 19px -2px rgba(0,0,0,0.26);
-moz-box-shadow: 0px 10px 19px -2px rgba(0,0,0,0.50);
			
		}
		.upcoming1{font-family: arial;font-size: 1.2em;}
		.upcoming2{font-family: arial;color: #019BF5;font-size: 1.2em;padding: 5px;margin: 10px}
		.upcoming3{font-family: arial;font-size: .7em;}
		img.trainer{
    border-radius: 50%;
    width: 100px!important;
    height: 100px;
   padding: 10px;
   object-fit: cover;
   object-position: center;
   margin: 1px auto;

    
		}
		@media only screen and (max-width: 600px) {
			
		/*.slider{background: red;
			grid-column: 1/4;*/

		}
		@media only screen and (max-width: 890px) {
			

		}
			.contants{
				grid-row-start: 3;
				grid-row-end: 4;
				

				
			}/*contents css*/
			.contants1{
				grid-column: 1/3;

			}
			.prsident_message{
				width: 80%;
				margin: 5px auto;
			}
			.prsident_message h6{color: #019BF7;font-family: arial;}
			.prsident_message p{
				font-size: .9em;font-family: sans-serif;
			}
			.trainer_image{

			}
			.traine{
				
				margin: 10px;
				width: 200px !important;
   				 text-align: center;

				box-shadow: 0px 10px 19px -2px rgba(0,0,0,0.21);
-webkit-box-shadow: 0px 10px 19px -2px rgba(0,0,0,0.26);
-moz-box-shadow: 0px 10px 19px -2px rgba(0,0,0,0.50);

			}
			table{
				margin: 0 auto;
			}
			table tr td{
				font-size: .7em;font-family: arial;
			}
		
		

	</style>
</head>
<body>
<div class="container-fluid">
	<nav class="navber sub">
		<div class="head1">
			<div class="logo"><img src="img/ilatsa_logo.gif" class="img-fluid"
			 width=130px height=80px/></div>
		<div class="title_of_web"><h4>Clothin Brand</h4></div>
		<div class="ul_links">
			<ul class="navlink">
				<li><a href="#">home</a></li>
				<li><a href="#">about</a></li>
				<li><a href="#">service</a></li>
				<li><a href="#">contact</a></li>
				<li><a href="#">login</a></li>
			</ul>
		</div>
		</div>
		<div class="head2">
<div class="cloth_links">
			<ul id="" class="menubar owl-carousel owl-theme">
				<li>HOME</li>
				<li><a href="up_coming.php">UPCOMING TRAININGS</a></li>
				<li>FAQS ON CEUS</li>
				<li>EMPLOYMENT</li>
				<li>REFERRALS</li>
				<li>RESEARCH CENTER</li>
				<li>CONTACT US!</li>
			</ul>
		</div>
		</div>
		
	</nav>

		<div class="owl-carousel owl-theme slider sub ">

<div class="slide-image active">
     <img src="img/img1.jpg" class="d-block w-100" width="" height="350px">
    </div>
    <div class="slide-image">
      <img src="img/2022.jpg" class="d-block w-100" width="" height="350px">
    </div>
    <div class="slide-image">
     <img src="img/img1.jpg" class="d-block w-100" width="" height="350px">
    </div>
	</div>

		<div class="contants sub">
				<div class="">
					<h6 upcoming1>You can see information on training on our training page, here: Upcoming Trainings</h6>
					<h3 class="upcoming2">CURRENT REQUEST FOR INPUT!</h3>
			<img src="img/study.jpg" class="d-block w-100 my-2" width="" height="">
			<p class="upcoming3">ILATSA is currently seeking input as to relevant trainings and other information about treatment that you would like to share!  If you have a story about how you implemented something that you learned from the webinars, or an interesting resource that you would like to review, we would love to hear about it.  Please submit to: <a href="#">admin@ilatsa.org</a></p>
		</div>
		<div class="" style="margin:40px 0 0 0">
			<h6>Follow us on LinkedIn by clicking the image below.</h6>
 <img src="img/linke.png" class="d-block w-100" width="" height="">
  </div>
		</div>
		<div class="contants1 sub">
			<p>The Illinois Association for the Treatment of Sexual Abusers is the Illinois Chapter of the Association for the Treatment of Sexual Abusers, which is an international, multi-disciplinary organization dedicated to preventing sexual abuse. Through research, education, and shared learning ATSA promotes evidence based practice, public policy and community strategies that lead to the effective assessment, treatment and management of individuals who have sexually abused or are at risk to abuse.</p>

<p>ATSA is an association of individuals from around the world committed to achieving a high level of professional excellence. ATSA promotes the philosophy that empirically based assessment, practice, management, and policy strategies will: enhance community safety, reduce sexual recidivism, protect victims and vulnerable populations, transform the lives of those caught in the web of sexual violence, and illuminate paths to prevent sexual abuse.</p>

<p>With many of our trainings switching to virtual platforms, several out-of-state providers who have been asking about our CEUs and their licensure. We have complied answers to many questions and have listed them on our new FAQs about CEUs page. Hopefully we were able to answer your questions on the page.

Follow us on LinkedIn by clicking the image below.</p>
</div>

		<div class="contants2 sub">
			<div class="prsident_message">
				<h6>PRESIDENT’S MESSAGE</h6>
				<span>Dear ATSA colleagues and friends,</span>
				<p>We did it!  Thank you so much for all of you who participated in the 2021 Conference!  The board was incredibly excited for our first all-virtual conference that went flawlessly.  David Prescott and Paul Carrola provided much needed education and encouragement as we continue through the end of this pandemic. </p>
				<p>As we continue in 2021, ILATSA is making plans to provide access to the same great trainings that we were able to provide in 2020.  With the assistance of the Illinois Sex Offender Management Board (SOMB), ILATSA is planning to offer additional STATIC/STABLE trainings, and we are looking forward to offering a course on supervising new sex offender treatment providers.  We look forward to these trainings this year.  </p>
				<p>As always, your comments and suggestions are welcomed. Feel free to contact the ILATSA board at admin@ilatsa.org or me at president@ilatsa.org.
<br/>
<span>Thank you for your work, </span>

<h6>Michelle<h6>
</p>
			</div>
			
		</div>

		<div class="contants3 sub">
			<h3>About trainer</h3>
<div class="owl-carousel owl-theme trainer_image">
	<div class="traine">
		<img class="trainer" src="img/training1.jpg" alt="slide">
<table>
	<tr>
		<td>Name :</td>
		<td>Nirmal hemram</td>
	</tr>
	<tr>
		<td>Specialist :</td>
		<td>webdeveloper</td>
	</tr>
	<tr>
		<td>Since :</td>
		<td>2014</td>
	</tr>

	</table>
	</div>
	<div class="traine">
		<img class="trainer" src="img/trainer2.jpg" alt="slide">
		<table>
	<tr>
		<td>Name :</td>
		<td>Nirmal hemram</td>
	</tr>
	<tr>
		<td>Specialist :</td>
		<td>webdeveloper</td>
	</tr>
	<tr>
		<td>Since :</td>
		<td>2014</td>
	</tr>

	</table>

	</div>
	<div class="traine"><img class="trainer" src="img/trainer3.jpg" alt="slide">
		<table>
	<tr>
		<td>Name :</td>
		<td>Nirmal hemram</td>
	</tr>
	<tr>
		<td>Specialist :</td>
		<td>webdeveloper</td>
	</tr>
	<tr>
		<td>Since :</td>
		<td>2014</td>
	</tr>

	</table>
	</div>
	<div class="traine"><img class="trainer" src="img/trainer4.jpg" alt="slide">
		<table>
	<tr>
		<td>Name :</td>
		<td>Nirmal hemram</td>
	</tr>
	<tr>
		<td>Specialist :</td>
		<td>webdeveloper</td>
	</tr>
	<tr>
		<td>Since :</td>
		<td>2014</td>
	</tr>

	</table>
	</div>
	<div class="traine"><img class="trainer" src="img/training1.jpg" alt="slide">
		<table>
	<tr>
		<td>Name :</td>
		<td>Nirmal hemram</td>
	</tr>
	<tr>
		<td>Specialist :</td>
		<td>webdeveloper</td>
	</tr>
	<tr>
		<td>Since :</td>
		<td>2014</td>
	</tr>

	</table>
	</div>
	<div class="traine"><img class="trainer" src="img/trainer3.jpg" alt="slide">
		<table>
	<tr>
		<td>Name :</td>
		<td>Nirmal hemram</td>
	</tr>
	<tr>
		<td>Specialist :</td>
		<td>webdeveloper</td>
	</tr>
	<tr>
		<td>Since :</td>
		<td>2014</td>
	</tr>

	</table>
	</div>
	<div class="traine"><img class="trainer" src="img/trainer4.jpg" alt="slide">
<table>
	<tr>
		<td>Name :</td>
		<td>Nirmal hemram</td>
	</tr>
	<tr>
		<td>Specialist :</td>
		<td>webdeveloper</td>
	</tr>
	<tr>
		<td>Since :</td>
		<td>2014</td>
	</tr>

	</table>
	</div>
	<div class="traine"><img class="trainer" src="img/training1.jpg" alt="slide">
<table>
	<tr>
		<td>Name :</td>
		<td>Nirmal hemram</td>
	</tr>
	<tr>
		<td>Specialist :</td>
		<td>webdeveloper</td>
	</tr>
	<tr>
		<td>Since :</td>
		<td>2014</td>
	</tr>

	</table>
	</div>
	
	
	
	
	
	
	
	
</div>
		</div>
		
		<div class="footer sub">
			© Copyright 2021 • The Illinois Association for the Treatment of Sexual Abusers

		</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="owl_corusole_js/owl.carousel.min.js"></script>

<script src="http://malsup.github.com/jquery.cycle2.js"></script>
<script>
	$(document).ready(function(){
$('.menubar').owlCarousel({
    loop:true,
    
   dots:false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
});
$('.slider').owlCarousel({
    loop:true,
   items:1, 
   dots:true,
    nav:true,
    autoplay:true,
    autoplaySpeed:5000
    
});
$('.trainer_image').owlCarousel({
    loop:true,
   dots:false,
    nav:false,
    autoplay:true,
    autoplaySpeed:2000,
    
    	responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }

    	
    
});

});
	
</script>
</body>
</html>