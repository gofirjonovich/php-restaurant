<?php include('./db.php'); 
if (isset($_POST['send'])) {
  $name=$_POST['name'];
  $about=$_POST['about'];
  $pic=$_FILES['image']['name'];
  $image=$_FILES['image']['tmp_name'];
  move_uploaded_file($image, '../restaurant/img/'.$pic);
  $sql="INSERT INTO features (name, about, icon) VALUES ('$name', '$about', '$pic')";
  $query=mysqli_query($connect, $sql) or die(mysqli_error($connect));
  if ($query) {
  header("Location:./features.php");}
}
?>
<?php include('./header.php'); ?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Xususiyat qo'shish</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomini kiriting" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mazmuni</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mazmunini yozing" name="about">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Rasm tanlang</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
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
                  <a href=""><button type="submit" name="send" class="btn btn-primary">Qo'shish</button></a>
                </div>
              </form>
</div>

<?php  include('./footer.php'); ?>  