<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/education/app.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	 <script src="js/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">

    <div id="sign-in">
		<div class="login">
			<div class="title">
				<p>Login</p>
				<div class="close">
					<button type="button" class="close" data-dismiss="modal">×</button>
				</div>
			</div>

			<hr>
		</div>
		<div class="sign-in">
			<p>Sign in to start your session</p>
		</div>
		<div class="form">
			<div class="username">
				<input type="text" placeholder="Username ">
			</div>
			<div class="password">
				<input type="text" placeholder="Password ">
			</div>
		</div>
		<div class="checkbox">
			<input type="checkbox" value="Remember Me">
			<p>Remember Me</p>
		</div>
		<div class="button">
			<button> SIGN IN</button>
		</div>
	</div>
  </div> 
</div>
 
	<div id="header">
		<div class="container">
				<div class="logo">
					<div class="men"><p>MEN</p></div>
					<p>TOR</p>
				</div>
			<div class="main-nav">
					<p onclick="goToDiv('features')"><a data-toggle="tooltip" title="Goto Features!">Features</a></p>
					<p onclick="goToDiv('organisations')"><a data-toggle="tooltip" title="Goto Organisations!">Organisations</a ></p>
					<p onclick="goToDiv('courses')"><a data-toggle="tooltip" title="Goto Courses!">Courses</a></p>
					<p onclick="goToDiv('pricing')"><a data-toggle="tooltip" title="Goto Pricing!">Pricing</a></p>
					<p id="myBtn"><a data-toggle="tooltip" title="Goto sign-in!">Sign in</a></p>
			</div>

			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" >
				PAGE	
				</button>
				<span class="caret-up"></span></button>
			    <ul class="dropdown-menu">
			      <li><a href="#">HTML</a></li>
			      <li><a href="#">CSS</a></li>
			      <li><a href="#">JavaScript</a></li>
			    </ul>
			</div>
		</div>	
	</div>
	<!-- =========slide======= -->
	<div id="slider">
			<div class="title">
				<h3>TRUST & QUALITY</h3>
			</div>
			<div class="content">
				<div class="describe">
					<p>
						Learning Today . . . Leading Tomorrow. <br><br>
					</p>
				</div>
				<div class="detail">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto <br>
						Laudantium enim repellat sapiente quos architecto <br><br>
					</p>
				</div>
				<div class="button">
					<button>GET A QUOTE</button>
				</div>

			</div>
	</div>

<div id="features">
		<div class="wrapper">
			<div class="title">
				<h3>Features</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br>
maiores, magni dolorum aliquam.</p>
				<hr>
			</div>
		
		<div class="content">
			<div class="content1">
				<div class="icon">
					<i class="fa fa-css3"></i>
				</div>
				<div class="detail">
					<h4>Latest Technologies</h4>
					<p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
				</div>
			</div>
			
			<div class="content2">
			<div class="icon">
				<i class="fa fa-drupal"></i>
			</div>
			<div class="detail">
				<h4>Toons Background</h4>
				<p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
			</div>
		</div>
			<div class="content3">
			<div class="icon">
				<i class="fa fa-trophy"></i>
			</div>
			<div class="detail">
				<h4>Award Winning Design</h4>
				<p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- ===========organisations==========
 -->
 <div id="organisations">

	<div class="detail">
		<div class="form">
			<div class="form1">
				<p>65%</p>
				<p>Say No</p>
				<i class="fa fa-male"></i>
			</div>
		</div>
		<div class="form">
			<div class="form2">
				<p>65%</p>
				<p>Say No</p>
				<i class="fa fa-male"></i>
			</div>
		</div>
		<div class="form">
			<div class="form3">
				<p>65%</p>
				<p>Say No</p>
				<i class="fa fa-male"></i>
			</div>
		</div>
	</div>

	<div class="post">
		<div class="title">
			<p>IS INCLUSIVE QUALITY EDUCATION AFFORDABLE? <br></p>
		</div>
		<div class="describe">
			<p>(Revised and Updated for 2016)	<br>	</p>
		</div>
		<div class="content">
			<p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum. <br></p>
		</div>
	</div>
</div>

<!-- ==========Subscribe =============
 -->

<div id="subscribe">
	<div class="title">
		<h3><a data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" > Subscribe Now </a></h3>
		<p>Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
	</div>
	 
	<div class="form">
		<input name="" placeholder="Enter Your Email Address" type="email">
		<button>Subscribe</button>
	</div>
</div>

<!-- =========Upcoming============= -->

<div id="workshop">
	<div class="detail">
			<h3>Upcoming Workshop</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,
maiores, magni dolorum aliquam.</p>
			<hr>
	</div>

	<div class="form">
		<div class="form1">
			<i class="fa fa-html5"></i>
			<p>Mentor HTML5 Workshop</p>
		</div>

		<div class="form2">
			<i class="fa fa-css3 "></i>
			<p>Mentor CSS3 Workshop</p>
		</div>
			
		<div class="form3">
			<i class="fa fa-joomla"></i>
			<p>Mentor Joomla Workshop</p>
		</div>

	</div>

</div>

<!-- ===========Member====== -->
<div id="member">
	<div class="detail">
			<h3>Meet Our Faculty Member</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,
