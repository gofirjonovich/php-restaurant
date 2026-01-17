<?php include('./db.php'); 
if (isset($_POST['send'])) {
  $name=$_POST['name'];
  $body=$_POST['body'];
  $video=$_FILES['video']['name'];
  $v=$_FILES['video']['tmp_name'];
  move_uploaded_file($v, '../restaurant/img/'.$video);
  $sql="INSERT INTO video (name, body, video) VALUES ('$name',  '$body', '$video')";
  $query=mysqli_query($connect, $sql) or die(mysqli_error($connect));
  if ($query) {
  header("Location:./video.php");}
}
?>
<?php include('header.php');?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Video qo'shish</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomini kiriting" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tavsifi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Qandayligi haqida  yozing"name="body">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Video</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="video">
                        <label class="custom-file-label" for="exampleInputFile">Video tanlang</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Tanlash</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href=""><button type="submit" name="send" class="btn btn-danger">Qo'shish</button></a>
                </div>
              </form>
</div>

<?php include('footer.php');?>