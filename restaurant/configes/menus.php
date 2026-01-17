<?php include('db.php'); 
$sql="SELECT * FROM dishes";
$query=mysqli_query($connect, $sql);
$dishes=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!-- Start related Area -->
<section class="related-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Featured Food Menus</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="row justify-content-center">
						<div class="active-realated-carusel">
                           
						    <?php foreach($dishes as $dish){ ?>
							<div class="item row align-items-center">
                                
								<div class="col-lg-6 rel-left">
								   <h3>
                                        <?php echo $dish['name']; ?>
								   </h3>
								   <p class="pt-30 pb-30">
                                   <?php echo $dish['about']; ?>
								   </p>
									<a href="#" class="primary-btn header-btn text-uppercase">view full menu</a>								   
								</div>
								<div class="col-lg-6" >
									<img class="img-fluid" src="./img/<?php echo $dish['pic']; ?>" alt="">
								</div><hr>
                                	
							</div>
							<?php } ?>	
						</div>	
					</div> 
				</div>	
			</section>
			<!-- End related Area -->	