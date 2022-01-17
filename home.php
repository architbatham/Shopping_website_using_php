<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="parallax.css">
	<link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="cart.css">
</head>
<script>
	/* Demo purposes only */
$(".hover").mouseleave(
  function () {
	$(this).removeClass("hover");
  }
);
  </script>
<body>

                                                               <! –– navigaation bar  ––> 
 <nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">Indore<b>Collection</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar">
				
			</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="index.php">Men</a></li>
			<li><a href="#">Women</a></li>			
			<li><a href="#">kid</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right">			
			<li>
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Login</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text">Login your account</p>
							<div class="form-group social-btn clearfix">
								<!--                      social media
								<a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
								<a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
							    -->
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required">
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Login">
							<div class="form-footer">
								<a href="#">Forgot Your password?</a>
							</div>
						</form>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text">Fill in this form to create your account!</p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required">
							</div>
							
							<div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Sign up">
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
                                                                     
 <! –– parallax ––> 
    <div id="parallax-world-of-ugg">
  
        <section>
          <div class="title">
          
          </div>
        </section>
        
        <section>
            <div class="parallax-one">
              <h2>SOUTHERN CALIFORNIA</h2>
            </div>
        </section>
        
        <section>
          <div class="block">
            <p><span class="first-character sc">

              <figure class="snip1268">
                <div class="image">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
                  <div class="icons">
                    
                  </div>
                  <a href="#" class="add-to-cart">Add to Cart</a>
                </div>
                <figcaption>
                  <h2>Footwear</h2>
                  <p>Miss Wormwood: What state do you live in? Calvin: Denial. Miss Wormwood: I don't suppose I can argue with that!</p>
                  <div class="price">$195.00 </div>
                </figcaption>
              </figure> 
              
			</span>     </p>
            <p class="line-break margin-top-10">     </p>
            <p class="margin-top-10"></div></p>
        </section>
        
        <section>
          <div class="parallax-two">
            <h2>NEW YORK</h2>
          </div>
        </section>
        
        <section>
          <div class="block">
            <p><span class="first-character ny">
                                                                            <!-- cart -->
              <figure class="snip1268">
                <div class="image">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample4.jpg" alt="sq-sample4"/>
                  <div class="icons">
                    
                  </div>
                  <a href="#" class="add-to-cart">Add to Cart</a>
                </div>
                <figcaption> 
                  <h2>Denim Shirt</h2>
                  <p>My family is dysfunctional and my parents won't empower me. Consequently I'm not self actualized.</p>
                  <div class="price">$65.00 </div>
                </figcaption>
              </figure>

            </span></p>
			<p class="line-break margin-top-10"></p>
            <p class="margin-top-10"></p></div>
        </section>
        
        <section>
          <div class="parallax-three">
            <h2>ENCHANTED FOREST</h2>
          </div>
        </section>
        
        <section>
          <div class="block">
            <p><span class="first-character atw"></span></p>
            <p class="line-break margin-top-10"></p>
            <p class="margin-top-10"> </p></div>
        </section>
          
        </div>
                                                                     
                                                                     
</body>
</html>