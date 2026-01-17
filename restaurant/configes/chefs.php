<?php include('db.php'); 
$sql="SELECT * FROM chefs";
$query=mysqli_query($connect, $sql);
$chefs=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!-- Start team Area -->
<section class="team-area section-gap" id="chefs">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Meet Our Qualified Chefs</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex align-items-center"><?php foreach ($chefs as $chef) { ?>
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img style="width:250px; height:350px" class="img-fluid" src="img/<?php echo $chef['pic'] ?>" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="https://t.me<?php echo $chef['link']; ?>"><i class="fa fa-facebook"></i></a>
									<a href="https://t.me<?php echo $chef['link']; ?>"><i class="fa fa-twitter"></i></a>
									<a href="https://t.me<?php echo $chef['link']; ?>"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4><?php echo $chef['name']; ?></h4>
							    <p><?php echo $chef['job']; ?></p>									    	
						    </div>
						</div>	<?php } ?>															
					</div>
				</div>	
			</section>
			<!-- End team Area -->		