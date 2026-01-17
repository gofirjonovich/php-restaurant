<?php include('db.php'); 
$sql="SELECT * FROM header";
$query=mysqli_query($connect, $sql);
$p=mysqli_fetch_assoc($query);
?>
<?php include('db.php'); ?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						
					    <div class="banner-content col-lg-8 col-md-12">
							<h4 class="text-white text-uppercase"><?php echo $p['name']; ?></h4>
							<h1>
							    <?php echo $p['title']; ?>				
							</h1>
							<p class="text-white">
							<?php echo $p['about']; ?>
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase">Check Our Menu</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	