<!doctype html>
<html lang="en">
  <head>
  	<title>Modal 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center js-fullheight">
					<div class="col-md-6 text-center d-flex align-items-center">
						<div class="wrap w-100">
							<h2 class="mb-2">Modal 02</h2>
							<button type="button" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter">
							  Launch Modal 02
							</button>

							<!-- Modal -->
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
		      <div class="row">
					<div class=" col-md bg-image promo-img" style="background-image: url('images/img_1.jpg');">
						<span class="price">$2000</span>
					</div>
				    <!-- <div class="col-md-1 divider"></div> -->
				    <div class="col-md reservation">
				      <div class="modal-body">
				      	<h3 class="mb-4">Sign Up</h3>
				      	<form action="#" class="signup-form">
				      		<div class="form-group">
				      			<input type="text" class="form-control" placeholder="First Name">
				      		</div>
				      		<div class="form-group">
				      			<input type="text" class="form-control" placeholder="Last Name">
				      		</div>
				      		<div class="form-group">
				      			<input type="email" class="form-control" placeholder="Email address">
				      		</div>
				      		<div class="form-group">
			              <input type="password" class="form-control" placeholder="Password">
			            </div>
			            <div class="form-group">
			            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
			            </div>
			            <div class="form-group">
										<div class="w-100">
											<p class="mb-0">By creating an account, your agree to our terms.</p>
										</div>
			            </div>
			          </form>
				      </div>
				    </div>
				  </div>
		    </div>
		  </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>