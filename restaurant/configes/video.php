<?php
include('db.php'); 
$sql="SELECT * FROM video";
$query=mysqli_query($connect, $sql);
$parth=mysqli_fetch_assoc($query);
?>                    
<!-- Start video Area -->
<section class="video-area">
			<div class="container">
				<div class="row justify-content-center align-items-center flex-column">
					<a class="play-btn" href="img/<?php echo $parth['video'];?>">
						<img src="img/play-btn.png" alt="">
					</a>
					<h3 class="pt-20 pb-20 text-white"><?php echo $parth['name']; ?></h3>
					<p class="text-white"><?php echo $parth['body']; ?></p>
		    	</div>
			</div>	
</section>
<!-- End video Area -->