<?php 
	session_start();

	if (!isset($_SESSION['UserName'])) {
		header('location: index.php');
	}

	if (isset($_GET['id'])) {
		require_once "users.php";
								
		require 'connect.php';

		$user2 = new User();
		$results = $user2->allProject();
		foreach ($results as $result){
			if ($result['id'] == $_GET['id']) {
				$name = $result['name'];
				$description = $result['description'];
				$totalPremium = $result['totalPremium'];
				$monthlyPre = $result['monthlyPre'];
				$confirmDate = $result['confirmDate'];
				$username = $result['userName'];
				$acceptUserName = $result['acceptUserName'];
				$rate = $result['rate'];
			}	
		}
	} 


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>View News</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="assets/css/imports.css" media="screen">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">
		
	</head>

	<body class="single single-post">

		<!-- Header -->
		<?php 
		require_once 'layouts/header.php';
		 ?>

		<!-- Hero Section -->
		<section class="hero small-hero" style="background-image:url(assets/images/hero-00.jpg);">
			<div class="bg-overlay">
				<div class="container">
					<div class="intro-wrap" style="float: right; position: initial; margin-top: 300px;">
						<h1 class="intro-title"><?php echo $name; ?></h1>
					</div>
				</div>
			</div>
		</section>

		<!-- Main Section -->
		<section class="main container">
			<div id="content" class="row">
				<div class="col-sm-8 col-md-6 col-md-push-3">
					<h3 style="text-align: right;"><?php echo $description; ?></h3>		
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-md-pull-6 blog-details-column" style="float: right; position: initial;">
					<div class="entry-meta">
						<div style="float: right;">
							<span class="icon-meta">
								<span class="posted-on"> <span class="meta-item">
									تاريخ تأكيد المشروع :
									<?php echo $confirmDate;?></span>
								</span>
							</span>
							&nbsp
							<i class="fa fa-calendar"></i>
						</div>
						<br>
						<div style="float: right;">
							<span class="icon-meta">
								<span class="posted-on"> <span class="meta-item">
									الدفعة المالية الكاملة :
									<?php echo $totalPremium;?> دينار أردني</span>
								</span>
							</span>
							&nbsp
							<i class="fa fa-money"></i>
						</div>
						<br>

						<div style="float: right;">
							<span class="icon-meta">
								<span class="posted-on"> <span class="meta-item">
									الدفعة الشهرية :
									<?php echo $monthlyPre;?> دينار أردني</span>
								</span>
							</span>
							&nbsp
							<i class="fa fa-bar-chart"></i>
						</div>
						<br>

						<div style="float: right;">
							<span class="icon-meta">
								<span class="posted-on"> <span class="meta-item">
									: تمت الموافقة على المشروع من قبل&nbsp &nbsp &nbsp &nbsp &nbsp
									<i class="fa fa-check"></i>
									<br>
									<?php echo '<a href="Profile/profile.php?id='.$username.'">'; 
										$info = $user2->userInfo($username);
										echo $info['fName']."&nbsp".$info['mName']."&nbsp".$info['lName'];
									?>
								</a>
									</span>
								</span>
							</span>
							<i class="fa fa-user"></i>
						</div>
						<br>

						<div style="float: right;">
							<span class="icon-meta">
								<span class="posted-on">
									<span class="meta-item">
										: أسماء المشتركين بالمشروع &nbsp &nbsp &nbsp &nbsp &nbsp
										<i class="fa fa-group"></i>
										<br>
										<?php echo '<a href="Profile/profile.php?id='.$username.'">'; 
											$info = $user2->userInfo($username);
											echo $info['fName']."&nbsp".$info['mName']."&nbsp".$info['lName'];
										?>
										</a>
									</span>
								</span>
							</span>
							<i class="fa fa-user"></i>
						</div>
						<br>

						



					</div>

					
				</div>
			</div>
		</section>

		<!-- Contact Us -->
		<?php 
		require_once 'layouts/contact.php';
		 ?>

        <!-- Footer -->
		<?php 
		require_once 'layouts/footer.php';
		 ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/custom.js"></script>
	</body>
</html>