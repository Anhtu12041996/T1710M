<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{ asset('public/layout/frontend') }}/">
	<meta charset="UTF-8">
	<title>Home page</title>

	<!-- Link CSS -->
	<link rel="stylesheet" href="css/style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">	
		<!-- navbar -->
		<nav class="navbar-expand-lg">
			<div class="container">		
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link active" href="#">My Account<span class="sr-only">(current)</span></a><span>|</span>
						<a class="nav-item nav-link" href="#">Order Status</a><span>|</span>
						<a class="nav-item nav-link" href="#">Wish Lists</a><span>|</span>
						<a class="nav-item nav-link" href="#">Girt Certificates</a><span>|</span>
						<a class="nav-item nav-link" href="#">Sign in or Create an account</a>
					</div>
				</div>
			</div>
		</nav>
		<!-- end navbar -->

		<!-- header -->
		<div class="container header">
			<div class="row">
				<div class="col-6 title">
					<h1>Phone</h1>
					<ul class="list-inline">
						<li><a href="#">Home</a></li><span>|</span>
						<li><a href="#">Menu 1</a></li><span>|</span>
						<li><a href="#">Menu 2</a></li>
					</ul>
				</div>
				<div class="col-6 img-header">
					<!-- <img src="img/details/Sony Xperia XZ Premium 8.jpg" alt=""> -->
				</div>
			</div>
		</div>
		<!-- end header -->

		<!-- main -->

		<div class="container main">
			<div class="row">
				<!-- left-column -->
				<div class="col-2 left-column">
					<ul class="list-group">
						<h6 class="list-group-item">Categories</h6>
						<li class="list-group-item"><a href="">Iphone</a></li>
						<li class="list-group-item"><a href="">Ipad</a></li>
						<li class="list-group-item"><a href="">Samsung</a></li>

						<h6 class="list-group-item">Popular Brands</h6>
						<li class="list-group-item"><a href="">Iphone</a></li>
						<li class="list-group-item"><a href="">Ipad</a></li>
						<li class="list-group-item"><a href="">Samsung</a></li>
						<li class="list-group-item"><a href="">Iphone</a></li>
						<li class="list-group-item"><a href="">Ipad</a></li>
						<li class="list-group-item"><a href="">Samsung</a></li>
						<li class="list-group-item"><a href="">Iphone</a></li>
						<li class="list-group-item"><a href="">Ipad</a></li>
						<li class="list-group-item"><a href="">Samsung</a></li>
						
						<h6 class="list-group-item">Our Newslectter</h6>
						<form action="" class="list-group-item">
							<div class="form-group">
								<label for="email">First Name</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="pwd">Email:</label>
								<input type="password" class="form-control" id="pwd">
							</div>
							<button type="submit" class="btn btn-primary">Submit me</button>
						</form>
					</ul>
				</div>
				<!-- end left-column -->

				<!-- content -->
				<div class="col-8 product">
					<div id="wrap-inner">
						<div class="products">
							<h3>Featured Product</h3>
							<div class="product-list row text-center">
								@foreach($featured as $item)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="{{ asset('lib/storage/app/avatar/'.$item->prod_img) }}" class="img-thumbnail"></a>
									<p><a href="#">{{ $item -> prod_name }}</a></p>
									<p class="price">{{ number_format($item -> prod_price,0,',','.') }}</p>	  
									<div class="marsk">
										<a href="#">Add to cart</a>
									</div>                                    
								</div>
								@endforeach 
							</div>                	                	
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- sidebar -->
				<div class="col-2 sidebar">
					<ul class="list-group">
						<h6 class="list-group-item">Top Sellers</h6>
						<li class="list-group-item">
							<a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
							<p><a href="#">iPhone 6S Plus 64G</a></p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>
						</li>
						<li class="list-group-item">
							<span>2</span>
							<p><a href="#">iPhone 6S Plus 64G</a></p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>
						</li>
						<li class="list-group-item">
							<span>3</span>
							<p><a href="#">iPhone 6S Plus 64G</a></p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>
						</li>
						<h6 class="list-group-item">New Product</h6>
						<li class="list-group-item">	
							<p><a href="#">iPhone 6S Plus 64G</a></p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- end sidebar -->
			</div>
		</div>

		<!-- end main -->

		<div class="container footer">
			<div class="row text-center">
				<div class="col">
					Copyright &copy; 2018 by bye
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>