<?php include('db.php'); 
$sql="SELECT * FROM topdish";
$query=mysqli_query($connect, $sql);
$topdish=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!-- Start top-dish Area -->
<section class="top-dish-area section-gap" id="dish">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Top Rated Dishes</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
                        <?php foreach($topdish as $top){ ?>
						<div class="single-dish col-lg-4">
							<div class="thumb" style="width:350px; height:450px">
								<img class="img-fluid" src="img/<?php echo $top['image'] ?>" alt="">
							</div>
							<h4 class="text-uppercase pt-20 pb-20"><?php echo $top['name'] ?></h4>
							<p>
                            <?php echo $top['about'] ?>
							</p>
						</div>
						<?php } ?>									
					</div>
				</div>	
			</section>
			<!-- End top-dish Area -->