maiores, magni dolorum aliquam.</p>
			<hr>
	</div>

	<div class="contact">	
			<div class="contact1">
					<div class="img">
					<img src="img/education/mentor.jpg" alt="">
				</div>
				<div class="name">
					<p>Bryan Johnson</p>
				</div>
				<div class="job">
					<p>Lead Software Engineer</p>
				</div>
				<div class="summary">
					<p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Donec Et Placerat Dui. In Posuere Metus Et Elit Placerat Tristique. Maecenas Eu Est In Sem Ullamcorper Tincidunt.</p>
				</div>
			</div>
			
			<div class="contact2">
					<div class="img">
					<img src="img/education/mentor.jpg" alt="">
				</div>
				<div class="name">
					<p>Bryan Johnson</p>
				</div>
				<div class="job">
					<p>Lead Software Engineer</p>
				</div>
				<div class="summary">
					<p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Donec Et Placerat Dui. In Posuere Metus Et Elit Placerat Tristique. Maecenas Eu Est In Sem Ullamcorper Tincidunt.</p>
				</div>
			</div>

			<div class="contact3">
					<div class="img">
					<img src="img/education/mentor.jpg" alt="">
				</div>
				<div class="name">
					<p>Bryan Johnson</p>
				</div>
				<div class="job">
					<p>Lead Software Engineer</p>
				</div>
				<div class="summary">
					<p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Donec Et Placerat Dui. In Posuere Metus Et Elit Placerat Tristique. Maecenas Eu Est In Sem Ullamcorper Tincidunt.</p>
				</div>
			</div>
	</div>
</div>

<!-- ============Customer ============ -->
<div id="customer">
	<div class="detail">
			<h3>See What Our Customer Are Saying?</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,
maiores, magni dolorum aliquam.</p>
			<hr>
	</div>

	<div class="content">
		<div class="content1">
			<h5>"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</h5>
			<p>Abraham Doe - Creative Dırector</p>
		</div>

		<div class="content2">
			<h5>"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</h5>
			<p>Abraham Doe - Creative Dırector</p>
		</div>
	</div>
</div>

<!-- ======Courses================ -->
<div id="courses">
	<div class="detail">
			<h3>Courses</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,
maiores, magni dolorum aliquam.</p>
			<hr>
	</div>

	<div class="image">
		<div class="group1">
			<img src="img/education/course01.jpg" alt="">
			<img src="img/education/course02.jpg" alt="">
			<img src="img/education/course03.jpg" alt="">
		</div>
		<div class="group2">
			<img src="img/education/course04.jpg" alt="">
			<img src="img/education/course05.jpg" alt="">
			<img src="img/education/course06.jpg" alt="">
		</div>
	</div>
</div>
<!-- ==========Pricing============ -->
<div id="pricing">
	<div class="detail">
			<h3>Our Pricing</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,
maiores, magni dolorum aliquam.</p>
			<hr>
	</div>
	<div class="price">
		<div class="price1">
			<div class="title">
			<p>Monthly Plan</p>
			</div>
			<hr>
			<div class="number">
				<p>200</p>
			</div>
			<button>PURCHACE</button>
		</div>

		<div class="price2">
			<div class="title">
			<p>Monthly Plan</p>
			</div>
			<hr>
			<div class="number">
				<p>200</p>
			</div>
			<button>PURCHACE</button>
		</div>
		
		<div class="price3">
			<div class="title">
			<p>Monthly Plan</p>
			</div>
			<hr>
			<div class="number">
				<p>200</p>
			</div>
			<button>PURCHACE</button>
		</div>
	</div>
</div>

<!-- ===========Contact ============ -->
<div id="contact">
	<div class="detail">
			<h3>Contact Us</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,
maiores, magni dolorum aliquam.</p>
			<hr>
	</div>

	<div class="form">
		<div class="input">
			<div class="name">
				<input type="text" placeholder="Your Name" >
			</div>
			<div class="email">
				<input  placeholder="Your Email" >
			</div>
			<div class="subject">
				<input type="text" name="name" id="name" placeholder="Subject" >
			</div>
			<div class="button">
			<button>SEND EMAIL</button>
			</div>
				
		</div>
			<div class="textarea">
				.<textarea class="form-control" name="message" rows="5"  placeholder="Message"></textarea>
			</div>
	</div>
</div>
<div id="footer">
	<div class="title">
		<h3>
			Start Your Free Trial Now!
		</h3>
	</div>
	<div class="form">
		<div class="name">
			<input  placeholder="Your Name" >
		</div>
		<div class="email">
			<input  placeholder="Your Email" >
		</div>
		<div class="button">
			<button>SUBMIT </button>
		</div>
	</div>

	<div class="icon">
		<div class="icon1">
			<i class="fa fa-twitter fa-fw"></i>
		</div>
		<div class="icon2">
			<i class="fa fa-facebook fa-fw"></i>
		</div>
		<div class="icon3">
			<i class="fa fa-google-plus fa-fw"></i>
		</div>
		<div class="icon4">
			<i class="fa fa-dribbble fa-fw"></i>
		</div>
		<div class="icon5">
			<i class="fa fa-linkedin fa-fw"></i>
		</div>
	</div>
	<hr>

	<div class="coppy-right">
		<div class="p1">
			<p>©2016 Mentor Theme. All rights reserved</p>
		</div>
		<div class="p2">
			<p>Designed by BootstrapMade.com</p>
		</div>
	</div>
</div>
	<script src="js/education/app.js"></script>

</body>
</html>