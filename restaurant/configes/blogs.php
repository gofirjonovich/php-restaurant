<?php include('db.php'); 
$sql="SELECT * FROM blogs";
$query=mysqli_query($connect, $sql);
$blogs=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!-- start blog Area -->		
<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest From Our Blog</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>	
								
					<div class="row"><?php foreach($blogs as $blog){ ?>
						<div class="col-lg-3 col-md-6 single-blog">	
							<div class="thumb">
								<img style="width:250px; height:170px" class="img-fluid" src="img/<?php echo $blog['pic']; ?>" alt="">
							</div>
							<p class="date"><?php echo $blog['data']; ?></p>
							<a href="#"><h4><?php echo $blog['title']; ?></h4></a>
							<p>
                                 <?php echo $blog['body']; ?>
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span><?php echo $blog['like']; ?>Likes</p>
								<p><span class="lnr lnr-bubble"></span> <?php echo $blog['comment']; ?>Comments</p>
							</div>								
						</div><?php } ?>		
					</div>
				</div>	
			</section>
			<!-- end blog Area -->	