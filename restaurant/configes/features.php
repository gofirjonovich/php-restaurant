<?php include('db.php'); 
$sql="SELECT * FROM features";
$query=mysqli_query($connect, $sql);
$features=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<?php include('db.php'); ?>
<!-- Start features Area -->
<section class="features-area pt-100" id="feature">
				<div class="container">
					<div class="feature-section">
						<div class="row">
							<?php foreach($features as $f){ ?>
							<div class="single-feature col-lg-3 col-md-6">
								<img width="70" src="img/<?php echo $f['icon']; ?>" alt="">
								<h4 class="pt-20 pb-20"><?php echo $f['name']; ?></h4>
								<p>
								<?php echo $f['about']; ?>
								</p>
							</div>
							<?php } ?>													
						</div>											
					</div>
				</div>	
			</section>
			<!-- End features Area -->