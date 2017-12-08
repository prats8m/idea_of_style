<!DOCTYPE HTML>

<html>
	<head>
		<title>Elements - Idea Of Style</title>

		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" type="text/css" href="http://ideaofstyle.tk/idea_of_style/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://ideaofstyle.tk/idea_of_style/assets/ionicons-2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="http://ideaofstyle.tk/idea_of_style/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://ideaofstyle.tk/idea_of_style/assets/css/owl.carousel.css">

		<link rel="stylesheet" type="text/css" href="http://ideaofstyle.tk/idea_of_style/assets/css/main.css">
        <script>
function createList(){
    for(var idx = 1;idx<=document.getElementById("noi").value;idx++){
        document.getElementById("demo").innerHTML += '<div class="col-md-4 " ><input type="text" class="form-control" name="item'+idx+'" placeholder="Item"/></div><div class="col-md-4" ><input type="text" class="form-control" name="quantity'+idx+'"  placeholder="Quantity"/></div><div class="col-md-4" ><input type="text" class="form-control" name="price'+idx+'" placeholder="Price"/></div><br>';
    }
}
</script>
	</head>

	<body>
		<section class="head">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<header class="header">
							<div class="inner">
								<a href="#menu" class="nav-bars">
									<img src="http://ideaofstyle.tk/idea_of_style/assets/images/nav-icon.png" class="img-responsive" alt="Collapsable Navbar">
								</a>
							<a href="http://ideaofstyle.tk/idea_of_style/index.php/home" class="logo">
								Idea <span><img src="http://ideaofstyle.tk/idea_of_style/assets/images/logo.png"></span>F Style
								</a>
							</div>
						</header>

						<!-- Menu -->

						<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="http://ideaofstyle.tk/idea_of_style/index.php/home">Home</a></li>
							<li><a href="http://ideaofstyle.tk/idea_of_style/index.php/home/bill">Bill</a></li>
							<li><a href="http://ideaofstyle.tk/idea_of_style/index.php/home/order">Order</a></li>
							
						</ul>
					</nav>
					</div>
				</div>
			</div>
		</section>

<br>
<br>
		<section class="contact-form">
			<div class="container">
			<!-- Form -->
				<div class="row">
					<div class="col-md-12">
						<h1>Create Bill</h1>
						<form class="form-name-email" action="http://ideaofstyle.tk/idea_of_style/index.php/home/add_bill" method="post" >
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Name"/>
									</div>
								</div>
								<div class="col-md-6">
                                <div class="form-group">
										<input type="text" class="form-control" name="mobile"  placeholder="Mobile"/>
									</div>
                                </div>
							</div>
							<div class="row">
							<div class="col-md-12">
                                <div class="form-group">
										<input type="text" class="form-control" name="address"  placeholder="Address"/>
									</div>
                                </div>
							</div>
							
                            <div class="row">
							<div class="col-md-6">
                                <div class="form-group">
										<input type="text" class="form-control" name="noi" id="noi" placeholder="Number Of Items"/>
									</div>
                                </div>
                                <div class="col-md-6 ">
                               <a onclick="createList()" type="button" class="btn btn-tobais btn-small hover-off">OK</a>
                                </div>
							</div>
                            <div class="row">
                            <div id="demo">
                            </div>
                            </div>
                            <br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="due"  placeholder="Due Bill"/>
									</div>
								</div>
								<div class="col-md-6">
                                <div class="form-group">
										<input type="date" style="padding:5px;"class="form-control" name="dd"  placeholder="Name"/>
									</div>
                                </div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p>
									  <button href="#" type="submit" class="btn btn-tobais btn-reset">Submit</button>
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>


		<section class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<ul class="footer-bottom">
							<li><a href="#">Legal</a></li>
							<li><a href="#">Cookies</a></li>
							<li>
								<a href="#">
									<img src="http://ideaofstyle.tk/idea_of_style/assets/images/add.png">AdCholces
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<p class="copyright-text">Idea Of Style &copy; 2016 
							<a href="https://Prateek Singh.com/" target="_blank">Prateek Singh</a>
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Scripts -->
		<script src="http://ideaofstyle.tk/idea_of_style/assets/js/jquery-3.1.0.min.js"></script>
		<script src="http://ideaofstyle.tk/idea_of_style/assets/js/bootstrap.min.js"></script>
		<script src="http://ideaofstyle.tk/idea_of_style/assets/js/jquery.magnific-popup.min.js"></script>
		<script src="http://ideaofstyle.tk/idea_of_style/assets/js/owl.carousel.min.js"></script>

		<script src="http://ideaofstyle.tk/idea_of_style/assets/js/script.js"></script>

	</body>
</html>