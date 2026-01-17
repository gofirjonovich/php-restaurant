<?php include('./db.php'); 
if (isset($_POST['send'])) {
  $name=$_POST['name'];
  $pic=$_FILES['image']['name'];
  $image=$_FILES['image']['tmp_name'];
  move_uploaded_file($image, '../restaurant/img/'.$pic);
  $about=$_POST['about'];
  $about=mysqli_real_escape_string($connect, $about); 
  $sql="INSERT INTO dishes (name, pic, about) VALUES ('$name',  '$pic', '$about')";
  $query=mysqli_query($connect, $sql) or die(mysqli_error($connect));
  if ($query) {
    header("Location:./dishes.php");
  }
}
?>
<?php include('header.php');?>
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Ovqat qo'shish</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomini kiriting" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tavsifi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Qandayligi haqida  yozing"name="about">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Rasmi</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Rasm tanlang</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Tanlash</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Tekshirish</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href=""><button type="submit" name="send" class="btn btn-info">Qo'shish</button></a>
                </div>
              </form>
</div>

<?php include('footer.php');?>